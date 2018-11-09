<?php
/**
 * Enqueue frontend scripts.
 *
 * @package    Toby_Yates
 * @subpackage Frontend
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace TimS_Plugin\Frontend;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The frontend functionality of the plugin.
 *
 * @since  1.0.0
 * @access public
 */
class Enqueue_Frontend_Scripts {

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

		add_action( 'wp_enqueue_scripts', [ $this, 'scripts' ] );

	}

	/**
	 * Enqueue scripts traditionally by default.
	 *
	 * Uses the universal slug partial for admin pages. Set this
     * slug in the core plugin file.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function scripts() {

		// Non-vendor plugin script. Uncomment to use.
		// wp_enqueue_script( YATES_ADMIN_SLUG, YATES_URL . 'assets/js/frontend.js', [ 'jquery' ], YATES_VERSION, true );

		// Fancybox 3.
		if ( get_option( 'yates_enqueue_fancybox_script' ) ) {
			wp_enqueue_script( YATES_ADMIN_SLUG . '-fancybox', YATES_URL . 'frontend/assets/js/jquery.fancybox.min.js', [ 'jquery' ], YATES_VERSION, true );
		}

		// Slick.
		if ( get_option( 'yates_enqueue_slick' ) ) {
			wp_enqueue_script( YATES_ADMIN_SLUG . '-slick', YATES_URL . 'frontend/assets/js/slick.min.js', [ 'jquery' ], YATES_VERSION, true );
		}

		// Tabslet.
		if ( get_option( 'yates_enqueue_tabslet' ) ) {
			wp_enqueue_script( YATES_ADMIN_SLUG . '-tabslet', YATES_URL . 'frontend/assets/js/jquery.tabslet.min.js', [ 'jquery' ], YATES_VERSION, true );
		}

		// Tooltipster.
		if ( get_option( 'yates_enqueue_tooltipster' ) ) {
			wp_enqueue_script( YATES_ADMIN_SLUG . '-tooltipster', YATES_URL . 'frontend/assets/js/tooltipster.bundle.min.js', [ 'jquery' ], YATES_VERSION, true );
		}

		// FitVids.
		wp_enqueue_script( YATES_ADMIN_SLUG . '-fitvids', YATES_URL . 'frontend/assets/js/jquery.fitvids.min.js', [ 'jquery' ], YATES_VERSION, true );

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function yates_enqueue_frontend_scripts() {

	return Enqueue_Frontend_Scripts::instance();

}

// Run an instance of the class.
yates_enqueue_frontend_scripts();