


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
function fetchName() {
    return fetch("https://ddragon.leagueoflegends.com/cdn/14.7.1/data/fr_FR/champion.json", {
      method: 'GET'
    })
      .then((response) => response.json());
    }
    
    function NomCorrect(name) {
      return name.charAt(0).toUpperCase() + name.slice(1).toLowerCase();
    }
  // premiere partie de cartes  
   async function ChamionsNamee() {
      try{
      const data = await fetchName(); 
      const container = document.getElementById("loll");
      const championn =document.querySelectorAll('.indexx');
     
      
      championn.forEach(element => {
        let nom = element.value;
        let championlol =NomCorrect(nom);
    
      const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
      
      
      container.innerHTML += `<div class="d-flex flex-colum bordercarte">
          <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
          <img src="${image}" alt="${championlol}" class="cartecarte_collection" class="cartecarte" />
          <p class="d-flex justify-content-center"> Attaque: ${data.data[championlol].info.attack} <br> Défense: ${data.data[championlol].info.defense} <br> Magique: ${data.data[championlol].info.magic}</p> 
          </div>
          `;
        
        
      });  
      }catch(error) {
        console.error("Erreur lors du fetch des challengers :", error);
      };
      
    }
    window.addEventListener('DOMContentLoaded', () => {
      ChamionsNamee();
  });
  //deuxieme partie
  async function ChamionsNamee1() {
    try{
    const data = await fetchName(); 
    const container = document.getElementById("loll1");
    const championn =document.querySelectorAll('.indexx1');
   
    
    championn.forEach(element => {
      let nom = element.value;
      let championlol =NomCorrect(nom);
  
    const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
    
    
    container.innerHTML += `<div class="d-flex flex-colum bordercarte ">
        <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
        <img src="${image}" alt="${championlol}"  class="cartecarte_collection" />
        <p class="d-flex justify-content-center"> Attaque: ${data.data[championlol].info.attack} <br> Défense: ${data.data[championlol].info.defense} <br> Magique: ${data.data[championlol].info.magic}</p> 
          
        </div>
        
        `;
      
      
    });  
    }catch(error) {
      console.error("Erreur lors du fetch des challengers :", error);
    };
    
  }
  window.addEventListener('DOMContentLoaded', () => {
    ChamionsNamee1();
  });
  
  //troiseme partie
  async function ChamionsNamee2() {
    try{
    const data = await fetchName(); 
    const container = document.getElementById("loll2");
    const championn =document.querySelectorAll('.indexx2');
   
    
    championn.forEach(element => {
      let nom = element.value;
      let championlol =NomCorrect(nom);
  
    const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
    
    
    container.innerHTML += `<div class="d-flex flex-colum bordercarte">
        <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
        <img src="${image}" alt="${championlol}" class="cartecarte_collection" class="cartecarte" />
        <p class="d-flex justify-content-center"> Attaque: ${data.data[championlol].info.attack} <br> Défense: ${data.data[championlol].info.defense} <br> Magique: ${data.data[championlol].info.magic}</p> 
      </div>
        `;
      
      
    });  
    }catch(error) {
      console.error("Erreur lors du fetch des challengers :", error);
    };
    
  }
  window.addEventListener('DOMContentLoaded', () => {
    ChamionsNamee2();
  });
  
  
  //quatreime partie
  async function ChamionsNamee3() {
    try{
    const data = await fetchName(); 
    const container = document.getElementById("loll3");
    const championn =document.querySelectorAll('.indexx3');
   
    
    championn.forEach(element => {
      let nom = element.value;
      let championlol =NomCorrect(nom);
  
    const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
    
    
    container.innerHTML += `<div class="d-flex flex-colum bordercarte">
        <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
        <img src="${image}" alt="${championlol}" class="cartecarte_collection" class="cartecarte" />
        <p class="d-flex justify-content-center"> Attaque: ${data.data[championlol].info.attack} <br> Défense: ${data.data[championlol].info.defense} <br> Magique: ${data.data[championlol].info.magic}</p> 
      </div>
        `;
      
      
    });  
    }catch(error) {
      console.error("Erreur lors du fetch des challengers :", error);
    };
    
  }
  window.addEventListener('DOMContentLoaded', () => {
    ChamionsNamee3();
  });
  
  //cinquieme partie
  async function ChamionsNamee4() {
    try{
    const data = await fetchName(); 
    const container = document.getElementById("loll4");
    const championn =document.querySelectorAll('.indexx4');
   
    
    championn.forEach(element => {
      let nom = element.value;
      let championlol =NomCorrect(nom);
  
    const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
    
    
    container.innerHTML += `<div class="d-flex flex-colum bordercarte">
        <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
        <img src="${image}" alt="${championlol}" class="cartecarte_collection" class="cartecarte" />
        <p class="d-flex justify-content-center"> Attaque: ${data.data[championlol].info.attack} <br> Défense: ${data.data[championlol].info.defense} <br> Magique: ${data.data[championlol].info.magic}</p> 
      </div>
        `;
      
      
    });  
    }catch(error) {
      console.error("Erreur lors du fetch des challengers :", error);
    };
    
  }
  window.addEventListener('DOMContentLoaded', () => {
    ChamionsNamee4();
  });
  
  //sixieme partie 
  async function ChamionsNamee5() {
    try{
    const data = await fetchName(); 
    const container = document.getElementById("loll5");
    const championn =document.querySelectorAll('.indexx5');
   
    
    championn.forEach(element => {
      let nom = element.value;
      let championlol =NomCorrect(nom);
  
    const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
    
    
    container.innerHTML += `<div class="d-flex flex-colum bordercarte">
        <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
        <img src="${image}" alt="${championlol}" class="cartecarte_collection" class="cartecarte" />
        <p class="d-flex justify-content-center"> Attaque: ${data.data[championlol].info.attack} <br> Défense: ${data.data[championlol].info.defense} <br> Magique: ${data.data[championlol].info.magic}</p> 
      </div>
        `;
      
      
    });  
    }catch(error) {
      console.error("Erreur lors du fetch des challengers :", error);
    };
    
  }
  window.addEventListener('DOMContentLoaded', () => {
    ChamionsNamee5();
  });
  
  //septieme partie
  async function ChamionsNamee6() {
    try{
    const data = await fetchName(); 
    const container = document.getElementById("loll6");
    const championn =document.querySelectorAll('.indexx6');
   
    
    championn.forEach(element => {
      let nom = element.value;
      let championlol =NomCorrect(nom);
  
    const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
    
    
    container.innerHTML += `<div class="d-flex flex-colum bordercarte">
        <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
        <img src="${image}" alt="${championlol}" class="cartecarte_collection" class="cartecarte" />
        <p class="d-flex justify-content-center"> Attaque: ${data.data[championlol].info.attack} <br> Défense: ${data.data[championlol].info.defense} <br> Magique: ${data.data[championlol].info.magic}</p> 
      </div>
        `;
      
      
    });  
    }catch(error) {
      console.error("Erreur lors du fetch des challengers :", error);
    };
    
  }
  window.addEventListener('DOMContentLoaded', () => {
    ChamionsNamee6();
  });
  
  //huitieme partie
  async function ChamionsNamee7() {
    try{
    const data = await fetchName(); 
    const container = document.getElementById("loll7");
    const championn =document.querySelectorAll('.indexx7');
   
    
    championn.forEach(element => {
      let nom = element.value;
      let championlol =NomCorrect(nom);
  
    const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
    
    
    container.innerHTML += `<div class="d-flex flex-colum bordercarte">
        <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
        <img src="${image}" alt="${championlol}" class="cartecarte_collection" class="cartecarte" />
        <p class="d-flex justify-content-center"> Attaque: ${data.data[championlol].info.attack} <br> Défense: ${data.data[championlol].info.defense} <br> Magique: ${data.data[championlol].info.magic}</p> 
      </div>
        `;
      
      
    });  
    }catch(error) {
      console.error("Erreur lors du fetch des challengers :", error);
    };
    
  }
  window.addEventListener('DOMContentLoaded', () => {
    ChamionsNamee7();
  });
  
  //neuvieme partie
  async function ChamionsNamee8() {
    try{
    const data = await fetchName(); 
    const container = document.getElementById("loll8");
    const championn =document.querySelectorAll('.indexx8');
   
    
    championn.forEach(element => {
      let nom = element.value;
      let championlol =NomCorrect(nom);
  
    const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
    
    
    container.innerHTML += `<div class="d-flex flex-colum bordercarte">
        <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
        <img src="${image}" alt="${championlol}" class="cartecarte_collection" class="cartecarte" />
        <p class="d-flex justify-content-center"> Attaque: ${data.data[championlol].info.attack} <br> Défense: ${data.data[championlol].info.defense} <br> Magique: ${data.data[championlol].info.magic}</p> 
      </div>
        `;
      
      
    });  
    }catch(error) {
      console.error("Erreur lors du fetch des challengers :", error);
    };
    
  }
  window.addEventListener('DOMContentLoaded', () => {
    ChamionsNamee8();
  });
  