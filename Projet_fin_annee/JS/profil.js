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

 async function ChamionsNam() {
        try {
            const data = await fetchName();
            const container = document.getElementById("lo");
            const championn = document.querySelectorAll('.inde');
           


            championn.forEach((element) => {
                let nom = element.value;
                let championlol = NomCorrect(nom);
                let id = parseInt(element.dataset.id);
                const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;


                container.innerHTML += `
        <div class=" bordercartecarte with">
        
            <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
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
        };

    }
    window.addEventListener('DOMContentLoaded', () => {
        ChamionsNam();
    });

 async function ChamionsName() {
        try {
            const data = await fetchName();
            const container = document.getElementById("lol");
            const championn = document.querySelectorAll('.index');
           


            championn.forEach((element) => {
                let nom = element.value;
                let championlol = NomCorrect(nom);
                let id = parseInt(element.dataset.id);
                const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;


                container.innerHTML += `
        <div class=" bordercartecarte with">
        
            <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
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
        };

    }
    window.addEventListener('DOMContentLoaded', () => {
        ChamionsName();
    });
   

    
 async function ChamionsName1() {
        try {
            const data = await fetchName();
            const container = document.getElementById("lol1");
            const championn = document.querySelectorAll('.index1');
           


            championn.forEach((element) => {
                let nom = element.value;
                let championlol = NomCorrect(nom);
                let id = parseInt(element.dataset.id);
                const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;


                container.innerHTML += `
        <div class=" bordercartecarte with">
        
            <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
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
        };

    }
    window.addEventListener('DOMContentLoaded', () => {
        ChamionsName1();
    });
async function ChamionsName2() {
        try {
            const data = await fetchName();
            const container = document.getElementById("lol2");
            const championn = document.querySelectorAll('.index2');
           


            championn.forEach((element) => {
                let nom = element.value;
                let championlol = NomCorrect(nom);
                let id = parseInt(element.dataset.id);
                const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;


                container.innerHTML += `
        <div class=" bordercartecarte with">
        
            <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
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
        };

    }
    window.addEventListener('DOMContentLoaded', () => {
        ChamionsName2();
    });


async function ChamionsName3() {
        try {
            const data = await fetchName();
            const container = document.getElementById("lol3");
            const championn = document.querySelectorAll('.index3');
           


            championn.forEach((element) => {
                let nom = element.value;
                let championlol = NomCorrect(nom);
                let id = parseInt(element.dataset.id);
                const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;


                container.innerHTML += `
        <div class=" bordercartecarte with">
        
            <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
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
        };

    }
    window.addEventListener('DOMContentLoaded', () => {
        ChamionsName3();
    });


async function ChamionsName4() {
        try {
            const data = await fetchName();
            const container = document.getElementById("lol4");
            const championn = document.querySelectorAll('.index4');
           


            championn.forEach((element) => {
                let nom = element.value;
                let championlol = NomCorrect(nom);
                let id = parseInt(element.dataset.id);
                const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;


                container.innerHTML += `
        <div class=" bordercartecarte with">
        
            <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
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
        };

    }
    window.addEventListener('DOMContentLoaded', () => {
        ChamionsName4();
    });


    async function ChamionsName5() {
        try {
            const data = await fetchName();
            const container = document.getElementById("lol5");
            const championn = document.querySelectorAll('.index5');
           


            championn.forEach((element) => {
                let nom = element.value;
                let championlol = NomCorrect(nom);
                let id = parseInt(element.dataset.id);
                const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;


                container.innerHTML += `
        <div class=" bordercartecarte with">
        
            <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
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
        };

    }
    window.addEventListener('DOMContentLoaded', () => {
        ChamionsName5();
    });


    async function ChamionsName6() {
        try {
            const data = await fetchName();
            const container = document.getElementById("lol6");
            const championn = document.querySelectorAll('.index6');
           


            championn.forEach((element) => {
                let nom = element.value;
                let championlol = NomCorrect(nom);
                let id = parseInt(element.dataset.id);
                const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;


                container.innerHTML += `
        <div class=" bordercartecarte with">
        
            <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
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
        };

    }
    window.addEventListener('DOMContentLoaded', () => {
        ChamionsName6();
    });

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
        <div class=" bordercartecarte with">
        
            <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
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
            <div class="bordercartecarte with">
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


    async function ChamionsNamefav() {
        try {
            const data = await fetchName();
            const container = document.getElementById("lolfav");
            const championn = document.querySelectorAll('.indexfav');
           


            championn.forEach((element) => {
                let nom = element.value;
                let championlol = NomCorrect(nom);
                let id = parseInt(element.dataset.id);
                const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;


                container.innerHTML += `
        <div class=" bordercartecarte with">
        
            <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
            <img src="${image}" alt="${championlol}" class="cartecarte" />  
            <form method="get">
                <input type="hidden" name="favorie" value="${id}" />
                <button type="submit">Retirer au Favoris</button>
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
        ChamionsNamefav();
    });