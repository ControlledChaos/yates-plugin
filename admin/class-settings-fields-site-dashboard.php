<?php
/**
 * Settings for the Dashboard tab on the Site Settings page.
 *
 * @package    Toby_Yates
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Yates_Plugin\Admin\Partials;

use Yates_Plugin\Admin\Partials\Field_Callbacks\Dashboard_Callbacks as Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings for the Dashboard tab.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Site_Dashboard {

	/**
	 * Holds the values to be used in the fields callbacks.
	 *
	 * @var array
	 */
	private $options;

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

			// Require the class files.
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

		// Register settings sections and fields.
		add_action( 'admin_init', [ $this, 'settings' ] );

	}

	/**
	 * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Callbacks for the Dashboard tab.
		require YATES_PATH . 'admin/partials/field-callbacks/class-dashboard-callbacks.php';

	}

	/**
	 * Dashboard settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 *
	 * @link  https://codex.wordpress.org/Settings_API
	 */
	public function settings() {

		// Dashboard settings section.
		add_settings_section(
			'yates-site-dashboard',
			__( 'Dashboard Settings', 'yates' ),
			[],
			'yates-site-dashboard'
		);

		// Use the custom welcome panel.
		add_settings_field(
			'yates_custom_welcome',
			__( 'Custom Welcome', 'yates' ),
			[ Callbacks::instance(), 'custom_welcome' ],
			'yates-site-dashboard',
			'yates-site-dashboard',
			[ esc_html__( 'Use the custom Welcome panel on the Dashboard', 'yates' ) ]
		);

		register_setting(
			'yates-site-dashboard',
			'yates_custom_welcome'
		);

		// Hide the try Gutenberg panel.
		add_settings_field(
			'yates_hide_try_gutenberg',
			__( 'Hide Try Gutenberg', 'yates' ),
			[ Callbacks::instance(), 'hide_try_gutenberg' ],
			'yates-site-dashboard',
			'yates-site-dashboard',
			[ esc_html__( 'Hide the "Try Gutenberg" panel on the Dashboard', 'yates' ) ]
		);

		register_setting(
			'yates-site-dashboard',
			'yates_hide_try_gutenberg'
		);

		// Hide the welcome panel.
		add_settings_field(
			'yates_hide_welcome',
			__( 'Hide Welcome', 'yates' ),
			[ Callbacks::instance(), 'hide_welcome' ],
			'yates-site-dashboard',
			'yates-site-dashboard',
			[ esc_html__( 'Hide the Welcome panel on the Dashboard', 'yates' ) ]
		);

		register_setting(
			'yates-site-dashboard',
			'yates_hide_welcome'
		);

		// Hide the welcome panel dismiss button.
		add_settings_field(
			'yates_remove_welcome_dismiss',
			__( 'Remove Welcome Dismiss', 'yates' ),
			[ Callbacks::instance(), 'remove_welcome_dismiss' ],
			'yates-site-dashboard',
			'yates-site-dashboard',
			[ esc_html__( 'Remove the Welcome panel dismiss button', 'yates' ) ]
		);

		register_setting(
			'yates-site-dashboard',
			'yates_remove_welcome_dismiss'
		);

		// Hide WordPress News widget.
		add_settings_field(
			'yates_hide_wp_news',
			__( 'Hide WordPress News', 'yates' ),
			[ Callbacks::instance(), 'hide_wp_news' ],
			'yates-site-dashboard',
			'yates-site-dashboard',
			[ esc_html__( 'Hide the WordPress News widget on the Dashboard', 'yates' ) ]
		);

		register_setting(
			'yates-site-dashboard',
			'yates_hide_wp_news'
		);

		// Hide Quick Draft (QuickPress) widget.
		add_settings_field(
			'yates_hide_quickpress',
			__( 'Hide Quick Draft', 'yates' ),
			[ Callbacks::instance(), 'hide_quickpress' ],
			'yates-site-dashboard',
			'yates-site-dashboard',
			[ esc_html__( 'Hide the Quick Draft widget on the Dashboard', 'yates' ) ]
		);

		register_setting(
			'yates-site-dashboard',
			'yates_hide_quickpress'
		);

		// Hide At a Glance widget.
		add_settings_field(
			'yates_hide_at_glance',
			__( 'Hide At a Glance', 'yates' ),
			[ Callbacks::instance(), 'hide_at_glance' ],
			'yates-site-dashboard',
			'yates-site-dashboard',
			[ esc_html__( 'Hide the At a Glance widget on the Dashboard', 'yates' ) ]
		);

		register_setting(
			'yates-site-dashboard',
			'yates_hide_at_glance'
		);

		// Hide Activity widget.
		add_settings_field(
			'yates_hide_activity',
			__( 'Hide Activity', 'yates' ),
			[ Callbacks::instance(), 'hide_activity' ],
			'yates-site-dashboard',
			'yates-site-dashboard',
			[ esc_html__( 'Hide the Activity widget on the Dashboard', 'yates' ) ]
		);

		register_setting(
			'yates-site-dashboard',
			'yates_hide_activity'
		);

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function yates_settings_fields_site_dashboard() {

	return Settings_Fields_Site_Dashboard::instance();

}

// Run an instance of the class.
yates_settings_fields_site_dashboard();