<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="lib/script.js" defer></script>
        <?php require 'alt.php';?>
    
    </head>
    <body>
        <header>
            <section class="burger">
                <section class="burgerBar">
                    <section class="top-bar"></section>
                    <section class="middle-bar"></section>
                    <section class="bottom-bar"></section>
                </section>
                <section id="HamburgerMenu">
                    <a href="Menu.php">Menu</a>
                    <a href="Reserveren.php">Reserveren</a>
                    <a href="Openingstijden.php">Openingstijden</a>
                    <a href="Vacatures.php">Vacatures</a>
                </section>
            </section>
            <img src="images/logo-zwart.png" alt="Vlam en Vlees">  
        </header>
        <main>
            ...
        </main>
        <footer>
                <p>Adresgegevens vlam en vlees<br>
                <?php echo $gegevens;?></p>
                <a href="https://www.google.com/maps/place/Promenade+12,+2711+AR+Zoetermeer/@52.0602235,4.4865454,16.25z/data=!4m6!3m5!1s0x47c5c9287f35438f:0xcd94ee9b861572e9!8m2!3d52.0611814!4d4.4873866!16s%2Fg%2F11spltxyxn?entry=ttu&g_ep=EgoyMDI2MDMwNS4wIKXMDSoASAFQAw%3D%3D"><button class="knop">locaties</button></a>    
        </footer>
    </body>
</html>