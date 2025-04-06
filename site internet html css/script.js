


//MOde sombre 
// let sombre = document.querySelector("#sbr")
// let fond = document.querySelector("body")
// let border = document.querySelectorAll('.bb')
// sombre.addEventListener("click",function(){
//     fond.classList.toggle('black')
//     fond.classList.toggle('white')
//     border.forEach(border => {
//         border.classList.toggle('borderwhite'); 
// });
// })
// https://EUW1.api.riotgames.com/lol/league/v4/challengerleagues/by-queue/RANKED_SOLO_5x5



// connection a l'API
function fetchChallengerPlayers() {
    return fetch('https://euw1.api.riotgames.com/lol/league/v4/challengerleagues/by-queue/RANKED_SOLO_5x5', {
      method: 'GET',
      headers: {
        'X-Riot-Token': 'RGAPI-1091449e-15e6-4c83-bf77-7c3abaca6715'
      }
    })
    .then((response) => response.json());
  }
  
// fonction pour afficher les données de l'API  en fonction de quelle nombre on met 
 async function displayChallengerPlayers() {
    try{
    const data = await fetchChallengerPlayers(); 
    const container = document.getElementById("lol");
    const index = parseInt(document.getElementById('index').value- 1);
    container.innerHTML='';
    
    container.innerHTML += `<p>Joueur ${index + 1}: ${data.entries[index].leaguePoints} LP - ${data.entries[index].wins} wins - ${data.entries[index].losses} loose</p>`;
      
      
    }catch(error) {
      console.error("Erreur lors du fetch des challengers :", error);
    };
    
  }
  
  