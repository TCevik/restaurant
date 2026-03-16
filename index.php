<?php 
// Header inladen via PHP
include 'includes/header.php'; 
?>

<!-- Semantische elementen zoals article gebruikt -->
<article style="grid-column: 1 / -1;">
    <h1>Welkom bij Vlam en Vlees</h1>
    <p>De beste grill van Zoetermeer. Geniet van authentiek bereide vleesgerechten, rechtstreeks van het vuur. Bereid je voor op een smaaksensatie!</p>
    <!-- Afbeelding met duidelijke ALT tekst -->
    <img src="assets/restaurant-binnenkant.png" alt="Een gezellige foto van ons restaurant vol met blije gasten">
</article>

<article>
    <h2>Over ons</h2>
    <p>We werken alleen met de beste ingrediënten. Onze koks hebben jarenlange ervaring met de houtskoolgrill.</p>
    <a href="lunch-diner.php"><button>Bekijk ons menu</button></a>
</article>

<article>
    <h2>Kom snel langs!</h2>
    <p>Trek gekregen? Reserveer makkelijk online een tafel of kom spontaan langs.</p>
    <a href="reserveren.php"><button>Nu Reserveren</button></a>
</article>

<?php 
// Footer inladen via PHP
include 'includes/footer.php'; 
?>