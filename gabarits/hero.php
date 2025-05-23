<?php
/*
* Template part pour la zone hero
*/
?>
<?php
// Déclarations des variables qui contient les données venant du customizer
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_promo = get_theme_mod('hero_promo', 'Texte de mise en avant');
$hero_telephone = get_theme_mod('hero_telephone', '(123) 456-7890');
$hero_adresse = get_theme_mod('hero_adresse', '1234 rue Sherbrooke Est');
$hero_courriel = get_theme_mod('hero_courriel', 'courriel@mail.com');
$hero_texteColo = get_theme_mod('hero_texteColo', '');
$hero_nbimagescarrousel = get_theme_mod('hero_nbimagescarrousel', '1');

for ($k = 0; $k < $hero_nbimagescarrousel; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, '');
}

// Déclarations des variables qui contient les données venant du customizer
$hero_couleur_icones = get_theme_mod('hero_icones', 'ffffff');

// Déclarations des variables pour les icones de reseaux sociaux 
$hero_nb_icones = get_theme_mod('hero_nb_icones', 1);
for ($k = 0; $k < $hero_nb_icones; $k++) {
    $hero_icones[$k] = get_theme_mod('hero_icones_' . $k, 'wordpress');
}

for ($k = 0; $k < $hero_nb_icones; $k++) {
    $hero_lien_reseaux[$k] = get_theme_mod('hero_lien_reseaux_' . $k, 'https://github.com/AbeviMalaika/h25-4w4');
}

?>
<section class="hero">

    <!-- Affichage dynamique des images du carrousel -->
    <?php
    for ($k = 0; $k < $hero_nbimagescarrousel; $k++) {
    ?>

        <div class="hero__carrousel" style="background-image: linear-gradient(to bottom, rgba(26, 107, 152, 0.3), rgba(26, 107, 152, 1)), url(<?php echo $hero_background[$k]; ?>);"></div>

    <?php
    }
    ?>

    <!-- Affichage dynamique des boutons radio du carrousel -->
    <div class="hero__radio">
        <?php
        for ($k = 0; $k < $hero_nbimagescarrousel; $k++) {
            if ($k == 0) {
        ?>
                <div class="hero__radio__container">
                    <input class="hero__radio__input" data-id_radio="<?php echo $k; ?>" type="radio" name="carrousel" checked>
                    <label for="carrousel<?php echo $k; ?>"><img src="" alt=""></label>
                </div>

            <?php
            } else {
            ?>
                <div class="hero__radio__container">
                    <input class="hero__radio__input" data-id_radio="<?php echo $k; ?>" type="radio" name="carrousel">
                    <label for="carrousel<?php echo $k; ?>"><img src="" alt=""></label>
                </div>
            <?php
            }
            ?>
        <?php
        }
        ?>
    </div>

    <div class="hero__contenu global">
        <div class="hero__animation hero__animation--active">
            <p class="hero__promo"><?php echo $hero_promo; ?></p>
            <h1 class="hero__titre"><?= bloginfo('name')  ?></h1>
            <p class="hero__description" style="color: <?php echo $hero_texteColo; ?>;">
                <?= bloginfo('description')  ?>
            </p>
        </div>

        <div class="hero__animation">
            <p class="hero__promo">Le leader québécois des escapades en ligne</p>
            <h1 class="hero__titre">Voyagez luxueusement</h1>
            <p class="hero__description" style="color: <?php echo $hero_texteColo; ?>;">
                Embarquez pour des souvenirs inoubliables.
            </p>
        </div>

        <div class="hero__animation">
            <p class="hero__promo">Le meilleur choix pour vos aventures</p>
            <h1 class="hero__titre">Destinations luxueuses</h1>
            <p class="hero__description" style="color: <?php echo $hero_texteColo; ?>;">
                Découvrez des destinations exclusives
            </p>
        </div>

        <div class="hero__animation">
            <p class="hero__promo">Répondez à l’appel du monde</p>
            <h1 class="hero__titre">Club par excellence</h1>
            <p class="hero__description" style="color: <?php echo $hero_texteColo; ?>;">
                Le raffinement et l'aventure, main dans la main
            </p>
        </div>

        <div class="hero__animation">
            <p class="hero__promo">Le luxe au bout du monde, à votre portée</p>
            <h1 class="hero__titre">En quête de souvenir</h1>
            <p class="hero__description" style="color: <?php echo $hero_texteColo; ?>;">
                Laissez-vous guider par votre soif d’exploration
            </p>
        </div>

        <button class="hero__bntinscription">S'inscrire</button>

        <div class="hero__coord">
            <h4 class="hero__coord__titre">Nos coordonnées</h4>
            <div class="hero__coord__infos">
                <p class="hero__auteur">
                    Autrice : <?php echo $hero_auteur; ?>
                </p>
                <p class="hero__courriel">
                    <a href="#"> <?php echo $hero_courriel; ?> </a>
                </p>
                <p class="hero__adresse">
                    <?php echo $hero_adresse; ?>
                </p>
                <p class="hero__telephone">
                    <?php echo $hero_telephone; ?>
                </p>
            </div>
        </div>

        <div class="icones">
            <?php
            for ($k = 0; $k < $hero_nb_icones; $k++) {
                echo genere_icone($hero_icones[$k], $hero_lien_reseaux[$k], $hero_couleur_icones);
            }
            ?>
        </div>
    </div>
</section>