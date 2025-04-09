/**
* Script js permettant d'extraire des destinations de voyage 
*/
(function () {

    // const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href;
    // const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;

    (function parcourir_bouton() {
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        categorie__ul__li.forEach(elm => {
            elm.addEventListener("click", afficherDestination);
        })
    })()

    function afficherDestination(event) {
        const categoryId = event.target.getAttribute('data-categoryID'); // Remplacez par l'ID de la catégorie souhaitée
        const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        // idCat = event.target.getAttribute('data-categoryID');
        // categoryId = idCat;
        // console.log(event.target.getAttribute("data-categoryID"));
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
                    <button>...</button>
                    <section>
                        ${article.excerpt.rendered}
                        <a href="${article.link}">Lire plus</a>
                    </section>
                `;
                    let deroulant = document.querySelectorAll('div > button');
                    deroulant.forEach(elm => {
                        elm.addEventListener("click", afficherTexte);
                        console.log(elm)
                    })
                    destinationList.appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }

    function afficherTexte(event) {
        let description = event.target.closest("div").querySelector("section");
        console.log(description);
        description.classList.toggle("affichage");
    }
}
)()