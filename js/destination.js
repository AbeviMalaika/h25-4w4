/**
* Script js permettant d'extraire des destinations de voyage 
*/
(function () {

    const domaine = window.location.href;

    (function parcourir_bouton() {
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        categorie__ul__li.forEach(elm => {
            elm.addEventListener("click", afficherDestination);
        })
    })()

    function afficherDestination(event) {
        const categoryId = event.target.getAttribute('data-categoryID'); // Remplacez par l'ID de la catégorie souhaitée
        const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                const destinationTitre = document.querySelector('.destination__titre');
                // console.log(data);
                destinationList.innerHTML = "";
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add("destination__list__article")

                    articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>
                    <button><img src="https://s2.svgbox.net/octicons.svg?ic=chevron-down"></button>
                    <section class="disparition">
                        ${article.excerpt.rendered}
                        <a href="${article.link}">Lire plus</a>
                    </section>
                `;
                    let deroulant = document.querySelectorAll('div > button');
                    deroulant.forEach(elm => {
                        elm.addEventListener("click", afficherTexte);
                    })
                    destinationList.appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }

    function afficherTexte(event) {
        let description = event.target.closest("div").querySelector("section");
        event.target.classList.toggle("contenuAffiche");
        description.classList.toggle("affichage");
        description.classList.toggle("disparition");
    }
}
)()