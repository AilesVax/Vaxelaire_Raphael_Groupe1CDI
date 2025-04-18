function getChampionFromURL() {
    const params = new URL(window.location.href);
    return params.searchParams.get("champion");
}

function NomCorrect(name) {
    return name.charAt(0).toUpperCase() + name.slice(1).toLowerCase();
}

function fetchName() {
    return fetch("https://ddragon.leagueoflegends.com/cdn/14.7.1/data/fr_FR/champion.json")
        .then((response) => response.json());
}

async function afficherChampion() {
    const nomChampion = getChampionFromURL();
    const data = await fetchName();
    const container = document.getElementById("PageCarte");
    const championlol = NomCorrect(nomChampion);
    const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;

    container.innerHTML = `
    <div class"responsiveee">
    <div class="bordercartecarte2 d-flex justify-content-center">
        <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
        <img src="${image}" alt="${championlol}" class="cartecarte_collection" />
        <p class="d-flex justify-content-center">
            Attaque: ${data.data[championlol].info.attack} <br> 
            Défense: ${data.data[championlol].info.defense} <br> 
            Magique: ${data.data[championlol].info.magic}
        </p> 
    </div>
    <div class="card-description d-flex flex-colum ">
        <p>${data.data[championlol].blurb}</p>
        <p class="d-flex justify-content-center margtop"><strong>${data.data[championlol].title}</strong></p>
        <p class="d-flex justify-content-center margtop">${data.data[championlol].tags}</p>
    </div>
    </div>
`;

}

window.addEventListener('DOMContentLoaded', afficherChampion);
