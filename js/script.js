let checkbox = document.getElementById("checkboxburger");
let body = document.querySelector("body");
let menu = document.getElementsByClassName("entete__navigation")[0];
let entreeMobile = true;
checkbox.addEventListener("click", gererCheckbox);
setInterval(verificationEtatMenu, 1000/60);

// Fonction pour afficher et cacher le menu en mobile
function gererCheckbox() {
  console.log("coucou")
    //si la checkbox est cochée 
    if(checkbox.checked) 
      {
        //-afficher menu
        menu.style.transform = "translateX(0)";
      }   
      //sinon 
      else
      {
        //-cacher menu
        menu.style.transform = "translateX(-100%)";
      }

    //On cherche les liens du menu:
    let mesLiens = document.querySelectorAll("a");
    //On attache un écouteur d'évènement click sur chacun d'eux:
    for (let i = 0; i < mesLiens.length; i++) {
      mesLiens[i].addEventListener("click", gererLiens);

      function gererLiens() 
      {
        //- cacher menu
        menu.style.transform = "translateX(-100%)";
        //- decocher la checkbox (pour faire revenir le burger)
        checkbox.checked = false; 
      }
    }
} 

// Fonction pour vérifier si le viewport est à un format Desktop pour ramener 
// le menu en place et de même pour la version mobile 
function verificationEtatMenu(){
  if(Math.max(document.documentElement.clientWidth) >= 800){
    checkbox.checked = true;
    menu.style.transform = "translateX(0)";
    entreeMobile = false;
  } else if (!entreeMobile){
    checkbox.checked = false;
    menu.style.transform = "translateX(-100%)";
    entreeMobile = true;
  }
}
