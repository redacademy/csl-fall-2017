
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
        'label' => __( 'Textarea Field'),
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
    'label' => __( 'Textarea Field'),
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

// Add Date Section //

    $wp_customize->add_section( 'date_section', array(
      'priority' => 10,
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'title' => __( 'Dates and time'),
      'description' => '',
      'panel' => 'panel_id',
    ) );

    $wp_customize->add_setting( 'date_value', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => '',
    'sanitize_callback' => 'esc_textarea',
    ) );

    $wp_customize->add_control( 'date_value', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'date_section',
      'label' => __( 'Textarea Field'),
      'description' => '',
    ) );
  }
  add_action( 'customize_register', 'csl_customizer_register' );
?> 

  
    <!--
    how to add the fields to php file
    echo get_theme_mod( 'title_value' );
    echo get_theme_mod( 'content_value' ); 
    echo get_theme_mod( 'address_value' );
    echo get_theme_mod( 'date_value' ); 
    
    -->