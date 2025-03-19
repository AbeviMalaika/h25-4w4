<?php
/* 
* Template part pour la carte
*/
?>

<?php
// Variable pour avoir les informations de la catégorie de la page
$categorie_page = get_category(get_query_var('cat'));
// Variable pour avoir le nom de la catégorie de la page
$categorie_nom = $categorie_page->cat_name;
// Variable pour avoir la liste de catégories de l'article
$liste_categories = get_the_category();
// Variable pour avoir le nombre total de catégorie dans un article
$total_categorie = count($liste_categories);
?>

<?php
/* Pour les cartes, on ne veut pas de carte "galerie", dont on vérifie si 
   l'article appartient à la catégorie "galerie". Si elle y appartient, la carte
   ne sera pas créée.
*/
if (!(in_category("galerie"))) {
?>
	<article class="carte">
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
				/* 
				On ne veut pas que la catégorie de la page même apparaisse dans
				la carte d'un article, sinon c'est redondant. Alors on vérifie les
				catégorie de l'article et on affiche des catégories seulement si
				elles ne sont pas identique à celle de la page
				*/
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

				<?php // On appelle la fonction pour la gestion du nombre affiché pour une température; 
				?>
				<p class="carte__temperature__valeurs">
					Max : <?= affichage_temperature('temperature_maximum', 20, 30); ?> C&#176;
					Min : <?= affichage_temperature('temperature_minimum', -15, 20); ?> C&#176;
					Moyenne : <?= affichage_temperature('temperature_moyenne', 15, 25); ?> C&#176;
				</p>
			</div>

			<div class="carte__conteneurinfosgenerales">
				<p class="carte__description"><?php echo wp_trim_words(get_the_content(), 25, "..."); ?></p>
				<a class="carte__bouton carte__bouton--actif" href="<?= the_permalink() ?>">Voir plus...</a>
			</div>

		</div>
	</article>
<?php }; ?>