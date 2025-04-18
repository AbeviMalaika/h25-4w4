(function () {
    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    let hero__carrousel = document.querySelectorAll(".hero__carrousel");
    let index = 0;

    // Ajout d'un écouteur d'évènement pour chaque bouton radio, qui
    // déclencheront la fonction pour changer d'image
    hero__radio__input.forEach(element => {
        addEventListener('change', changerImage);
    });

    // Initialisation du carrousel
    hero__carrousel.forEach(element => {
        element.className = "hero__carrousel";
    });

    hero__radio__input.forEach(element => {
        if (element.checked) {
            console.log(hero__carrousel[element.getAttribute('data-id_radio')])
            hero__carrousel[element.getAttribute('data-id_radio')].className = 'hero__carrousel--active';
        }
    });


    setInterval(changerImageAutomatique, 5000);

    // Fonction pour changer les images manuellement
    function changerImage(event) {
        hero__carrousel.forEach(element => {
            element.className = 'hero__carrousel';
        });

        hero__radio__input.forEach(element => {
            if (element.checked) {
                hero__carrousel[element.getAttribute('data-id_radio')].className = 'hero__carrousel--active';
                index = element.getAttribute('data-id_radio');
            }
        });
    }

    // Fonction pour changer les images automatiquement
    function changerImageAutomatique() {
        console.log(index);
        // On applique à toutes les images 
        hero__carrousel.forEach(element => {
            element.className = 'hero__carrousel';
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
    }
})()
