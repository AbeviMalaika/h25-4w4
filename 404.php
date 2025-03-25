<?php //Page pour une erreur 
?>

<?php
$error_imgprincipale = get_theme_mod('404_imgprincipale', '');
$error_avion =  get_theme_mod('404_imganimation', '');
?>

<?php get_header() ?>
<div class="erreur">
    <h1 class="erreur__titre">Erreur 404 : Vous n'avez pas atterri à la bonne destination...</h1>
    <div class="erreur__contenu">
        <div class="erreur__message">
            <img class="erreur__message__imgIle" src="<?php echo $error_imgprincipale; ?>" alt="">
            <img class="erreur__message__imgAvion" src="<?php echo $error_avion; ?>" alt="">
        </div>

        <div class="erreur__recherche">
            <h2 class="erreur__recherche__titre">Une petite recherche pourrait vous redirigez au bon endroit</h2>
            <div class="erreur__recherche__form">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
</body>

</html>