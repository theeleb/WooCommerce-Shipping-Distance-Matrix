<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/sofyansitorus
 * @since             1.0.0
 * @package           Wcsdm
 *
 * @wordpress-plugin
 * Plugin Name:       WooReer
 * Plugin URI:        https://wooreer.com
 * Description:       WooCommerce shipping rates calculator allows you to easily offer shipping rates based on the distance calculated using Google Maps Distance Matrix Service API.
 * Version:           2.1.2
 * Author:            Sofyan Sitorus
 * Author URI:        https://github.com/sofyansitorus
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wcsdm
 * Domain Path:       /languages
 *
 * WC requires at least: 3.0.0
 * WC tested up to: 4.0.1
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

// Define plugin constants.
define( 'WCSDM_VERSION', '2.0.8' );
define( 'WCSDM_FILE', __FILE__ );
define( 'WCSDM_PATH', plugin_dir_path( WCSDM_FILE ) );
define( 'WCSDM_URL', plugin_dir_url( WCSDM_FILE ) );
define( 'WCSDM_METHOD_ID', 'wcsdm' );
define( 'WCSDM_METHOD_TITLE', 'WooReer' );
define( 'WCSDM_DEFAULT_LAT', '-6.178784361374902' );
define( 'WCSDM_DEFAULT_LNG', '106.82303292695315' );
define( 'WCSDM_TEST_LAT', '-6.181472315327319' );
define( 'WCSDM_TEST_LNG', '106.8170462364319' );

// Load the helpers.
require_once WCSDM_PATH . '/includes/helpers.php';

// Register the class autoload.
if ( function_exists( 'wcsdm_autoload' ) ) {
	spl_autoload_register( 'wcsdm_autoload' );
}

/**
 * Boot the plugin
 */
if ( wcsdm_is_plugin_active( 'woocommerce/woocommerce.php' ) && class_exists( 'Wcsdm' ) ) {
	// Initialize the Wcsdm class.
	Wcsdm::get_instance();
}
