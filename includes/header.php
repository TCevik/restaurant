<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <!-- Belangrijk voor responsive webdesign -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Jouw naam in de meta tags zoals gevraagd -->
    <meta name="author" content="Tamer Çevik">
    <title>Vlam en Vlees Zoetermeer</title>
    <!-- Maximaal 2 css bestanden: wij gebruiken er 1 voor alles -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <!-- Duidelijke ALT tekst voor de logo afbeelding -->
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
    <!-- Script voor het hamburger menu -->
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
    <!-- De main tag begint hier en sluit in footer.php, dit is semantisch correct -->
    <main>