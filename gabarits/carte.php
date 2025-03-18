<?php
/* 
* Template part pour la carte
*/
?>

<?php
$categorie_page = get_category(get_query_var('cat'));
$categorie_nom = $categorie_page->cat_name;
$liste_categories = get_the_category();
$total_categorie = count($liste_categories);
// print_r($categorie_nom);
?>

<?php
/* Pour les cartes, on ne veut pas de carte "galerie", dont on vérifie si 
   l'article appartient à la catégorie "galerie". Si elle y appartient, la carte
   ne sera pas créée.
*/
if (!(in_category("galerie"))) {
?>
  <article class="carte carte--grande">
  <div class="carte__image">
        <?php
        if (has_post_thumbnail()) {
          the_post_thumbnail('medium');
        }
        ?>
      </div>
    <div class="carte__contenu">


      <h4 class="carte__titre"><?php the_title(); ?></h4>
      <div>

      </div>
      <div class="carte__categorie">
        <?php

        if ($total_categorie > 1) { ?>
          <h6 class="carte__categorie__titre">Autres catégorie(s) : </h6>
        <?php  }
        ?>
        <ul class="carte__categorie__liste">
          <?php
          for ($x = 0; $x < $total_categorie; $x++) {
            $categorie = $liste_categories[$x]->name;
            if ($categorie != $categorie_nom) {
          ?>
              <li class="carte__categorie__liste__tag">
                <a href="<?php echo get_category_link($liste_categories[$x]->term_id); ?>"> <?php print_r($liste_categories[$x]->name); ?> </a>
              </li>
          <?php
            }
          } ?>
        </ul>
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

<!-- the_category(); -->