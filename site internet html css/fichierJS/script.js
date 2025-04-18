


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
  //focntion pour etre sur du nom recuperer et retouren premiere lettre en majuscule et le reste en minuscule
  function NomCorrect(name) {
    return name.charAt(0).toUpperCase() + name.slice(1).toLowerCase();
  }
// premiere partie de cartes  
 async function ChamionsName() {
    try{
    const data = await fetchName(); 
    const container = document.getElementById("lol");
    const championn =document.querySelectorAll('.index');
   
    //reucperer tous les element avec index et afficher le nom
    championn.forEach(element => {
      let nom = element.value;  
      let championlol =NomCorrect(nom);
  //charger image
    const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
    
    //ajouter en html
    container.innerHTML += `<div class=" bordercartecarte"   >
    <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
    <img src="${image}" alt="${championlol}" class="cartecarte" />
    <a href="Page.html?champion=${championlol}" class="page white">Description</a>
  </div>
  
    `;
  
  
});  
    }catch(error) {
      console.error("Erreur lors du fetch des challengers :", error);
    };
    
  }
  //afficher sur le html direct
  window.addEventListener('DOMContentLoaded', () => {
    ChamionsName();
});
//deuxieme partie
async function ChamionsName1() {
  try{
  const data = await fetchName(); 
  const container = document.getElementById("lol1");
  const championn =document.querySelectorAll('.index1');
 
  
  championn.forEach(element => {
    let nom = element.value;
    let championlol =NomCorrect(nom);

  const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
  
  
  container.innerHTML += `<div class=" bordercartecarte">
      <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
      <img src="${image}" alt="${championlol}" class="cartecarte" />
      <a href="Page.html?champion=${championlol}" class="page white">Description</a>
    </div>
      `;
    
    
  });  
  }catch(error) {
    console.error("Erreur lors du fetch des challengers :", error);
  };
  
}
window.addEventListener('DOMContentLoaded', () => {
  ChamionsName1();
});

//troiseme partie
async function ChamionsName2() {
  try{
  const data = await fetchName(); 
  const container = document.getElementById("lol2");
  const championn =document.querySelectorAll('.index2');
 
  
  championn.forEach(element => {
    let nom = element.value;
    let championlol =NomCorrect(nom);

  const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
  
  
    container.innerHTML += `<div class=" bordercartecarte">
      <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
      <img src="${image}" alt="${championlol}" class="cartecarte" />
      <a href="Page.html?champion=${championlol}" class="page white">Description</a>
    </div>
      `;
    
    
  });
  }catch(error) {
    console.error("Erreur lors du fetch des challengers :", error);
  };
  
}
window.addEventListener('DOMContentLoaded', () => {
  ChamionsName2();
});


//quatreime partie
async function ChamionsName3() {
  try{
  const data = await fetchName(); 
  const container = document.getElementById("lol3");
  const championn =document.querySelectorAll('.index3');
 
  
  championn.forEach(element => {
    let nom = element.value;
    let championlol =NomCorrect(nom);

  const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
  
  
    container.innerHTML += `<div class=" bordercartecarte">
      <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
      <img src="${image}" alt="${championlol}" class="cartecarte" />
      <a href="Page.html?champion=${championlol}" class="page white">Description</a>
    </div>
      `;
    
    
  });
  }catch(error) {
    console.error("Erreur lors du fetch des challengers :", error);
  };
  
}
window.addEventListener('DOMContentLoaded', () => {
  ChamionsName3();
});

//cinquieme partie
async function ChamionsName4() {
  try{
  const data = await fetchName(); 
  const container = document.getElementById("lol4");
  const championn =document.querySelectorAll('.index4');
 
  
  championn.forEach(element => {
    let nom = element.value;
    let championlol =NomCorrect(nom);

  const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
  
  
    container.innerHTML += `<div class=" bordercartecarte">
      <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
      <img src="${image}" alt="${championlol}" class="cartecarte" />
      <a href="Page.html?champion=${championlol}" class="page white">Description</a>
    </div>
      `;
    
    
  });
  }catch(error) {
    console.error("Erreur lors du fetch des challengers :", error);
  };
  
}
window.addEventListener('DOMContentLoaded', () => {
  ChamionsName4();
});

//sixieme partie 
async function ChamionsName5() {
  try{
  const data = await fetchName(); 
  const container = document.getElementById("lol5");
  const championn =document.querySelectorAll('.index5');
 
  
  championn.forEach(element => {
    let nom = element.value;
    let championlol =NomCorrect(nom);

  const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
  
  
    container.innerHTML += `<div class=" bordercartecarte">
      <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
      <img src="${image}" alt="${championlol}" class="cartecarte" />
      <a href="Page.html?champion=${championlol}" class="page white">Description</a>
    </div>
      `;
    
    
  });
  }catch(error) {
    console.error("Erreur lors du fetch des challengers :", error);
  };
  
}
window.addEventListener('DOMContentLoaded', () => {
  ChamionsName5();
});

//septieme partie
async function ChamionsName6() {
  try{
  const data = await fetchName(); 
  const container = document.getElementById("lol6");
  const championn =document.querySelectorAll('.index6');
 
  
  championn.forEach(element => {
    let nom = element.value;
    let championlol =NomCorrect(nom);

  const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
  
  
    container.innerHTML += `<div class=" bordercartecarte">
      <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
      <img src="${image}" alt="${championlol}" class="cartecarte" />
      <a href="Page.html?champion=${championlol}" class="page white">Description</a>
    </div>
      `;
    
    
  });
  }catch(error) {
    console.error("Erreur lors du fetch des challengers :", error);
  };
  
}
window.addEventListener('DOMContentLoaded', () => {
  ChamionsName6();
});

//huitieme partie
async function ChamionsName7() {
  try{
  const data = await fetchName(); 
  const container = document.getElementById("lol7");
  const championn =document.querySelectorAll('.index7');
 
  
  championn.forEach(element => {
    let nom = element.value;
    let championlol =NomCorrect(nom);

  const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
  
  
    container.innerHTML += `<div class=" bordercartecarte">
      <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
      <img src="${image}" alt="${championlol}" class="cartecarte" />
      <a href="Page.html?champion=${championlol}" class="page white">Description</a>
    </div>
      `;
    
    
  });
  }catch(error) {
    console.error("Erreur lors du fetch des challengers :", error);
  };
  
}
window.addEventListener('DOMContentLoaded', () => {
  ChamionsName7();
});

//neuvieme partie
async function ChamionsName8() {
  try{
  const data = await fetchName(); 
  const container = document.getElementById("lol8");
  const championn =document.querySelectorAll('.index8');
 
  
  championn.forEach(element => {
    let nom = element.value;
    let championlol =NomCorrect(nom);

  const image = `https://ddragon.leagueoflegends.com/cdn/img/champion/loading/${championlol}_0.jpg`;
  
  
    container.innerHTML += `<div class=" bordercartecarte">
      <p class="d-flex justify-content-center">${data.data[championlol].id}</p>
      <img src="${image}" alt="${championlol}" class="cartecarte" />
      <a href="Page.html?champion=${championlol}" class="page white">Description</a>
    </div>
      `;
    
    
  });
  }catch(error) {
    console.error("Erreur lors du fetch des challengers :", error);
  };
  
}
window.addEventListener('DOMContentLoaded', () => {
  ChamionsName8();
});
