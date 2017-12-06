unction story_register_story_info() {
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
      'required'     => true,
      'one-house' => __( 'One House', 'cmb2' ),
		  'origin'   => __( 'Origin', 'cmb2' ),
		  'vision'     => __( 'vision', 'cmb2' ),
      'heritage'     => __( 'Heritage', 'cmb2' ),
    ),
    // Optional :