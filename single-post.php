    <?php get_header() ?>
    <section class="destination"> 
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="destination__article">
                        <div class="destination__image">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('large');
                            }
                            ?>
                        </div>
                        <div class="destination__contenu">
                            <h2 class="destination__contenu__titre"><?php the_title(); ?></h2>
                            <div class="destination__contenu__categorie">
                                <h6 class="destination__contenu__categorie__titre">Catégorie(s) : </h6>
                                <?= the_category(); ?>
                            </div>
                            <div class="destination__contenu__temperature">
                                <h6 class="destination__contenu__temperature__titre">Températures : </h6>
                                <p class="destination__contenu__temperature__valeurs">
                                    Max : <?= the_field('temperature_maximum'); ?> C&#176;
                                    Min : <?= the_field('temperature_minimum'); ?> C&#176;
                                    Moyenne : <?= the_field('temperature_moyenne'); ?> C&#176;
                                </p>
                            </div>
                            <div class="destination__contenu__description"><?php the_content(); ?></div>
                        </div>
                    </article>
            <?php endwhile;
            endif; ?>
        </div>
    </section>
    <?php get_footer() ?>
    </body>

    </html>