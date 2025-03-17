<?php get_header() ?>

    <section class="categorie">
        <div class="categorie__infos">
            <h1 class="categorie__titre"><?php single_cat_title(); ?></h1>
            <p class="categorie__description"><?php echo category_description(); ?></p>
        </div>
        <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); 
        ?>
            <?php get_template_part('gabarits/carte'); ?>
        <?php endwhile;  endif; ?>
        </div>
    </section>
    <?php get_footer() ?>

</body>
</html>