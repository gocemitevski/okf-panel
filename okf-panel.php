<?php
/*
	  Plugin Name: Open Knowledge Foundation Panel
	  Plugin URI: https://github.com/okfn/okf-panel
	  Version: 1.0.0
	  Author: Mint Canary
	  Author URI: http://www.mintcanary.com/
	  Description: Adds ribbon and dropdown panel to top of site.
	  Text Domain: okf-panel
	  Domain Path: /languages
	  License: Creative Commons Attribution-ShareAlike
	 */

	// Include Sunrise Plugin Framework class
	require_once 'classes/sunrise.class.php';

	// Create plugin instance
	$okfpanel = new Sunrise_Plugin_Framework;

	$okfpanel->add_settings_page( array(
		'parent' => 'themes.php',
		'page_title' => $okfpanel->name,
		'menu_title' => 'OKF Panel',
		'capability' => 'manage_options',
		'settings_link' => true
	) );

	// Include plugin actions
	require_once 'inc/plugin-actions.php';

	// Make plugin meta translatable
	__( 'Adds ribbon and dropdown panel to top of site', $okfpanel->textdomain );
?>
