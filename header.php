<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="js/script.js" defer></script>
    <title>Club de voyage</title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                ?>
                <!-- <img src="images/logo_luxe_voyage.png" alt="Le logo de Luxe Voyage"> -->
            </figure>
            <input type="checkbox" id="checkboxburger" aria-label="checkbox" />
            <label for="checkboxburger" class="entete__burger">
                <div class="entete__traitburger"></div>
                <div class="entete__traitburger"></div>
                <div class="entete__traitburger"></div>
            </label>
            <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    "menu" => "principal",
                    "container" => "nav",
                    "container_class" => "entete__menu"
                ));?>
                <?php get_search_form(); ?>
            </div> <!-- fin entete__navigation -->
        </div>
    </header>