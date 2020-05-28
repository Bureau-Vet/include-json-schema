<?php
/*
	Plugin Name: Include custom WP Dashboard
	Description: Adds Vet Wigets for events, news and welcome message.
	Version: 0.0.5
	Author: Bureau Vet
	Author URI: http://www.bureauvet.nl
*/
if( ! class_exists( 'vet_updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

if( ! class_exists( 'vet_dashboard' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'custom-dashboard.php' );
}

$updater = new vet_updater( __FILE__ );
$updater->set_username( 'bureauvet' );
$updater->set_repository( 'vet-custom-dashboard' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();


$dashboard = new vet_dashboard(__FILE__);
