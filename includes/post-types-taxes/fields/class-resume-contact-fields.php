<?php
/**
 * Resume-contact combo page fields.
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
 * Resume-contact combo page fields.
 */
class Suhrstedt_Resume_Page_Fields {

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
				'key'    => 'group_56192d1480d82',
				'title'  => __( 'Resume and Contact', 'yates' ),
				'fields' => [
					[
						'key'               => 'field_567dc4ac72295',
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
						'key'               => 'field_5619400edae6b',
						'label'             => __( 'General Contact Info', 'yates' ),
						'name'              => 'yates_contact_info',
						'type'              => 'wysiwyg',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'tabs'              => 'all',
						'toolbar'           => 'full',
						'media_upload'      => 1,
						'delay'             => 0,
					],
					[
						'key'               => 'field_567dc4bd72296',
						'label'             => __( 'Representatives', 'yates' ),
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
						'key'               => 'field_561935f5d9a38',
						'label'             => __( 'Departments', 'yates' ),
						'name'              => 'yates_agent_departments',
						'type'              => 'repeater',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'collapsed'         => 'field_56193bf7b5b48',
						'min'               => 0,
						'max'               => 0,
						'layout'            => 'block',
						'button_label'      => __( 'Add Department', 'yates' ),
						'sub_fields'        => [
							[
								'key'               => 'field_56193bf7b5b48',
								'label'             => __( 'Department Name', 'yates' ),
								'name'              => 'yates_department_name',
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
								'maxlength'         => '',
							],
							[
								'key'               => 'field_5619360cd9a39',
								'label'             => __( 'Agents', 'yates' ),
								'name'              => 'yates_agents',
								'type'              => 'repeater',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'collapsed'         => 'field_56193aafd9a3c',
								'min'               => 0,
								'max'               => 0,
								'layout'            => 'block',
								'button_label'      => __( 'Add Agent', 'yates' ),
								'sub_fields'        => [
									[
										'key'               => 'field_56193aafd9a3c',
										'label'             => __( 'Name', 'yates' ),
										'name'              => 'yates_agent_name',
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
										'maxlength'         => '',
									],
									[
										'key'               => 'field_5a494bcfbe37d',
										'label'             => __( 'Agency', 'yates' ),
										'name'              => 'yates_agent_agency',
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
										'maxlength'         => '',
									],
									[
										'key'               => 'field_56193abbd9a3d',
										'label'             => __( 'Phone', 'yates' ),
										'name'              => 'yates_agent_phone',
										'type'              => 'text',
										'instructions'      => __( 'Use dashes only to make the number a link on mobile devices.', 'yates' ),
										'required'          => 1,
										'conditional_logic' => 0,
										'wrapper'           => [
											'width' => '',
											'class' => '',
											'id'    => '',
										],
										'default_value'     => '',
										'placeholder'       => __( 'Format: 800-555-1212', 'yates' ),
										'prepend'           => '',
										'append'            => '',
										'maxlength'         => '',
									],
									[
										'key'               => 'field_56193b0ed9a3e',
										'label'             => __( 'Email', 'yates' ),
										'name'              => 'yates_agent_email',
										'type'              => 'email',
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
									],
								],
							],
						],
					],
					[
						'key'               => 'field_5a48104736100',
						'label'             => __( 'Resume', 'yates' ),
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
						'key'               => 'field_5a4a49ddb413a',
						'label'             => __( 'Resume Notice', 'yates' ),
						'name'              => 'yates_resume_notice',
						'type'              => 'wysiwyg',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'tabs'              => 'all',
						'toolbar'           => 'full',
						'media_upload'      => 1,
						'delay'             => 0,
					],
					[
						'key'               => 'field_5a4f900fca774',
						'label'             => __( 'Resume', 'yates' ),
						'name'              => 'yates_resume_type',
						'type'              => 'button_group',
						'instructions'      => __( 'Select a method to provide a resume.', 'yates' ),
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'file' => __( 'Upload File', 'yates' ),
							'url'  => __( 'Agency Link', 'yates' ),
						],
						'allow_null'        => 0,
						'default_value'     => '',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a480ffa360ff',
						'label'             => __( 'Resume Link', 'yates' ),
						'name'              => 'yates_resume_link',
						'type'              => 'url',
						'instructions'      => __( 'Paste the link to your resume.', 'yates' ),
						'required'          => 1,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a4f900fca774',
									'operator' => '==',
									'value'    => 'url',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
					],
					[
						'key'               => 'field_5a4f90d9ca775',
						'label'             => __( 'Resume File', 'yates' ),
						'name'              => 'yates_resume_file',
						'type'              => 'file',
						'instructions'      => __( 'File will be uploaded to the Media Library', 'yates' ),
						'required'          => 1,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a4f900fca774',
									'operator' => '==',
									'value'    => 'file',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'library'           => 'all',
						'min_size'          => '',
						'max_size'          => '',
						'mime_types'        => '',
					],
					[
						'key'               => 'field_5a4a84318d69f',
						'label'             => __( 'Sizzle Reel', 'yates' ),
						'name'              => 'yates_sizzle_reel',
						'type'              => 'true_false',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Add a Sizzle Reel', 'yates' ),
						'default_value'     => 0,
						'ui'                => 0,
						'ui_on_text'        => '',
						'ui_off_text'       => '',
					],
					[
						'key'               => 'field_5a4810af3c5e1',
						'label'             => __( 'Sizzle Reel URL', 'yates' ),
						'name'              => 'yates_sizzle_reel_url',
						'type'              => 'url',
						'instructions'      => __( 'Paste the URL of the video.', 'yates' ),
						'required'          => 1,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a4a84318d69f',
									'operator' => '==',
									'value'    => '1',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
					],
					[
						'key'               => 'field_5a4a83d68d69e',
						'label'             => __( 'Reel Link Text', 'yates' ),
						'name'              => 'yates_reel_link_text',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a4a84318d69f',
									'operator' => '==',
									'value'    => '1',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => __( 'View My Sizzle Reel', 'yates' ),
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5a4810873c5e0',
						'label'             => __( 'Bio', 'yates' ),
						'name'              => 'yates_resume_bio',
						'type'              => 'wysiwyg',
						'instructions'      => __( '', 'yates' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'tabs'              => 'all',
						'toolbar'           => 'full',
						'media_upload'      => 1,
						'delay'             => 0,
					],
					[
						'key'               => 'field_5a492eed3cc35',
						'label'             => __( 'Social', 'yates' ),
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
						'key'               => 'field_5a4a8b087d2b6',
						'label'             => __( 'Social Notice', 'yates' ),
						'name'              => 'yates_social_notice',
						'type'              => 'wysiwyg',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'tabs'              => 'all',
						'toolbar'           => 'full',
						'media_upload'      => 1,
						'delay'             => 0,
					],
					[
						'key'               => 'field_5a492efe3cc36',
						'label'             => __( 'Social Links', 'yates' ),
						'name'              => 'yates_social_links',
						'type'              => 'repeater',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'collapsed'         => 'field_5a492fa73cc39',
						'min'               => 0,
						'max'               => 0,
						'layout'            => 'row',
						'button_label'      => __( 'Add Link', 'yates' ),
						'sub_fields'        => [
							[
								'key'               => 'field_5a492fa73cc39',
								'label'             => __( 'Link Text', 'yates' ),
								'name'              => 'yates_social_links_text',
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
								'placeholder'       => __( 'Follow Annie on...', 'yates' ),
								'prepend'           => '',
								'append'            => '',
								'maxlength'         => '',
							],
							[
								'key'               => 'field_5a492f6d3cc38',
								'label'             => __( 'URL', 'yates' ),
								'name'              => 'yates_social_links_url',
								'type'              => 'url',
								'instructions'      => __( 'Link to the social page.', 'yates' ),
								'required'          => 1,
								'conditional_logic' => 0,
								'wrapper'           => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'default_value'     => '',
								'placeholder'       => '',
							],
						],
					],
				],
				'location' => [
					[
						[
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'page-templates/page-info.php',
						],
					],
				],
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => [
					0  => 'the_content',
					1  => 'custom_fields',
					2  => 'discussion',
					3  => 'comments',
					4  => 'revisions',
					5  => 'slug',
					6  => 'author',
					7  => 'format',
					8  => 'categories',
					9  => 'tags',
					10 => 'send-trackbacks',
				],
				'active'      => 1,
				'description' => __( 'For the Resume & Contact page, page-info page template.', 'yates' ),
			 ] );

		endif;

	}

}

$yates_plugin_resume_page_fields = new Suhrstedt_Resume_Page_Fields;