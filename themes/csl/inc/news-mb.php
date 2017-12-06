<?php

add_action( 'cmb2_init', 'event_register_article_info' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function event_register_article_info() {
	// Start with an underscore to hide fields from custom fields list.
	$prefix = '_article_';
	/**
	 * Sample metabox to demonstrate the different conditions you can set.
	 */
	$cmb = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => 'Article Info',
		'object_types'  => array( 'news' ), // Post type.
  ) );
  $cmb->add_field( array(
    'name' => __( 'Article URL', 'cmb2' ),
    'id'   => $prefix . 'url',
    'type' => 'text_url',
    // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
  ) );
  $cmb->add_field( array(
    'name'    => 'Article Image',
    'desc'    => 'Upload an image or enter an URL.',
    'id'      => $prefix . 'image',
    'type'    => 'file',
    // Optional:
    'options' => array(
      'url' => true, // Hide the text input for the url
    ),
    'text'    => array(
      'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
    ),
    // query_args are passed to wp.media's library query.
    'query_args' => array(
      'type' => 'image', // Make library only display images.
    ),
    'preview_size' => 'large' // Image size to use when previewing in the admin.
  ) );
}