<?php
    if(function_exists('wp_get_current_user')) {
        $current_user = wp_get_current_user();
    } else {
        global $current_user;
        get_currentuserinfo();
    }
        $userID = $current_user->ID; 

	$default_Value = $_POST['default_values_style'];
	$styleDash = array(
		'newsfeed_title'=>array(
			'color'			=>	$_POST['title_color'],
			'size'			=>	$_POST['title_size'],
			'font_family'	=>	$_POST['title_font']
		),
		'article_headline'=>array(
			'color'			=>	$_POST['news_title_color'],
			'size'			=>	$_POST['news_title_size'],
			'font_family'	=>	$_POST['news_title_family']
		),
		'article_abstract'=>array(
			'color'			=>	$_POST['abstract_font_color'],
			'size'			=>	$_POST['abstract_font_size'],
			'font_family'	=>	$_POST['abstract_font_family']
		),
		'article_date'=>array(
			'color'			=>	$_POST['news_date_color'],
			'size'			=>	$_POST['news_date_size'],
			'font_family'	=>	$_POST['date_font']		),
		'article_sources'=>array(
			'color'			=>	$_POST['source_color'],
			'size'			=>	$_POST['source_size'],
			'font_family'	=>	$_POST['source_font']
		)
	);
	if(isset($default_Value)) {
		$default_values = array(
			'newsfeed_title'=>array(
				'color'			=>	'000000',
				'size'			=>	22,
				'font_family'	=>	'Times New Roman'
			),
			'article_headline'=>array(
				'color'			=>	'000000',
				'size'			=>	18,
				'font_family'	=>	'Times New Roman'
			),
			'article_abstract'=>array(
				'color'			=>	'000000',
				'size'			=>	14,
				'font_family'	=>	'Times New Roman'
			),
			'article_date'=>array(
				'color'			=>	'000000',
				'size'			=>	12,
				'font_family'	=>	'Times New Roman'
			),
			'article_sources'=>array(
				'color'			=>	'000000',
				'size'			=>	12,
				'font_family'	=>	'Times New Roman'
			)		);
		update_user_meta( $userID, 'news_style_dashbord_style', $default_values );
	}else {
		update_user_meta( $userID, 'news_style_dashbord_style', $styleDash );
	}

$redirect = admin_url('admin.php') . '?page=news-plugin-settings&tab=newsplugin_style_settings';
wp_redirect( $redirect );
?>