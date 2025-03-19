<?php
/*
*Template part pour les îcones de réseaux sociaux
*/
?>

<?php 
// Déclarations des variables qui contient les données venant du customizer
$hero_icones = get_theme_mod('hero_icones', 'ffffff');
?>

<div class="icones">
    <img class="iconeImg" src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $hero_icones ?>" width="20" height="20">
    <img class="iconeImg" src="https://s2.svgbox.net/social.svg?ic=linkedin&color=<?= $hero_icones ?>" width="20" height="20">
    <img class="iconeImg" src="https://s2.svgbox.net/social.svg?ic=wordpress&color=<?= $hero_icones ?>" width="20" height="20">
    <img class="iconeImg" src="https://s2.svgbox.net/social.svg?ic=snapchat&color=<?= $hero_icones ?>" width="20" height="20">
</div>