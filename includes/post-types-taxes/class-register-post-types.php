<?php
/**
 * Register post types.
 *
 * @package    Toby_Yates
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_post_type
 */

namespace Yates_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom post types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom post types.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
		 * Post Type: Film+TV.
		 */

		$labels = [
			'name'                  => __( 'Features', 'yates' ),
			'singular_name'         => __( 'Feature Project', 'yates' ),
			'menu_name'             => __( 'Features', 'yates' ),
			'all_items'             => __( 'All Features', 'yates' ),
			'add_new'               => __( 'Add New', 'yates' ),
			'add_new_item'          => __( 'Add New Feature Project', 'yates' ),
			'edit_item'             => __( 'Edit Project', 'yates' ),
			'new_item'              => __( 'New Feature Project', 'yates' ),
			'view_item'             => __( 'View Project', 'yates' ),
			'view_items'            => __( 'View Features', 'yates' ),
			'search_items'          => __( 'Search Features', 'yates' ),
			'not_found'             => __( 'No Features Found', 'yates' ),
			'not_found_in_trash'    => __( 'No Features Found in Trash', 'yates' ),
			'featured_image'        => __( 'Featured image for this project', 'yates' ),
			'set_featured_image'    => __( 'Set featured image for this project', 'yates' ),
			'remove_featured_image' => __( 'Remove featured image for this project', 'yates' ),
			'use_featured_image'    => __( 'Use as featured image for this project', 'yates' ),
			'archives'              => __( 'Feature archives', 'yates' ),
			'insert_into_item'      => __( 'Insert into Project', 'yates' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Project', 'yates' ),
			'filter_items_list'     => __( 'Filter Features', 'yates' ),
			'items_list_navigation' => __( 'Features list navigation', 'yates' ),
			'items_list'            => __( 'Features list', 'yates' ),
			'attributes'            => __( 'Feature Attributes', 'yates' ),
			'parent_item_colon'     => __( 'Parent Project', 'yates' ),
		];

		$args = [
			'label'               => __( 'Features', 'yates' ),
			'labels'              => $labels,
			'description'         => __( '', 'yates' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => '',
			'has_archive'         => true,
			'show_in_menu'        => true,
			'exclude_from_search' => false,
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => [
				'slug'       => 'features',
				'with_front' => true
			],
			'query_var'           => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-format-video',
			'supports'            => [
				'title',
				'page-attributes',
				'thumbnail'
			]
        ];

		register_post_type(
            'features',
            $args
        );

		/**
		 * Post Type: Commercials.
		 */

		$labels = [
			'name'                  => __( 'Commercials', 'yates' ),
			'singular_name'         => __( 'Commercial', 'yates' ),
			'menu_name'             => __( 'Commercials', 'yates' ),
			'all_items'             => __( 'All Commercials', 'yates' ),
			'add_new'               => __( 'Add New', 'yates' ),
			'add_new_item'          => __( 'Add New Commercial', 'yates' ),
			'edit_item'             => __( 'Edit Commercial', 'yates' ),
			'new_item'              => __( 'New Commercial', 'yates' ),
			'view_item'             => __( 'View Commercial', 'yates' ),
			'view_items'            => __( 'View Commercials', 'yates' ),
			'search_items'          => __( 'Search Commercials', 'yates' ),
			'not_found'             => __( 'No Commercials Found', 'yates' ),
			'not_found_in_trash'    => __( 'No Commercials Found in Trash', 'yates' ),
			'featured_image'        => __( 'Featured image for this commercial', 'yates' ),
			'set_featured_image'    => __( 'Set featured image for this commercial', 'yates' ),
			'remove_featured_image' => __( 'Remove featured image for this commercial', 'yates' ),
			'use_featured_image'    => __( 'Use as featured image for this commercial', 'yates' ),
			'archives'              => __( 'Commercial archives', 'yates' ),
			'insert_into_item'      => __( 'Insert into Commercial', 'yates' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Commercial', 'yates' ),
			'filter_items_list'     => __( 'Filter Commercials', 'yates' ),
			'items_list_navigation' => __( 'Commercials list navigation', 'yates' ),
			'items_list'            => __( 'Commercials list', 'yates' ),
			'attributes'            => __( 'Commercial Attributes', 'yates' ),
			'parent_item_colon'     => __( 'Parent Commercial', 'yates' ),
		];

		$args = [
			'label'               => __( 'Commercials', 'yates' ),
			'labels'              => $labels,
			'description'         => __( '', 'yates' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => '',
			'has_archive'         => true,
			'show_in_menu'        => true,
			'exclude_from_search' => false,
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => [
				'slug'       => 'commercials',
				'with_front' => true
			],
			'query_var'           => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-megaphone',
			'supports'            => [
				'title',
				'page-attributes',
				'thumbnail'
			]
		];
		register_post_type(
            'commercials',
            $args
        );

    }

}

// Run the class.
new Post_Types_Register;