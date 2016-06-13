<?php
/**
Plugin Name: Evolve Theme Importer
Description: Import Windmill demos export file.
Author: thbthemes
Author URI: http://thbthemes.com/
Version: 1.0.0
Text Domain: ev-theme-importer
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

@see WordPress Importer: https://wordpress.org/plugins/wordpress-importer/
*/

function ev_theme_importer_init() {
	if ( ! defined( 'EV_THEME_IMPORTER' ) ) {
		return;
	}

	require_once dirname( __FILE__ ) . '/classes.php';
	load_plugin_textdomain( 'ev-theme-importer', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}