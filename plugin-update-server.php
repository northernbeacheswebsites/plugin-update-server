<?php
/*
Plugin Name: Plugin Update Server
Description: An example plugin that runs the update API.
Version: 1.0
Author: Yahnis Elsts
Author URI: http://w-shadow.com/
*/

// require_once __DIR__ . '/wp-update-server/loader.php';

// class ExamplePlugin {
// 	protected $updateServer;

// 	public function __construct() {
// 		$this->updateServer = new MyCustomServer(home_url('/'));
		
// 		//The "action" and "slug" query parameters are often used by the WordPress core
// 		//or other plugins, so lets use different parameter names to avoid conflict.
// 		add_filter('query_vars', array($this, 'addQueryVariables'));
// 		add_action('template_redirect', array($this, 'handleUpdateApiRequest'));
// 	}
	
// 	public function addQueryVariables($queryVariables) {
// 		$queryVariables = array_merge($queryVariables, array(
// 			'update_action',
// 			'update_slug',
// 		));
// 		return $queryVariables;
// 	}
	
// 	public function handleUpdateApiRequest() {
// 		if ( get_query_var('update_action') ) {
// 			$this->updateServer->handleRequest(array_merge($_GET, array(
// 				'action' => get_query_var('update_action'),
// 				'slug'   => get_query_var('update_slug'),
// 			)));
// 		}
// 	}
// }

// class MyCustomServer extends Wpup_UpdateServer {
// 	protected function filterMetadata($meta, $request) {
// 		$meta = parent::filterMetadata($meta, $request);
// 		unset($meta['download_url']);
// 		return $meta;
// 	}
	
// 	protected function actionDownload(Wpup_Request $request) {
// 		$this->exitWithError('Downloads are disabled.', 403);
// 	}
// }

// $examplePlugin = new ExamplePlugin();