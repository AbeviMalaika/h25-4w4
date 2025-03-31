<?php //Page pour une erreur 
?>

<?php
$error_background = get_theme_mod('404_background', '');
$error_titre = get_theme_mod('404_titre', 'Un titre pour la page erreur 404!');
$error_description = get_theme_mod('404_description', 'Petite description pour la page erreur 404.');
?>

<?php get_header() ?>
<div class="erreur" style="background-image: url(<?php echo $error_background; ?>);">
    <h1 class="erreur__titre"><?php echo $error_titre; ?></h1>
    <p class="erreur__description"><?php echo $error_description; ?></p>

    <div class="erreur__contenu">
        <div class="erreur__recherche">
            <h4 class="erreur__recherche__titre">Une petite recherche pourrait vous rediriger au bon endroit</h4>
            <div class="erreur__recherche__form">
                <?php get_search_form(); ?>
            </div>
            <?php get_template_part("gabarits/icones-sociaux"); ?>
        </div>
        <div class="erreur__navigation">
            <h4 class="erreur__navigation_titre">Une de ses destinations pourrait vous conquérir</h4>
            <?php wp_nav_menu(array(
                "menu" => "recommandation",
                "container" => "nav",
                "container_class" => "erreur__navigation__menu"
            )); ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
</body>

</html>
    <!-- <div class="erreur__message">

    </div> -->