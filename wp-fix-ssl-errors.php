<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/wordpressr/wp-fix-ssl-errors
 * @since             1.0.0
 * @package           wp_fix_ssl_errors
 *
 * @wordpress-plugin
 * Plugin Name:       Safer SSL Errors
 * Plugin URI:        https://github.com/anautonell/wp-fix-ssl-errors
 * Description:       Fixes the SSL errors in Safer Plugin.
 * Version:           1.0.0
 * Author:            Boter Technologies
 * Author URI:        https://github.com/anautonell
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       wp-fix-ssl-errors
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// fix ssl in html of site
ob_start(function($html) {
	return str_replace('http://', 'https://', $html);
});

