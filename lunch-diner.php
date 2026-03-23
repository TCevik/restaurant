<?php include 'includes/header.php'; ?>

<!-- Toegankelijkheid opties -->
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

<!-- Filter opties voor het menu -->
<section class="filter-panel">
    <h3>Snel zoeken:</h3>
    <div class="filter-buttons">
        <button onclick="filterMenu('alles')">Alles tonen</button>
        <button onclick="filterMenu('vega')">Alleen Vegetarisch 🌱</button>
        <button onclick="filterMenu('vlees')">Alleen Vlees 🥩</button>
    </div>
</section>
<br>

<!-- Gerechten secties -->
<article>
    <h2>Voorgerechten & Snacks</h2>
    <img src="assets/voorgerechten.png" alt="Heerlijke voorgerechten en snacks" loading="lazy" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 15px;">
    
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
    <img src="assets/hoofdgerechten.png" alt="Malse hoofdgerechten vers van de smoker" loading="lazy" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 15px;">
    
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

<article>
    <h2>Bijgerechten & Sauzen</h2>
    <details>
        <summary style="font-size: 1.2rem; font-weight: bold; cursor: pointer; padding: 10px 0; border-bottom: 1px solid #ccc;">Sides</summary>
        <ul>
            <li class="gerecht vega"><strong>Mac 'n Cheese</strong> - € 4,50</li>
            <li class="gerecht vega"><strong>Geroosterde Groenten</strong> 🌱 - € 4,00</li>
            <li class="gerecht vega"><strong>Zoete Aardappel Friet</strong> 🌱 - € 4,50</li>
            <li class="gerecht vega"><strong>Aardappel Wedges</strong> 🌱 - € 4,00</li>
            <li class="gerecht vega"><strong>Extra Coleslaw</strong> 🌱 - € 3,50</li>
        </ul>
    </details>

    <details>
        <summary style="font-size: 1.2rem; font-weight: bold; cursor: pointer; padding: 10px 0; border-bottom: 1px solid #ccc;">Sauzen (€ 1,50 per stuk)</summary>
        <ul>
            <li class="gerecht vega">Classic BBQ</li>
            <li class="gerecht vega">Honey Mustard</li>
            <li class="gerecht vega">Spicy Chipotle</li>
            <li class="gerecht vega">Alabama White Sauce</li>
        </ul>
    </details>
</article>

<article>
    <h2>Desserts</h2>
    <details>
        <summary style="font-size: 1.2rem; font-weight: bold; cursor: pointer; padding: 10px 0; border-bottom: 1px solid #ccc;">Zoete Afsluiters</summary>
        <ul>
            <li class="gerecht vega">
                <strong>Apple Cobbler</strong> - € 7,50<br>
                <em>Warme appelkruimel met vanille-ijs.</em>
            </li>
            <li class="gerecht vega">
                <strong>Chocolate Brownie</strong> - € 6,50<br>
                <em>Met pecannoten en karamelsaus.</em>
            </li>
            <li class="gerecht vega">
                <strong>Banana Foster</strong> - € 7,50<br>
                <em>Gekarameliseerde banaan met rum en vanille-ijs.</em>
            </li>
        </ul>
    </details>
</article>

<article>
    <h2>Dranken</h2>
    <details>
        <summary style="font-size: 1.2rem; font-weight: bold; cursor: pointer; padding: 10px 0; border-bottom: 1px solid #ccc;">Fris, Bier & Wijn</summary>
        <ul>
            <li><strong>Frisdrank</strong> (Cola, Sprite, Fanta, Ice Tea) - € 2,75</li>
            <li><strong>Tap Pils</strong> - € 3,00</li>
            <li><strong>Speciaal Bier</strong> - vanaf € 4,50</li>
            <li><strong>Huiswijn</strong> (Glas) - € 4,50</li>
            <li><strong>Fles Huiswijn</strong> - € 22,50</li>
        </ul>
    </details>
</article>

<footer style="margin-top: 20px; padding: 10px; border-top: 1px solid #ccc;">
    <p><em>Heeft u een allergie? Meld het ons. Prijzen zijn inclusief BTW.</em></p>
</footer>

<?php include 'includes/footer.php'; ?>