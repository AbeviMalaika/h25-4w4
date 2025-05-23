<?php
/*
Template Name: Template Pays
*/
get_header();
?>

<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                </article>
        <?php endwhile;
        endif; ?>
    </div>

    <p><?php the_field('titre_evenement'); ?></p>
    <p>Date de l'événement :
        <?php the_field('date_evenement'); ?></p>
    <p>Description de l'évènement
        <?php the_field('description_evenement'); ?>
    </p>
</section>

<?php genere_vague($footer_couleur, "100%", 35); ?>

<!-- ////////////////////////////////////////////////////// Section Rest API -->
<section class="destination">
    <?php categories_liste("destination"); ?>
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list"></div>
</section>

<?php get_footer(); ?>