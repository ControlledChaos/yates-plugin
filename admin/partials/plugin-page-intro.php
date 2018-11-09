<?php
/**
 * About page introduction output.
 *
 * Since you are going to change this content it may have been a
 * waste of my time to put the text here into translation functions.
 * However, I like to do things properly and I want this to serve as
 * an example of how it should be done for your project.
 *
 * @package    Toby_Yates
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @todo       Change language here if anything relevant changes.1
 */

namespace TimS_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<!-- Tabbed content heading -->
<h2><?php _e( 'Website Overview', 'yates' ); ?></h2>

<?php echo sprintf( '<p>This website, including a custom WordPress plugin and a custom WordPress theme, were designed and built specifically for the Toby Yates portfolio by Greg Sweet of <a href="%1s" target="_blank">Controlled Chaos Design</a>.</p>', esc_url( 'http://ccdzine.com/' ) ); ?>
<p><?php _e( 'Please feel free to ask for help at any time.', 'yates' ); ?></p>

<!-- Section heading -->
<h3><?php _e( 'Introduction', 'yates' ); ?></h3>

<p><?php _e( 'The software that runs this website is called WordPress. It is considered a "content management system", which means that you can update and maintain your site without having to learn to code or employing the help of an expert to add, rearrange, or remove content.', 'yates' ); ?></p>
<p><?php _e( 'The WordPress interface before you is highly customized. It has not only been styled to match the public-facing pages, it has been pared down to supply you with only the tools that you need to maintain your portfolio. This will not only make it easier for you to find your way around it also makes the site nearly impossible to break. So do not be afraid to attempt any of the tasks in these tutorials.', 'yates' ); ?></p>

<!-- Section heading -->
<h3><?php _e( 'Software Updates', 'yates' ); ?></h3>

<p><?php _e( 'WordPress regularly releases updated versions, typically with current security measures. These versions will be updated automatically. More major releases, such as those which add features or change the way some features work, must be installed intentionally. However, as a Controlled Chaos client these updates will be managed for you as well.', 'yates' ); ?></p>
<p><?php _e( 'Your site is quite streamlined, not loaded with the software bloat, in the form of "plugins", installed by so many developers. There are only two WordPress plugins running your site: the one written to provide the funtionality specific to your site, and a commercial plugin called Advanced Custom Fields Pro to create the forms for content management and settings.', 'yates' ); ?></p>
<p><?php _e( 'There are also only two WordPress themes installed: the one written to provide the framework for displaying and styling your custom content, and the most recent default WordPress theme as a backup. Again, as a Controlled Chaos client these updates will be managed for you.', 'yates' ); ?></p>