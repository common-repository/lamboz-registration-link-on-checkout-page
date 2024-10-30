<?php
/**
 * Lamboz Registration Link On Checkout Page
 *
 * Plugin Name: Lamboz Registration Link On Checkout Page
 * Plugin URI:  
 * Description: Lamboz Registration Link On Checkout Page in a simple plugin which will display custom registration link on your checkout Page.
 * Version:     1.0
 * Author:      Lamboz Group
 * Author URI:  https://lambozgroup.com
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: lamboz-registration-link-on-checkout
 *  *
Lamboz Registration Link On Checkout Page  is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or any later version.
 
Lamboz Registration Link On Checkout Page is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
/****/

define( 'LRLWC_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'LRLWC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
require_once( LRLWC_PLUGIN_PATH . 'includes/class-lamboz-checkout-link.php' );

add_action( 'admin_enqueue_scripts', 'LRLWC_enqueue_scripts' );
if (!function_exists('LRLWC_enqueue_scripts')){
	function LRLWC_enqueue_scripts()
	{
		wp_enqueue_style( 'lamboz-registration-link-on-checkout', LRLWC_PLUGIN_URL . '/includes/css/lrlwc_lamboz.css');
	}
}

if (!function_exists('LRLWC_register_settings')){
	function LRLWC_register_settings() {
		add_option( 'lrlwc_registration_link', site_url());
		add_option( 'lrlwc_registration_title', 'New customer?');
		add_option( 'lrlwc_registration_question', 'Click here to Register');
		register_setting( 'LRLWC_options_group', 'lrlwc_registration_link', 'myplugin_callback' );
		register_setting( 'LRLWC_options_group', 'lrlwc_registration_title', 'myplugin_callback' );
		register_setting( 'LRLWC_options_group', 'lrlwc_registration_question', 'myplugin_callback' );
	}
}
add_action( 'admin_init', 'LRLWC_register_settings' );

if (!function_exists('LRLWC_register_options_page')){
	function LRLWC_register_options_page() {
		add_options_page('Lamboz Custom Registration Link', 'Lamboz Custom Registration Link', 'manage_options', 'lamboz-registration-link-on-checkout', 'LRLWC_options_page');
	}
}

add_action('admin_menu', 'LRLWC_register_options_page');
if (!function_exists('LRLWC_options_page')){
	function LRLWC_options_page()
	{
		require_once( LRLWC_PLUGIN_PATH . 'includes/lamboz-admin-menu.php' );		
	} 
}
?>