

<?php

add_action( 'customize_register', 'csl_customizer_settings' );

  function csl_customizer_settings( $wp_customize ) {
    
// 2nd field, working with output in single.php

    $wp_customize->add_section( 'test_input' , array(
      'title'      => 'Bacon Value',
      'priority'   => 30,
  ) );


  $wp_customize->add_setting( 'test_value' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ) );

  // create control in customizer for default text input try WP_Customize_Control
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'test_value', array(
      'label'        => 'Bacon',
      'section'    => 'test_input',
      'settings'   => 'test_value',
    ) ) );

    
  }// csl_customizer_settings

  

?> 