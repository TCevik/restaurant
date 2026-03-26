document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("nav-menu");
    
    if (hamburger && navMenu) {
        hamburger.addEventListener("click", function () {
            // Wissel de 'open' klasse op de hamburger en 'active' op het menu, en update de toegankelijkheid
            const isOpen = hamburger.classList.toggle("open");
            navMenu.classList.toggle("active");
            hamburger.setAttribute("aria-expanded", isOpen);
        });
    }
});
