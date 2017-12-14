<?php
function csl_customizer_register( $wp_customize ) {
  
    // Contact Information Panel in Customize Bar //  
    $wp_customize->add_panel( 'panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Contact Info', 'textdomain' ),
    ) );
  
    // Add Title Section //
    $wp_customize->add_section( 'title_section', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Title'),
        'description' => '',
        'panel' => 'panel_id',
    ) );
      
    $wp_customize->add_setting( 'title_value', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => '',
      'sanitize_callback' => 'esc_textarea',
    ) );

    $wp_customize->add_control( 'title_value', array(
        'type' => 'textarea',
        'priority' => 10,
        'section' => 'title_section',
        'label' => __( 'Add a title'),
        'description' => '',
    ) );

  // Add Content Section //
  $wp_customize->add_section( 'content_section', array(
    'priority' => 10,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __( 'Addition Information'),
    'description' => '',
    'panel' => 'panel_id',
  ) );

  $wp_customize->add_setting( 'content_value', array(
  'default' => '',
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
  'transport' => '',
  'sanitize_callback' => 'esc_textarea',
  ) );

  $wp_customize->add_control( 'content_value', array(
    'type' => 'textarea',
    'priority' => 10,
    'section' => 'content_section',
    'label' => __( 'Add some content / this will show only on the contact page'),
    'description' => '',
  ) );

  // Add Address Section //
    $wp_customize->add_section( 'address_section', array(
      'priority' => 10,
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'title' => __( 'Address'),
      'description' => '',
      'panel' => 'panel_id',
  ) );

  $wp_customize->add_setting( 'address_value', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => '',
    'sanitize_callback' => 'esc_textarea',
  ) );
   
  $wp_customize->add_control( 'address_value', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'address_section',
      'label' => __( 'Textarea Field'),
      'description' => '',
  ) );

//province
    $wp_customize->add_section( 'province_section', array(
      'priority' => 10,
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'title' => __( 'Province'),
      'description' => '',
      'panel' => 'panel_id',
    ) );

    $wp_customize->add_setting( 'province_value', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => '',
    'sanitize_callback' => 'esc_textarea',
    ) );

    $wp_customize->add_control( 'province_value', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'province_section',
      'label' => __( 'Add A Province'),
      'description' => '',
    ) );



  

// Mon - Fri Date Section //

    $wp_customize->add_section( 'weekdays_section', array(
      'priority' => 10,
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'title' => __( 'Add Weekdays Open'),
      'description' => '',
      'panel' => 'panel_id',
    ) );

    $wp_customize->add_setting( 'weekdays_value', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => '',
    'sanitize_callback' => 'esc_textarea',
    ) );

    $wp_customize->add_control( 'weekdays_value', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'weekdays_section',
      'label' => __( 'Add Weekdays Open'),
      'description' => '',
    ) );

// Mon - Fri Hours //
    $wp_customize->add_section( 'weekday_hours_section', array(
      'priority' => 10,
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'title' => __( 'Add Weekday Hours/Time'),
      'description' => '',
      'panel' => 'panel_id',
    ) );

    $wp_customize->add_setting( 'weekday_hours_value', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => '',
    'sanitize_callback' => 'esc_textarea',
    ) );

    $wp_customize->add_control( 'weekday_hours_value', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'weekday_hours_section',
      'label' => __( 'Add Weekday Hours/Time'),
      'description' => '',
    ) );

// weekend dates//
    $wp_customize->add_section( 'weekend_section', array(
      'priority' => 10,
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'title' => __( 'Add Weekend Dates/Time Open'),
      'description' => '',
      'panel' => 'panel_id',
    ) );

    $wp_customize->add_setting( 'weekend_value', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => '',
    'sanitize_callback' => 'esc_textarea',
    ) );

    $wp_customize->add_control( 'weekend_value', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'weekend_section',
      'label' => __( 'Add Weekend Dates/Time'),
      'description' => '',
    ) );    

// weekend hours//
$wp_customize->add_section( 'weekend_hours_section', array(
  'priority' => 10,
  'capability' => 'edit_theme_options',
  'theme_supports' => '',
  'title' => __( 'Add Weekend Hours/Time'),
  'description' => '',
  'panel' => 'panel_id',
) );

$wp_customize->add_setting( 'weekend_hours_value', array(
'default' => '',
'type' => 'theme_mod',
'capability' => 'edit_theme_options',
'transport' => '',
'sanitize_callback' => 'esc_textarea',
) );

$wp_customize->add_control( 'weekend_hours_value', array(
  'type' => 'textarea',
  'priority' => 10,
  'section' => 'weekend_hours_section',
  'label' => __( 'Add Weekend Hours/Time'),
  'description' => '',
) );    
  
  
}



add_action( 'customize_register', 'csl_customizer_register' );
