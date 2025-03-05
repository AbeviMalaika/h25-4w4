<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Proza+Libre:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
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