<?php get_header() ?>

<section class="categorie">
    <div class="categorie__infos">
        <h2 class="categorie__infos__titre"><?php single_cat_title(); ?></h2>
        <div class="categorie__infos__description">
            <?php echo category_description(); ?>
        </div>
    </div>
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post();
        ?>
                <?php get_template_part('gabarits/carte'); ?>
        <?php endwhile;
        endif; ?>
    </div>
</section>
<?php get_footer() ?>

</body>

</html>