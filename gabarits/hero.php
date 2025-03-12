<?php
/*
*Template part pour la zone hero
*/
?>
<?php 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_background = get_theme_mod('hero_background', ''); 
$hero_texteColo = get_theme_mod('hero_texteColo', '');
?>
<section class="hero" style="background-image: url(<?php echo $hero_background; ?>);"> 
    <div class="hero__contenu global">
        <h1 class="hero__titre"><?= bloginfo('name')  ?></h1>
        <p class="hero__description" style="color: <?php echo $hero_texteColo; ?>;">
        <?= bloginfo('description')  ?>
        </p>
        <p class="hero__auteur">
            Autrice : <?php echo $hero_auteur; ?>
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
        <button class="hero__bntinscription">S'inscrire</button>
        <?php get_template_part('gabarits/icones-sociaux'); ?>
    </div>
</section>