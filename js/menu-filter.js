document.addEventListener("DOMContentLoaded", function () {
    // Wacht tot de pagina volledig geladen is voordat we beginnen met het instellen van de filters
    const filterButtons = document.querySelectorAll('.btn-filter');
    
    if (filterButtons.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const keuze = this.getAttribute('data-filter');
                filterMenu(keuze);
            });
        });
    }

    function filterMenu(keuze) {
        const alleGerechten = document.querySelectorAll('.gerecht');
        
        // Ga door elk gerecht en toon/verberg het gebaseerd op de gekozen filter
        alleGerechten.forEach(gerecht => {
            if (keuze === 'alles') {
                gerecht.style.display = 'list-item';
            } else if (keuze === 'vega') {
                if (gerecht.classList.contains('vega')) {
                    gerecht.style.display = 'list-item';
                } else {
                    gerecht.style.display = 'none';
                }
            } else if (keuze === 'vlees') {
                if (gerecht.classList.contains('vlees')) {
                    gerecht.style.display = 'list-item';
                } else {
                    gerecht.style.display = 'none';
                }
            }
        });
    }
});
