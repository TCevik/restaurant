document.addEventListener("DOMContentLoaded", function () {
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
});
