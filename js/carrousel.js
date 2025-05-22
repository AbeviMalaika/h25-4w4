(function () {
    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    let hero__carrousel = document.querySelectorAll(".hero__carrousel");
    let hero__animation = document.querySelectorAll(".hero__animation");
    let index = 0;

    // Ajout d'un écouteur d'évènement pour chaque bouton radio, qui
    // déclencheront la fonction pour changer d'image
    hero__radio__input.forEach((radio) => {
        radio.addEventListener('change', changerImage);
    });

    // Initialisation du du contenu animé dans hero
    hero__animation.forEach(element => {
        element.className = "hero__animation";
    });

    hero__radio__input.forEach(element => {
        if (element.checked) {
            hero__animation[element.getAttribute('data-id_radio')].className = 'hero__animation--active';
        }
    });

    // Initialisation du carrousel
    hero__carrousel.forEach(element => {
        element.className = "hero__carrousel";
    });

    hero__radio__input.forEach(element => {
        if (element.checked) {
            hero__carrousel[element.getAttribute('data-id_radio')].className = 'hero__carrousel--active';
        }
    });


    setInterval(changerImageAutomatique, 5000);

    // Fonction pour changer les images manuellement
    function changerImage(event) {
        hero__carrousel.forEach(element => {
            element.className = 'hero__carrousel';
        });

        hero__animation.forEach(element =>{
            element.className = "hero__animation";
        });

        hero__radio__input.forEach(element => {
            if (element.checked) {
                hero__carrousel[element.getAttribute('data-id_radio')].className = 'hero__carrousel--active';
                hero__animation[element.getAttribute('data-id_radio')].className ='hero__animation--active';
                index = element.getAttribute('data-id_radio');
            }
        });
    }

    // Fonction pour changer les images automatiquement
    function changerImageAutomatique() {
        hero__carrousel.forEach(element => {
            element.className = 'hero__carrousel';
        });

        hero__animation.forEach(element => {
            element.className = 'hero__animation';
        });

        if (index < hero__carrousel.length - 1) {
            index++;
        } else {
            index = 0;
        }

        hero__radio__input.forEach(element => {
            if (element.getAttribute('data-id_radio') == index) {
                element.checked = true;
            }
        })

        hero__carrousel[index].className = 'hero__carrousel--active';
        hero__animation[index].className = 'hero__animation--active'
    }
})()
