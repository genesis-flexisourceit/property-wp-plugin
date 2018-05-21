<?php
/**
 * Plugin Name: Ourwalls Property
 *
 * Description: Custom membership plugin for property management software
 *
 * Version: 1.0.0
 *
 * Author: Genesis Y. Gallardo
 * Author URI: https://github.com/genesis-flexisourceit
 *
 * License: GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 */

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define('PLUGIN_NAME_VERSION', '1.0.0');

require_once plugin_dir_path( __FILE__ ) . 'classes/setting-loader.php';

if(class_exists(SettingLoader::class)) {
	$settingLoader = new SettingLoader();
}

register_activation_hook(__FILE__, [$settingLoader, 'activate']);

register_deactivation_hook(__FILE__, [$settingLoader, 'deactivate']);
