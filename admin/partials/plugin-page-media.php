<?php
/**
 * Instructions page media options output.
 *
 * @package    Toby_Yates
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @todo       Change language here if anything relevant changes.
 */

namespace TimS_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h2><?php _e( 'Media Library Overview', 'yates' ); ?></h2>

<p><?php _e( 'The WordPress media library is precisely as it sounds: a repository for various types of media that are used on the website. It accepts most images types, except SVG, for security reasons, plus all common audio and video formats. Additionally it can be used to upload documents, such as traditional office formats and PDFs.', 'yates' ); ?></p>
<p><?php _e( 'That being said, the primary functionality of your site is relatively simple and the library is only used for a few cases. Vimeo is used to host and deliver the videos on the site, so there is no need to upload video files to the library, and the placeholder screenshots are also provided by Vimeo. Sometimes the placeholders delivered by Vimeo don\'t play nice with the aspect ratio of their corresponding videos. This is particularly an issue with older videos or those not in an HD (16:9) format. So there is a backup system in place whereby you can upload a high-quality image to the media library and it will be cropped to the correct aspect ratio, and override the Vimeo image.', 'yates' ); ?></p>

<h3><?php _e( 'Image Sizes & Quality', 'yates' ); ?></h3>

<p><?php _e( 'When you upload an image, whether directly to the media library or through the Features and Commercials interface, WordPress will automatically crop them to default dimensions. Your website also has custom image sizes for the 16:9 HD video aspect ratio, for the screenshot images used as placeholders for the videos.', 'yates' ); ?></p>
<p><?php _e( 'There no restrictions on the size of image that you can upload to the media library but there are minimum size requirements for the video placeholder images. Naturally, this does not apply to placeholder images uploaded through Vimeo, but please read the tutorial under the Vimeo tab.', 'yates' ); ?></p>
<p><?php _e( 'The minimum image size requirements for video placeholder images 960 pixels wide by 540 pixels high. This size is smaller than what is ideal to allow flexibility in finding images that you don\'t have to resize before uploading. In practice, try to use a minimum of 1280px X 720px for images that look good on retina screens.', 'yates' ); ?></p>
<p><?php _e( 'Here is an example for clarity: Let\'s say you have an image that happens to be the ideal 1280px wide but it is 800px high, taller than the HD video aspect ratio. WordPress will crop that image to 720px high, as requiered for the video placeholders.', 'yates' ); ?></p>

<h3><?php _e( 'Media Management', 'yates' ); ?></h3>

<p><?php _e( 'Your website is equipped with various tools for managing your media library. It is highly recommended that you take full advantage of them various reasons. Some of the reasons are technical, regarding what the search engines read, but the primary reason to abide by the following is to make it easier for you to find images when they are needed.', 'yates' ); ?></p>
<p><?php _e( 'The first thing to keep in mind for a well-curated media library is to give your media files a descriptive name prior to uploading them; the fields can be changed after upload but the file name will remain the same. So avoid uploading files with the random name given by a camera or a screenshot generator, or a name that refers to its dimensions or another website. So, for instance, if you have a screenshot of a Nissan commercial with a file name of \'screen-shot-2018-11-07\' then simply rename it something like \'nissan-trucks-01. And if you have multiple images for a film project then sequentially number them, such as \'office-space-01\', \'office-space-02\', etc.', 'yates' ); ?></p>

<h4><?php _e( 'Media Uploads', 'yates' ); ?></h4>

<p><?php _e( 'Images can be uploaded directly to projects via their edit screens (see the tutorials here under their respective tabs) but they can be uploaded prior to creating or editing a project. In fact, it is a good practice to upload images first to the media library then add information in the fields for each file prior to attaching them to a project.', 'yates' ); ?></p>
<p><?php _e( 'To add media directly to the library, click on Media > Add New in the side menu. Or from the top toolbar click on New > Media.', 'yates' ); ?></p>
<p><?php _e( 'To add images directly to a project, you will see an interface to add or remove an image in several places in the form, depending on the project type. When the button is clicked to add an image you will have the option to either upload a new image or choose an existing image from the media library.', 'yates' ); ?></p>

<h4><?php _e( 'Media Types', 'yates' ); ?></h4>

<p><?php _e( 'A category system is provided for filtering images and other media by type or by its use. Find these in the side menu under Media > Media Types. When editing media details you will see a field to add its category.', 'yates' ); ?></p>

<h4><?php _e( 'Media Meta Data', 'yates' ); ?></h4>

<p><?php _e( 'There are quite a few optional form fields provided for adding information about media files.', 'yates' ); ?></p>
<p><?php _e( 'To edit these, go to the media library and click on an item. If the library is in grid view then you will see the fields in the sidebar of a popup window. If the library is in list view then you will be taken to another page where you will see the fields below the file display. There is no save button, the data entered into the fields are saved in real time.', 'yates' ); ?></p>