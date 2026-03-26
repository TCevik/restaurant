document.addEventListener("DOMContentLoaded", function () {
    // Stel toegankelijkheidsopties in, zoals donkere modus en grote tekst
    const btnDarkMode = document.getElementById('btn-dark-mode');
    const btnLargeText = document.getElementById('btn-large-text');
    const btnHighContrast = document.getElementById('btn-high-contrast');
    const btnHighlightLinks = document.getElementById('btn-highlight-links');

    if (btnDarkMode) {
        btnDarkMode.addEventListener('click', function() {
            // Wissel de 'dark-mode' klasse op de hele pagina aan/uit
            document.body.classList.toggle('dark-mode');
        });
    }

    if (btnLargeText) {
        btnLargeText.addEventListener('click', function() {
            document.body.classList.toggle('large-text');
        });
    }

    if (btnHighContrast) {
        btnHighContrast.addEventListener('click', function() {
            document.body.classList.toggle('high-contrast');
        });
    }

    if (btnHighlightLinks) {
        btnHighlightLinks.addEventListener('click', function() {
            document.body.classList.toggle('highlight-links');
        });
    }
});
