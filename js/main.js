function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
}

function toggleLargeText() {
    document.body.classList.toggle('large-text');
}

function toggleHighContrast() {
    document.body.classList.toggle('high-contrast');
}

// Eigen idee toegankelijkheid: Links duidelijk markeren met geel
function toggleHighlightLinks() {
    document.body.classList.toggle('highlight-links');
}

// Kleine interactie: Formulier validatie op de reserveer pagina
const reserveerForm = document.getElementById('reserveerForm');

if (reserveerForm) {
    reserveerForm.addEventListener('submit', function(event) {
        // Zorg dat de pagina niet herlaadt
        event.preventDefault(); 
        
        // Simpele alert als kleine interactie
        alert("Bedankt voor je reservering! We hebben deze succesvol ontvangen.");
        
        // Maak de velden weer leeg
        reserveerForm.reset();
    });
}

// Filter functie voor het menu (Vega / Vlees)
function filterMenu(keuze) {
    // Zoek alle elementen met de class 'gerecht'
    const alleGerechten = document.querySelectorAll('.gerecht');
    
    // Loop door alle gerechten heen
    alleGerechten.forEach(gerecht => {
        if (keuze === 'alles') {
            gerecht.style.display = 'list-item'; // Laat alles zien
        } else if (keuze === 'vega') {
            // Als de keuze 'vega' is, check of het gerecht de class 'vega' heeft
            if (gerecht.classList.contains('vega')) {
                gerecht.style.display = 'list-item';
            } else {
                gerecht.style.display = 'none'; // Verberg de rest
            }
        } else if (keuze === 'vlees') {
            // Als de keuze 'vlees' is, check of het gerecht de class 'vlees' heeft
            if (gerecht.classList.contains('vlees')) {
                gerecht.style.display = 'list-item';
            } else {
                gerecht.style.display = 'none'; // Verberg de rest
            }
        }
    });
}