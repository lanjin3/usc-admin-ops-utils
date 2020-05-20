<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://usc.edu
 * @since      1.0.0
 *
 * @package    Usc_Admin_Ops_Utils
 * @subpackage Usc_Admin_Ops_Utils/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Usc_Admin_Ops_Utils
 * @subpackage Usc_Admin_Ops_Utils/includes
 * @author     Lan Jin <lanjin@usc.edu>
 */
class Usc_Admin_Ops_Utils_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'usc-admin-ops-utils',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
