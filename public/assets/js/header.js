document.addEventListener("scroll", function () {
    const navbar = document.getElementById("mainNavbar");
    const mainLogo = document.getElementById("mainLogo");
    const navbarLogo = document.getElementById("navbarLogo");

    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
        navbarLogo.classList.remove("d-none");
        mainLogo.style.opacity = "0";
    } else {
        navbar.classList.remove("scrolled");
        navbarLogo.classList.add("d-none");
        mainLogo.style.opacity = "1";
    }
});
