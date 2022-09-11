console.log("main.js loaded");
//mobile menu
var nav = document.querySelector(".navbar");
var nav_icon = document.querySelector(".nav-icon");
nav_icon.addEventListener("click", function (event) {
  nav.classList.toggle("navbar-active");
  nav.childNodes[1].classList.toggle("flex");
  if (menu.classList.contains("wrapped")) menu.classList.toggle("hidden");
});

