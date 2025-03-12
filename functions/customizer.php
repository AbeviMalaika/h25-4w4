<?php
    function theme_4w4_customize_register($wp_customize) {
        // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
        // Création d'une nouvelle section dans le customizer
        ///////////////////////////////////////////////////////////////Début de la zone hero
        $wp_customize->add_section('hero_section', array(
          'title' => __('Section Hero', 'theme_4w4'),
          'priority' => 30,
      ));
      
      ////////////////////////////////////////////////////////////Début du champ hero_auteur*/
      ////////////////////////////////////////// ajout de la donnée
      $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Malaïka Abevi', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      ////////////////////////////////////////// ajout du contrôle de la donnée
      $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_4w4'),
        'section' => 'hero_section',
        'type' => 'text',
      ));
      
      ////////////////////////////////////////////////////////////Début du champ hero_background*/
      ////////////////////////////////////////// ajout de la donnée image en background
      $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      ////////////////////////////////////////// ajout du contrôle de la donnée image en background
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Image Arrière-plan Hero', 'theme_31w'),
        'section' => 'hero_section',
      )));
      }
      
      add_action('customize_register', 'theme_4w4_customize_register');
?>