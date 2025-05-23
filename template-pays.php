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

<?php creer_vague("blue", "red"); ?>

<!-- ////////////////////////////////////////////////////// Section Rest API -->
<section class="destination" data-method="search">

    <ul class="categorie__ul">
        <li data-destinationID="france" tabindex="1" class=" categorie__ul__li">France</li>
        <li data-destinationID="etats-unis" tabindex="1" class=" categorie__ul__li">États-Unis</li>
        <li data-destinationID="canada" tabindex="1" class=" categorie__ul__li">Canada</li>
        <li data-destinationID="argentine" tabindex="1" class=" categorie__ul__li">Argentine</li>
        <li data-destinationID="chili" tabindex="1" class=" categorie__ul__li">Chili</li>
        <li data-destinationID="belgique" tabindex="1" class=" categorie__ul__li">Belgique</li>
        <li data-destinationID="maroc" tabindex="1" class=" categorie__ul__li">Maroc</li>
        <li data-destinationID="mexique" tabindex="1" class=" categorie__ul__li">Mexique</li>
        <li data-destinationID="japon" tabindex="1" class=" categorie__ul__li">Japon</li>
        <li data-destinationID="italie" tabindex="1" class=" categorie__ul__li">Italie</li>
        <li data-destinationID="islande" tabindex="1" class=" categorie__ul__li">Islande</li>
        <li data-destinationID="chine" tabindex="1" class=" categorie__ul__li">Chine</li>
        <li data-destinationID="grece" tabindex="1" class=" categorie__ul__li">Grèce</li>
        <li data-destinationID="Suisse" tabindex="1" class=" categorie__ul__li">Suisse</li>
    </ul>


    <!-- <h2 class="destination__titre">Articles de la catégorie</h2> -->
    <div class="destination__list"></div>
</section>

<?php get_footer(); ?>