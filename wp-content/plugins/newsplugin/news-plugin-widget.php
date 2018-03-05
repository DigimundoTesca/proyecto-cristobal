<?php

// Prevent ourselves from being run directly.
defined('ABSPATH') or die("No script kiddies please!");

/**
 * The NewsPlugin widget.
 */
class News_Plugin_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'news_plugin_widget',
            __('NewsPlugin', 'news_plugin'),
            array( 'description' => __( 'Create custom newsfeeds and let fresh relevant news appear on your website (or approve and publish them manually).', 'news_plugin' ), )
        );
    }

    /**
     * Get the id for identifying this widget instance.
     */
    private function widget_id() {
      return $this->id ;
    }

    /**
     * Get the private options specific for this widget.
     *
     * Note: The "public" options are stored in option widget_news_plugin_widget automatically by class WP_Widget function save_settings
     * unless it's the "newsplugin_feed" shortcode, in which case they are put directly in the shortcode.
     * (The "newsplugin_widgets" shortcode uses normal registered widgets and can actually be filled with other widgets as well)
     * The widget_id appears to be short number for registered widgets and long number (number of seconds since 1969) for "newsplugin_feed" shortcodes.
     */
    private function current_options() {
      $opts = get_option( 'news_plugin_widget_options', array() ) ;
      $opts = (isset($opts[$this->widget_id()])) ? $opts[$this->widget_id()] : array();
      return $opts ;
    }

    /**
     * Update the private options specific for this widget.
     */
    private function update_options( $args ) {
      $opts = get_option( 'news_plugin_widget_options', array() ) ;
      $opts[ $this->widget_id() ] = $args ;
      update_option( 'news_plugin_widget_options', $opts ) ;
      return $args ;
    }

    /**
     * Get the list of currently excluded posts for this widget.
     */
    private function excluded_posts() {
        $opts = $this->current_options() ;
        $posts = (isset($opts['excluded'])) ? $opts['excluded'] : array();
        return $posts;
    }

    /**
     * Add given id to the list of excluded posts.
     */
    private function exclude_post( $id, $limit = 100 ) {
        $opts = $this->current_options() ;
        $posts = $this->excluded_posts() ;
        array_unshift( $posts, $id ) ;
        $posts = array_slice( $posts, 0, $limit ) ;
        $opts[ 'excluded' ] = $posts ;
        $this->update_options( $opts ) ;
        return $posts ;
    }

    /**
     * Reset the list of the excluded posts.
     */
    private function reset_excluded_posts() {
        $opts = $this->current_options() ;
        $posts = array() ;
        $opts[ 'excluded' ] = $posts ;
        $this->update_options( $opts ) ;
        return $posts ;
    }

    /**
     * Get the list of currently favorite posts for this widget.
     */
    private function favorite_posts() {
        $opts = $this->current_options() ;
        $posts = (isset($opts['favorite'])) ? $opts['favorite'] : array();
        return $posts;
    }

    /**
     * Add given id to the list of favorite posts.
     */
    private function star_favorite_post( $id, $limit = 100 ) {
        $opts = $this->current_options() ;
        $posts = $this->favorite_posts() ;
        array_unshift( $posts, $id ) ;
        $posts = array_slice( $posts, 0, $limit ) ;
        $opts[ 'favorite' ] = $posts ;
        $this->update_options( $opts ) ;
        return $posts ;
    }

    /**
     * Remove given id from the list of favorite posts.
     */
    private function unstar_favorite_post( $id ) {
        $opts = $this->current_options() ;
        $posts = $this->favorite_posts() ;
        $posts = array_diff( $posts, array( $id ) ) ;
        $opts[ 'favorite' ] = $posts ;
        $this->update_options( $opts ) ;
        return $posts ;
    }

    /**
     * Reset the list of the favorite posts.
     */
    private function reset_favorite_posts() {
        $opts = $this->current_options() ;
        $posts = array() ;
        $opts[ 'favorite' ] = $posts ;
        $this->update_options( $opts ) ;
        return $posts ;
    }

    /**
     * Get the timestamp of the last publishing in manual publishing mode.
     */
    private function publish_time() {
        $opts = $this->current_options() ;
        $time = $opts[ 'published' ] ;
        return ( isset( $time ) ? $time : 0 ) ;
    }

    /**
     * Set the timestamp of the last publishing in manual publishing mode.
     */
    private function update_publish_time( $time ) {
        $opts = $this->current_options() ;
        $opts[ 'published' ] = $time ;
        $this->update_options( $opts ) ;
        return $time ;
    }

    /**
     * Prepare the args for URL managing posts of this widget.
     */
    private function create_action_args( $action, $arg = 0 ) {
        return array(
          'news_plugin_instance' => $this->widget_id(),
          'news_plugin_action' => $action,
          'news_plugin_arg' => $arg,
        ) ;

    }

    /**
     * Parse the URL args for managing posts of this widget.
     */
    private function parse_action_args() {
      if ((!isset( $_GET[ 'news_plugin_instance' ] )) || ( $_GET[ 'news_plugin_instance' ] != $this->widget_id() )) {
          return array() ;
      }
      return array(
        'action' => $_GET[ 'news_plugin_action' ],
        'arg' => $_GET[ 'news_plugin_arg' ],
      ) ;
    }

    /**
     * Get the action associated with given URL request, if any.
     */
    private function current_action()
    {
        $args = $this->parse_action_args() ;
        if(!empty($args['action'])) {
          return $args[ 'action' ] ;
        }
    }

    /**
     * Get the argument associated with given URL request, if any.
     */
    private function current_arg()
    {
        $args = $this->parse_action_args() ;
        return $args[ 'arg' ] ;
    }

    /**
     * Test if the current user can manage the feed.
     */
    private function can_manage() {
      return ( current_user_can( 'edit_pages' ) ) ;
    }

    /**
     * Test if the edit mode is enabled for this widget.
     */
    private function edit_mode_enabled() {
      if(isset($_GET[ 'news_plugin_action' ])) {
          $action = $_GET[ 'news_plugin_action' ] ;
          return ! empty( $action ) ;
      }
    }

    /**
     * Manage the feed as necessary.
     */
    private function manage( $opts ) {
        switch ( $this->current_action() ) {
            case 'exclude': {
               $id = sanitize_key( $this->current_arg() ) ;
               $limit = max( 100, 2 * $opts[ 'count' ] ) ;
               $this->exclude_post( $id, $limit ) ;
               break ;
            }
            case 'star': {
               $id = sanitize_key( $this->current_arg() ) ;
               $limit = max( 100, 2 * $opts[ 'count' ] ) ;
               $this->star_favorite_post( $id, $limit ) ;
               break ;
            }
            case 'unstar': {
               $id = sanitize_key( $this->current_arg() ) ;
               $this->unstar_favorite_post( $id ) ;
               break ;
            }
            case 'reset': {
               $this->reset_excluded_posts() ;
               $this->reset_favorite_posts() ;
               break ;
            }
            case 'publish': {
               $time = min( time(), absint( $this->current_arg() ) ) ;
               $this->update_publish_time( $time ) ;
               break ;
            }
        }
    }
    
    /**
     * Silly helper for returning caching duration for fetch_feed().
     */
    function get_feed_caching_duration( $seconds ) {
        return 3600 ;
    }

    /**
     * Get our data feed.
     */
    private function get_feed( $time, $opts, $limit = 100 ) {
        $key = get_option( 'news_plugin_api_key' ) ;

        $args = array(
          'k' => $key,
          'q' => $opts[ 'keywords' ],
          'l' => $limit,
          'c' => $opts[ 'count' ],
          't' => $opts[ 'title' ]
          // o offset
          // a after
          // b before
        ) ;
        
        if ( $opts[ 'feed_mode' ] == 'manual' ) {
            if ( ! ( $this->can_manage() && $this->edit_mode_enabled() ) ) {
                $time = $this->publish_time() ;
            }
            $args[ 'b' ] = $time ;
        }
        
        if ( ! empty( $opts[ 'age' ] ) ) { $args[ 'a' ] = $time - 3600 * $opts[ 'age' ] ; }

        if ( ! empty( $opts[ 'sources' ] ) ) { $args[ 'src' ] = $opts[ 'sources' ] ; }
        if ( ! empty( $opts[ 'excluded_sources' ] ) ) { $args[ 'exclude' ] = $opts[ 'excluded_sources' ] ; }
        if ( ! empty( $opts[ 'search_mode' ] ) ) { $args[ 'mode' ] = $opts[ 'search_mode' ] ; }
        if ( ! empty( $opts[ 'search_type' ] ) ) { $args[ 'type' ] = $opts[ 'search_type' ] ; }
        if ( ! empty( $opts[ 'sort_mode' ] ) ) { $args[ 'sort' ] = $opts[ 'sort_mode' ] ; }
        if ( ! empty( $opts[ 'link_type' ] ) ) { $args[ 'link' ] = $opts[ 'link_type' ] ; } 
        if ( ! empty( $opts[ 'link_open_mode' ] ) ) { $args[ 'link_open_mode' ] = $opts[ 'link_open_mode' ] ; } 
        if ( ! empty( $opts[ 'link_follow' ] )) { $args[ 'link_follow' ] = $opts[ 'link_follow' ] ; }
    
        $url = 'http://api.newsplugin.com/search' ;
        $url = add_query_arg( urlencode_deep( $args ), $url ) ;
    
        // Talk about stupid API. Like if the cache duration couldn't be a simple parameter.
        $cache_filter = array( $this, 'get_feed_caching_duration' ) ;
        add_filter( 'wp_feed_cache_transient_lifetime' , $cache_filter );
        $feed = fetch_feed( $url ) ;
        remove_filter( 'wp_feed_cache_transient_lifetime' , $cache_filter );

        return ( is_wp_error( $feed ) ? NULL : $feed ) ;
    }

    private function compute_style_helper($style, $type) {
        if(!isset($style[$type])) {
            return ('');
        }
        $ret = '';
        if($style[$type]['size']) {
            $ret .= 'font-size: '.$style[$type]['size'] . 'px;';
        }
        if($style[$type]['color']) {
            $ret .= 'color:#'.$style[$type]['color'] . ';';
        }
        if($style[$type]['font_family']) {
            $ret .= 'font-family:'.$style[$type]['font_family'] . ';';
        }
        if(!$ret) {
            return($ret);
        }
        return(' style="' . $ret . '"');
    }

    /**
     * Generate the feed content.
     *
     * @param array $opts Saved values from database.
     */
    private function content( $opts ) {
	
        $time = time() ;
    
        $rss = $this->get_feed( $time, $opts ) ;

        if ( ! isset( $rss ) ) {
           _e( 'Feed fetch failed ', 'news_plugin' );
           return ;
        }
    
        $manual_mode = ( $opts[ 'feed_mode' ] == 'manual' ) ;
        
        $exclude = array_fill_keys( $this->excluded_posts(), true ) ;
        $favorite = array_fill_keys( $this->favorite_posts(), true ) ;
    
        $limit = $opts[ 'count' ] ;

        $visible = $limit ;
        if ( $this->can_manage() && $manual_mode && $this->edit_mode_enabled() ) {
            $visible = max( 2 * $limit, 5 ) ;
        }
    
        if ( $this->can_manage() ) {
            echo '<div class="news-plugin-edit-box">';
            if ( $this->edit_mode_enabled() ) {
                echo '<p class="news-plugin-edit-buttons">' ;

                $args = $this->create_action_args( 'reset' ) ;
                echo '<a href="' . esc_attr( add_query_arg( $args ) ) . '">' ;
                echo 'Reset' ;
                echo '</a>';

                if ( $manual_mode ) {
                    $args = $this->create_action_args( 'publish', $time ) ;
                    echo ' | ';
                    echo '<a href="' . esc_attr( add_query_arg( $args ) ) . '">' ;
                    echo 'Publish Headlines' ;
                    echo '</a>';
                }

                $args = $this->create_action_args( NULL, NULL ) ;
                echo ' | ';
                echo '<a href="' . esc_attr( add_query_arg( $args ) ) . '">' ;
                echo 'Leave Edit Newsfeed Mode' ;
                echo '</a>';

                echo '</p>' ;
            }
            else {
                $args = $this->create_action_args( 'edit' ) ;
                echo '<p class="news-plugin-edit-buttons">' ;
                echo '<a href="' . esc_attr( add_query_arg( $args ) ) . '">' ;
                echo 'Edit Newsfeed Mode' ;
                echo '</a>';
            }

            if ( $manual_mode ) {
                $t = $this->publish_time() ;
                if ( $t == 0 ) {
                    if ( $this->edit_mode_enabled() ) {
                        echo '<p>';
                        echo 'No headlines published yet.';
                        echo '</p>';
                    }
                    else {
                        echo '<p>';
                        echo 'No headlines published yet. Use the Edit Newsfeed Mode to edit and publish your feed.';
                        echo '</p>';
                    }
                }
                else {
                    $t = date( 'd M Y H:i', $t );
                    echo '<p>';
                    echo "Headlines last published on {$t}.";
                    echo '</p>';
                }
            }
            
            if ( $this->edit_mode_enabled() ) {
                if ( $manual_mode ) {
                    echo '<p>';
                    echo "Once published, only the first {$limit} headline" . ( $limit == 1 ? '' : 's') . " will be displayed in your feed.";
                    echo ' You can <span style="font-size:110%;">&#9734;</span>&nbsp;Star individual headlines to move them to the top or &#10005;&nbsp;Remove them from the feed. Click Reset to undo these changes.';
                    echo ' Don’t forget to Publish Headlines when you are done.';
                    echo '</p>';
                }
                else {
                    echo '<p>';
                    echo 'You can <span style="font-size:110%;">&#9734;</span>&nbsp;Star individual headlines to move them to the top or &#10005;&nbsp;Remove them from the feed. Click Reset to undo these changes.';
                    echo '</p>';
                }
            }
            echo '</div>';
        }

        $count = $rss->get_item_quantity( $visible + count( $exclude ) ) ;
        $items = $rss->get_items( 0, $count ) ;
    
        $index = 0 ;

        if($opts['wp_uid'] && (intval($opts['wp_uid']) != 0)) {
            $userID = intval($opts['wp_uid']);
        } else {
            $userID = get_current_user_id();
        }
        $style_news = get_user_meta($userID, 'news_style_dashbord_style', 'true');
    
        echo '<ul>';
        for ( $pass = 0 ; $pass < 2 ; $pass++ ) {
            foreach ( $items as $item ) {
                if ( $index >= $visible ) {
                    break ;
                }
            
                $id = md5( $item->get_id( false ) ) ;
                if ( !empty($exclude[ $id ] )) {
                    continue ;
                }
                
                if ( !empty($favorite[ $id ]) xor ( $pass == 0 ) ) {
                    continue ;
                }
                
                if ( $index == $limit ) {
                    echo '<hr>' ;
                }
				
                echo '<li>';
                if ($opts['link_follow'] == 'no') {
                    $s_follow = ' rel="nofollow"';
                } else {
                    $s_follow = '';
                }
                if ($opts['link_open_mode']) {
                    $s_target = ' target="'.$opts['link_open_mode'].'"';
                } else {
                    $s_target = '';
                }
                echo '<a href="' . esc_attr( $item->get_permalink() ) . '"' . $s_target . $s_follow . '>' ;
                $style = $this->compute_style_helper($style_news, 'article_headline');
                echo '<span class="news-plugin-title"' . $style . '>';
                echo esc_html( $item->get_title() ) ;
                echo '</span>';
                echo '</a>';
                if ( $opts[ 'show_date' ] ) {
                    echo "\n" ;
                    $style = $this->compute_style_helper($style_news, 'article_date');
                    echo '<span class="news-plugin-date"' . $style . '>';
                    echo esc_html( $item->get_date( 'd M Y H:i' ) ) ;
                    echo '</span>';
                }
                if ( $opts[ 'show_source' ] ) {
                    // Because RSS doesn't support the source field, we use the author field.
                    // $source = $item->get_source() ;
                    $source = $item->get_author() ;
                    if ( $source ) $source = $source->get_email() ;
                    if ( ! empty( $source ) ) {
                        echo "\n" ;
                        $style = $this->compute_style_helper($style_news, 'article_sources');
                        echo '<span class="news-plugin-source"' . $style . '>';
                        echo esc_html( $source ) ;
                        echo '</span>';
                    }
                }
                if ( $opts[ 'show_abstract' ] ) {
                    echo "\n" ;
                    $style = $this->compute_style_helper($style_news, 'article_abstract');
                    echo '<span class="news-plugin-abstract"' . $style . '>';
                    echo esc_html( $item->get_description() ) ;
                    echo '</span>';
                }

                if ( $this->can_manage() && $this->edit_mode_enabled() ) {
                    $args = $this->create_action_args( 'exclude', $id ) ;
                    echo ' &nbsp; <a href="' . esc_attr( add_query_arg( $args ) ) . '">' ;
                    // echo 'X' ;
                    echo '<span style="text-decoration: underline;">';
                    echo '&#10005;&nbsp;Remove' ;
                    echo '</span>';
                    echo '</a> &nbsp;';
                    if ( !empty($favorite[ $id ] )) {
                        $args = $this->create_action_args( 'unstar', $id ) ;
                        echo ' <a href="' . esc_attr( add_query_arg( $args ) ) . '">' ;
                        // echo '-' ;
                        echo '<span style="text-decoration: underline;">';
                        echo '<span style="font-size:110%;">&#9733;</span>&nbsp;Unstar' ;
                        echo '</span>';
                        echo '</a>';
                    }
                    else {
                        $args = $this->create_action_args( 'star', $id ) ;
                        echo ' <a href="' . esc_attr( add_query_arg( $args ) ) . '">' ;
                        // echo '+' ;
                        echo '<span style="text-decoration: underline;">';
                        echo '<span style="font-size:110%;">&#9734;</span>&nbsp;Star' ;
                        echo '</span>';
                        echo '</a>';
                    }
                }

                echo '</li>';

                $index++ ;
            }
        }
        echo '</ul>';

        //Error in Option Page
        // newserroforwp_log("NewsPlugin Option Page");
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $opts Saved values from database.
     */
    public function widget( $args, $opts ) {
        $id = absint( $opts[ 'id' ] ) ;
        if ( $id > 0 ) {
            $this->_set( $id ) ;
        }

        $key = get_option( 'news_plugin_api_key' ) ;
        if ( empty( $key ) ) {
            if ( $this->can_manage() ) {
                ?>
                <p>
                Your feed is currently inactive.
                Please enter your Activation Key on the
                <a href="<?php echo admin_url( 'admin.php?page=news-plugin-settings' ) ?>">NewsPlugin Settings</a>
                page first.
                </p>
                <?php
            }
            return ;
        }

        if ( $this->can_manage() ) {
            $this->manage( $opts ) ;
        }

        $title = apply_filters( 'widget_title', $opts['title'] );

        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
        $this->content( $opts ) ;
        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $opts Previously saved values from database.
     */
    public function form( $opts ) {
        $key = get_option( 'news_plugin_api_key' ) ;
        if ( empty( $key ) ) {
            ?>
            <p>
            Please enter your Activation Key on the
            <a href="<?php echo admin_url( 'admin.php?page=news-plugin-settings' ) ?>">NewsPlugin Settings</a>
            page first.
            </p>
            <?php
            return ;
        }

        if ( isset( $opts[ 'title' ] ) ) {
            $title = $opts[ 'title' ];
        }
        else {
            $title = __( 'New title', 'news_plugin' );
        }

        if ( isset( $opts[ 'keywords' ] ) ) {
            $keywords = $opts[ 'keywords' ];
        }
        else {
            $keywords = __( 'keywords', 'news_plugin' );
        }

        if ( isset( $opts[ 'count' ] ) ) {
            $count = $opts[ 'count' ];
        }
        else {
            $count = 5;
        }
        if ( isset( $opts[ 'age' ] ) ) {
            $age = $opts[ 'age' ];
        }
        else {
            $age = 0;
        }

        if ( isset( $opts[ 'search_mode' ] ) ) {
            $search_mode = $opts[ 'search_mode' ];
        }
        else {
            $search_mode = "";
        }

        if ( isset( $opts[ 'search_type' ] ) ) {
            $search_type = $opts[ 'search_type' ];
        }
        else {
            $search_type = "";
        }

        if ( isset( $opts[ 'sort_mode' ] ) ) {
            $sort_mode = $opts[ 'sort_mode' ];
        }
        else {
            $sort_mode = "";
        }

        if ( isset( $opts[ 'link_type' ] ) ) {
            $link_type = $opts[ 'link_type' ];
        }
        else {
            $link_type = "";
        } 
		if ( isset( $opts[ 'link_open_mode' ] ) ) {
            $link_open_mode = $opts[ 'link_open_mode' ];
        }
        else {
            $link_open_mode = "";
        }
		if ( isset( $opts[ 'link_follow' ] ) ) {
            $link_follow = $opts[ 'link_follow' ];
        }
        else {
            $link_follow = "";
        }

        if ( isset( $opts[ 'sources' ] ) ) {
            $sources = $opts[ 'sources' ];
        }
        else {
            $sources = "";
        }
        if ( isset( $opts[ 'excluded_sources' ] ) ) {
            $excluded_sources = $opts[ 'excluded_sources' ];
        }
        else {
            $excluded_sources = "";
        }

        if ( isset( $opts[ 'show_date' ] ) ) {
            $show_date = $opts[ 'show_date' ];
        }
        else {
            $show_date = false;
        }
        if ( isset( $opts[ 'show_source' ] ) ) {
            $show_source = $opts[ 'show_source' ];
        }
        else {
            $show_source = false;
        }
        if ( isset( $opts[ 'show_abstract' ] ) ) {
            $show_abstract = $opts[ 'show_abstract' ];
        }
        else {
            $show_abstract = false;
        }

        if ( isset( $opts[ 'feed_mode' ] ) ) {
            $feed_mode = $opts[ 'feed_mode' ];
        }
        else {
            $feed_mode = "";
        }
        
        // Force expert user mode for now.
        // $user_mode = get_option( 'news_plugin_user_mode' ) ;
        $user_mode = 2;

        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Newsfeed Name:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        <br>
        <small>Give your feed a good name.</small>
        <br>
        <small>Example: Canada Solar Energy News</small>
        </p>
        <p>
        <label for="<?php echo $this->get_field_id( 'keywords' ); ?>"><?php _e( 'Keywords:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'keywords' ); ?>" name="<?php echo $this->get_field_name( 'keywords' ); ?>" type="text" value="<?php echo esc_attr( $keywords ); ?>">
        <br>
        <small>Use keywords to find relevant news.</small>
        <br>
        <small>Example: canada &amp; "solar energy"</small>
        <br>
        <small>Read the <a href="http://newsplugin.com/faq#keyword-tips" target="_blank">FAQ</a> for more keywords tips and examples.</small>
        </p>
        <p>
        <label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e( 'Number of Articles:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>" type="text" value="<?php echo $count; ?>">
        <br>
        <small>Set how many headlines to show in your feed.</small>
        <br>
        <small>Example: 10</small>
        </p>
        <p>
        <input id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" type="checkbox" <?php if ( $show_date ) echo 'checked="checked"' ?>>
        <label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Show Dates' ); ?></label>
        </p>
        <p>
        <input id="<?php echo $this->get_field_id( 'show_source' ); ?>" name="<?php echo $this->get_field_name( 'show_source' ); ?>" type="checkbox" <?php if ( $show_source ) echo 'checked="checked"' ?>>
        <label for="<?php echo $this->get_field_id( 'show_source' ); ?>"><?php _e( 'Show Sources' ); ?></label>
        </p>
        <p>
        <input id="<?php echo $this->get_field_id( 'show_abstract' ); ?>" name="<?php echo $this->get_field_name( 'show_abstract' ); ?>" type="checkbox" <?php if ( $show_abstract ) echo 'checked="checked"' ?>>
        <label for="<?php echo $this->get_field_id( 'show_abstract' ); ?>"><?php _e( 'Show Abstracts' ); ?></label>
        <br>
        <small>By default, your feed displays headlines only. You can add more information.</small>
        <br>
        <small>Example: New Reports on Canada Solar Energy, 12 Feb 2015 (BBC)</small>
        </p>
        <?php
        if ( $user_mode > 0 ) {

        /*
        <p>
        <label for="<?php echo $this->get_field_id( 'sources' ); ?>"><?php _e( 'Sources:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'sources' ); ?>" name="<?php echo $this->get_field_name( 'sources' ); ?>" type="text" value="<?php echo esc_attr( $sources ) ; ?>">
        <br>
        <small>Show news from only selected sources. Leave blank for all sources.</small>
        <br>
        <small>Example: BBC</small>
        </p>
        <p>
        <label for="<?php echo $this->get_field_id( 'excluded_sources' ); ?>"><?php _e( 'Excluded Sources:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'excluded_sources' ); ?>" name="<?php echo $this->get_field_name( 'excluded_sources' ); ?>" type="text" value="<?php echo esc_attr( $excluded_sources ) ; ?>">
        <br>
        <small>Don’t show news from selected sources.</small>
        <br>
        <small>Example: BBC</small>
        </p>
        */

        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'search_mode' ); ?>"><?php _e( 'Search Mode:' ); ?></label>
        <select class="widefat" id="<?php echo $this->get_field_id( 'search_mode' ); ?>" name="<?php echo $this->get_field_name( 'search_mode' ); ?>">
        <option value="">Default</option>
        <option value="title" <?php if ( $search_mode == "title" ) echo 'selected="selected"' ?>>Headlines Only</option>
        <option value="text"<?php if ( $search_mode == "text" ) echo 'selected="selected"' ?>>Headlines &amp; Full Text</option>
        </select>
        <br>
        <small>Show news that has your keywords in a headline or anywhere in an article. Default is headlines and full text.</small>
        </p>

        <?php
        /*
        <p>
        <label for="<?php echo $this->get_field_id( 'search_type' ); ?>"><?php _e( 'Search Type:' ); ?></label>
        <select class="widefat" id="<?php echo $this->get_field_id( 'search_type' ); ?>" name="<?php echo $this->get_field_name( 'search_type' ); ?>">
        <option value="">Default</option>
        <option value="news" <?php if ( $search_type == "news" ) echo 'selected="selected"' ?>>News</option>
        <option value="pr" <?php if ( $search_type == "pr" ) echo 'selected="selected"' ?>>Press Releases</option>
        <option value="event"<?php if ( $search_type == "event" ) echo 'selected="selected"' ?>>Events</option>
        </select>
        <br>
        <small>Show only selected types of news. Default is a combination of all types.</small>
        </p>
        */
        ?>
        
        <p>
        <label for="<?php echo $this->get_field_id( 'sort_mode' ); ?>"><?php _e( 'Sort Mode:' ); ?></label>
        <select class="widefat" id="<?php echo $this->get_field_id( 'sort_mode' ); ?>" name="<?php echo $this->get_field_name( 'sort_mode' ); ?>">
        <option value="">Default</option>
        <option value="relevance" <?php if ( $sort_mode == "relevance" ) echo 'selected="selected"' ?>>Relevance</option>
        <option value="date"<?php if ( $sort_mode == "date" ) echo 'selected="selected"' ?>>Date</option>
        </select>
        <br>
        <small>Show headlines sorted by date or relevance. Default is by relevance.</small>
        </p>
        <p>
        <label for="<?php echo $this->get_field_id( 'age' ); ?>"><?php _e( 'News Age Limit (in hours):' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'age' ); ?>" name="<?php echo $this->get_field_name( 'age' ); ?>" type="text" value="<?php echo $age; ?>">
        <br>
        <small>Don’t show articles older than given period. 0 means no limit.</small>
        </p>
		<p>
        <label for="<?php echo $this->get_field_id( 'link_open_mode' ); ?>"><?php _e( 'Link mode:' ); ?></label>
        <select class="widefat" id="<?php echo $this->get_field_id( 'link_open_mode' ); ?>" name="<?php echo $this->get_field_name( 'link_open_mode' ); ?>">
        <option value="">Default</option>
        <option value="_self" <?php if ( $link_open_mode == "_self" ) echo 'selected="selected"' ?>>Same Window</option>
        <option value="_blank"<?php if ( $link_open_mode == "_blank" ) echo 'selected="selected"' ?>>New Tab</option>
        </select>
        <label for="<?php echo $this->get_field_id( 'link_follow' ); ?>"><?php _e( 'Follow mode:' ); ?></label>
        <select class="widefat" id="<?php echo $this->get_field_id( 'link_follow' ); ?>" name="<?php echo $this->get_field_name( 'link_follow' ); ?>">
        <option value="">Default</option>
        <option value="yes" <?php if ( $link_follow == "yes" ) echo 'selected="selected"' ?>>Follow</option>
        <option value="no"<?php if ( $link_follow == "no" ) echo 'selected="selected"' ?>>Nofollow</option>
        </select>
		
        <?php
        
        /*
        <br>
        <small>Choose where headlines in your feed link to. These can be either direct links to original articles (bbc.co.uk) or those articles can be framed with your custom name/links.</small>
        </p>
        <p>
        <label for="<?php echo $this->get_field_id( 'link_type' ); ?>"><?php _e( 'Link mode:' ); ?></label>
        <select class="widefat" id="<?php echo $this->get_field_id( 'link_type' ); ?>" name="<?php echo $this->get_field_name( 'link_type' ); ?>">
        <option value="">Default</option>
        <option value="frame" <?php if ( $link_type == "frame" ) echo 'selected="selected"' ?>>Framed</option>
        <option value="orig"<?php if ( $link_type == "orig" ) echo 'selected="selected"' ?>>Original</option>
        </select>
        <br>
        <small>Choose where headlines in your feed link to. These can be either direct links to original articles (bbc.co.uk) or those articles can be framed with your custom name/links.</small>
        </p>
        */

        ?>
        <?php
        }
        if ( $user_mode > 1 ) {
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'feed_mode' ); ?>"><?php _e( 'Feed publishing:' ); ?></label>
        <select class="widefat" id="<?php echo $this->get_field_id( 'feed_mode' ); ?>" name="<?php echo $this->get_field_name( 'feed_mode' ); ?>">
        <option value="">Default</option>
        <option value="auto" <?php if ( $feed_mode == "auto" ) echo 'selected="selected"' ?>>Automatic</option>
        <option value="manual"<?php if ( $feed_mode == "manual" ) echo 'selected="selected"' ?>>Manual</option>
        </select>
        <br>
        <small>Your feed can be automatically updated with new headlines, or you can choose headlines and publish them manually using news buffering. Default is automatic.</small>
        </p>
        <?php
        }
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_opts Values just sent to be saved.
     * @param array $old_opts Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_opts, $old_opts ) {
        $opts = array();
        $opts['title'] = ( ! empty( $new_opts['title'] ) ) ? strip_tags( $new_opts['title'] ) : '';
        $opts['keywords'] = ( ! empty( $new_opts['keywords'] ) ) ? strip_tags( $new_opts['keywords'] ) : '';
        $opts['count'] = ( ! empty( $new_opts['count'] ) ) ? absint( $new_opts['count'] ) : 5;
        $opts['age'] = ( ! empty( $new_opts['age'] ) ) ? absint( $new_opts['age'] ) : 0 ;
        $opts['sources'] = ( ! empty( $new_opts['sources'] ) ) ? strip_tags( $new_opts['sources'] ) : '';
        $opts['excluded_sources'] = ( ! empty( $new_opts['excluded_sources'] ) ) ? strip_tags( $new_opts['excluded_sources'] ) : '';
        $opts['search_mode'] = ( ! empty( $new_opts['search_mode'] ) ) ? strip_tags( $new_opts['search_mode'] ) : '';
        $opts['search_type'] = ( ! empty( $new_opts['search_type'] ) ) ? strip_tags( $new_opts['search_type'] ) : '';
        $opts['sort_mode'] = ( ! empty( $new_opts['sort_mode'] ) ) ? strip_tags( $new_opts['sort_mode'] ) : '';
        $opts['link_open_mode'] = ( ! empty( $new_opts['link_open_mode'] ) ) ? strip_tags( $new_opts['link_open_mode'] ) : '';
        $opts['link_follow'] = ( ! empty( $new_opts['link_follow'] ) ) ? strip_tags( $new_opts['link_follow'] ) : '';
        $opts['link_type'] = ( ! empty( $new_opts['link_type'] ) ) ? strip_tags( $new_opts['link_type'] ) : '';
        $opts['show_date'] = ! empty( $new_opts['show_date'] ) ;
        $opts['show_source'] = ! empty( $new_opts['show_source'] ) ;
        $opts['show_abstract'] = ! empty( $new_opts['show_abstract'] ) ;
        $opts['feed_mode'] = ( ! empty( $new_opts['feed_mode'] ) ) ? strip_tags( $new_opts['feed_mode'] ) : '';
        $opts['wp_uid'] = (!isset($new_opts['wp_uid']) || empty($new_opts['wp_uid'])) ? get_current_user_id() : $new_opts['wp_uid'];

        return $opts;
    }

}
?>
