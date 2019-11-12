<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://twimbit.com
 * @since             1.0.0
 * @package           Twimcast_Api
 *
 * @wordpress-plugin
 * Plugin Name:       twimcast-api
 * Plugin URI:        http://twimbit.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Twimbit
 * Author URI:        http://twimbit.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       twimcast-api
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('TWIMCAST_API_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-twimcast-api-activator.php
 */
function activate_twimcast_api()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-twimcast-api-activator.php';
	Twimcast_Api_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-twimcast-api-deactivator.php
 */
function deactivate_twimcast_api()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-twimcast-api-deactivator.php';
	Twimcast_Api_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_twimcast_api');
register_deactivation_hook(__FILE__, 'deactivate_twimcast_api');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-twimcast-api.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_twimcast_api()
{

	$plugin = new Twimcast_Api();
	$plugin->run();
}
run_twimcast_api();

