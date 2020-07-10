<?php

function APIprac_reset_settings( $wp_customize )
{

    // Making the Site Title and Site Description pre-built WordPress Settings update live in the Customizer if they are changed
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'APIprac_customize_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'APIprac_customize_blogdescription',
        ) );
    }


    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_section( 'header_image' );
    $wp_customize->remove_section( 'background_image' );



}

add_action( 'customize_register', 'APIprac_reset_settings', 99 );

function oakhamfarm_custom_settings($wp_customize){


  $wp_customize->add_panel( 'oakhamfarm_settings', array(
    'priority' => 0,
    'title' => 'Oakham Farm Settings',

  ));


  /* ==========================================================================
    Header Section
       ========================================================================== */



    // Creates the "Header Section" section
      $wp_customize->add_section('header_section', array(
        'title' => 'Header Settings',
        'priority' => 0,
        'panel' => 'oakhamfarm_settings',

      ));


      // site description title
      $wp_customize->add_setting('description_title', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
      ));


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'description_title', array(
        'label' => 'Site Description',
        'section' => 'header_section',
        'settings' => 'description_title'
      )));


      // input box for site description
      $wp_customize->add_setting('site_description', array(
        'default' => 'A beautiful fishing spot on a working farm',
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'site_description', array(
        'label' => 'Site Description',
        'section' => 'header_section',
        'settings' => 'site_description',

      )));



      // 3 images title
      $wp_customize->add_setting('threeimages_title', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
      ));


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'threeimages_title', array(
        'label' => 'Three Images in Header',
        'description' => 'Choose new photos for the three images at the top of your website',
        'section' => 'header_section',
        'settings' => 'threeimages_title'
      )));


      // Left Image Upload
      $wp_customize->add_setting('header_left_image', array(
        'default' => get_template_directory_uri() . '/img/pond.jpg',
        'sanitize_callback' => 'theme_slug_sanitize_file'
      ));


      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_left_image', array(
        'label' => 'Left Image',
        'section' => 'header_section',
        'settings' => 'header_left_image',

      )));


      // Middle Image Upload
      $wp_customize->add_setting('header_middle_image', array(
        'default' => get_template_directory_uri() . '/img/welcomesign.jpg',
        'sanitize_callback' => 'theme_slug_sanitize_file'
      ));


      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_middle_image', array(
        'label' => 'Middle Image',
        'section' => 'header_section',
        'settings' => 'header_middle_image',

      )));


      // Middle Image Upload
      $wp_customize->add_setting('header_right_image', array(
        'default' => get_template_directory_uri() . '/img/swan.jpg',
        'sanitize_callback' => 'theme_slug_sanitize_file'
      ));


      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_right_image', array(
        'label' => 'Right Image',
        'section' => 'header_section',
        'settings' => 'header_right_image',

      )));



      /* ==========================================================================
        Fishing Section
           ========================================================================== */


      // Creates the "Fishing" section
        $wp_customize->add_section('fishing_section', array(
          'title' => 'Fishing Settings',
          'priority' => 0,
          'panel' => 'oakhamfarm_settings',

        ));


        // Fishing title
        $wp_customize->add_setting('fishing_title', array(
          'sanitize_callback' => 'wp_filter_nohtml_kses',
        ));


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'fishing_title', array(
          'label' => 'Fishing Section',
          'description' => 'Edit the content for your fishing section. This appears on the homepage',
          'section' => 'fishing_section',
          'settings' => 'fishing_title'
        )));


        // input box for fishing title
        $wp_customize->add_setting('fishing_title_input', array(
          'default' => 'Tree surgery and woodland management',
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'fishing_title_input', array(
          'label' => 'Fishing Title',
          'section' => 'fishing_section',
          'settings' => 'fishing_title_input',

        )));


        // input fishing description
        $wp_customize->add_setting( 'fishing_description', array(
          'default' => 'fishing description',
        ) );

        $wp_customize->add_control( 'fishing_description', array(
          'type' => 'textarea',
          'section' => 'fishing_section', // // Add a default or your own section
          'label' => 'Fishing Section Description',
        ) );


        // input box for read more link
        $wp_customize->add_setting('fishing_readmore_link', array(
          'default' => '',
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'fishing_readmore_link', array(
          'label' => 'Fishing Page Link',
          'section' => 'fishing_section',
          'settings' => 'fishing_readmore_link',

        )));


        /* ==========================================================================
          Timber Section
             ========================================================================== */

             // Creates the "timber" section
               $wp_customize->add_section('timber_section', array(
                 'title' => 'Timber Settings',
                 'priority' => 0,
                 'panel' => 'oakhamfarm_settings',

               ));


               // timber  title
               $wp_customize->add_setting('timber_title', array(
                 'sanitize_callback' => 'wp_filter_nohtml_kses',
               ));


               $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'timber_title', array(
                 'label' => 'Timber Section',
                 'description' => 'Edit the content for your timber section. This appears on the homepage',
                 'section' => 'timber_section',
                 'settings' => 'timber_title'
               )));



               // Upload background image for timber section
               $wp_customize->add_setting('timber_background_image', array(
                 'default' => get_template_directory_uri() . '/img/truck.jpg',
                 'sanitize_callback' => 'theme_slug_sanitize_file'
               ));


               $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'timber_background_image', array(
                 'label' => 'Background Image',
                 'description' => 'Please note a brown overlay will be added to this image',
                 'section' => 'timber_section',
                 'settings' => 'timber_background_image',

               )));

               // input box for timber title
               $wp_customize->add_setting('timber_title_input', array(
                 'default' => 'Oakham English Timber',
               ));

               $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'timber_title_input', array(
                 'label' => 'Timber Title',
                 'section' => 'timber_section',
                 'settings' => 'timber_title_input',

               )));


               // input fishing description
               $wp_customize->add_setting( 'timber_description', array(
                 'default' => 'timber description',
               ) );

               $wp_customize->add_control( 'timber_description', array(
                 'type' => 'textarea',
                 'section' => 'timber_section', // // Add a default or your own section
                 'label' => 'Timber Section Description',
               ) );


               // input box for read more link for timber
               $wp_customize->add_setting('timber_readmore_link', array(
                 'default' => '',
               ));

               $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'timber_readmore_link', array(
                 'label' => 'Timber Page Link',
                 'section' => 'timber_section',
                 'settings' => 'timber_readmore_link',

               )));








}

add_action('customize_register', 'oakhamfarm_custom_settings');
