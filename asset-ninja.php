<?php
/**
 * Plugin Name:       Assets Ninja
 * Plugin URI:        https://osmanforhad.net/plugins/practice/
 * Description:       Wordpress assets management plugin
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.1
 * Author:            osman forhad
 * Author URI:        https://author.osmanforhad.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       assetsninja
 * Domain Path:       /languages/
 */
class AssetsNinja{
	function __construct() {
		add_action('plugins_loaded', array($this, 'load_textdomain'));
		add_action('wp_enqueue_scripts', array($this, 'load_front_assets'));
	}

	function load_textdomain(){
		load_plugin_textdomain('assetsninja', false, plugin_dir_url(__FILE__)."/languages");
	}

	function load_front_assets(){
		
	}
}

new AssetsNinja();