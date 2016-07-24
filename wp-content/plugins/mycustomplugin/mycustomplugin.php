<?php
/*
Plugin Name: MyCustomPlugin
Plugin URI: https://localhost/
Description: Custom Plugin for wordpress
Version: 0.1.0
Author: Arijeet Baruah
Author URI: http://rishithegamecreator.wordpress.com
Text Domain: Custom
Domain Path: /languages
*/

// Exit if accessed directly
if(!defined('ABSPATH')){
	exit;
}
require_once (plugin_dir_path(__FILE__).'include/mycustomplugin-init.php');
require_once (plugin_dir_path(__FILE__).'include/mycustomplugin-shortcode.php');

?>