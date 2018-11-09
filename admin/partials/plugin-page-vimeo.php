<?php
/**
 * Instructions page Vimeo output.
 *
 * @package    Toby_Yates
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @todo       Change language here if anything relevant changes.
 */

namespace Yates_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h2><?php _e( 'Vimeo Overview', 'yates' ); ?></h2>

<p><?php _e( 'It is possible to upload videos to your media library here in WordPress but Vimeo is used instead for its speed in delivering the videos to viewers, the high-quality video player, and the web-optimization process applied to the videos that you upload to your Vimeo account.', 'yates' ); ?></p>

<h3><?php _e( 'Vimeo Uploads', 'yates' ); ?></h3>

<p><?php _e( 'To upload a video simply log in to your Vimeo account and click on the "Upload" button at upper left. This will take you to a page with an upload interface. Before clicking or dragging the video, select "Hide this video from Vimeo" from the "Privacy" drop-down box; this will help protect you from copyright notices.', 'yates' ); ?></p>
<p><?php _e( 'Your account has a preset in place that will apply to new uploads automatically. This preset eliminates unwanted overlays in the player, giving it a clean and simple feel. The preset also adds an "outro" image with your name and profession when the video ends.', 'yates' ); ?></p>
<p><?php _e( 'Optional collections are in place to be used as categories, making it easier to locate videos in your account.', 'yates' ); ?></p>

<h3><?php _e( 'Adding a Video to a Project', 'yates' ); ?></h3>

<p><?php _e( 'When adding or editing a project you will see a field to enter a URL for a Vimeo video. Use the only the basic URL for the video, DO NOT use the embed code available from the video settings. The URL should be something like <code>https://vimeo.com/296133509</code>. To obtain the URL you can click on a video in your Vimeo list and copy the URL from your browser\'s address bar, or simply right-click on a video in your Vimeo list and copy the link location.', 'yates' ); ?></p>