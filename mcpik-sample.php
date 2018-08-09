<?php
/*
Plugin Name: McPik Sample
Plugin URI: https://www.donnamcmaster.com/
Description: Sample Piklist plugin
Version: 0.0.1
Author: Donna McMaster
Author URI: https://www.donnamcmaster.com/
Plugin Type: Piklist
License: GPLv3
*/

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *	Plugin depends on Piklist; make sure it's active
 */
add_action( 'init', function() {
	if ( is_admin() ) {
		include_once( 'includes/class-piklist-checker.php' );
		if ( !piklist_checker::check( __FILE__ ) ) {
			return;
		}
	}
});
