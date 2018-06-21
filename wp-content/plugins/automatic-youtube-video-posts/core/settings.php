<?php
////////////////////////////////////////////////////////////////////////////////////////////////////
//
//		File:
//			settings.php
//		Description:
//			This file compiles and processes the plugin's various settings pages.
//		Copyright:
//			Copyright (c) 2016 Ternstyle LLC.
//
////////////////////////////////////////////////////////////////////////////////////////////////////

/****************************************Commence Script*******************************************/

//                                *******************************                                 //
//________________________________** INITIALIZE                **_________________________________//
//////////////////////////////////**                           **///////////////////////////////////
//                                **                           **                                 //
//                                *******************************                                 //
if(!isset($_GET['page']) or $_GET['page'] !== 'ayvpp-settings') {
	return;
}
//                                *******************************                                 //
//________________________________** ADD EVENTS                **_________________________________//
//////////////////////////////////**                           **///////////////////////////////////
//                                **                           **                                 //
//                                *******************************                                 //
add_action('init','WP_ayvpp_settings_actions');
//                                *******************************                                 //
//________________________________** ACTIONS                   **_________________________________//
//////////////////////////////////**                           **///////////////////////////////////
//                                **                           **                                 //
//                                *******************************                                 //
function WP_ayvpp_settings_actions() {
	global $getWP,$ayvpp_options,$WP_ayvpp_options,$WP_ayvpp_ip;

	$getWP->addError('Upgrade to the PRO version of the Automatic YouTube Video Posts Plugin now! <a href="http://www.ternstyle.us/automatic-video-posts-plugin-for-wordpress/purchase" target="_blank">Click Here.</a>');

	//update settings
	if(!isset($_REQUEST['_wpnonce']) or !wp_verify_nonce($_REQUEST['_wpnonce'],'WP_ayvpp_nonce') or !current_user_can('manage_options')) {
		return;
	}

	switch($_REQUEST['action']) {

		case 'update' :

			$_POST['key'] = trim($_POST['key']);
			$ayvpp_options = $getWP->updateOption('ayvpp_settings',$WP_ayvpp_options,'WP_ayvpp_nonce');

			//validate API key
			$c = new tern_curl();
			$r = $c->get(array(
				'url'		=>	'https://www.googleapis.com/youtube/v3/search?part=id&q=9eujhd74hbnsjd874ndeidme8emuw7wqhjsmxosowmw0sk7834rghiwrfuh&key='.$ayvpp_options['key'],
				'options'	=>	(isset($ayvpp_options['cainfo']) and $ayvpp_options['cainfo']) ? [
					'RETURNTRANSFER'	=>	true,
					'CAINFO'			=>	AYVPP_SSLCRT,
				] : [
					'RETURNTRANSFER'	=>	true,
				],
				'headers'	=>	array(
					'Accept-Charset'	=>	'UTF-8'
				)
			));
			$r = json_decode($r->body);

			if(isset($r->error) and $r->error->errors[0]->reason == 'keyInvalid') {
				$getWP->addError('The Google API key you provided is not valid. Please visit your Google API console to configure your key: <a href="https://code.google.com/apis/console" target="_blank">https://code.google.com/apis/console</a>');
			}
			elseif(isset($r->error) and $r->error->errors[0]->reason == 'accessNotConfigured') {
				$getWP->addError('Your API Key is correct but the project it belongs to in your Google API console is not configured properly to use the YouTube&reg; API. Try logging in to the Google API console to fix this: <a href="https://code.google.com/apis/console" target="_blank">https://code.google.com/apis/console</a>');
			}

			break;

		default :
			break;

	}

}
//                                *******************************                                 //
//________________________________** SETTINGS                  **_________________________________//
//////////////////////////////////**                           **///////////////////////////////////
//                                **                           **                                 //
//                                *******************************                                 //
function WP_ayvpp_settings() {
	global $ayvpp_options,$ternSel,$WP_ayvpp_ip;
	include(AYVPP_DIR.'/views/settings.php');
}

/****************************************Terminate Script******************************************/
?>
