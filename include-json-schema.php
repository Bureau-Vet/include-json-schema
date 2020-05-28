<?php
/*
	Plugin Name: Include custom JSON schema 2
	Description: Include custom JSON schema to your website's head.
	Version: 0.0.2
	Author: Bureau Vet
	Author URI: http://www.bureauvet.nl
*/
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'Bureau-vet' );
$updater->set_repository( 'include-json-schema' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();
