<?php
/**
 * Site settings page fields.
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
 * Site settings page fields.
 */
class Suhrstedt_Settings_Fields {

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
				'key'    => 'group_5a0c7ff7764ca',
				'title'  => __( 'Settings Page', 'yates' ),
				'fields' => [
					[
						'key'               => 'field_5a0c800f57d56',
						'label'             => __( 'Admin Menu', 'yates' ),
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
						'key'               => 'field_5a0c802257d57',
						'label'             => __( 'Menus Link', 'yates' ),
						'name'              => 'yates_menus_link_position',
						'type'              => 'button_group',
						'instructions'      => __( 'Select the position of the Menus page link.', 'yates' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'top'     => __( 'Top Level', 'yates' ),
							'default' => __( 'Default', 'yates' ),
						],
						'allow_null'        => 0,
						'default_value'     => 'top',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a0c808757d58',
						'label'             => __( 'Widgets Link', 'yates' ),
						'name'              => 'yates_widgets_link_position',
						'type'              => 'button_group',
						'instructions'      => __( 'Select the position of the Widgets page link.', 'yates' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'top'     => __( 'Top Level', 'yates' ),
							'default' => __( 'Default', 'yates' ),
						],
						'allow_null'        => 0,
						'default_value'     => 'top',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a0c80ab57d59',
						'label'             => __( 'Settings Page', 'yates' ),
						'name'              => 'yates_settings_link_position',
						'type'              => 'button_group',
						'instructions'      => __( 'Select the position of this Settings page link, and whether to show or hide the other settings links.', 'yates' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'default' => __( 'Default/Show', 'yates' ),
							'top'     => __( 'Top Level/Hide', 'yates' ),
						],
						'allow_null'        => 0,
						'default_value'     => 'default',
						'layout'            => 'horizontal',
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a0c8d8a32b95',
						'label'             => __( 'Hide Links', 'yates' ),
						'name'              => 'yates_admin_hide_links',
						'type'              => 'checkbox',
						'instructions'      => __( 'Select which menu items to hide.', 'yates' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices'           => [
							'themes'        => __( 'Appearance', 'yates' ),
							'plugins'       => __( 'Plugins', 'yates' ),
							'users'         => __( 'Users', 'yates' ),
							'tools'         => __( 'Tools', 'yates' ),
							'fields'        => __( 'Custom Fields', 'yates' ),
						],
						'allow_custom'      => 0,
						'save_custom'       => 0,
						'default_value'     => [],
						'layout'            => 'horizontal',
						'toggle'            => 1,
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a0c8d7232b94',
						'label'             => __( 'Dashboard', 'yates' ),
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
						'key'               => 'field_5a0c8f393edd6',
						'label'             => __( 'Hide Widgets', 'yates' ),
						'name'              => 'yates_dashboard_hide_widgets',
						'type'              => 'checkbox',
						'instructions'      => __( 'Select the Dashboard widgets to hide.', 'yates' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'choices' => [
							'welcome'       => __( 'Welcome', 'yates' ),
							'news'          => __( 'WordPress News', 'yates' ),
							'quick'         => __( 'Quick Press', 'yates' ),
							'at_glance'     => __( 'At a Glance', 'yates' ),
							'activity'      => __( 'Activity', 'yates' ),
						],
						'allow_custom'      => 0,
						'save_custom'       => 0,
						'default_value'     => [
						],
						'layout'            => 'horizontal',
						'toggle'            => 1,
						'return_format'     => 'value',
					],
					[
						'key'               => 'field_5a0cbb3873e55',
						'label'             => __( 'Admin Pages', 'yates' ),
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
						'key'               => 'field_5a0cbb5e73e56',
						'label'             => __( 'Admin Footer Credit', 'yates' ),
						'name'              => 'yates_admin_footer_credit',
						'type'              => 'text',
						'instructions'      => __( 'The "developed by" credit.', 'yates' ),
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
						'key'               => 'field_5a0cbba573e57',
						'label'             => __( 'Admin Footer Link', 'yates' ),
						'name'              => 'yates_admin_footer_link',
						'type'              => 'url',
						'instructions'      => __( 'Link to the website devoloper.', 'yates' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
					],
					[
						'key'               => 'field_5a1989a036067',
						'label'             => __( 'Meta/SEO', 'yates' ),
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
						'key'               => 'field_5a237090744c4',
						'label'             => __( 'Meta Tags', 'yates' ),
						'name'              => 'yates_disable_meta_tags',
						'type'              => 'true_false',
						'instructions'      => __( 'Disable if you plan on using Yoast SEO or a similarly awful plugin.', 'yates' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'Check to disable', 'yates' ),
						'default_value'     => 0,
						'ui' => 0,
						'ui_on_text'        => __( 'Disabled', 'yates' ),
						'ui_off_text'       => __( 'Enabled', 'yates' ),
					],
					[
						'key'               => 'field_5a198d601b523',
						'label'             => __( 'Blog Pages Title', 'yates' ),
						'name'              => 'yates_meta_blog_title',
						'type'              => 'text',
						'instructions'      => __( 'Will use the site title if left empty.', 'yates' ),
						'required'          => 0,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a237090744c4',
									'operator' => '!=',
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
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5a198bd736068',
						'label'             => __( 'Blog Pages Description', 'yates' ),
						'name'              => 'yates_meta_blog_description',
						'type'              => 'textarea',
						'instructions'      => __( 'Will use the site tagline if left empty and if a tagline is set.', 'yates' ),
						'required'          => 0,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a237090744c4',
									'operator' => '!=',
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
						'maxlength'         => '',
						'rows'              => 4,
						'new_lines'         => '',
					],
					[
						'key'               => 'field_5a198c1836069',
						'label'             => __( 'Blog Pages Image', 'yates' ),
						'name'              => 'yates_meta_blog_image',
						'type'              => 'image',
						'instructions'      => __( 'A minimum is 1230px by 600px is recommended for retina display devices.', 'yates' ),
						'required'          => 0,
						'conditional_logic' => [
							[
								[
									'field'    => 'field_5a237090744c4',
									'operator' => '!=',
									'value'    => '1',
								],
							],
						],
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
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
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => 'site-settings',
						],
					],
				],
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => 1,
				'description'           => __( 'For the Site Settings ACF admin page.', 'yates' ),
			] );
			
		endif;

	}

}

$yates_plugin_settings_fields = new Suhrstedt_Settings_Fields;
