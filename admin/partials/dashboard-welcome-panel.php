<?php

/**
 * Suhrstedt welcome panel.
 *
 * @link       http://ccdzine.com
 * @since      1.0.0
 *
 * @package    yates
 * @subpackage yates/admin
 */

namespace TimS_Plugin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
$gallery_page = get_page_by_path( 'gallery' );
$contact_page = get_page_by_path( 'contact' );
if ( 'gallery' == $gallery_page ) {
    $gallery_id = $gallery_page->ID;
} else {
    $gallery_id = '';
}
$contact_id   = $contact_page->ID; ?>

<div class="yates-dashboard-summary">
    <?php wp_dashboard_right_now(); ?>
</div>
<div class="yates-dashboard-post-managment">
    <header class="yates-dashboard-section-header">
        <h3><?php _e( 'Manage Your Projects', 'yates' ); ?></h3>
    </header>
    <ul class="yates-dashboard-post-type-actions">
        <li>
            <h4><?php _e( 'Film + TV', 'yates' ); ?></h4>
            <div class="yates-dashboard-post-type-actions-icon features-icon"><span class="dashicons dashicons-format-video"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=yates_features' ); ?>"><?php _e( 'Add New', 'yates' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=yates_features' ); ?>"><?php _e( 'View List', 'yates' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Commercials', 'yates' ); ?></h4>
            <div class="yates-dashboard-post-type-actions-icon commercials-icon"><span class="dashicons dashicons-megaphone"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=yates_commercials' ); ?>"><?php _e( 'Add New', 'yates' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=yates_commercials' ); ?>"><?php _e( 'View List', 'yates' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Music Videos', 'yates' ); ?></h4>
            <div class="yates-dashboard-post-type-actions-icon videos-icon"><span class="dashicons dashicons-format-audio"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=yates_videos' ); ?>"><?php _e( 'Add New', 'yates' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=yates_videos' ); ?>"><?php _e( 'View List', 'yates' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Presentations', 'yates' ); ?></h4>
            <div class="yates-dashboard-post-type-actions-icon presentations-icon"><span class="dashicons dashicons-desktop"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=yates_presentations' ); ?>"><?php _e( 'Add New', 'yates' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=yates_presentations' ); ?>"><?php _e( 'View List', 'yates' ); ?></a>
            </p>
        </li>
    </ul>
</div>
<div class="yates-dashboard-content-managment">
    <header class="yates-dashboard-section-header">
        <h3><?php _e( 'Manage Your Content', 'yates' ); ?></h3>
    </header>
    <ul class="yates-dashboard-content-actions">
        <li>
            <h4><?php _e( 'Front Page', 'yates' ); ?></h4>
            <div class="yates-dashboard-content-actions-icon front-icon"><span class="dashicons dashicons-admin-home"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post.php?post=' . get_option( 'page_on_front' ) . '&action=edit' ); ?>"><?php _e( 'Manage Slides', 'yates' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Media', 'yates' ); ?></h4>
            <div class="yates-dashboard-content-actions-icon front-icon"><span class="dashicons dashicons-format-image"></span></div>
            <p>
                <a href="<?php echo admin_url( 'media-new.php' ); ?>"><?php _e( 'Add New', 'yates' ); ?></a>
                <a href="<?php echo admin_url( 'upload.php' ); ?>"><?php _e( 'Manage', 'yates' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Snippets', 'yates' ); ?></h4>
            <div class="yates-dashboard-content-actions-icon snippets-icon"><span class="dashicons dashicons-art"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=yates_snippets' ); ?>"><?php _e( 'Add New', 'yates' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=yates_snippets' ); ?>"><?php _e( 'View List', 'yates' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Gallery', 'yates' ); ?></h4>
            <div class="yates-dashboard-content-actions-icon gallery-icon"><span class="dashicons dashicons-format-gallery"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post.php?post=' . $gallery_id . '&action=edit' ); ?>"><?php _e( 'Manage Images', 'yates' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Contact', 'yates' ); ?></h4>
            <div class="yates-dashboard-content-actions-icon contact-icon"><span class="dashicons dashicons-email"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post.php?post=' . $contact_id . '&action=edit' ); ?>"><?php _e( 'Manage Info', 'yates' ); ?></a>
            </p>
        </li>
    </ul>
</div>