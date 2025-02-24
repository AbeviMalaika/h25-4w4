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
                <div class="piedpage__s1__adresse_coord">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam ratione beatae fuga laudantium eaque quasi, nobis similique sed voluptatum cum ad dolore necessitatibus dolores mollitia quam voluptatibus maiores doloribus tenetur?
                </div>

                <div class="piedpage__s1__adresse_recherche">
                <?php get_search_form(); ?>
                </div>
            </div>

            <div class="piedpage__s1__description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum dolor provident doloribus molestiae praesentium nesciunt, voluptatibus neque sit? Repellendus qui, autem ea quo doloribus debitis impedit ad distinctio consectetur iure.
            </div>
        </section>

        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>
    </div>
</footer>
<?php wp_footer(); ?>