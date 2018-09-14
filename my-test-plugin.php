<?php
/**
 * Plugin Name:     My Test Plugin
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     my-test-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         My_Test_Plugin
 */

// Your code starts here.

function myTestScript() {
	wp_enqueue_script( 'hello-script', plugins_url( '/js/main.js', __FILE__ ), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'myTestScript' );


function myTestPluginAdd($a, $b) {
	return $a + $b;
}
