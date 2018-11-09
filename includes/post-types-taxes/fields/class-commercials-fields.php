<?php
/**
 * Commercials post type fields.
 *
 * @package WordPress
 * @subpackage yates
 * @since yates 1.0.0
 */

namespace Yates_Plugin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Commercials post type fields.
 */
class Suhrstedt_Commercials_Fields {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since	   1.0.0
	 * @param      string    $yates
	 * @param      string    $version
	 */
    public function __construct() {

        // Register fields.
    	$this->fields();

	}

	/**
	 * Register fields.
	 */
	public function fields() {

		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group( [
				'key'    => 'group_5948b7338a11c-2',
				'title'  => __( 'Commercials', 'yates' ),
				'fields' => [
					[
						'key'               => 'field_598273006221e',
						'label'             => __( 'Info', 'yates' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5948b7338f942',
						'label'             => __( 'Line One/Client', 'yates' ),
						'name'              => 'yates_commercial_client',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => 32,
					],
					[
						'key'               => 'field_5a34d1ad9a1e8',
						'label'             => __( 'Line Two/Title', 'yates' ),
						'name'              => 'yates_commercial_title',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => 32,
					],
					[
						'key'               => 'field_5948b7338f9b3',
						'label'             => __( 'Director', 'yates' ),
						'name'              => 'yates_commercial_director',
						'type'              => 'text',
						'instructions'      => __( 'Enter only the name of the director.', 'yates' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => 24,
					],
					[
						'key'               => 'field_5982730d6221f',
						'label'             => __( 'Video', 'yates' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5948b7338fbe4',
						'label'             => __( 'Vimeo URL', 'yates' ),
						'name'              => 'yates_commercial_vimeo_id',
						'type'              => 'url',
						'instructions'      => __( 'Enter the basic URL for the Vimeo video.', 'yates' ),
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => 'https://vimeo.com/123456789',
					],
					[
						'key'               => 'field_5982732d62220',
						'label'             => __( 'Images', 'yates' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5948b7338fd1e',
						'label'             => __( 'Screenshot', 'yates' ),
						'name'              => 'yates_commercial_thumbnail',
						'type'              => 'image',
						'instructions'      => __( 'If no image is uploaded then the screenshot from Vimeo will be used. This can be used to replace an inferior image provided by Vimeo. Minimum 960 X 540 pixels.', 'yates' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'preview_size'      => 'video-small',
						'library'           => 'all',
						'min_width'         => 960,
						'min_height'        => 540,
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					],
				],
				'location' => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'commercials',
						],
					],
				],
				'menu_order'            => 1,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => [
					0  => 'permalink',
					1  => 'the_content',
					2  => 'excerpt',
					3  => 'custom_fields',
					4  => 'discussion',
					5  => 'comments',
					6  => 'revisions',
					7  => 'slug',
					8  => 'author',
					9  => 'format',
					10 => 'page_attributes',
					11 => 'categories',
					12 => 'tags',
					13 => 'send-trackbacks',
					14 => 'featured_image'
				],
				'active'                => 1,
				'description'           => __( 'For the Commercials post type.', 'yates' ),
			] );

		endif;

	}

}

$yates_plugin_commercials_fields = new Suhrstedt_Commercials_Fields;