<?php
/**
 * Site settings page output.
 *
 * @package    Toby_Yates
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace TimS_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Active tab switcher.
 *
 * @since  1.0.0
 * @return void
 */
if ( isset( $_GET[ 'tab' ] ) ) {
    $active_tab = $_GET[ 'tab' ];
} else {
    $active_tab = 'dashboard';
}

/**
 * Set up the page tabs as an array for adding tabs
 * from another plugin or from a theme.
 *
 * @since  1.0.0
 * @return array
 */
$tabs = [

    // Dashboard tab.
    sprintf(
        '<a href="?page=%1s-settings&tab=dashboard" class="nav-tab %2s"><span class="dashicons dashicons-dashboard"></span> %3s</a>',
        YATES_ADMIN_SLUG,
        $active_tab == 'dashboard' ? 'nav-tab-active' : '',
        esc_html__( 'Dashboard', 'yates' )
    ),

    // Admin menu tab.
    sprintf(
        '<a href="?page=%1s-settings&tab=admin-menu" class="nav-tab %2s"><span class="dashicons dashicons-menu"></span> %3s</a>',
        YATES_ADMIN_SLUG,
        $active_tab == 'admin-menu' ? 'nav-tab-active' : '',
        esc_html__( 'Admin Menu', 'yates' )
    ),

    // Admin pages tab.
    sprintf(
        '<a href="?page=%1s-settings&tab=admin-pages" class="nav-tab %2s"><span class="dashicons dashicons-admin-page"></span> %3s</a>',
        YATES_ADMIN_SLUG,
        $active_tab == 'admin-pages' ? 'nav-tab-active' : '',
        esc_html__( 'Admin Pages', 'yates' )
    ),

    // Users tab.
    sprintf(
        '<a href="?page=%1s-settings&tab=users" class="nav-tab %2s"><span class="dashicons dashicons-admin-users"></span> %3s</a>',
        YATES_ADMIN_SLUG,
        $active_tab == 'users' ? 'nav-tab-active' : '',
        esc_html__( 'Site Users', 'yates' )
    ),

    // Meta/SEO tab.
    sprintf(
        '<a href="?page=%1s-settings&tab=meta-seo" class="nav-tab %2s"><span class="dashicons dashicons-tag"></span> %3s</a>',
        YATES_ADMIN_SLUG,
        $active_tab == 'meta-seo' ? 'nav-tab-active' : '',
        esc_html__( 'Meta/SEO', 'yates' )
    )

];

// Apply a filter to the tabs array for adding tabs.
$page_tabs = apply_filters( 'yates_tabs_site_settings', $tabs );

/**
 * Do settings section and fields by tab.
 *
 * @since  1.0.0
 * @return void
 */
if ( 'dashboard' == $active_tab  ) {
    $section = 'yates-site-dashboard';
    $fields  = 'yates-site-dashboard';
} elseif ( 'admin-menu' == $active_tab ) {
    $section = 'yates-site-admin-menu';
    $fields  = 'yates-site-admin-menu';
} elseif ( 'admin-pages' == $active_tab ) {
    $section = 'yates-site-admin-pages';
    $fields  = 'yates-site-admin-pages';
} elseif ( 'users' == $active_tab ) {
    $section = 'yates-site-users';
    $fields  = 'yates-site-users';
} elseif ( 'meta-seo' == $active_tab ) {
    $section = 'yates-site-meta-seo';
    $fields  = 'yates-site-meta-seo';
} else {
    $section = null;
    $fields  = null;
}

// Apply filters to the sections and fields for new tabs.
$do_section = apply_filters( 'yates_section_site_settings', $section );
$do_fields  = apply_filters( 'yates_fields_site_settings', $fields );

/**
 * Conditional save button text by tab.
 *
 * @since  1.0.0
 * @return string Returns the button label.
 */
if ( 'dashboard' == $active_tab  ) {
    $save = __( 'Save Dashboard', 'yates' );
} elseif ( 'admin-menu' == $active_tab ) {
    $save = __( 'Save Menu', 'yates' );
} elseif ( 'admin-pages' == $active_tab ) {
    $save = __( 'Save Pages', 'yates' );
} elseif ( 'users' == $active_tab ) {
    $save = __( 'Save Users', 'yates' );
} elseif ( 'meta-seo' == $active_tab ) {
    $save = __( 'Save Meta', 'yates' );
} else {
    $save = __( 'Save Settings', 'yates' );
}

// Apply a filter for new tabs added by another plugin or from a theme.
$button = apply_filters( 'yates_save_site_settings', $save );

?>
<div class="wrap">
	<?php echo sprintf(
        '<h1 class="wp-heading-inline">%1s</h1>',
        esc_html__( 'Website Settings', 'yates' )
    ); ?>
    <p class="description"><?php esc_html_e( 'Customize the way WordPress is used.', 'yates' ); ?></p>
    <hr class="wp-header-end">
    <h2 class="nav-tab-wrapper">
		<?php echo implode( $page_tabs ); ?>
    </h2>
	<form method="post" action="options.php">
        <?php
        settings_fields( $do_fields );
        do_settings_sections( $do_section );
        ?>
        <p class="submit"><?php submit_button( $button, 'primary', '', false, [] ); ?></p>
    </form>
</div>