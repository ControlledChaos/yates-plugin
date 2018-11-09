<?php
/**
 * Enqueue frontend styles.
 *
 * @package    Toby_Yates
 * @subpackage Frontend
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Yates_Plugin\Includes;

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
class Remove_Customizer {

	/**
     * @var Customizer_Remove_All
     *
     * @since  1.0.0
     * @access public
	 */
	private static $instance;

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

        // Remove customize capability.
        add_filter( 'map_meta_cap', [ $this, 'remove' ], 10, 4 );

		// Drop some customizer actions.
		remove_action( 'plugins_loaded', '_wp_customize_include', 10 );
		remove_action( 'admin_enqueue_scripts', '_wp_customize_loader_settings', 11 );

		// Manually overrid Customizer behaviors.
        add_action( 'load-customize.php', [ $this, 'override' ] );

        // Remove the welcome panel button.
        add_action( 'admin_head', [ $this, 'welcome' ] );

    }

	/**
	 * Remove customize capability.
	 *
     * This needs to be in public so the admin bar link for 'customize' is hidden.
     *
     * @since  1.0.0
     * @access public
     * @return void
	 */
	public function remove( $caps = [], $cap = '', $user_id = 0, $args = [] ) {

		if ( $cap == 'customize' ) {
			return array( 'nope' );
		}

        return $caps;

	}

	/**
     * Manually overriding specific Customizer behaviors.
     *
     * @since  1.0.0
     * @access public
     * @return void
	 */
	public function override() {

		// If accessed directly.
        wp_die( __( 'The Customizer is currently disabled.', 'yates' ) );

    }

    /**
     * Remove the welcome panel button.
     *
     * @since  1.0.0
     * @access public
     * @return void
	 */
	public function welcome() {

        $style = '<style>';

        $style .= '.hide-if-no-customize,.hide-if-customize{display:none!important}';

        $style .= '</style>';

        echo $style;

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function yates_remove_customizer() {

	return Remove_Customizer::instance();

}

// Run an instance of the class.
yates_remove_customizer();