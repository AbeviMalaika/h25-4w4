<?php get_header(); ?>
<section class="hero">
        <div class="hero__contenu global">
            <h1 class="hero__titre">Voyagez Autrement avec Luxe Voyages !</h1>
            <p class="hero__description">
                Plus qu'un voyage, une expérience transformatrice. Notre équipe d'experts est à votre disposition pour organiser un voyage personnalisé selon vos envies.
                Explorez le monde avec élégance et raffinement. Découvrez des destinations uniques et des expériences authentiques.
                Laissez-nous vous guider vers des souvenirs précieux et des moments inoubliables.
            </p>
            <p class="hero__auteur">
                Malaïka Abevi
            </p>
            <p class="hero__courriel">
                <a href="#">info@cmaisonneuve.qc.ca</a>
            </p>
            <p class="hero__adresse">
                3800, rue Sherbrooke Est - Montréal (Québec) H1X 2A2
            </p>
            <p class="hero__telephone">
                514 254-7131
            </p>
            <button class="hero__bntinscription">S'inscrire</button>
            <div class="hero__icone">
                <img class="hero_iconeImg" src="https://s2.svgbox.net/social.svg?ic=facebook&color=ffffff" width="20" height="20">
                <img class="hero_iconeImg" src="https://s2.svgbox.net/social.svg?ic=linkedin&color=ffffff" width="20" height="20">
                <img class="hero_iconeImg" src="https://s2.svgbox.net/social.svg?ic=wordpress&color=ffffff" width="20" height="20">
                <img class="hero_iconeImg" src="https://s2.svgbox.net/social.svg?ic=snapchat&color=ffffff" width="20" height="20">
            </div>
        </div>
    </section>

    <main>
        <div class="formulaire">
            <form class="formulaire__contenu">
                <div class="formulaire__case">
                    <p class="formulaire__information">Nom</p>
                    <input type="text" class="formulaire__input" placeholder="Écrivez votre nom">
                </div>

                <div class="formulaire__case">
                    <p class="formulaire__information">Prénom</p>
                    <input type="text" class="formulaire__input" placeholder="Écrivez votre prénom">
                </div>

                <div class="formulaire__case">
                    <p class="formulaire__information">Courriel</p>
                    <input type="email" class="formulaire__input" placeholder="Écrivez votre courriel">
                </div>

                <div class="formulaire__case">
                    <p class="formulaire__information">Téléphone</p>
                    <input type="tel" class="formulaire__input" placeholder="Écrivez votre téléphone">
                </div>

                <div class="formulaire__case">
                    <button class="formulaire__bntinscription">S'inscrire</button>
                </div>
            </form>
        </div> 
    </main>

    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post();
            if (in_category("galerie")) {
                the_content();
            } else { ?>
            <?php get_template_part('gabarits/carte'); ?>
            <?php } ?>
            <?php endwhile;  endif; ?>
        </div>
    </section>

    <footer></footer>
    <?php get_footer() ?>
</body>
</html>