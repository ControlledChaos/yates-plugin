<?php
/**
 * Content for the Remove Emoji Script help tab.
 *
 * @package    Toby_Yates
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Yates_Plugin\Admin\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<div>
	<h3><?php _e( 'Remove Emoji Script', 'yates' ); ?></h3>
	<p><?php _e( 'WordPress includes this script to allow emojis to work in older browsers. If your users work with modern browsers than this script is unnecessary.' ); ?></p>
</div>