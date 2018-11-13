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
			'name'                  => __( 'Films', 'yates' ),
			'singular_name'         => __( 'Film Project', 'yates' ),
			'menu_name'             => __( 'Films', 'yates' ),
			'all_items'             => __( 'All Films', 'yates' ),
			'add_new'               => __( 'Add New', 'yates' ),
			'add_new_item'          => __( 'Add New Film Project', 'yates' ),
			'edit_item'             => __( 'Edit Project', 'yates' ),
			'new_item'              => __( 'New Film Project', 'yates' ),
			'view_item'             => __( 'View Project', 'yates' ),
			'view_items'            => __( 'View Films', 'yates' ),
			'search_items'          => __( 'Search Films', 'yates' ),
			'not_found'             => __( 'No Films Found', 'yates' ),
			'not_found_in_trash'    => __( 'No Films Found in Trash', 'yates' ),
			'featured_image'        => __( 'Featured image for this project', 'yates' ),
			'set_featured_image'    => __( 'Set featured image for this project', 'yates' ),
			'remove_featured_image' => __( 'Remove featured image for this project', 'yates' ),
			'use_featured_image'    => __( 'Use as featured image for this project', 'yates' ),
			'archives'              => __( 'Film archives', 'yates' ),
			'insert_into_item'      => __( 'Insert into Project', 'yates' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Project', 'yates' ),
			'filter_items_list'     => __( 'Filter Films', 'yates' ),
			'items_list_navigation' => __( 'Films list navigation', 'yates' ),
			'items_list'            => __( 'Films list', 'yates' ),
			'attributes'            => __( 'Film Attributes', 'yates' ),
			'parent_item_colon'     => __( 'Parent Project', 'yates' ),
		];

		$args = [
			'label'               => __( 'Films', 'yates' ),
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
				'slug'       => 'films',
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
            'films',
            $args
        );

		/**
		 * Post Type: Television.
		 */

		$labels = [
			'name'                  => __( 'Television', 'yates' ),
			'singular_name'         => __( 'TV Show', 'yates' ),
			'menu_name'             => __( 'Television', 'yates' ),
			'all_items'             => __( 'All TV Shows', 'yates' ),
			'add_new'               => __( 'Add New', 'yates' ),
			'add_new_item'          => __( 'Add New TV Show', 'yates' ),
			'edit_item'             => __( 'Edit TV Show', 'yates' ),
			'new_item'              => __( 'New TV Show', 'yates' ),
			'view_item'             => __( 'View TV Show', 'yates' ),
			'view_items'            => __( 'View TV Shows', 'yates' ),
			'search_items'          => __( 'Search TV Shows', 'yates' ),
			'not_found'             => __( 'No Shows Found', 'yates' ),
			'not_found_in_trash'    => __( 'No Shows Found in Trash', 'yates' ),
			'featured_image'        => __( 'Featured image for this show', 'yates' ),
			'set_featured_image'    => __( 'Set featured image for this show', 'yates' ),
			'remove_featured_image' => __( 'Remove featured image for this show', 'yates' ),
			'use_featured_image'    => __( 'Use as featured image for this show', 'yates' ),
			'archives'              => __( 'Television archives', 'yates' ),
			'insert_into_item'      => __( 'Insert into Show', 'yates' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Show', 'yates' ),
			'filter_items_list'     => __( 'Filter Shows', 'yates' ),
			'items_list_navigation' => __( 'Television list navigation', 'yates' ),
			'items_list'            => __( 'Television list', 'yates' ),
			'attributes'            => __( 'Show Attributes', 'yates' ),
			'parent_item_colon'     => __( 'Parent Show', 'yates' ),
		];

		$args = [
			'label'               => __( 'Television', 'yates' ),
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
				'slug'       => 'television',
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
            'television',
            $args
        );

    }

}

// Run the class.
new Post_Types_Register;