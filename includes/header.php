<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tamer Çevik">
    <title>Vlam en Vlees Zoetermeer</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="assets/logo_kleur_vlam_en_vlees.png" alt="Het logo van Vlam en Vlees Zoetermeer">
            </a>
        </div>
        <button class="hamburger" id="hamburger" aria-label="Menu openen">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav id="nav-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="lunch-diner.php">Lunch & Diner</a></li>
                <li><a href="locatie.php">Tijden & Locatie</a></li>
                <li><a href="reserveren.php">Reserveren</a></li>
                <li><a href="vacatures.php">Vacatures</a></li>
            </ul>
        </nav>
    </header>
    <!-- Hamburger menu -->
    <script>
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
    </script>
    <main>