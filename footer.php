<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                )); ?>
            </div>

            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    <h5 class="piedpage__s1__adresse__coord__titre">Nos coordonnées</h5>
                    <p>3800, rue Sherbrooke Est - Montréal (Québec) H1X 2A2</p>
                    <p>514 254-7131</p>
                    <p>communic@cmaisonneuve.qc.ca</p>
                </div>

                <div class="piedpage__s1__adresse_recherche">
                    <?php get_search_form(); ?>
                </div>
            </div>

            <div class="piedpage__s1__description">
                LUXE VOYAGES vous invite à vivre des escapades exceptionnelles. Offrez-vous des destinations prestigieuses, un service personnalisé et un voyage alliant confort et raffinement. Explorez le monde autrement, avec élégance et sophistication, grâce à nos expériences sur-mesure. Voyagez avec LUXE, voyagez inoubliable.
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