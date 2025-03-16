<?php 
/* 
* Template part pour la carte
*/
?>
<article class="carte carte--grande">
  <div class="carte__contenu">
    <?php
      if (has_post_thumbnail()) {
      the_post_thumbnail('thumbnail'); }
    ?>
    <h4 class="carte__titre"><?php the_title(); ?></h4>
    <?= the_category(); ?>
    <div class="carte__conteneurinfosgenerales">
      <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 25, "..."); ?></p>
      <a class="carte__bouton carte__bouton--actif" href="<?= the_permalink() ?>">Voir plus...</a>
      <p class="carte__temperature">
        Température maximum : <?= the_field('temperature_maximum'); ?> C&#176; <br>
        Température minimum : <?= the_field('temperature_minimum'); ?> C&#176; <br>
        Température moyenne : <?= the_field('temperature_moyenne'); ?> C&#176;
      </p>
    </div>
  </div>
</article>