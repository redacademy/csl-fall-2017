<?php

add_action( 'cmb2_init', 'story_register_story_info' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */

function story_register_story_info() {
	// Start with an underscore to hide fields from custom fields list.
	$prefix = '_story_';
	/**
	 * Sample metabox to demonstrate the different conditions you can set.
	 */
	$cmb = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => 'Story Info',
		'object_types'  => array( 'story' ), // Post type.
  ) );
  
  $cmb->add_field( array(
    'name'           => 'Story',
    'desc'           => 'This is a required field',
    'id'             => $prefix . 'radio',
    'type'           => 'radio',
    'show_option_none'=>false,
    'attributes' => array(
      'required'     => true
    ),
    'options' => array(
      'one-house' => __( 'One House', 'cmb2' ),
		  'origin'    => __( 'Origin', 'cmb2' ),
		  'vision'    => __( 'Vision', 'cmb2' ),
      'heritage'  => __( 'Heritage', 'cmb2' ),
    ) ) );
    
    // Optional :
    $cmb->add_field( array(
    'name'    => 'Alternate Title',
    'desc'    => 'A translation of the title (optional)',
    'id'      => $prefix . 'alt_title',
    'type'    => 'text',  
  ) );

//VISION
  $cmb->add_field( array(
    'name'    => 'Vision Image',
    'desc'    => 'Upload an image.',
    'id'      => $prefix . 'vision_image',
    'type'    => 'file',
    // Optional:
    'attributes' => array(
      'data-conditional-id'    => $prefix . 'radio',
      'data-conditional-value' => 'vision',
    ),
    'options' => array(
      'url' => true, // Hide the text input for the url
    ),
    'text'    => array(
      'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
    ),
    // query_args are passed to wp.media's library query.
    // 'query_args' => array(
    //   'type' => 'application/pdf', // Make library only display PDFs.
    // ),
    'preview_size' => 'medium', // Image size to use when previewing in the admin.
  ) );

//HERITAGE
  $cmb->add_field( array(
    'name'    => 'Heritage Image',
    'desc'    => 'Upload an image.',
    'id'      => $prefix . 'heritage_image',
    'type'    => 'file',
    // Optional:
    'attributes' => array(
      'data-conditional-id'    => $prefix . 'radio',
      'data-conditional-value' => 'heritage',
    ),
    'options' => array(
      'url' => true, // Hide the text input for the url
    ),
    'text'    => array(
      'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
    ),
    // query_args are passed to wp.media's library query.
    // 'query_args' => array(
    //   'type' => 'application/pdf', // Make library only display PDFs.
    // ),
    'preview_size' => 'medium', // Image size to use when previewing in the admin.
  ) );

  //ONE HOUSE
  //Team Members Field - add/delete
  $team_member_field = $cmb->add_field( array(
    'id'          => $prefix . 'team_member_group',
    'type'        => 'group',
    'description' => __( 'Meet our team', 'cmb2' ),
    // 'repeatable'  => false, // use false if you want non-repeatable group
    'attributes' => array(
      'data-conditional-id'    => $prefix . 'radio',
      'data-conditional-value' => 'one-house',
    ),
    'options'     => array(
      'group_title'   => __( 'Team Member {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
      'add_button'    => __( 'Add Another Team Member', 'cmb2' ),
      'remove_button' => __( 'Remove Team Member', 'cmb2' ),
      'sortable'      => true, // beta
      // 'closed'     => true, // true to have the groups closed by default

    ),
  ) );
  
  // Id's for group's fields only need to be unique for the group. Prefix is not needed.
  $cmb->add_group_field( $team_member_field, array(
    'name' => 'Team Member Name',
    'id'   => $prefix . 'name',
    'type' => 'text',
    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    'attributes' => array(
      'data-conditional-id'    => $prefix . 'radio',
      'data-conditional-value' => 'one-house',
    ),
  
  ) );

  $cmb->add_group_field( $team_member_field, array(
    'name' => 'Team Member Title',
    'id'   => $prefix . 'title',
    'type' => 'text',
    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    'attributes' => array(
      'data-conditional-id'    => $prefix . 'radio',
      'data-conditional-value' => 'one-house',
    ),
  ) );
  
  $cmb->add_group_field( $team_member_field, array(
    'name' => 'Description',
    'description' => 'Write a short description for this Team Member',
    'id'   => $prefix . 'member_description',
    'type' => 'textarea_small',
    'attributes' => array(
      'data-conditional-id'    => $prefix . 'radio',
      'data-conditional-value' => 'one-house',
    ),
  ) );
  
  $cmb->add_group_field( $team_member_field, array(
    'name' => 'Team Member Image',
    'id'   => $prefix . 'member_image',
    'type' => 'file',
    'attributes' => array(
      'data-conditional-id'    => $prefix . 'radio',
      'data-conditional-value' => 'one-house',
    ),
  ) );
  //End of One House

  //ORIGIN
 


}