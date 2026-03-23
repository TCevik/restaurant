document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("nav-menu");
    
    if (hamburger && navMenu) {
        hamburger.addEventListener("click", function () {
            const isOpen = hamburger.classList.toggle("open");
            navMenu.classList.toggle("active");
            hamburger.setAttribute("aria-expanded", isOpen);
        });
    }
});
