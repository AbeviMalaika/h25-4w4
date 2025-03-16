    <?php get_header() ?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article>
                    <?php
                        if (has_post_thumbnail()) {
                        the_post_thumbnail('large'); }
                    ?>
                        <h2><?php the_title(); ?></h2>
                        <div><?php the_content(); ?></div>
                        <?php the_category(); ?>
                        <p>Température maximum : <?= the_field('temperature_maximum'); ?> C&#176;</p>
                        <p>Température minimum : <?= the_field('temperature_minimum'); ?> C&#176;</p>
                        <p>Température moyenne : <?= the_field('temperature_moyenne'); ?> C&#176;</p>
                    </article>
            <?php endwhile;
            endif; ?>
        </div>
    </section>
    <?php get_footer() ?>
</body>

</html>