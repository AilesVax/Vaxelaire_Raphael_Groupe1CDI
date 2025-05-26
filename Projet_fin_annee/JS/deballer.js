let butOuvrir = document.getElementById('ouvrir');





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


// premiere partie de cartes  
async function ChamionsNamee() {
    try {
        const data = await fetchName();
        const container = document.getElementById("loll");
        const championn = document.querySelectorAll('.indexx');


        championn.forEach(element => {
            let nom = element.value;
            let championlol = NomCorrect(nom);

            const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;


            container.innerHTML += `<div class=" bordercarte">
          <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
          <img src="${image}" alt="${championlol}" class="cartecarte_collection" class="cartecarte" />
          <p class="d-flex justify-content-center"> Attaque: ${data.data[championlol].info.attack} <br> Défense: ${data.data[championlol].info.defense} <br> Magique: ${data.data[championlol].info.magic}</p> 
          </div>
          `;


        });
    } catch (error) {
        console.error("Erreur lors du fetch des challengers :", error);
    };

}

let time = new Date();
let heure = time.getHours();

localStorage.setItem('heure', heure); //cle , valeur
let now = localStorage.getItem('heure');

butOuvrir.addEventListener("click", function () {
    ChamionsNamee();
    console.log("Heure sauvegardée :", now);
    // console.log("Heure sauvegardée :", moreTime);
    
    setTimeout(() => {
        localStorage.setItem('heure', now);

    }, 50000);

})
