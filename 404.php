<?php //Page pour une erreur 
?>

<?php
$error_imgprincipale = get_theme_mod('404_imgprincipale', '');
$error_titre = get_theme_mod('404_titre', '');
$error_avion =  get_theme_mod('404_imganimation', '');
$error_background = get_theme_mod('404_background', '')
?>

<?php get_header() ?>
<div class="erreur" style="background-image: linear-gradient(180deg, rgba(250, 214, 214, 0.27) 0%, rgba(105, 208, 204, 0.5) 89%, rgba(66, 207, 200, 0.25) 100%), url(<?php echo $error_background; ?>);">
    <h1 class="erreur__titre"><?php echo $error_titre; ?></h1> <!-- Erreur 404 : Vous n'avez pas atterri à la bonne destination... -->
    <div class="erreur__message">
            <img class="erreur__message__imgAvion" src="<?php echo $error_avion; ?>" alt="">
            <!-- <img class="erreur__message__imgIle" src="<?php echo $error_imgprincipale; ?>" alt=""> -->
    </div>
    <div class="erreur__contenu">
        <div class="erreur__recherche">
            <h4 class="erreur__recherche__titre">Une petite recherche pourrait vous rediriger au bon endroit</h4>
            <div class="erreur__recherche__form">
                <?php get_search_form(); ?>
            </div>
            <?php get_template_part("gabarits/icones-sociaux"); ?>
        </div>
        <div class="erreur__navigation">
            <h4 class="erreur__navigation">Une de ses destinations pourrait vous conquérir</h4>
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