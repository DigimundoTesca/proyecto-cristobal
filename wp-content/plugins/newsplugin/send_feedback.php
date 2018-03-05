<?php
	$to			= 'feedback@newsplugin.com';
	$from 			= $_POST['feed_from'];	
	$subject 		= $_POST['feed_subject'];
	$description 		= $_POST['feed_desc'];
	$errors_logs 		= isset($_POST['errors_logs']) ? $_POST['errors_logs'] : false;
	$insert_sys_info 	= isset($_POST['insert_sys_info']) ? $_POST['insert_sys_info'] : false;
		
	if(!$from){
	    if($user_info = News_Plugin_Utils::get_user_info()) {
	        $from = $user_info->email;
	    }
	}
	if($from) {
		$headers = "From: NewsPlugin <".$from.">" . "\r\n";
	}

	$message = '<html><head></head><body>';
	$message .= '<strong>Feedback Mail</strong>';
	$message .= '<h4>'.$description.'</h4>';
	$message .= '<table cellpadding="0" cellspacing="0" width="100%">' . "\n";
	$message .= '<tbody>';

	if(isset($errors_logs)) {

		$message .= "<tr style='background: #eee;'><strong>Errors on plugin :</strong></tr>\n";
		$message .= '<tr><p>'.$errors_logs.'</p></tr>' . "\n";
	}

	// if(isset($insert_sys_info)) {

		// $results = get_option( 'newsPlugin_system_info' );
		$results = News_Plugin_Utils::get_system_info(); // Always get fresh
		$message .= "<tr style='background: #eee;'><td cellspan='2'><strong>WORDPRESS ENVIRONMENT :</strong></td></tr>\n";
		foreach( $results['wordpress_env'] as $key=>$value ) {

			$key_Name = str_replace('_',' ',$key);
			$message .= '<tr><td><strong>'.strtoupper($key_Name).'</strong> </td><td>'.$value.'</td></tr>' . "\n";
		}
		$message .= "<tr style='background: #eee;'><td cellspan='2'><strong>SYSTEM ENVIRONMENT :</strong></td></tr>\n";
		foreach( $results['system_env'] as $key=>$value ) {

			$key_Name = str_replace('_',' ',$key);
			$message .= '<tr><td><strong>'.strtoupper($key_Name).'</strong> </td><td>'.$value.'</td></tr>' . "\n";	
		}
		$message .= "<tr style='background: #eee;'><td cellspan='2'><strong>NEWSPLUGIN ENVIRONMENT :</strong></td></tr>\n";
		foreach( $results['newsplugin_env'] as $key=>$value ) {

			$key_Name = str_replace('_',' ',$key);
			$message .= '<tr><td><strong>'.strtoupper($key_Name).'</strong> </td><td>'.$value.'</td></tr>' . "\n";
		}
	// }

	$message .= '</tbody>';
	$message .= "</table>";
	$message .= "</body></html>";
	
	function news_plugin_wp_set_content_type(){
		return "text/html";
	}
	add_filter( 'wp_mail_content_type','news_plugin_wp_set_content_type' );
	$headers .= news_plugin_wp_set_content_type();

        $redirect = admin_url('admin.php') . '?page=news-plugin-settings&tab=newsplugin_feed_settings';
	if(wp_mail( $to, $subject, $message, $headers)){
		$redirect .= '&status=1';
	}else {
		$redirect .= '&status=0';
	}	

	remove_filter( 'wp_mail_content_type','news_plugin_wp_set_content_type' );
	wp_redirect( $redirect );	
?>