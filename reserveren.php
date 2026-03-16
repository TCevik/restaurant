<?php include 'includes/header.php'; ?>

<article style="grid-column: 1 / -1;">
    <h1>Tafel Reserveren</h1>
    <p>Vul het onderstaande formulier in om zeker te zijn van een plekje aan tafel.</p>

    <form id="reserveerForm">
        <label for="naam">Jouw naam:</label><br>
        <input type="text" id="naam" name="naam" required placeholder="Bijv. Tamer Çevik"><br>

        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" required placeholder="jouw@email.nl"><br>

        <label for="datum">Kies een datum:</label><br>
        <input type="date" id="datum" name="datum" required><br>

        <label for="personen">Aantal personen:</label><br>
        <input type="number" id="personen" name="personen" min="1" max="20" required value="2"><br>

        <input type="submit" value="Reserveer Tafel">
    </form>
</article>

<?php include 'includes/footer.php'; ?>