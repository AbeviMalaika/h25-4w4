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


    /**********/ ////////////////////////////////////////////////Début du champ hero_nbimagescarrousel*/
    ////////////////////////////////////////// ajout de la donnée nombre d'image
    $wp_customize->add_setting('hero_nbimagescarrousel', array(
        'sanitize_callback' => 'themeslug_sanitize_number_absint',
        'default' => 1,
    ));

    $wp_customize->add_control('hero_nbimagescarrousel', array(
        'type' => 'number',
        'section' => 'hero_section', // Add a default or your own section
        'label' => __('Nombre Images Carroussel'),
    ));

    function themeslug_sanitize_number_absint($number, $setting)
    {
        // Ensure $number is an absolute integer (whole number, zero or greater).
        $number = absint($number);

        // If the input is an absolute integer, return it; otherwise, return the default
        return ($number ? $number : $setting->default);
    }

    /**********/ ////////////////////////////////////////////////Début du champ hero_background*/
    ////////////////////////////////////////// ajout de la donnée image en background
    $hero_nbimagescarrousel = get_theme_mod('hero_nbimagescarrousel', '1');

    for ($k = 0; $k < $hero_nbimagescarrousel; $k++) {
        $wp_customize->add_setting('hero_background_' . $k, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        ////////////////////////////////////////// ajout du contrôle de la donnée image en background
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
            'label' => __('Image Arrière-plan Hero' . ($k + 1), 'theme_4w4'),
            'section' => 'hero_section',
        )));
    }


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


    /**********/ ////////////////////////////////////////////////Début du champ hero_nb_icones*/
    ////////////////////////////////////////// ajout de la donnée nombre d'image
    $wp_customize->add_setting('hero_nb_icones', array(
        'sanitize_callback' => 'themeslug_sanitize_number_absint',
        'default' => 1,
    ));

    $wp_customize->add_control('hero_nb_icones', array(
        'type' => 'number',
        'section' => 'hero_section', // Add a default or your own section
        'label' => __('Nombre Icones Sociaux'),
    ));

    /**********/ ////////////////////////////////////////////////Début des champs hero_icones*/
    ////////////////////////////////////////// ajout de la donnée 
    $hero_nb_icones = get_theme_mod('hero_nb_icones', '1');

    for ($k = 0; $k < $hero_nb_icones; $k++) {
        $wp_customize->add_setting('hero_icones_' . $k, array(
            'default' => __('wordpress', 'theme_4w4'),
            'sanitize_callback' => 'sanitize_text_field'
        ));

        ////////////////////////////////////////// ajout du contrôle de la donnée
        $wp_customize->add_control('hero_icones_' . $k, array(
            'label' => __('Icones Reseaux Sociaux ' . ($k + 1), 'theme_4w4'),
            'section' => 'hero_section',
            'type' => 'text',
        ));
    }

    /**********/ ////////////////////////////////////////////////Début des champs hero_lien_reseaux*/
    ////////////////////////////////////////// ajout de la donnée 
    for ($k = 0; $k < $hero_nb_icones; $k++) {
        $wp_customize->add_setting('hero_lien_reseaux_' . $k, array(
            'default' => __('https://github.com/AbeviMalaika/h25-4w4', 'theme_4w4'),
            'sanitize_callback' => 'sanitize_text_field'
        ));

        ////////////////////////////////////////// ajout du contrôle de la donnée
        $wp_customize->add_control('hero_lien_reseaux_' . $k, array(
            'label' => __('Liens Reseaux Sociaux ' . ($k + 1), 'theme_4w4'),
            'section' => 'hero_section',
            'type' => 'text',
        ));
    }

    /**********/ ////////////////////////////////////////////////Début du champ hero_couleur_icones*/
    ////////////////////////////////////////// ajout de la donnée de couleur des icones
    $wp_customize->add_setting('hero_couleur_icones', array(
        'default' => 'ffffff',
        'sanitize_callback' => 'sanitize_hex_color_no_hash',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'hero_couleur_icones', array(
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

    /**********/ ////////////////////////////////////////////////Début du champ footer_couleur*/
    ////////////////////////////////////////// ajout de la donnée de couleur du footer
    $wp_customize->add_setting('footer_couleur', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'footer_couleur', array(
            'label' => __('Couleur Background Footer'),
            'section' => 'footer_section',
        ))
    );


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


    /*########################### SECTION POUR LA PAGE ERREUR 404 - EXAMEN INTRA ##############################*/
    /*-----------------------------------------------PAGE ERREUR 404-----------------*/
    // Création d'une nouvelle section dans le customizer
    ///////////////////////////////////////////////////////////////Début de la zone 404
    $wp_customize->add_section('section_404', array(
        'title' => __('Section 404', 'theme_4w4'),
        'priority' => 30,
    ));

    /**********/ ////////////////////////////////////////////////Début du champ 404_titre*/
    ////////////////////////////////////////// ajout de la donnée
    $wp_customize->add_setting('404_titre', array(
        'default' => __('Titre de la page 404', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('404_titre', array(
        'label' => __('Titre', 'theme_4w4'),
        'section' => 'section_404',
        'type' => 'textarea',
    ));

    /**********/ ////////////////////////////////////////////////Début du champ 404_description*/
    ////////////////////////////////////////// ajout de la donnée
    $wp_customize->add_setting('404_description', array(
        'default' => __('Description de la page 404', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('404_description', array(
        'label' => __('Description', 'theme_4w4'),
        'section' => 'section_404',
        'type' => 'textarea',
    ));

    /**********/ ////////////////////////////////////////////////Début du champ 404_texteColo*/
    ////////////////////////////////////////// ajout de la donnée de couleur des icones
    $wp_customize->add_setting('404_texteColo', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, '404_texteColo', array(
            'label' => __('Couleur Texte'),
            'section' => 'section_404',
        ))
    );

    /**********/ ////////////////////////////////////////////////Début du champ 404_background*/
    ////////////////////////////////////////// ajout de la donnée image en background
    $wp_customize->add_setting('404_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée image en background
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '404_background', array(
        'label' => __('Image Background', 'theme_4w4'),
        'section' => 'section_404',
    )));





    /*########################### SECTION POUR LES ARTICLES DE DESTINATION ##############################*/
    /*-----------------------------------------------PAGE ERREUR 404-----------------*/
    // Création d'une nouvelle section dans le customizer
    ///////////////////////////////////////////////////////////////Début de la zone 404
    $wp_customize->add_section('section_destination', array(
        'title' => __('Section Destination', 'theme_4w4'),
        'priority' => 30,
    ));
    /**********/ ////////////////////////////////////////////////Début du champ destination_imageDefaut*/
    ////////////////////////////////////////// ajout de la donnée image en background
    $wp_customize->add_setting('destination_imageDefaut', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    ////////////////////////////////////////// ajout du contrôle de la donnée image en background
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'destination_imageDefaut', array(
        'label' => __('Image Defaut Destination', 'theme_4w4'),
        'section' => 'section_destination',
    )));
}

add_action('customize_register', 'theme_4w4_customize_register');


// destination_imageDefaut