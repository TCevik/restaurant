let slides = document.getElementsByClassName('slide');
let slideNum = 0;
let timer = 4000;

// Toon en verberg slides
function showHide() {
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideNum].style.display = 'block';
}

// Naar volgende slide
function autoSlideshow() {
    slideNum++;
    if (slideNum >= slides.length) {
        slideNum = 0;
    }
    showHide();
}

// Start de timer
setInterval(autoSlideshow, timer);

// Toon de eerste slide direct
showHide();