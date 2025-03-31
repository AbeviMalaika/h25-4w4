<?php //Page pour une erreur 
?>

<?php
$error_background = get_theme_mod('404_background', '');
$error_titre = get_theme_mod('404_titre', 'Un titre pour la page erreur 404!');
$error_description = get_theme_mod('404_description', 'Petite description pour la page erreur 404.');
$error_texteColor = get_theme_mod('404_texteColo', '#000000');
?>

<?php get_header() ?>
<div class="erreur" style="background-image: url(<?php echo $error_background; ?>);">
    <h1 class="erreur__titre" style="color = <?php echo $error_texteColor; ?>;"><?php echo $error_titre; ?></h1>
    <p class="erreur__description" style="color = <?php echo $error_texteColor; ?>;"><?php echo $error_description; ?></p>

    <button><a href="<?php echo home_url(); ?>">Retour à l'accueil</a></button>

    <div class="erreur__contenu">
        <div class="erreur__navigation">
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