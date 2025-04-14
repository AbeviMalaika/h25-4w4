(function(){
    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    let hero__carrousel = document.querySelectorAll(".hero__carrousel");
    let index = 0;

    hero__radio__input.forEach(element => {
        if(element.getAttribute('checked') == "checked"){
            // console.log(hero__carrousel[ element.getAttribute('data-id_radio')])
            console.log(hero__carrousel[index]);
            // hero__carrousel[ element.getAttribute('data-id_radio')].style.opacity
           
            // console.log("C'est checked");
        }
    });

    setInterval(changerImage, 5000);

    function changerImage(){
        if(index < 2){
            index++;
            console.log(index);
        }else{
            index = 0;
        }
    } 
})()

