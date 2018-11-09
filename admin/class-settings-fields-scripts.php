<?php
/**
 * Settings fields for script loading and more.
 *
 * @package    Toby_Yates
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace TimS_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings fields for script loading and more.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Scripts {

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

		// Register settings.
		add_action( 'admin_init', [ $this, 'settings' ] );

		// Include jQuery Migrate.
		$migrate = get_option( 'yates_jquery_migrate' );
		if ( ! $migrate ) {
			add_action( 'wp_default_scripts', [ $this, 'include_jquery_migrate' ] );
		}

	}

	/**
	 * Register settings via the WordPress Settings API.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings() {

		/**
		 * Generl script options.
		 */
		add_settings_section( 'yates-scripts-general', __( 'General Options', 'yates' ), [ $this, 'scripts_general_section_callback' ], 'yates-scripts-general' );

		// Inline scripts.
		add_settings_field( 'yates_inline_scripts', __( 'Inline Scripts', 'yates' ), [ $this, 'yates_inline_scripts_callback' ], 'yates-scripts-general', 'yates-scripts-general', [ esc_html__( 'Add script contents to footer', 'yates' ) ] );

		register_setting(
			'yates-scripts-general',
			'yates_inline_scripts'
		);

		// Inline styles.
		add_settings_field( 'yates_inline_styles', __( 'Inline Styles', 'yates' ), [ $this, 'yates_inline_styles_callback' ], 'yates-scripts-general', 'yates-scripts-general', [ esc_html__( 'Add script-related CSS contents to head', 'yates' ) ] );

		register_setting(
			'yates-scripts-general',
			'yates_inline_styles'
		);

		// Inline jQuery.
		add_settings_field( 'yates_inline_jquery', __( 'Inline jQuery', 'yates' ), [ $this, 'yates_inline_jquery_callback' ], 'yates-scripts-general', 'yates-scripts-general', [ esc_html__( 'Deregister jQuery and add its contents to footer', 'yates' ) ] );

		register_setting(
			'yates-scripts-general',
			'yates_inline_jquery'
		);

		// Include jQuery Migrate.
		add_settings_field( 'yates_jquery_migrate', __( 'jQuery Migrate', 'yates' ), [ $this, 'yates_jquery_migrate_callback' ], 'yates-scripts-general', 'yates-scripts-general', [ esc_html__( 'Use jQuery Migrate for backwards compatibility', 'yates' ) ] );

		register_setting(
			'yates-scripts-general',
			'yates_jquery_migrate'
		);

		// Remove emoji script.
		add_settings_field( 'yates_remove_emoji_script', __( 'Emoji Script', 'yates' ), [ $this, 'remove_emoji_script_callback' ], 'yates-scripts-general', 'yates-scripts-general', [ esc_html__( 'Remove emoji script from <head>', 'yates' ) ] );

		register_setting(
			'yates-scripts-general',
			'yates_remove_emoji_script'
		);

		// Remove WordPress version appended to script links.
		add_settings_field( 'yates_remove_script_version', __( 'Script Versions', 'yates' ), [ $this, 'remove_script_version_callback' ], 'yates-scripts-general', 'yates-scripts-general', [ esc_html__( 'Remove WordPress version from script and stylesheet links in <head>', 'yates' ) ] );

		register_setting(
			'yates-scripts-general',
			'yates_remove_script_version'
		);

		// Minify HTML.
		add_settings_field( 'yates_html_minify', __( 'Minify HTML', 'yates' ), [ $this, 'html_minify_callback' ], 'yates-scripts-general', 'yates-scripts-general', [ esc_html__( 'Minify HTML source code to increase load speed', 'yates' ) ] );

		register_setting(
			'yates-scripts-general',
			'yates_html_minify'
		);

		/**
		 * Use included vendor scripts & options.
		 */
		add_settings_section( 'yates-scripts-vendor', __( 'Included Vendor Scripts', 'yates' ), [ $this, 'scripts_vendor_section_callback' ], 'yates-scripts-vendor' );

		// Use Slick.
		add_settings_field( 'yates_enqueue_slick', __( 'Slick', 'yates' ), [ $this, 'enqueue_slick_callback' ], 'yates-scripts-vendor', 'yates-scripts-vendor', [ esc_html__( 'Use Slick script and stylesheets', 'yates' ) ] );

		register_setting(
			'yates-scripts-vendor',
			'yates_enqueue_slick'
		);

		// Use Tabslet.
		add_settings_field( 'yates_enqueue_tabslet', __( 'Tabslet', 'yates' ), [ $this, 'enqueue_tabslet_callback' ], 'yates-scripts-vendor', 'yates-scripts-vendor', [ esc_html__( 'Use Tabslet script', 'yates' ) ] );

		register_setting(
			'yates-scripts-vendor',
			'yates_enqueue_tabslet'
		);

		// Use Sticky-kit.
		add_settings_field( 'yates_enqueue_stickykit', __( 'Sticky-kit', 'yates' ), [ $this, 'enqueue_stickykit_callback' ], 'yates-scripts-vendor', 'yates-scripts-vendor', [ esc_html__( 'Use Sticky-kit script', 'yates' ) ] );

		register_setting(
			'yates-scripts-vendor',
			'yates_enqueue_stickykit'
		);

		/**
		 * Use Tooltipster.
		 *
		 * @todo Add option to enqueue on the backend.
		 */
		add_settings_field( 'yates_enqueue_tooltipster', __( 'Tooltipster', 'yates' ), [ $this, 'enqueue_tooltipster_callback' ], 'yates-scripts-vendor', 'yates-scripts-vendor', [ esc_html__( 'Use Tooltipster script and stylesheet', 'yates' ) ] );

		register_setting(
			'yates-scripts-vendor',
			'yates_enqueue_tooltipster'
		);

		// Site Settings section.
		if ( class_exists( 'acf_pro' ) || ( class_exists( 'acf' ) && class_exists( 'acf_options_page' ) ) ) {

			add_settings_section( 'yates-registered-fields-activate', __( 'Registered Fields Activation', 'yates' ), [ $this, 'registered_fields_activate' ], 'yates-registered-fields-activate' );

			add_settings_field( 'yates_acf_activate_settings_page', __( 'Site Settings Page', 'yates' ), [ $this, 'registered_fields_page_callback' ], 'yates-registered-fields-activate', 'yates-registered-fields-activate', [ __( 'Deactive the field group for the "Site Settings" options page.', 'yates' ) ] );

			register_setting(
				'yates-registered-fields-activate',
				'yates_acf_activate_settings_page'
			);

		}

	}

	/**
	 * General section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function scripts_general_section_callback( $args ) {

		$html = sprintf( '<p>%1s</p>', esc_html__( 'Inline settings only apply to scripts and styles included with the plugin.' ) );

		echo $html;

	}

	/**
	 * Inline jQuery.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function yates_inline_jquery_callback( $args ) {

		$option = get_option( 'yates_inline_jquery' );

		$html = '<p><input type="checkbox" id="yates_inline_jquery" name="yates_inline_jquery" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="yates_inline_jquery"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Include jQuery Migrate.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function yates_jquery_migrate_callback( $args ) {

		$option = get_option( 'yates_jquery_migrate' );

		$html = '<p><input type="checkbox" id="yates_jquery_migrate" name="yates_jquery_migrate" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="yates_jquery_migrate"> '  . $args[0] . '</label><br />';

		$html .= '<small><em>Some outdated plugins and themes may be dependent on an old version of jQuery</em></small></p>';

		echo $html;

	}

	/**
	 * Inline scripts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function yates_inline_scripts_callback( $args ) {

		$option = get_option( 'yates_inline_scripts' );

		$html = '<p><input type="checkbox" id="yates_inline_scripts" name="yates_inline_scripts" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="yates_inline_scripts"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Inline styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function yates_inline_styles_callback( $args ) {

		$option = get_option( 'yates_inline_styles' );

		$html = '<p><input type="checkbox" id="yates_inline_styles" name="yates_inline_styles" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="yates_inline_styles"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Remove emoji script.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function remove_emoji_script_callback( $args ) {

		$option = get_option( 'yates_remove_emoji_script' );

		$html = '<p><input type="checkbox" id="yates_remove_emoji_script" name="yates_remove_emoji_script" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="yates_remove_emoji_script"> '  . $args[0] . '</label><br />';

		$html .= '<small><em>Emojis will still work in modern browsers</em></small></p>';

		echo $html;

	}

	/**
	 * Script options and enqueue settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function remove_script_version_callback( $args ) {

		$option = get_option( 'yates_remove_script_version' );

		$html = '<p><input type="checkbox" id="yates_remove_script_version" name="yates_remove_script_version" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="yates_remove_script_version"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Minify HTML source code.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function html_minify_callback( $args ) {

		$option = get_option( 'yates_html_minify' );

		$html = '<p><input type="checkbox" id="yates_html_minify" name="yates_html_minify" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="yates_html_minify"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Vendor section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function scripts_vendor_section_callback( $args ) {

		$html = sprintf( '<p>%1s</p>', esc_html__( 'Look for Fancybox options on the Media Settings page.' ) );

		echo $html;

	}

	/**
	 * Use Slick.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_slick_callback( $args ) {

		$option = get_option( 'yates_enqueue_slick' );

		$html = '<p><input type="checkbox" id="yates_enqueue_slick" name="yates_enqueue_slick" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="yates_enqueue_slick"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://kenwheeler.github.io/slick/' ) ),
			esc_attr( __( 'Learn more about Slick', 'yates' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Use Tabslet.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_tabslet_callback( $args ) {

		$option = get_option( 'yates_enqueue_tabslet' );

		$html = '<p><input type="checkbox" id="yates_enqueue_tabslet" name="yates_enqueue_tabslet" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="yates_enqueue_tabslet"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://vdw.github.io/Tabslet/' ) ),
			esc_attr( __( 'Learn more about Tabslet', 'yates' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Use Sticky-kit.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_stickykit_callback( $args ) {

		$option = get_option( 'yates_enqueue_stickykit' );

		$html = '<p><input type="checkbox" id="yates_enqueue_stickykit" name="yates_enqueue_stickykit" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="yates_enqueue_stickykit"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://leafo.net/sticky-kit/' ) ),
			esc_attr( __( 'Learn more about Sticky-kit', 'yates' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Use Tooltipster.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function enqueue_tooltipster_callback( $args ) {

		$option = get_option( 'yates_enqueue_tooltipster' );

		$html = '<p><input type="checkbox" id="yates_enqueue_tooltipster" name="yates_enqueue_tooltipster" value="1" ' . checked( 1, $option, false ) . '/>';
		$html .= sprintf(
			'<label for="yates_enqueue_tooltipster"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
			$args[0],
			esc_attr( esc_url( 'http://iamceege.github.io/tooltipster/' ) ),
			esc_attr( __( 'Learn more about Tooltipster', 'yates' ) )
		);
		$html .= '</p>';

		echo $html;

	}

	/**
	 * Site Settings section.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function registered_fields_activate() {

		if ( class_exists( 'acf_pro' ) || ( class_exists( 'acf' ) && class_exists( 'acf_options_page' ) ) ) {

			echo sprintf( '<p>%1s</p>', esc_html( 'The Controlled Chaos plugin registers custom fields for Advanced Custom Fields Pro that can be imported for editing. These built-in field goups must be deactivated for the imported field groups to take effect.', 'yates' ) );

		}

	}

	/**
	 * Site Settings section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public function registered_fields_page_callback( $args ) {

		if ( class_exists( 'acf_pro' ) || ( class_exists( 'acf' ) && class_exists( 'acf_options_page' ) ) ) {

			$html = '<p><input type="checkbox" id="yates_acf_activate_settings_page" name="yates_acf_activate_settings_page" value="1" ' . checked( 1, get_option( 'yates_acf_activate_settings_page' ), false ) . '/>';

			$html .= '<label for="yates_acf_activate_settings_page"> '  . $args[0] . '</label></p>';

			echo $html;

		}

	}

	/**
	 * Include jQuery Migrate.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
    public function include_jquery_migrate( $scripts ) {

		if ( ! empty( $scripts->registered['jquery'] ) ) {

			$scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, [ 'jquery-migrate' ] );

		}

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function yates_settings_fields_scripts() {

	return Settings_Fields_Scripts::instance();

}

// Run an instance of the class.
yates_settings_fields_scripts();