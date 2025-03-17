<?php
/* 
* Template part pour la carte
*/
?>
<?php
/* Pour les cartes, on ne veut pas de carte "galerie", dont on vérifie si 
   l'article appartient à la catégorie "galerie". Si elle y appartient, la carte
   ne sera pas créée.
*/
if (!(in_category("galerie"))) {
?>
  <article class="carte carte--grande">
    <div class="carte__contenu">
      <div class="carte__image">
        <?php
        if (has_post_thumbnail()) {
          the_post_thumbnail('medium');
        }
        ?>
        <!-- <div class="carte__image__degrade"></div> -->
      </div>

      <h4 class="carte__titre"><?php the_title(); ?></h4>

      <div class="carte__categorie">
        <h6 class="carte__categorie__titre">Catégorie(s) : </h6>
        <?= the_category(); ?>
      </div>

      <div class="carte__temperature">
        <h6 class="carte__temperature__titre">Températures : </h6>
        <p class="carte__temperature__valeurs">
          Max : <?= the_field('temperature_maximum'); ?> C&#176;
          Min : <?= the_field('temperature_minimum'); ?> C&#176;
          Moyenne : <?= the_field('temperature_moyenne'); ?> C&#176;
        </p>
      </div>

      <div class="carte__conteneurinfosgenerales">
        <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 25, "..."); ?></p>
        <a class="carte__bouton carte__bouton--actif" href="<?= the_permalink() ?>">Voir plus...</a>
      </div>

    </div>
  </article>
<?php }; ?>