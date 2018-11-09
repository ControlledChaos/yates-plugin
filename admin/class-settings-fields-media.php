<?php
/**
 * Settings fields for media options.
 *
 * @package    Toby_Yates
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Yates_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings fields for media options.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Media {

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

        // Media settings.
        add_action( 'admin_init', [ $this, 'settings' ] );

        // Hard crop default image sizes.
        add_action( 'after_setup_theme', [ $this, 'crop' ] );

    }

    /**
	 * Media settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings() {

        /**
         * Image crop settings.
         */
        add_settings_field( 'yates_hard_crop_medium', __( 'Medium size crop', 'yates' ), [ $this, 'medium_crop' ], 'media', 'default', [ __( 'Crop thumbnail to exact dimensions (normally thumbnails are proportional)', 'yates' ) ] );

        add_settings_field( 'yates_hard_crop_large', __( 'Large size crop', 'yates' ), [ $this, 'large_crop' ], 'media', 'default', [ __( 'Crop thumbnail to exact dimensions (normally thumbnails are proportional)', 'yates' ) ] );

        register_setting(
            'media',
            'yates_hard_crop_medium'
        );

        register_setting(
            'media',
            'yates_hard_crop_large'
        );

        /**
         * SVG options.
         */
        add_settings_section( 'yates-svg-settings', __( 'SVG Images', 'yates' ), [ $this, 'svg_notice' ], 'media' );

        add_settings_field( 'yates_add_svg_support', __( 'SVG Support', 'yates' ), [ $this, 'svg_support' ], 'media', 'yates-svg-settings', [ __( 'Add ability to upload SVG images to the media library.', 'yates' ) ] );

        register_setting(
            'media',
            'yates_add_svg_support'
        );

        /**
         * Fancybox settings.
         */
        add_settings_section( 'yates-media-settings', __( 'Fancybox', 'yates' ), [ $this, 'fancybox_description' ], 'media' );

        add_settings_field( 'yates_enqueue_fancybox_script', __( 'Enqueue Fancybox script', 'yates' ), [ $this, 'fancybox_script' ], 'media', 'yates-media-settings', [ __( 'Needed for lightbox functionality.', 'yates' ) ] );

        if ( ! current_theme_supports( 'ccd-fancybox' ) ) {
            add_settings_field( 'yates_enqueue_fancybox_styles', __( 'Enqueue Fancybox styles', 'yates' ), [ $this, 'fancybox_styles' ], 'media', 'yates-media-settings', [ __( 'Leave unchecked to use a custom stylesheet in a theme.', 'yates' ) ] );
        }

        register_setting(
            'media',
            'yates_enqueue_fancybox_script'
        );

        if ( ! current_theme_supports( 'ccd-fancybox' ) ) {
            register_setting(
                'media',
                'yates_enqueue_fancybox_styles'
            );
        }

    }

    /**
     * Medium crop field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function medium_crop( $args ) {

        $html = '<p><input type="checkbox" id="yates_hard_crop_medium" name="yates_hard_crop_medium" value="1" ' . checked( 1, get_option( 'yates_hard_crop_medium' ), false ) . '/>';

        $html .= '<label for="yates_hard_crop_medium"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Large crop field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function large_crop( $args ) {

        $html = '<p><input type="checkbox" id="yates_hard_crop_large" name="yates_hard_crop_large" value="1" ' . checked( 1, get_option( 'yates_hard_crop_large' ), false ) . '/>';

        $html .= '<label for="yates_hard_crop_large"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Update crop options.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function crop() {

        if ( get_option( 'yates_hard_crop_medium' ) ) {
            update_option( 'medium_crop', 1 );
        } else {
            update_option( 'medium_crop', 0 );
        }

        if ( get_option( 'yates_hard_crop_large' ) ) {
            update_option( 'large_crop', 1 );
        } else {
            update_option( 'large_crop', 0 );
        }

    }

    /**
     * Add warning about using SVG images.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function svg_notice() {

        $html = sprintf( '<p>%1s</p>', esc_html__( 'Use SVG images with caution! Only add support if you trust or examine each SVG file that you upload.', 'yates' ) );

        echo $html;

    }

    /**
     * SVG options.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     *
     * @since    1.0.0
     */
    public function svg_support( $args ) {

        $html = '<p><input type="checkbox" id="yates_add_svg_support" name="yates_add_svg_support" value="1" ' . checked( 1, get_option( 'yates_add_svg_support' ), false ) . '/>';

        $html .= '<label for="yates_add_svg_support"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Fancybox settings description.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function fancybox_description() {

        $url  = 'http://fancyapps.com/fancybox/3/';
        $html = sprintf( '<p>%1s <a href="%2s" target="_blank">%3s</a></p>', esc_html__( 'Documentation on the Fancybox website:', 'yates' ), esc_url( $url ), $url );

        echo $html;

    }

    /**
     * Fancybox script field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function fancybox_script( $args ) {

        $html = '<p><input type="checkbox" id="yates_enqueue_fancybox_script" name="yates_enqueue_fancybox_script" value="1" ' . checked( 1, get_option( 'yates_enqueue_fancybox_script' ), false ) . '/>';

        $html .= '<label for="yates_enqueue_fancybox_script"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Fancybox styles field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function fancybox_styles( $args ) {

        $html = '<p><input type="checkbox" id="yates_enqueue_fancybox_styles" name="yates_enqueue_fancybox_styles" value="1" ' . checked( 1, get_option( 'yates_enqueue_fancybox_styles' ), false ) . '/>';

        $html .= '<label for="yates_enqueue_fancybox_styles"> '  . $args[0] . '</label></p>';

        echo $html;

    }

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function yates_settings_fields_media() {

	return Settings_Fields_Media::instance();

}

// Run an instance of the class.
yates_settings_fields_media();