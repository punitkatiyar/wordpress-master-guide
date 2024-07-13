<?php
/*
 * Plugin Name: Demo Plugin
 * Plugin URI: https://myuitbook.com/course/wordpress/
 * Description: Custom Demo Plugins
 * Author: Punit Katiyar
 * Author URI: https://myunitbook.com
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_shortcode('demo_plugins' , 'test_function' );

function test_function(){
	return "Welcome to My Plugin";	
}
