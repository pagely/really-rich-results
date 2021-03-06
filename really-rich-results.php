<?php
/**
 * Main plugin file for bootstrapping Really Rich Results.
 *
 * @link              https://github.com/pagely/really-rich-results
 * @since             0.1.3
 * @package           Really_Rich_Results
 *
 * @wordpress-plugin
 * Plugin Name:       Really Rich Results
 * Plugin URI:        https://github.com/pagely/really-rich-results
 * Description:       Adds JSON-LD output for structured data
 * Version:           0.1.3
 * Author:            JeffMatson
 * Author URI:        https://pagely.com
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       really-rich-results
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'RRR_VERSION', '0.1.3' );
define( 'RRR_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'RRR_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );

if ( ! file_exists( plugin_dir_path( __FILE__ ) . 'vendor/autoload.php' ) ) {
	throw new WP_Error( 'incomplete_build', __( 'It looks like you are trying to load a development version of Really Rich Results without building. Use a release version or build using Composer first.', 'really-rich-results' ) );
}

// Register the autoloader.
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

// Initialize an instance of the main Really Rich Results class.
Really_Rich_Results\Main::get_instance()->init();
