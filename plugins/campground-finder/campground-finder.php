<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://winlum.com
 * @since             1.0.0
 * @package           Campground_Finder
 *
 * @wordpress-plugin
 * Plugin Name:       Campground Finder
 * Plugin URI:        http://example.com/campground-finder-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            WinLum Inc.
 * Author URI:        https://winlum.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       campground-finder
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
define( 'CAMPGROUND_FINDER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-campground-finder-activator.php
 */
function activate_campground_finder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-campground-finder-activator.php';
	Campground_Finder_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-campground-finder-deactivator.php
 */
function deactivate_campground_finder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-campground-finder-deactivator.php';
	Campground_Finder_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_campground_finder' );
register_deactivation_hook( __FILE__, 'deactivate_campground_finder' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-campground-finder.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_campground_finder() {

	$plugin = new Campground_Finder();
	$plugin->run();

}
run_campground_finder();
