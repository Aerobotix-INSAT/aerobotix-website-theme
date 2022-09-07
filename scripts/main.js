console.log("main.js loaded");
//mobile menu
nav = document.querySelector(".navbar");
document.querySelector(".nav-icon").addEventListener("click", function (event) {
    
    nav.classList.toggle("navbar-active");
    nav.childNodes[1].classList.toggle("flex");
}
);
