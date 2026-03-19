<?php include 'includes/header.php'; ?>

<section class="accessibility-panel">
    <h2>Digitaal Toegankelijk Menu</h2>
    <p>Pas de website aan naar jouw wensen met de onderstaande knoppen.</p>
    <div class="toegankelijkheid-knoppen">
        <button onclick="toggleDarkMode()">Light / Dark Modus</button>
        <button onclick="toggleLargeText()">Lettertype Vergroten</button>
        <button onclick="toggleHighContrast()">Verhoogd Contrast</button>
        <button onclick="toggleHighlightLinks()">Links markeren</button>
    </div>
</section>

<section class="filter-panel">
    <h3>Snel zoeken:</h3>
    <div class="filter-buttons">
        <button onclick="filterMenu('alles')">Alles tonen</button>
        <button onclick="filterMenu('vega')">Alleen Vegetarisch 🌱</button>
        <button onclick="filterMenu('vlees')">Alleen Vlees 🥩</button>
    </div>
</section>
<br>

<article>
    <h2>Voorgerechten & Snacks</h2>
    <img src="assets/voorgerechten.png" loading="lazy" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 15px;">
    
    <details open>
        <summary style="font-size: 1.2rem; font-weight: bold; cursor: pointer; padding: 10px 0; border-bottom: 1px solid #ccc;">Onze Klassiekers</summary>
        <ul>
            <li class="gerecht vlees">
                <strong>BBQ Nacho's</strong> - € 9,50<br>
                <em>Tortillachips met pulled pork, cheddar, jalapeños, BBQ-saus en zure room.</em>
            </li>
            <li class="gerecht vlees">
                <strong>Smoked Wings</strong> - € 8,50<br>
                <em>Gerookte kippenvleugels met keuze uit: BBQ, Buffalo of Honey-Sriracha saus.</em>
            </li>
            <li class="gerecht vega">
                <strong>Uienringen</strong> 🌱 - € 6,50<br>
                <em>Krokante uienringen met ranch dressing.</em>
            </li>
        </ul>
    </details>
</article>

<article>
    <h2>Van de Smoker & Hoofdgerechten</h2>
    <img src="assets/hoofdgerechten.png" loading="lazy" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 15px;">
    
    <p><em>Alle onderstaande hoofdgerechten worden geserveerd met coleslaw en maiskolf.</em></p>

    <details open>
        <summary style="font-size: 1.2rem; font-weight: bold; cursor: pointer; padding: 10px 0; border-bottom: 1px solid #ccc;">Gerookte Specialiteiten</summary>
        <ul>
            <li class="gerecht vlees">
                <strong>Beef Brisket</strong> - € 24,50<br>
                <em>14 uur lang gerookt rundvlees, gekruid met onze eigen rub.</em>
            </li>
            <li class="gerecht vlees">
                <strong>Pulled Pork</strong> - € 19,50<br>
                <em>Langzaam gegaard varkensvlees met BBQ-saus.</em>
            </li>
            <li class="gerecht vlees">
                <strong>Baby Back Ribs</strong><br>
                <em>Halve rack • € 19,50 / Hele rack • € 28,50</em><br>
                <em>Malse varkensribbetjes met BBQ-glazuur.</em>
            </li>
            <li class="gerecht vlees">
                <strong>Smoked Chicken</strong> - € 18,50<br>
                <em>Halve kip, langzaam gerookt met kruiden.</em>
            </li>
        </ul>
    </details>

    <details>
        <summary style="font-size: 1.2rem; font-weight: bold; cursor: pointer; padding: 10px 0; border-bottom: 1px solid #ccc;">BBQ Platters</summary>
        <ul>
            <li class="gerecht vlees">
                <strong>The Pitmaster</strong> - € 32,50<br>
                <em>Combinatie van brisket, pulled pork en ribs.</em>
            </li>
            <li class="gerecht vlees">
                <strong>Family Feast</strong> (2-3 pers.) - € 59,50<br>
                <em>Selectie van al onze BBQ-specialiteiten.</em>
            </li>
        </ul>
    </details>
</article>

<?php include 'includes/footer.php'; ?>