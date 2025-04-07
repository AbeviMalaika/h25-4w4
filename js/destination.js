/**
* Script js permettant d'extraire des destinations de voyage 
*/
(function(){

// const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
const domaine = window.location.href;
// const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;

(function parcourir_bouton(){
    const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
    categorie__ul__li.forEach(elm => {
        elm.addEventListener("click", afficherDestination);
    })
})()

function afficherDestination(event){
    const categoryId = event.target.getAttribute('data-categoryID'); // Remplacez par l'ID de la catégorie souhaitée
    const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    // idCat = event.target.getAttribute('data-categoryID');
    // categoryId = idCat;
    console.log(event.target.getAttribute("data-categoryID"));
    fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
        const destinationList = document.querySelector('.destination__list');
        // console.log(data);
        destinationList.innerHTML = "";
        data.forEach(article => {
            const articleElement = document.createElement('div');
            
            articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>
                    <p>${article.excerpt.rendered}</p>
                    <a href="${article.link}">Lire plus</a>
                `;
            destinationList.appendChild(articleElement);
        });
    })
    .catch(error => console.error('Erreur lors de la récupération des articles:', error));
}    
}
)()