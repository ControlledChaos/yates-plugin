<?php
/**
 * About page output.
 *
 * This page uses the jQuery tabs from the jQuery UI suite that is included
 * with WordPress. Tabs are activated by targeting the `backend-tabbed-content`
 * in this plugin's admin.js file.
 *
 * @package    Toby_Yates
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @see        Tabs admin/assets/js/admin.js
 * @link       Dashicons https://developer.wordpress.org/resource/dashicons/
 */

namespace Yates_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Site Settings tab icon.
 *
 * The Site Settings page has options to make the page top-level in
 * the admin menu and set a Dashicons icon. If an icon has been set
 * for the link in the admin menu then we will use the same icon here
 * for the Site Settings tab.
 *
 * @since  1.0.0
 * @return void
 */

// Get the settings page menu icon option from Site Settings.
$settings_icon = sanitize_text_field( get_option( 'yates_site_settings_link_icon' ) );

// If it's not empty, use the icon class from the option.
if ( $settings_icon ) {
	$settings = $settings_icon;

// Otherwise use the admin settings icon.
} else {
	$settings = 'dashicons-admin-settings';
}

/**
 * Set up the page tabs as an array for adding tabs
 * from another plugin or from a theme.
 *
 * @since  1.0.0
 * @return array
 */
$tabs = [

    // Introduction tab.
    sprintf(
        '<li><a href="%1s"><span class="dashicons dashicons-welcome-learn-more"></span> %2s</a></li>',
        '#intro',
        esc_html__( 'Introduction', 'yates' )
	),

	// Media Library tab.
    sprintf(
        '<li><a href="%1s"><span class="dashicons dashicons-admin-media"></span> %2s</a></li>',
        '#media',
        esc_html__( 'Media Library', 'yates' )
	),

	// Vimeo tab.
    sprintf(
        '<li><a href="%1s"><span class="dashicons dashicons-video-alt3"></span> %2s</a></li>',
        '#vimeo',
        esc_html__( 'Vimeo Videos', 'yates' )
    ),

	// Features tab.
    sprintf(
        '<li><a href="%1s"><span class="dashicons dashicons-format-video"></span> %2s</a></li>',
        '#features',
        esc_html__( 'Features', 'yates' )
	),

	// Commercials tab.
    sprintf(
        '<li><a href="%1s"><span class="dashicons dashicons-megaphone"></span> %2s</a></li>',
        '#commercials',
        esc_html__( 'Commercials', 'yates' )
	),

	// Site Settings tab.
    sprintf(
        '<li><a href="%1s"><span class="dashicons %2s"></span> %3s</a></li>',
		'#settings',
		esc_attr( $settings ),
        esc_html__( 'Site Settings', 'yates' )
	),

];

// Apply a filter to the tabs array for adding tabs.
$page_tabs = apply_filters( 'yates_tabs_page_about', $tabs );

?>
<!-- Default WordPress page wrapper -->
<div class="wrap site-plugin-wrap">
	<!-- Page heading -->
	<?php echo sprintf( '<h1 class="wp-heading-inline">%1s</h1>', esc_html__( 'How to Manage Your Website', 'yates' ) ); ?>
	<!-- Page description -->
    <p class="description"><?php esc_html_e( 'The following instructions will help you keep your portfolio up to date and looking good.', 'yates' ); ?></p>
	<!-- Begin jQuery tabbed content -->
	<div class="backend-tabbed-content">
		<ul>
			<?php echo implode( $page_tabs ); ?>
		</ul>
		<?php // Hook for adding tabbed content.
		do_action( 'yates_content_page_about_before' ); ?>
		<!-- Begin content -->
		<div id="intro"><!-- Introduction content -->
			<?php include_once YATES_PATH . 'admin/partials/plugin-page-intro.php'; ?>
		</div>
		<div id="media"><!-- Media Options content -->
			<?php include_once YATES_PATH . 'admin/partials/plugin-page-media.php'; ?>
		</div>
		<div id="vimeo"><!-- Media Options content -->
			<?php include_once YATES_PATH . 'admin/partials/plugin-page-vimeo.php'; ?>
		</div>
		<div id="features"><!-- Script Options content -->
			<?php include_once YATES_PATH . 'admin/partials//plugin-page-features.php'; ?>
		</div>
		<div id="commercials"><!-- Dev Tools content -->
			<?php include_once YATES_PATH . 'admin/partials/plugin-page-commercials.php'; ?>
		</div>
		<div id="settings"><!-- Site Settings content -->
			<?php include_once YATES_PATH . 'admin/partials/plugin-page-site-settings.php'; ?>
		</div>
		<?php // Hook for adding tabbed content.
		do_action( 'yates_content_page_about_after' ); ?>
	</div><!-- End jQuery tabbed content -->
</div><!-- End WordPress page wrapper -->