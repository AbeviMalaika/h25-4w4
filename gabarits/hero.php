<?php
/*
*Template part pour la zone hero
*/
?>
<?php 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_background = get_theme_mod('hero_background', ''); 
?>
<section class="hero" style="background-image: url(<?php echo $hero_background; ?>);"> 
    <div class="hero__contenu global">
        <h1 class="hero__titre"><?= bloginfo('name')  ?></h1>
        <p class="hero__description">
        <?= bloginfo('description')  ?>
        </p>
        <p class="hero__auteur">
            Malaïka Abevi
        </p>
        <p class="hero__courriel">
            <a href="#"> <?= bloginfo('admin_email')  ?></a>
        </p>
        <p class="hero__adresse">
            3800, rue Sherbrooke Est - Montréal (Québec) H1X 2A2
        </p>
        <p class="hero__telephone">
            514 254-7131
        </p>
        <p class="hero__auteur">Auteur : <?php echo $hero_auteur; ?></p>
        <button class="hero__bntinscription">S'inscrire</button>
        <?php get_template_part('gabarits/icones-sociaux'); ?>
    </div>
</section>