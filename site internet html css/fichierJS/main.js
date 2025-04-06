

//li et lu les TAB
let li = document.querySelectorAll('.tab')
let div= document.querySelectorAll('.content')
let contenu = document.querySelector('.nomDuContenu')
let contenu1 = document.querySelector('.nomDuContenu1')
let contenu2 = document.querySelector('.nomDuContenu2')
let contenu3 = document.querySelector('.nomDuContenu3')
let contenu4 = document.querySelector('.nomDuContenu4')
let contenu5 = document.querySelector('.nomDuContenu5')
let contenu6 = document.querySelector('.nomDuContenu6')
let contenu7 = document.querySelector('.nomDuContenu7')
let contenu8 = document.querySelector('.nomDuContenu8')
let contenu9 = document.querySelector('.nomDuContenu9')

let coeurVide = document.querySelectorAll(".coeur_vide")
let coeurPlein = document.querySelectorAll(".coeur_plein")

li.forEach(lis => {
    
    lis.addEventListener("click",function(){
        // effacer la classe de la couleur rouge de toutes les li
        li.forEach(li =>{
            li.classList.remove('tab-active')
            li.classList.remove('borderrb')    
        })
        // effacer la classe des div 
        div.forEach((div =>{
            div.classList.remove('active')   
        }))
        // en rajoute ces classes sur la li cliquer
        this.classList.add('tab-active');  
        this.classList.add('borderrb'); 
        
        if (this.classList.contains('tab-nomDuContenu1')) {
            contenu1.classList.add('active');
        } else if (this.classList.contains('tab-nomDuContenu2')) {
            contenu2.classList.add('active');
        } else if (this.classList.contains('tab-nomDuContenu3')) {
            contenu3.classList.add('active');
        } else if (this.classList.contains('tab-nomDuContenu')) {
            contenu.classList.add('active');
        } else if (this.classList.contains('tab-nomDuContenu4')) {
            contenu4.classList.add('active');
        } else if (this.classList.contains('tab-nomDuContenu5')) {
            contenu5.classList.add('active');
        } else if (this.classList.contains('tab-nomDuContenu6')) {
            contenu6.classList.add('active');
        } else if (this.classList.contains('tab-nomDuContenu7')) {
            contenu7.classList.add('active');
        } else if (this.classList.contains('tab-nomDuContenu8')) {
            contenu8.classList.add('active');
        } else if (this.classList.contains('tab-nomDuContenu9')) {
            contenu9.classList.add('active');
        }    
    })
    
})

coeurVide.forEach(coeurVide => {
    coeurVide.addEventListener("click", function() {
      const coeurplein = this.parentElement.querySelector('.coeur_plein');
      this.classList.toggle("disp");
      coeurplein.classList.toggle("disp");
    });
  });
 coeurPlein.forEach(coeurPlein => {
    coeurPlein.addEventListener("click", function() {
      const coeurvide = this.parentElement.querySelector('.coeur_vide');
      this.classList.toggle("disp");
      coeurvide.classList.toggle("disp");
    });
  });


  let fleche = document.querySelector("#fleche")
  let choix = document.querySelectorAll(".dis")
  
  fleche.addEventListener("click", function(){

          fleche.classList.add("disp");
          choix.forEach(element => {
              element.classList.toggle("dis");
          });
      
  });

