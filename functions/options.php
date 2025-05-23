<?php

/**
 * Fonction pour l'ajout des fonctionnalités necéssaires pour le thème WordPress
 */
function mon_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_image_size('logo, 75, 75, true');
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mon_theme_supports');

/**
 * Fonction pour ajouter les fichiers nécessaires pour le thème WordPress, comme
 * les fichiers de style ou les scripts Javascript 
 */
function theme_4w4_enqueue_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('script-animation-menu', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);

    wp_enqueue_script(
        'destination_restapi',
        get_template_directory_uri() . '/js/destination.js',
        array(),
        filemtime(get_template_directory() .
            '/js/destination.js'),
        true
    );

    wp_enqueue_script(
        'carrousel',
        get_template_directory_uri() . '/js/carrousel.js',
        array(),
        filemtime(get_template_directory() .
            '/js/carrousel.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_4w4_enqueue_styles');

/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */

function modifie_requete_principal($query)
{
    if ($query->is_home() && $query->is_main_query() && ! is_admin()) {
        $query->set('category_name', 'Populaires');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'modifie_requete_principal');

/**
 * Vérifie si le field de la température a déjà une valeur.
 * Dans le cas contraire, il va générer une valeur aléatoire
 * La fonction retourne un nombre entier, soit la température enregistrée ou 
 * le nombre généré aléatoirement.
 * @param String $fieldTemperature : Nom du field de température
 * @param Int $tempRandMin : Nombre entier minimum pour la génération aléatoire de la température
 * @param Int $tempRandMax : Nombre entier maximum pour la génération aléatoire de la température
 * @return Number $valeurTemperature : Nombre entier pour la température
 */
function affichage_temperature($fieldTemperature, $tempRandMin, $tempRandMax)
{
    if (get_field($fieldTemperature)) {
        $valeurTemperature = the_field($fieldTemperature);
    } else {
        $valeurTemperature = rand($tempRandMin, $tempRandMax);
    }

    return $valeurTemperature;
}
add_action('wp_enqueue_scripts', 'theme_4w4_enqueue_styles');


/**
 * Afficher les noms de catégorie, mais ne pas afficher le nom de la catégorie
 * correspondant à la page sélectionnée
 * @param String $categorie_nom : Nom de la catégorie de la page
 */

function categorie_par_destination($categorie_nom)
{
    // Variable pour avoir la liste des 
    $liste_categories = get_the_category();
    // Variable pour avoir le nombre total de catégorie dans un article
    $total_categorie = count($liste_categories);

    /* 
    On ne veut pas que la catégorie de la page même apparaisse dans
    la carte d'un article, sinon c'est redondant. Alors on vérifie les
    catégorie de l'article et on affiche des catégories seulement si
    elles ne sont pas identique à celle de la page
    */
    if ($total_categorie > 1) { ?>

        <h6 class="carte__categorie__titre">Autres catégorie(s) : </h6>

    <?php  } ?>

    <ul class="carte__categorie__liste">

        <?php
        for ($x = 0; $x < $total_categorie; $x++) {
            $categorie = $liste_categories[$x]->name;
            if ($categorie != $categorie_nom) {
        ?>

                <li class="carte__categorie__liste__tag">
                    <a href="<?php echo get_category_link($liste_categories[$x]->term_id); ?>"> <?php print_r($liste_categories[$x]->name); ?> </a>
                </li>

        <?php
            }
        } ?>
    </ul>
<?php }

add_action('wp_enqueue_scripts', 'theme_4w4_enqueue_styles');

