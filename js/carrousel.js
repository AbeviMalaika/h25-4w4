(function () {
    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    let hero__carrousel = document.querySelectorAll(".hero__carrousel");
    let index = 0;

    hero__radio__input.forEach(element => {
        addEventListener('change', changerImage);
    });


    // setInterval(changerImage, 5000);

    function changerImage(event) {
        hero__carrousel.forEach(element => {
            element.className = 'hero__carrousel';
        });

        hero__carrousel[event.target.getAttribute('data-id_radio')].className = 'hero__carrousel--active';
        // console.log("coucou");
        

        // hero__carrousel.forEach(element => {
        // });
    }
})()
// console.log(hero__carrousel[ element.getAttribute('data-id_radio')])
// hero__carrousel[ element.getAttribute('data-id_radio')].style.opacity
// console.log(event.target.getAttribute('data-id_radio'));
// hero__carrousel[event.target.getAttribute('data-id_radio')].style.opacity = 1;

/*


forEach()
element



*/