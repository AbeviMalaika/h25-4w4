<?php

/**
 * Modèle pour les résultats de recherche
 */
get_header();
?>
<main class="site__main">
    <section class="recherche__section">
        <h3 class="recherche__section__titre">Résultat(s) de la recherche</h3>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php
                /* On ne veut pas de résultat de recherche affichant la galerie,
                 dont on vérifie si l'article appartient à la catégorie "galerie". Si elle y appartient, la carte
                 ne sera pas créée.
                */
                if (!(in_category("galerie"))) {
                ?>
                    <article class="recherche__section__resultat">
                        <h5 class="recherche__section__resultat__titre"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p class="recherche__section__resultat__titre"><?php echo wp_trim_words(get_the_excerpt(), 60); ?></p>
                        <hr>
                    </article>
                <?php }; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun résultat trouvé.</p>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>