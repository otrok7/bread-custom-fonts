<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://bmlt.app
 * @since             1.0.0
 * @package           Bread_Roboto
 *
 * @wordpress-plugin
 * Plugin Name:       bread-roboto
 * Plugin URI:        https://bmlt.app
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Ron Barack
 * Author URI:        https://bmlt.app/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bread-roboto
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BREAD_ROBOTO_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bread-roboto-activator.php
 */
function activate_bread_roboto() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bread-roboto-activator.php';
	Bread_Roboto_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bread-roboto-deactivator.php
 */
function deactivate_bread_roboto() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bread-roboto-deactivator.php';
	Bread_Roboto_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bread_roboto' );
register_deactivation_hook( __FILE__, 'deactivate_bread_roboto' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bread-roboto.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bread_roboto() {

	$plugin = new Bread_Roboto();
	$plugin->run();

}
run_bread_roboto();
