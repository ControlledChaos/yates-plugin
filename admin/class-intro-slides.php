<?php
/**
 * Intro slides field groups.
 *
 * @package    Toby_Yates
 * @subpackage controlled-chaos\admin
 * @since      1.0.0
 */

namespace Yates_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Intro slides field groups.
 */
final class Slides_Fields_ACF {

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

			// Register slides fields.
    		$instance->slides_fields();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void Constructor method is empty.
	 */
	public function __construct() {}

	/**
	 * Register slides fields.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function slides_fields() {

		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group( [
				'key'    => 'group_5ba297ff1d629',
				'title'  => __( 'Intro Slides', 'yates' ),
				'fields' => [
					[
						'key'               => 'field_5ba595de30ec3',
						'label'             => 'Intro Slides',
						'name'              => 'amcd_intro_slides',
						'type'              => 'repeater',
						'instructions'      => __( '<p class="description">Slideshow appears to the right of the intro text. If only one image is set then it will appear as a ststic image, no animation.</p>
			<p class="description" style="margin-top: 1em;">Images must be at least 1080 pixels wide by 1080 pixels high, however they do not need to be square. The images will be automatically cropped square or the can be manually cropped in the Media Library by selecting the image then clicking on Post Thumbnail Editor.</p>', 'yates' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'collapsed'         => 'field_5ba40c3f67cce',
						'min'               => 0,
						'max'               => 0,
						'layout'            => 'row',
						'button_label'      => __( 'Add Slide', 'yates' ),
						'sub_fields'        => [
							[
								'key'               => 'field_5ba40c3f67cce',
								'label'             => __( 'Intro Image', 'yates' ),
								'name'              => 'amcd_intro_image',
								'type'              => 'image',
								'instructions'      => __( '', 'yates' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'return_format'     => 'array',
								'preview_size'      => 'thumb-large',
								'library'           => 'all',
								'min_width'         => 1080,
								'min_height'        => 1080,
								'min_size'          => '',
								'max_width'         => '',
								'max_height'        => '',
								'max_size'          => '',
								'mime_types'        => '',
							],
							[
								'key'               => 'field_5bc8cd2616fec',
								'label'             => __( 'Horizontal Alignment', 'yates' ),
								'name'              => 'amcd_intro_image_horz',
								'type'              => 'button_group',
								'instructions'      => __( 'The focal point of the slide may be slightly left or right of center.', 'yates' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper' => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'choices' => [
									'center' => __( 'Center', 'yates' ),
									'left'   => __( 'Left', 'yates' ),
									'right'  => __( 'Right', 'yates' ),
								],
								'allow_null'        => 0,
								'default_value'     => 'center',
								'layout'            => 'horizontal',
								'return_format'     => 'value',
							],
							[
								'key'               => 'field_5bc8cd9a16fed',
								'label'             => __( 'Vertical Alignment', 'yates' ),
								'name'              => 'amcd_intro_image_vert',
								'type'              => 'button_group',
								'instructions'      => __( 'The focal point of the slide may be slightly above or below center.', 'yates' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'choices'           => [
									'center' => __( 'Center', 'yates' ),
									'top'    => __( 'Top', 'yates' ),
									'bottom' => __( 'Bottom', 'yates' ),
								],
								'allow_null'        => 0,
								'default_value'     => 'center',
								'layout'            => 'horizontal',
								'return_format'     => 'value',
							],
						],
					],
				],
				'location' => [
					[
						[
							'param'    => 'page_type',
							'operator' => '==',
							'value'    => 'front_page',
						],
					],
				],
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => [
					0 => 'the_content',
					1 => 'discussion',
					2 => 'comments',
					3 => 'revisions',
					4 => 'slug',
					5 => 'author',
					6 => 'format',
					7 => 'categories',
					8 => 'tags',
					9 => 'send-trackbacks',
				],
				'active'                => 1,
				'description'           => __( 'For the front page of the website.', 'yates' ),
			] );

		endif;

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function yates_slides_fields_acf() {

	return Slides_Fields_ACF::instance();

}

// Run an instance of the class.
yates_slides_fields_acf();