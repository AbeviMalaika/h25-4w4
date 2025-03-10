<!-- SECTION ENTÊTE -->
<?php get_header(); ?>

<!-- SECTION HERO -->
<?php get_template_part('gabarits/hero'); ?>

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
            ?> 
            <div class="populaire__articles">
                <?php } else { ?>
                <?php get_template_part('gabarits/carte'); ?>
                <?php } ?>
                <?php endwhile;  endif; ?>
            </div>
        </div>
    </section>

    <?php get_footer() ?>
</body>
</html>