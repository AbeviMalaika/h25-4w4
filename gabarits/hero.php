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



for ($k = 0; $k<3; $k++){
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, '');
}

?>
<section class="hero">

<div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[0]; ?>);"></div> 
<div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[1]; ?>);"></div> 
<div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[2]; ?>);"></div>    

<div class="hero__contenu global">
        <p class="hero__promo"><?php echo $hero_promo; ?></p>
        <h1 class="hero__titre"><?= bloginfo('name')  ?></h1>
        <p class="hero__description" style="color: <?php echo $hero_texteColo; ?>;">
            <?= bloginfo('description')  ?>
        </p>
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

        <?php get_template_part('gabarits/icones-sociaux'); ?>
    </div>
</section>