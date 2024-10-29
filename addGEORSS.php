<?php
/**
 * @package addGEORSS
 * @version 1.3
 */
/*
Plugin Name: addGEORSS
Plugin URI: http://plugins.funsite.eu/addgeorss/
Description: Adds a GEORSS point to the RSS feed using the GEO information in the featured image
Author: Gerhard Hoogterp
Version: 1.3
Author URI: http://plugins.funsite.eu/
*/
if ( ! defined( 'ABSPATH' ) ) exit;

if (!class_exists('basic_plugin_class')):
	require(plugin_dir_path(__FILE__).'basics/basic_plugin.class');
endif;

include_once(plugin_dir_path(__FILE__).'addGEORSS-plugin.php');
$addgeorss = new addgeorss_class();
$addgeorss->currentPlugin = __FILE__; // bit of a hack to find the plugin info in getPlugins
?>