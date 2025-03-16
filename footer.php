<?php 
$footer_telephone = get_theme_mod('footer_telephone', '(123) 456-7890');
$footer_adresse = get_theme_mod('footer_adresse', '1234 rue Sherbrooke Est'); 
$footer_courriel = get_theme_mod('footer_courriel', 'courriel@mail.com');
$footer_mission = get_theme_mod('footer_mission', 'Mission du club de voyage');
?>
<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>

            <div class="piedpage__s1__coord">
                <div class="piedpage__s1__coord__infos">
                    <h5 class="piedpage__s1__coord__infos__titre">Nos coordonnées</h5>
                    <p class="piedpage__s1__coord__infos_adresse"><?php echo $footer_adresse; ?></p>
                    <p class="piedpage__s1__coord__infos_telephone"><?php echo $footer_telephone; ?></p>
                    <p class="piedpage__s1__coord__infos_courriel"><?php echo $footer_courriel; ?></p>
                    
                </div>

                <div class="piedpage__s1__coord_recherche">
                    <?php get_search_form(); ?>
                </div>
            </div>

            <div class="piedpage__s1__description">
                <?php echo $footer_mission; ?>
            </div>
        </section>

        <section class="piedpage__s2">
            <div class="piedpage__s2__icone">
                <img class="piedpage__s2__icone__img" src="https://s2.svgbox.net/social.svg?ic=facebook&color=ffffff" width="20" height="20">
                <img class="piedpage__s2__icone__img" src="https://s2.svgbox.net/social.svg?ic=linkedin&color=ffffff" width="20" height="20">
                <img class="piedpage__s2__icone__img" src="https://s2.svgbox.net/social.svg?ic=wordpress&color=ffffff" width="20" height="20">
                <img class="piedpage__s2__icone__img" src="https://s2.svgbox.net/social.svg?ic=snapchat&color=ffffff" width="20" height="20">
            </div>
            <div class="piedpage__s2__navigation">
                <?php wp_nav_menu(array(
                    "menu" => "principal",
                    "container" => "nav",
                    "container_class" => "piedpage__menu"
                ));?>
            </div>
        </section>
        <!-- <section class="piedpage__s3"></section> -->
    </div>
</footer>
<?php wp_footer(); ?>