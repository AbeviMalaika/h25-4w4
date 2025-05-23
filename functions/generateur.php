<?php

/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug)
{
    // Récupérer la catégorie parente à partir de son slug
    $parent_category = get_category_by_slug($parent_slug);
    // Vérifier si la catégorie parente existe
    if ($parent_category) {
        $parent_id = $parent_category->term_id;
        // Récupérer les sous-catégories de "destination"
        $sous_categories = get_categories(array(
            'parent' => $parent_id, // Filtrer par le parent "destination"
            'hide_empty' => true, // Ne pas afficher les catégories vides
        ));

        // Vérifier s'il y a des sous-catégories
        if (!empty($sous_categories)) {
            echo '<ul class="categorie__ul">';
            foreach ($sous_categories as $categorie) {
                // Afficher le nom de chaque sous-catégorie
                echo '<li  data-categoryID="' . esc_html($categorie->term_id) . '" tabindex="1" " class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
            }
            echo '</ul>';
        } else {
            echo 'Aucune sous-catégorie trouvée pour "' . esc_html($parent_slug) . '".';
        }
    } else {
        echo 'La catégorie "' . esc_html($parent_slug) . '" n\'existe pas.';
    }
}

/**
 * Génére une vague en svg
 * @param string $couleur la couleur de la vague
 */
function genere_vague($couleur, $grandeur, $positionnement)
{ ?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="vague" style="height: <?php echo $grandeur; ?>; top: <?php echo $positionnement; ?>px">
        <path fill="<?php echo $couleur; ?>" fill-opacity="1"
            d="M0,224L30,186.7C60,149,120,75,180,74.7C240,75,300,149,360,160C420,171,480,117,540,112C600,107,660,149,720,149.3C780,149,840,107,900,101.3C960,96,1020,128,1080,128C1140,128,1200,96,1260,96C1320,96,1380,128,1410,144L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            <animate
                attributeName="d"
                values="     
                M0,224L30,186.7C60,149,120,75,180,74.7C240,75,300,149,360,160C420,171,480,117,540,112C600,107,660,149,720,149.3C780,149,840,107,900,101.3C960,96,1020,128,1080,128C1140,128,1200,96,1260,96C1320,96,1380,128,1410,144L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z;
                M0,128L30,122.7C60,117,120,107,180,122.7C240,139,300,181,360,176C420,171,480,117,540,101.3C600,85,660,107,720,133.3C780,160,840,192,900,218.7C960,245,1020,267,1080,234.7C1140,203,1200,117,1260,112C1320,107,1380,181,1410,218.7L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z;
                M0,224L30,186.7C60,149,120,75,180,74.7C240,75,300,149,360,160C420,171,480,117,540,112C600,107,660,149,720,149.3C780,149,840,107,900,101.3C960,96,1020,128,1080,128C1140,128,1200,96,1260,96C1320,96,1380,128,1410,144L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z;
                "
                dur="10s"
                repeatCount="indefinite" />
        </path>
    </svg>
<?php  }

/**
 * Génére une icone de réseaux sociaux
 * @param string $reseau l'image de l'icone du reseau social
 * @param string $lien_reseau le lien vers le reseau social
 * @param string $couleur la couleur de l'icone
 */
function genere_icone($reseau, $lien_reseau, $couleur)
{ ?>
    <a href="<?= $lien_reseau; ?>"><img class="iconeImg" src="https://s2.svgbox.net/social.svg?ic=<?= $reseau ?>&color=<?= $couleur ?>" width="20" height="20"></a>
<?php  }
