let menu = document.querySelector("#menu");
let slide = document.querySelector(".slide");
let logo = document.querySelector("#logo");

menu.addEventListener("click", function () {
    if (window.innerWidth <= 1000) { 
        menu.classList.toggle("w-menu");
        logo.classList.toggle("marginleft");
        slide.classList.toggle("open");
    }
    
});

document.addEventListener("click", function (event) {
    if (window.innerWidth <= 1000) { 
        if (!slide.contains(event.target) && event.target !== menu ) {
            slide.classList.remove("open");
            menu.classList.add("w-menu");
            logo.classList.remove("marginleft");
        }
    }
});
