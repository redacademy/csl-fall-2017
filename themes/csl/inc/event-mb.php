<?php

add_action( 'cmb2_init', 'event_register_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function event_register_metabox() {
	// Start with an underscore to hide fields from custom fields list.
	$prefix = '_event_';
	/**
	 * Sample metabox to demonstrate the different conditions you can set.
	 */
	$cmb = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => 'Test Metabox',
		'object_types'  => array( 'events' ), // Post type.
  ) );
  
  $cmb->add_field( array(
    'name'           => 'Test Taxonomy Radio',
    'desc'           => 'Description Goes Here',
    'id'             => $prefix . 'taxonomy_radio',
    'taxonomy'       => 'event_type', // Enter Taxonomy Slug
    'type'           => 'taxonomy_radio',
    'show_option_none'=>false,
    'required'       => true,
    // Optional :
    'text'           => array(
      'no_terms_text' => 'Sorry, no terms could be found.' // Change default text. Default: "No terms"
    ),
    'remove_default' => 'true' // Removes the default metabox provided by WP core. Pending release as of Aug-10-16
  ) );

  $cmb->add_field( array(
    'name'    => 'Test Text',
    'desc'    => 'field description (optional)',
    'default' => 'standard value (optional)',
    'id'      => 'wiki_test_text',
    'type'    => 'text',
    'attributes' => array(
      'required'               => true,
			'data-conditional-id'    => $prefix . 'taxonomy_radio',
			'data-conditional-value' => 'seasonal',
		), 
  ) );

}
