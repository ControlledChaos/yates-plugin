<?php
/**
 * Callbacks for the Users tab on the Site Settings page.
 *
 * @package    Toby_Yates
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Yates_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Callbacks for the Users tab.
 *
 * @since  1.0.0
 * @access public
 */
class Users_Callbacks {

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
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {}

	/**
	 * Local avatars only (no Gravatars).
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function block_gravatar( $args ) {

		$option = get_option( 'yates_block_gravatar' );

		$html = '<p><input type="checkbox" id="yates_block_gravatar" name="yates_block_gravatar" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="yates_block_gravatar"> ' . $args[0] . '</label></p>';

		echo $html;

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function yates_users_callbacks() {

	return Users_Callbacks::instance();

}

// Run an instance of the class.
yates_users_callbacks();