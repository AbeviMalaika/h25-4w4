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

    async function afficherDestination(event) {
        const categoryId = event.target.getAttribute('data-categoryID'); // Remplacez par l'ID de la catégorie souhaitée
        const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                // console.log(data);
                destinationList.innerHTML = "";
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add("destination__list__article")

                    articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>
                    <button class="bntArticle"><img src=""></button>
                    <section>
                        ${article.excerpt.rendered}
                        <a href="${article.link}">Lire plus</a>
                    </section>
                `;
                let deroulant = document.querySelectorAll('.bntArticle');
                console.log(deroulant);
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
        event.target.closest("button").classList.toggle("ouvert");
        description.classList.toggle("affichage");
    }
}
)()