<?php //Page pour une erreur 
?>

<?php $error_background = get_theme_mod('404_background', ''); ?>

<?php get_header() ?>
<div class="erreur global">
    <div class="erreur__message">
        <h1 class="erreur__message__titre">Erreur 404 : Vous n'avez pas atterri à la bonne destination...</h1>
        <img class="erreur__message__image" src="<?php echo $error_background; ?>" alt="">
    </div>

    <div class="erreur__recherche">
        <p class="erreur__recherche__titre">Une petite recherche pourrait vous redirigez au bon endroit</p>
        <?php get_search_form(); ?>
    </div>

    <div class="erreur__suggestion">
        <h2 class="erreur__suggestion__titre">Sinon, une de ces destinations pourrait vous plaire</h2>
        
        <div class="erreur__suggestion__destination">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <div><?php the_content(); ?></div>
                    </article>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
</body>

</html>