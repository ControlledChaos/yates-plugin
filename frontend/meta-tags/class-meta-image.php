<?php
/**
 * Image meta tag.
 *
 * @package    Toby_Yates
 * @subpackage Frontend\Meta_Tags
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Yates_Plugin\Frontend\Meta_Tags;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Image meta tag.
 *
 * @since  1.0.0
 * @access public
 */
class Meta_Image {

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
	 * Constructor magic method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		// Add the image to meta tag.
		add_action( 'yates_meta_image_tag', [ $this, 'image' ] );

	}

	/**
	 * Get the image to use in meta tag.
	 *
	 * Looks first for featured images in posts/pages. If no
	 * featured image is found then a default image is used.
	 *
	 * If the Advanced Custom Fields PRO plugin is active, or the
	 * free ACF plus the Options Page addon are active, then for
	 * blog pages look for an image uploaded to the Meta/SEO tab
	 * on the Site Setting page.
	 *
	 * @since  1.0.0
	 * @access public
	 * @global object post The post object for the current post.
	 * @return string Returns the src path to the image.
	 */
	public function image() {

		// Get the post object.
		global $post;

		// If ACF is active.
		if ( class_exists( 'acf_pro' ) || ( class_exists( 'acf' ) && class_exists( 'acf_options_page' ) ) ) {

			// Get the ACF image fields.
			$blog_image       = get_field( 'yates_meta_blog_image', 'option' );
			$default_image    = get_field( 'yates_meta_default_image', 'option' );
			$feature_image    = get_field( 'yates_project_image' );
			$feature_vimeo    = get_field( 'yates_project_vimeo_id' );
			$commercial_image = get_field( 'yates_commercial_thumbnail' );
			$commercial_vimeo = get_field( 'yates_commercial_vimeo_id' );

			/**
			 * Conditionally get images.
			 *
			 * @throws String_Offset_Error The ACF images are registered with a return type of `array` and they work
			 * as expected when the settings field group run from the ACF plugin but when
			 * the field group runs from this plugin then it trows a string offset error.
			 * The fix was to simply add the `is_array` check, so you may want to leave it.
			 */

			// If in the blog index and if the Blog Image field is not empty.
			if ( is_home() && ! empty( $blog_image ) && is_array( $blog_image ) ) {
				$size = 'meta-image';
				$src  = $blog_image['sizes'][$size];

			// If in an archive and if the Default Image field is not empty.
			} elseif ( is_archive() && ! empty( $default_image ) && is_array( $default_image ) ) {
				$size = 'meta-image';
				$src  = $default_image['sizes'][$size];

			// If on a single Feature page.
			} elseif ( is_singular( 'features' ) && ! empty( $feature_image ) ) {
				$size = 'meta-image';
				$src  = $feature_image['sizes'][$size];

			// If on a single Commercial page and a thumbnail image has been selected.
			} elseif ( is_singular( 'commercials' ) && ! empty( $commercial_image ) ) {
				$size = 'meta-image';
				$src  = $commercial_image['sizes'][$size];

			// If on singular pages with a featured image, but not 404.
			} elseif ( is_singular() && has_post_thumbnail() && ! is_404() ) {
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'meta-image', [ 1200, 630 ], true, '' );
				$src   = $image[0];

			/**
			 * If on singular pages without a featured image and
			 * the Default Image field is not empty, but not 404.
			 */
			} elseif ( is_singular() && ! has_post_thumbnail() && ! empty( $default_image ) && is_array( $default_image ) && ! is_404() ) {
				$size  = 'meta-image';
				$src   = $default_image['sizes'][$size];

			// Otherwise use the image path defined in the core plugin file.
			} else {
				$src   = YATES_DEFAULT_META_IMAGE;
			}

			// Echo the image path in the meta tag.
			echo $src;

		// If ACF is not active.
		} else {

			/**
			 * Conditionally get images.
			 *
			 * @throws Non_Object_Error This throws a non-object error on the 404 page so it's excluded. However,
			 * the 404 page will use the default image.
			 */
			if ( ! is_404() ) {
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'meta-image', [ 1200, 630 ], true, '' );
			}

			// Use the featured image on singular pages if there is one.
			if ( is_singular() && has_post_thumbnail() ) {
				$src = $image[0];

			// Otherwise use the image path defined in the core plugin file.
			} else {
				$src = YATES_DEFAULT_META_IMAGE;
			}

			// Echo the image path in the meta tag.
			echo $src;

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
function yates_meta_image() {

	return Meta_Image::instance();

}

// Run an instance of the class.
yates_meta_image();