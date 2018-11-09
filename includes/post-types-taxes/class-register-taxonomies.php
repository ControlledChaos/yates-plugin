<?php
/**
 * Register taxonomies.
 *
 * @package    Toby_Yates
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_taxonomy
 */

namespace TimS_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register taxonomies.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxonomies_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom taxonomies.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom taxonomies.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        $labels = [
            'name'                       => __( 'Media Types', 'yates' ),
            'singular_name'              => __( 'Media Type', 'yates' ),
            'menu_name'                  => __( 'Media Types', 'yates' ),
            'all_items'                  => __( 'All Media Types', 'yates' ),
            'edit_item'                  => __( 'Edit Media Type', 'yates' ),
            'view_item'                  => __( 'View Media Type', 'yates' ),
            'update_item'                => __( 'Update Media Type', 'yates' ),
            'add_new_item'               => __( 'Add New Media Type', 'yates' ),
            'new_item_name'              => __( 'New Media Type', 'yates' ),
            'parent_item'                => __( 'Parent Media Type', 'yates' ),
            'parent_item_colon'          => __( 'Parent Media Type', 'yates' ),
            'popular_items'              => __( 'Popular Media Types', 'yates' ),
            'separate_items_with_commas' => __( 'Separate Media Types with commas', 'yates' ),
            'add_or_remove_items'        => __( 'Add or Remove Media Types', 'yates' ),
            'choose_from_most_used'      => __( 'Choose from the most used Media Types', 'yates' ),
            'not_found'                  => __( 'No Media Types Found', 'yates' ),
            'no_terms'                   => __( 'No Media Types', 'yates' ),
            'items_list_navigation'      => __( 'Media Types List Navigation', 'yates' ),
            'items_list'                 => __( 'Media Types List', 'yates' )
        ];

        $args = [
            'label'              => __( 'Media Types', 'yates' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Media Types',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'taxonomies',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'taxonomies',
            'show_in_quick_edit' => true
        ];

        register_taxonomy(
            'yates_taxonomy',
            [
                'attachment'
            ],
            $args
        );

    }

}

// Run the class.
new Taxonomies_Register;