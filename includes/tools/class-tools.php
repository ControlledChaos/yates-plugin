<?php
/**
 * Various tools included.
 *
 * @package    Toby_Yates
 * @subpackage Includes\Tools
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @todo       Apply a filter to return true or false for
 *             hiding the Development Tools admin page.
 */

namespace Yates_Plugin\Includes\Tools;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get plugins path to check for active plugins.
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Various tools included.
 *
 * @since  1.0.0
 * @access public
 */
class Tools {

	/**
	 * Get an instance of the class.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

			// Get class dependencies.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		add_filter( 'acf/settings/save_json', [ $this, 'acf_json_save_point' ], 20 );
		add_filter( 'acf/settings/load_json', [ $this, 'acf_json_load_point' ], 20 );

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Minify HTML source code.
		$minify = get_option( 'yates_html_minify' );

		if ( $minify ) {
			require_once YATES_PATH . 'includes/tools/class-minify-process.php';
		}

	}

	public function acf_json_save_point( $path ) {

		// update path
		$path = plugin_dir_path( __DIR__ ) . '/acf-json';


		// return
		return $path;

	}

	public function acf_json_load_point( $paths ) {

		// remove original path (optional)
		unset( $paths[0] );


		// append path
		$paths[] = plugin_dir_path( __DIR__ ) . '/acf-json';


		// return
		return $paths;

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function yates_tools() {

	return Tools::instance();

}

// Run an instance of the class.
yates_tools();