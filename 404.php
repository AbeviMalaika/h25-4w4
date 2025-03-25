<?php //Page pour une erreur 
?>

<?php
$error_imgprincipale = get_theme_mod('404_imgprincipale', '');
$error_avion =  get_theme_mod('404_imganimation', '');
$error_background = get_theme_mod('404_background', '')
?>

<?php get_header() ?>
<div class="erreur" style="background-image: linear-gradient(180deg, rgba(250, 214, 214, 0.9) 0%, rgba(105, 208, 204, 0.5) 89%, rgba(66, 207, 201, 0.5) 100%), url(<?php echo $error_background; ?>);">
    <h1 class="erreur__titre">Erreur 404 : Vous n'avez pas atterri à la bonne destination...</h1>
    <div class="erreur__contenu">
        <div class="erreur__message">
            <img class="erreur__message__imgIle" src="<?php echo $error_imgprincipale; ?>" alt="">
            <img class="erreur__message__imgAvion" src="<?php echo $error_avion; ?>" alt="">
        </div>

        <div class="erreur__recherche">
            <h4 class="erreur__recherche__titre">Une petite recherche pourrait vous rediriger au bon endroit</h4>
            <div class="erreur__recherche__form">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
</body>

</html>