/**
* Script js permettant d'extraire des destinations de voyage 
*/
(function () {

    let method = document.querySelector(".destination").getAttribute('data-method');
    console.log(method);
    const domaine = document.querySelector('base').href;
    // const domaine = window.origin + "/4w4/";
    // const domaine = window.origin + "/4w4_09/";


    (function parcourir_bouton() {
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        categorie__ul__li.forEach(elm => {
            elm.addEventListener("click", afficherDestination);
        })
    })()

    async function afficherDestination(event) {
        const categoryId = event.target.getAttribute('data-destinationID'); // Remplacez par l'ID de la catégorie souhaitée
        const apiUrl = `${domaine}wp-json/wp/v2/posts?${method}=${categoryId}`;
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                const destinationList = document.querySelector('.destination__list');
                // console.log(`data = ` + data);
                destinationList.innerHTML = "";
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add("destination__list__article")
                    console.log(article.title.rendered);

                    articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>
                    <button class="bntArticle"><img src=""></button>
                    <section>
                        ${article.excerpt.rendered}
                        <a href="${article.link}">Lire plus</a>
                    </section>
                `;
                    destinationList.appendChild(articleElement);
                });
                let deroulant = document.querySelectorAll('.destination__list__article');
                deroulant.forEach(elm => {
                    elm.addEventListener("click", afficherTexte);
                })
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



    // async function afficherDestination(event) {
    //     const categoryId = event.target.getAttribute('data-categoryID'); // Remplacez par l'ID de la catégorie souhaitée
    //     // const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    //     console.log(domaine);
    //     fetch(apiUrl)
    //         .then(response => response.json())
    //         .then(data => {
    //             const destinationList = document.querySelector('.destination__list');
    //             // console.log(`data = ` + data);
    //             destinationList.innerHTML = "";
    //             data.forEach(article => {
    //                 const articleElement = document.createElement('div');
    //                 articleElement.classList.add("destination__list__article")
    //                 console.log(article.title.rendered);

    //                 articleElement.innerHTML = `
    //                 <h3>${article.title.rendered}</h3>
    //                 <button class="bntArticle"><img src=""></button>
    //                 <section>
    //                     ${article.excerpt.rendered}
    //                     <a href="${article.link}">Lire plus</a>
    //                 </section>
    //             `;
    //                 destinationList.appendChild(articleElement);
    //             });
    //             let deroulant = document.querySelectorAll('.destination__list__article');
    //             deroulant.forEach(elm => {
    //                 elm.addEventListener("click", afficherTexte);
    //             })
    //         })
    //         .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    // }