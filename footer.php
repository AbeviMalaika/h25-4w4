<?php //***********************************Page pour le footer/pied de page ?>
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
            <h5 class="piedpage__s1__externe__titre">Liens utiles sur le voyage</h5>
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
                <h5 class="piedpage__s1__description__titre">Notre mission</h5>
                <?php echo $footer_mission; ?>
            </div>
        </section>

        <section class="piedpage__s2">
            <?php get_template_part('gabarits/icones-sociaux'); ?>
            <div class="piedpage__s2__navigation">
                <?php wp_nav_menu(array(
                    "menu" => "principal",
                    "container" => "nav",
                    "container_class" => "piedpage__menu"
                )); ?>
            </div>
        </section>
        <section class="piedpage__s3">
            <h6 class="piedpage__s3__notice">© 2025 Luxe Voyages, Inc. Tous droits réservés.</h6>
        </section>
    </div>
</footer>
<?php wp_footer(); ?>