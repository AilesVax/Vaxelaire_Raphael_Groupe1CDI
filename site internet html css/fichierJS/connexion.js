
let email = document.querySelector('#emailC')
let remind = localStorage.getItem("email"); //cle 
 
//pour stocker la valeur dans le localstrage
email.value = remind;

email.addEventListener("input", () => {
    localStorage.setItem("email", email.value); //cle , valeur
}); 