document.addEventListener("DOMContentLoaded", function () {
    const burgerOpen = document.querySelector("#mobileMenuOpen");
    const burgerClose = document.querySelector("#mobileMenuClose");
    const menu = document.querySelector("#mobileMenu");
    if (!burgerOpen || !menu) return;
    (document.body.clientWidth < 999) ? menu.style.display = "block" : "none";

    burgerOpen.addEventListener("click", function () {
        menu.classList.toggle("header__mobile-menu--active");
        document.body.classList.toggle('no-scroll');
    })
    burgerClose.addEventListener("click", function () {
        menu.classList.toggle("header__mobile-menu--active");
        document.body.classList.toggle('no-scroll');
    })
})