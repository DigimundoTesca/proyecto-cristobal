<?php

// Prevent ourselves from being run directly.
defined('ABSPATH') or die("No script kiddies please!");

    if (!function_exists('json_last_error_msg')) {
        function json_last_error_msg() {
            static $ERRORS = array(
                JSON_ERROR_NONE => 'No error',
                JSON_ERROR_DEPTH => 'Maximum stack depth exceeded',
                JSON_ERROR_STATE_MISMATCH => 'State mismatch (invalid or malformed JSON)',
                JSON_ERROR_CTRL_CHAR => 'Control character error, possibly incorrectly encoded',
                JSON_ERROR_SYNTAX => 'Syntax error',
                JSON_ERROR_UTF8 => 'Malformed UTF-8 characters, possibly incorrectly encoded'
            );

            $error = json_last_error();
            return isset($ERRORS[$error]) ? $ERRORS[$error] : 'Unknown error';
        }
    }

class News_Plugin_Utils {// Although maybe namespace would suffice

    static $np_version = NULL;

    static function np_version() {
        if(self::$np_version) {
            return(self::$np_version);
        }
        if(self::$np_version = get_option('news_plugin_version')) {
            return(self::$np_version);
        }
        return(self::np_version_hard());
    }

    static function np_version_hard() {
        if(!function_exists('get_plugin_data')) {
            include( ABSPATH . 'wp-admin/includes/plugin.php' );
        }
        $plugin_data = get_plugin_data(plugin_dir_path( __FILE__ ) . 'news-plugin.php');
        self::$np_version = $plugin_data['Version'];
        update_option('news_plugin_version', $plugin_data['Version']);
        update_option('news_plugin_version_taken', filemtime(plugin_dir_path( __FILE__ ) . 'news-plugin.php'));
        return(self::$np_version);
    }

    static function user_agent($type) {
        global $wp_version;

        return('WordPress/' . $wp_version . '; ' . 'Newsplugin/' . self::np_version() . ' ' . $type . '; ' . home_url());
    }

    static function http_remote_get_curl($url) {
        if(!function_exists('curl_version')) {
            return(array('', 'Error: CURL disabled or not installed'));
        }
        if (!function_exists('curl_init') || !function_exists('curl_exec')) {
            return(array('', 'Error: CURL disabled by security settings'));
        }
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, self::user_agent('curl'));
        $output = curl_exec($ch);
        if(curl_error($ch)) {
            $error = curl_error($ch);
        } else {
            $error = false;
        }
        curl_close ( $ch );
        return array($output, $error);
    }

    static function http_remote_get_socket($url) {
        if(!function_exists('stream_socket_client')) {
            return(array('', 'Error: Socket disabled'));
        }
        $aURL = parse_url($url);
        $addr = $aURL['host'];
        $secure_transport = ( $aURL['scheme'] == 'ssl' || $aURL['scheme'] == 'https' );
        if ( !isset($aURL['port']) ) {
            if ($secure_transport) {
                $aURL['port'] = 443;
            } else {
                $aURL['port'] = 80;
            }
        }
        if($secure_transport) {
            $proto = 'ssl://';
        } else {
            $proto = 'tcp://';
        }
        $socket = stream_socket_client($proto . $addr . ':' . $aURL['port'], $errno, $errorMessage, 10, STREAM_CLIENT_CONNECT);
        if($socket === false) {
            return(array('', 'Socket error: ' . $errorMessage));
        }
        $url = $aURL['path'];
        if(isset($aURL['query']) && $aURL['query']) {
            $url .= "?" . $aURL['query'];
        }
        fwrite($socket, "GET " . $url . " HTTP/1.0\r\nHost: " . $addr . "\r\nAccept: */*\r\nUser-Agent: " . self::user_agent('socket') . "\r\n\r\n");
        $output = '';
        while(!feof($socket)) {
            $output .= fread($socket, 1024);
        }
        fclose($socket);
        if(preg_match('/^(.*?)\r?\n\r?\n(.*)$/s', $output, $m)) {
            return(array($m[2], ''));
        }
        return(array($output, ''));
    }

    static function http_test_evaluate($ret) {
        if((!$ret[1]) && (!preg_match('/var swfobject=function()/s', $ret[0]))) {
            $ret[1] = 'Error: unexpected content';
            $ret[1] .= '; Starts with ' . htmlspecialchars(substr($ret[0],0,30));
        }
        return($ret);
    }

    static $test_url = 'http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js';

    static function http_remote_get_curl_test() {
        $ret = self::http_remote_get_curl(self::$test_url);
        return(self::http_test_evaluate($ret));
    }

    static function http_remote_get_socket_test() {
        $ret = self::http_remote_get_socket(self::$test_url);
        return(self::http_test_evaluate($ret));
    }

    static $test_url_ssl = 'https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js';

    static function http_remote_get_curl_test_ssl() {
        $ret = self::http_remote_get_curl(self::$test_url_ssl);
        return(self::http_test_evaluate($ret));
    }

    static function http_remote_get_socket_test_ssl() {
        $ret = self::http_remote_get_socket(self::$test_url_ssl);
        return(self::http_test_evaluate($ret));
    }

    static $api_root = 'http://api.newsplugin.com/';
    static $api_ping_path = 'ping';

    static function http_ping_evaluate($var) {
        $output = $var[0];
        if($var[0]) {
            $var[0] = json_decode($var[0]);
        }
        if((!$var[1]) && (!is_object($var[0]))) {
            $var[1] = 'Error: not json';
            if(json_last_error()) {
                $var[1] .= ':' . json_last_error_msg();
            }
            $var[1] .= '; Starts with ' . htmlspecialchars(substr($output,0,30));
        }
        return($var);
    }

    static function http_remote_get_curl_ping() {
        $var = self::http_remote_get_curl(self::$api_root . self::$api_ping_path);
        return(self::http_ping_evaluate($var));
    }

    static function http_remote_get_socket_ping() {
        $var = self::http_remote_get_socket(self::$api_root . self::$api_ping_path);
        return(self::http_ping_evaluate($var));
    }

    static function generic_remote_get($url, $method) {
        switch($method) {
            case 'wp':
                $ret = wp_remote_get($url, array('timeout' => 10, 'user-agent' => self::user_agent('wp')));
                if(is_array($ret)) {
                    return(array($ret['body'], ''));
                }
                $ret = self::generic_remote_get($url, 'curl');
                return($ret);
            case 'curl':
                $ret = self::http_remote_get_curl($url);
                if(!$ret[1]) {
                    return($ret);
                }
                $ret = self::generic_remote_get($url, 'socket');
                return($ret);
            case 'socket':
                $ret = self::http_remote_get_socket($url);
                return($ret);
        }
    }

    static function generic_api_call($path, $args = NULL) {
        $key = get_option( 'news_plugin_api_key' ) ;
        $args = $args ? $args : array();
        $args['k'] = $key;
        $url = self::$api_root . $path;
        $url = add_query_arg( urlencode_deep( $args ), $url ) ;
        $method = get_option( 'news_plugin_url_method' );
        $ret = self::generic_remote_get($url, $method ? $method : 'wp');
        if($ret[1]) {
            $currentTime = date('y-m-d h:i:s', time());
            $backtrace=debug_backtrace();
            error_log("$currentTime  -->   " . "Error accessing API point " . self::$api_root . "$path: " . $ret[1] ."  Log Generation Details :      Filename: ".$backtrace[0]['file']."   at Line number : ".$backtrace[0]['line']."\n\n", 3, __DIR__ . "/logs/plugin-logs.txt");
            return(NULL);
        }
        return(json_decode($ret[0]));
    }

    static function get_user_info() {
        return(self::generic_api_call('user_info'));
    }

    static function get_system_info_version() {
        return(1.0002);
    }

    static function get_system_db_info() {
        global $wpdb; /* Recommended by https://codex.wordpress.org/Class_Reference/wpdb */

        if(!empty($wpdb->use_mysqli)) {
            /* See also http://fw2s.com/how-to-get-complete-mysql-version-in-wordpress/
               Note: use_mysqli is private and dbh is protected, BUT wpdb class is allowing
               to access then through getters and setters anyway. Backward compatibility.
             */
            return(array(
                    'mysql_method'          => 'mysqli',
                    'mysql_server_info'     => mysqli_get_server_info($wpdb->dbh),
                    'mysql_client_info'     => mysqli_get_client_info($wpdb->dbh),
                    'mysql_proto_info'      => mysqli_get_proto_info($wpdb->dbh),
                ));
        } else {
            return(array(
                    'mysql_method'          => 'mysql',
                    'mysql_server_info'     => mysql_get_server_info(),
                    'mysql_client_info'     => mysql_get_client_info(),
                    'mysql_proto_info'      => mysql_get_proto_info(),
                ));
        }
    }

    static function get_system_info() {
        $my_theme = wp_get_theme();
        $curl_test = self::http_remote_get_curl_test();
        $socket_test = self::http_remote_get_socket_test();
        $curl_test_ssl = self::http_remote_get_curl_test_ssl();
        $socket_test_ssl = self::http_remote_get_socket_test_ssl();
        $curl_ping = self::http_remote_get_curl_ping();
        $socket_ping = self::http_remote_get_socket_ping();
        $user_info = self::get_user_info();

        if(function_exists('curl_version')) {
          $curl_ver = curl_version();
          $curl_status = 'Enabled';
          if (!function_exists('curl_init') || !function_exists('curl_exec')) {
            $curl_status = 'Disabled by security settings';
          }
        } else {
          $curl_status = 'Disabled';
        }

        $db_info = self::get_system_db_info();

        $system_info = array(
            'info_version' => self::get_system_info_version(),
            'api_key'      => get_option( 'news_plugin_api_key' ), /* We need to refresh on api key change ... */
            'wordpress_env' => array(
                'siteurl'               => get_bloginfo('url'),
                'home'                  => get_bloginfo('home'),
                'version'               => get_bloginfo('version'),
                'html_type'             => get_bloginfo('html_type'),
                'language'              => get_bloginfo('language'),
                'theme_Name'            => $my_theme->get('Name'),
                'theme_version'         => $my_theme->get('Version'),
                'theme_AuthorURI'       => $my_theme->get('AuthorURI'),
            ),
            'system_env'=>array(
                'php_version'           => phpversion(),
                'SERVER_SOFTWARE'       => $_SERVER['SERVER_SOFTWARE'],
                'SERVER_OS'             => PHP_OS,
                'SERVER_IP_ADDRESS'     => $_SERVER['SERVER_ADDR'],
                'HTTP_HOST'             => $_SERVER['HTTP_HOST'],
                'SERVER_NAME'           => $_SERVER['SERVER_NAME'],
                'HTTP_USER_AGENT'       => $_SERVER['HTTP_USER_AGENT'],
                'HTTP_ACCEPT'           => $_SERVER['HTTP_ACCEPT'],
                'memory_limit'          => ini_get('memory_limit'),
                'execution_time'        => ini_get('max_execution_time'),
                'mysql_method'          => $db_info['mysql_method'],
                'mysql_server_info'     => $db_info['mysql_server_info'],
                'mysql_client_info'     => $db_info['mysql_client_info'],
                'mysql_proto_info'      => $db_info['mysql_proto_info'],
                'is_Curl'               => $curl_status,
                'curl_version'          => $curl_ver['version'],
                'curl_ssl'              => $curl_ver['ssl_version'],
                'curl_status'           => $curl_test[1] ? $curl_test[1] : 'OK',
                'curl_status_ssl'       => $curl_test_ssl[1] ? $curl_test_ssl[1] : 'OK',
                'is_Socket'             => function_exists('stream_socket_client') ? 'Enabled' : 'Disabled',
                'socket_status'         => $socket_test[1] ? $socket_test[1] : 'OK',
                'socket_status_ssl'     => $socket_test_ssl[1] ? $socket_test_ssl[1] : 'OK',
            ),
            'newsplugin_env'=>array(
                'REGISTERED EMAIL'      => $user_info ? $user_info->email : 'error or unregistered',
                'USER STATUS'           => $user_info ? $user_info->status : 'error or unregistered',
                'plugin version'        => self::np_version(),
                'curl_ping'             => $curl_ping[1] ? $curl_ping[1] : ('OK from ' . $curl_ping[0]->client),
                'socket_ping'           => $socket_ping[1] ? $socket_ping[1] : ('OK from ' . $socket_ping[0]->client),
            )
        );
        if($curl_test[1] == $curl_test_ssl[1]) {
            unset($system_info['system_env']['curl_status_ssl']);
        }
        if($socket_test[1] == $socket_test_ssl[1]) {
            unset($system_info['system_env']['socket_status_ssl']);
        }
        return($system_info);
    }
}

?>
