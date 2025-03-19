<?php

// ************** FICHIER POUR LA CONFIGURATION DU CUSTOMIZER  ****************/

function theme_4w4_customize_register($wp_customize)
{
    /*----------------SECTION HERO-----------------*/
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    // Création d'une nouvelle section dans le customizer
    ///////////////////////////////////////////////////////////////Début de la zone hero
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Hero', 'theme_4w4'),
        'priority' => 30,
    ));


    /**********/ ////////////////////////////////////Début du champ hero_auteur*/
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


    /**********/ /////////////////////////////////////Début du champ hero_promo*/
    ////////////////////////////////////////// ajout de la donnée
    $wp_customize->add_setting('hero_promo', array(
        'default' => __('Texte pour mettre de l\'avant le site web', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('hero_promo', array(
        'label' => __('Texte Promotionnel', 'theme_4w4'),
        'section' => 'hero_section',
        'type' => 'text',
    ));


    /**********/ ////////////////////////////////////////////////Début du champ hero_background*/
    ////////////////////////////////////////// ajout de la donnée image en background
    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée image en background
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Image Arrière-plan Hero', 'theme_4w4'),
        'section' => 'hero_section',
    )));


    /**********/ ////////////////////////////////////////////////Début du champ hero_courriel*/
    ////////////////////////////////////////// ajout de la donnée
    $wp_customize->add_setting('hero_courriel', array(
        'default' => __('malaika.abevi@gmail.com', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('hero_courriel', array(
        'label' => __('Courriel', 'theme_4w4'),
        'section' => 'hero_section',
        'type' => 'text',
    ));


    /**********/ ////////////////////////////////////////////////Début du champ hero_adresse*/
    ////////////////////////////////////////// ajout de la donnée
    $wp_customize->add_setting('hero_adresse', array(
        'default' => __('1234 rue Sherbrooke', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('hero_adresse', array(
        'label' => __('Adresse', 'theme_4w4'),
        'section' => 'hero_section',
        'type' => 'text',
    ));


    /**********/ ////////////////////////////////////////////////Début du champ hero_telephone*/
    ////////////////////////////////////////// ajout de la donnée
    $wp_customize->add_setting('hero_telephone', array(
        'default' => __('123-456-789', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('hero_telephone', array(
        'label' => __('Numéro de Téléphone', 'theme_4w4'),
        'section' => 'hero_section',
        'type' => 'text',
    ));


    /**********/ ////////////////////////////////////////////////Début du champ hero_texteColo*/
    ////////////////////////////////////////// ajout de la donnée de couleur des icones
    $wp_customize->add_setting('hero_texteColo', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'hero_texteColo', array(
            'label' => __('Couleur Texte'),
            'section' => 'hero_section',
        ))
    );


    /**********/ ////////////////////////////////////////////////Début du champ hero_icones*/
    ////////////////////////////////////////// ajout de la donnée de couleur des icones
    $wp_customize->add_setting('hero_icones', array(
        'default' => 'ffffff',
        'sanitize_callback' => 'sanitize_hex_color_no_hash',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'hero_icones', array(
            'label' => __('Couleur Îcones Sociaux'),
            'section' => 'hero_section',
        ))
    );



    /*----------------SECTION FOOTER-----------------*/
    // Création d'une nouvelle section dans le customizer
    ///////////////////////////////////////////////////////////////Début de la zone footer
    $wp_customize->add_section('footer_section', array(
        'title' => __('Section Footer', 'theme_4w4'),
        'priority' => 30,
    ));


    /**********/ ////////////////////////////////////////////////Début du champ footer_telephone*/
    ////////////////////////////////////////// ajout de la donnée
    $wp_customize->add_setting('footer_telephone', array(
        'default' => __('123-456-789', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('footer_telephone', array(
        'label' => __('Numéro de Téléphone', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'text',
    ));


    /**********/ ////////////////////////////////////////////////Début du champ footer_adresse*/
    ////////////////////////////////////////// ajout de la donnée
    $wp_customize->add_setting('footer_adresse', array(
        'default' => __('1234 rue Sherbrooke', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('footer_adresse', array(
        'label' => __('Adresse', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'text',
    ));


    /**********/ ////////////////////////////////////////////////Début du champ footer_courriel*/
    ////////////////////////////////////////// ajout de la donnée
    $wp_customize->add_setting('footer_courriel', array(
        'default' => __('malaika.abevi@gmail.com', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('footer_courriel', array(
        'label' => __('Courriel', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'text',
    ));


    /**********/ ////////////////////////////////////////////////Début du champ footer_mission*/
    ////////////////////////////////////////// ajout de la donnée
    $wp_customize->add_setting('footer_mission', array(
        'default' => __('Courte description de la mission du club de voyage', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('footer_mission', array(
        'label' => __('Mission', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'theme_4w4_customize_register');
