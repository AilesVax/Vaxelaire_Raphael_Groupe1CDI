    function NomCorrect(name) {
        return name.charAt(0).toUpperCase() + name.slice(1).toLowerCase();
    }
    // connection a l'API
    function fetchName() {
        return fetch("https://ddragon.leagueoflegends.com/cdn/14.7.1/data/fr_FR/champion.json", {
            method: 'GET'
        })
            .then((response) => response.json());
    }

    //huitieme partie
    async function ChamionsName7() {
        try {
            const data = await fetchName();
            const container = document.getElementById("lol7");
            const championn = document.querySelectorAll('.index7');
           


            championn.forEach((element) => {
                let nom = element.value;
                let championlol = NomCorrect(nom);
                let id = parseInt(element.dataset.id);
                const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;


                container.innerHTML += `
        <div class=" bordercartecarte">
        
            <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
            <img src="${image}" alt="${championlol}" class="cartecarte" />  
            <form method="get">
                <input type="hidden" name="favorie" value="${id}" />
                <button type="submit">Retirer des Favoris</button>
            </form>
            <a href="Page.php?champion=${championlol}" class="page white">Description</a>
            

        </div>
        
        `;


            });
        } catch (error) {
            console.error("Erreur lors du fetch des challengers :", error);
        };

    }
    window.addEventListener('DOMContentLoaded', () => {
        ChamionsName7();
    });

    //neuvieme partie
    async function ChamionsName8() {
        try {
            const data = await fetchName();
            const container = document.getElementById("lol8");
            const championn = document.querySelectorAll('.index8');
            

            championn.forEach((element) => {
                let nom = element.value;
                let championlol = NomCorrect(nom);
                let id = parseInt(element.dataset.id);

                
                const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;

                container.innerHTML += `
            <div class="bordercartecarte">
            <p>${data.data[championlol].id}</p>
            <img src="${image}" alt="${championlol}" class="cartecarte" />
            <form method="get">
                <input type="hidden" name="favorie" value="${id}" />
                <button type="submit">Ajouter au Favoris</button>
            </form>
            <a href="Page.php?champion=${championlol}" class="page white">Description</a>
            </div>
        `;
            });
        } catch (error) {
            console.error("Erreur lors du fetch des challengers :", error);
        }
    }


    window.addEventListener('DOMContentLoaded', () => {
        ChamionsName8();
    });
