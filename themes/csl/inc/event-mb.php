<?php

add_action( 'cmb2_init', 'event_register_event_info' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function event_register_event_info() {
	// Start with an underscore to hide fields from custom fields list.
	$prefix = '_event_';
	/**
	 * Sample metabox to demonstrate the different conditions you can set.
	 */
	$cmb = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => 'Event Info',
		'object_types'  => array( 'event' ), // Post type.
  ) );
  
  $cmb->add_field( array(
    'name'           => 'Seasonal or Weekly',
    'desc'           => 'This is a required field',
    'id'             => $prefix . 'taxonomy_radio',
    'taxonomy'       => 'event_type', // Enter Taxonomy Slug
    'type'           => 'taxonomy_radio',
    'show_option_none'=>false,
    'attributes' => array(
      'required'     => true,
    ),
    // Optional :
    'text'           => array(
      'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
    ),
    'remove_default' => 'true' // Removes the default metabox provided by WP core. Pending release as of Aug-10-16
  ) );

  $cmb->add_field( array(
    'name'    => 'Alternate Title',
    'desc'    => 'A translation of the title (optional)',
    'id'      => $prefix . 'alt_title',
    'type'    => 'text',
  ) );

  $cmb->add_field( array(
    'name'    => 'Location',
    'desc'    => 'Where is the event taking place (optional)',
    'id'      => $prefix . 'location',
    'type'    => 'text',
  ) );
  
  $cmb->add_field( array(
    'name' => 'Date',
    'id'   => $prefix . 'date',
    'desc' => 'What date is the event taking place (optional)',
    'type' => 'text_date',
    // 'timezone_meta_key' => 'wiki_test_timezone',
    // 'date_format' => 'l jS \of F Y',
    'attributes' => array(
      'data-conditional-id'    => $prefix . 'taxonomy_radio',
      'data-conditional-value' => 'seasonal',
    ), 
  ) );

  $cmb->add_field( array(
    'name'    => 'Day',
    'desc'    => 'Which day(s) does the event take place (optional)',
    'id'      => $prefix . 'day',
    'type'    => 'multicheck_inline',
    'options' => array(
      'monday' => 'Monday',
      'tuesday' => 'Tuesday',
      'wednesday'=>'Wednesday',
      'thursday'=>'Thursday',
      'friday'=>'Friday',
      'saturday'=>'Saturday',
      'sunday' => 'Sunday',
    ),
    'attributes' => array(
      'data-conditional-id'    => $prefix . 'taxonomy_radio',
      'data-conditional-value' => 'weekly',
    ), 
  ) );

  $cmb->add_field( array(
    'name' => 'Start Time',
    'desc' => 'What is the start time of the event (optional)',
    'id'   => $prefix . 'start_time',
    'type' => 'text_time'
    // 'time_format' => 'h:i:s A',
  ) );
  $cmb->add_field( array(
    'name' => 'End Time',
    'desc' => 'What is the end time of the event (optional)',
    'id'   => $prefix . 'end_time',
    'type' => 'text_time'
    // 'time_format' => 'h:i:s A',
  ) );

  $cmb->add_field( array(
    'name'    => 'Icon',
    'desc'    => 'Upload an image or enter an URL. (optional)',
    'id'      => $prefix . 'icon',
    'type'    => 'file',
    // Optional:
    'options' => array(
      'url' => true, // Hide the text input for the url
    ),
    'text'    => array(
      'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
    ),
    'query_args' => array(
      'type' => 'image', // Make library only display images.
    ),
    'preview_size' => 'small', // Image size to use when previewing in the admin.
    'attributes' => array(
      'data-conditional-id'    => $prefix . 'taxonomy_radio',
      'data-conditional-value' => 'weekly',
    ), 
  ) );

  $cmb->add_field( array(
    'name' => 'For the Gallery',
    'desc' => 'Update this event with pictures for the gallery!',
    'id'   => 'wiki_test_file_list',
    'type' => 'file_list',
    // 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
    'query_args' => array( 'type' => 'image' ), // Only images attachment
    // Optional, override default text strings
    'attributes' => array(
      'required'               => true,
      'data-conditional-id'    => $prefix . 'taxonomy_radio',
      'data-conditional-value' => 'seasonal',
    ), 
  ) );

}
