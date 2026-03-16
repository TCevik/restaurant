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
    <h2>Lunchkaart (12:00 tot 15:00)</h2>
    <img src="https://placehold.co/800x300/E75C1E/ffffff?text=Lunch+Gerechten" alt="Een overzicht van onze verse lunchgerechten, waaronder belegde broodjes en salades." loading="lazy" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 15px;">
    
    <details open>
        <summary style="font-size: 1.2rem; font-weight: bold; cursor: pointer; padding: 10px 0; border-bottom: 1px solid #ccc;">Koude Broodjes & Salades</summary>
        <ul>
            <li class="gerecht vlees">
                <strong>Broodje Carpaccio</strong> - € 10,50<br>
                <em>Met truffelmayonaise, rucola, pijnboompitten en Parmezaanse kaas.</em>
            </li>
            <li class="gerecht vega">
                <strong>Gezonde Salade Geitenkaas</strong> 🌱 - € 11,00<br>
                <em>Frisse salade met warme geitenkaas, walnoten en honing-mosterddressing.</em>
            </li>
        </ul>
    </details>

    <details>
        <summary style="font-size: 1.2rem; font-weight: bold; cursor: pointer; padding: 10px 0; border-bottom: 1px solid #ccc;">Warme Lunch</summary>
        <ul>
            <li class="gerecht vlees">
                <strong>Broodje Pulled Pork</strong> - € 9,50<br>
                <em>Huisgemaakt, 12 uur gegaard op eikenhout, met verse koolsla.</em>
            </li>
            <li class="gerecht vlees">
                <strong>Vlam Tosti XL</strong> - € 6,50<br>
                <em>Extra grote tosti met pittige kaas, beenham en Vlam-saus.</em>
            </li>
            <li class="gerecht vega">
                <strong>Pikante Tomatensoep</strong> 🌱 - € 5,50<br>
                <em>Huisgemaakte soep geserveerd met boerenbrood en kruidenboter.</em>
            </li>
        </ul>
    </details>
</article>

<article>
    <h2>Dinerkaart (17:00 tot 22:00)</h2>
    <img src="https://placehold.co/800x300/8F2C00/ffffff?text=Diner+Gerechten" alt="Grote stukken vlees en verse groenten op een stoere houten serveerplank." loading="lazy" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 15px;">
    
    <details open>
        <summary style="font-size: 1.2rem; font-weight: bold; cursor: pointer; padding: 10px 0; border-bottom: 1px solid #ccc;">Voorgerechten</summary>
        <ul>
            <li class="gerecht vlees">
                <strong>Rundercarpaccio</strong> - € 12,00<br>
                <em>Klassiek bereid met pesto, rucola en oude kaas.</em>
            </li>
            <li class="gerecht vega">
                <strong>Gegrilde Halloumi</strong> 🌱 - € 10,50<br>
                <em>Gegrilde Cypriotische kaas met een frisse tomatensalsa.</em>
            </li>
        </ul>
    </details>

    <details>
        <summary style="font-size: 1.2rem; font-weight: bold; cursor: pointer; padding: 10px 0; border-bottom: 1px solid #ccc;">Hoofdgerechten van de Grill</summary>
        <ul>
            <li class="gerecht vlees">
                <strong>Spareribs Sweet & Spicy</strong> - € 21,00<br>
                <em>Onze klassieker! Malse ribs die van het bot vallen.</em>
            </li>
            <li class="gerecht vlees">
                <strong>T-Bone Steak (500g)</strong> - € 35,00<br>
                <em>Voor de grote trek. Perfect gegrild, inclusief dikke frites.</em>
            </li>
            <li class="gerecht vlees">
                <strong>Gegrilde Kip spies</strong> - € 19,50<br>
                <em>Malse kippendijen gemarineerd in knoflook en kruiden.</em>
            </li>
            <li class="gerecht vega">
                <strong>Gegrilde Groenteschotel</strong> 🌱 - € 18,00<br>
                <em>Seizoensgroenten met kruidenolie en gepofte aardappel.</em>
            </li>
        </ul>
    </details>

    <details>
        <summary style="font-size: 1.2rem; font-weight: bold; cursor: pointer; padding: 10px 0; border-bottom: 1px solid #ccc;">Desserts</summary>
        <ul>
            <li class="gerecht vega">
                <strong>Dame Blanche</strong> 🌱 - € 7,50<br>
                <em>Vanille-ijs met warme chocoladesaus en slagroom.</em>
            </li>
            <li class="gerecht vega">
                <strong>Gegrilde Ananas</strong> 🌱 - € 8,00<br>
                <em>Met een bolletje kokosijs en karamelsaus.</em>
            </li>
        </ul>
    </details>
</article>

<?php include 'includes/footer.php'; ?>