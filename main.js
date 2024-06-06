document.addEventListener("DOMContentLoaded", function() {
    const menuHamburguesa = document.getElementById("menu-hamburguesa");
    const navMenu = document.getElementById("nav-menu");

    menuHamburguesa.addEventListener("click", function() {
        menuHamburguesa.classList.toggle("open");
        navMenu.classList.toggle("open");
    });
});


