let items = document.querySelectorAll('.slider #slider #slider-card');
let next = document.getElementById('next');
let prev = document.getElementById('prev');

let active = 0;
let intervalTime = 5000; // Time in milliseconds for auto transition
let autoPlayInterval;

function loadShow() {
    let len = items.length;
    for (let i = 0; i < len; i++) {
        items[i].style.transition = 'transform 0.75s, opacity 0.6';
        items[i].style.transform = 'translateX(0px) scale(0.7) perspective(160px) rotateY(0deg)';
        items[i].style.zIndex = -1;
        items[i].style.filter = 'blur(4px)';
        items[i].style.opacity = 0.6;
    }

    // Set active item
    items[active].style.transform = 'none';
    items[active].style.zIndex = 1;
    items[active].style.filter = 'none';
    items[active].style.opacity = 1;

    // Set previous item
    let prevIndex = (active - 1 + len) % len;
    items[prevIndex].style.transform = 'translateX(-360px) scale(0.7) perspective(160px) rotateY(1deg)';
    items[prevIndex].style.zIndex = 0;
    items[prevIndex].style.opacity = 0.6;

    // Set next item
    let nextIndex = (active + 1) % len;
    items[nextIndex].style.transform = 'translateX(360px) scale(0.7) perspective(160px) rotateY(-1deg)';
    items[nextIndex].style.zIndex = 0;
    items[nextIndex].style.opacity = 0.6;
}

function nextSlide() {
    active = (active + 1) % items.length;
    loadShow();
}

function prevSlide() {
    active = (active - 1 + items.length) % items.length;
    loadShow();
}

// Set up automatic transition
function startAutoPlay() {
    autoPlayInterval = setInterval(nextSlide, intervalTime);
}

// Stop automatic transition
function stopAutoPlay() {
    clearInterval(autoPlayInterval);
}

// Event listeners for manual controls
next.onclick = function() {
    nextSlide();
    stopAutoPlay();
    startAutoPlay();
}

prev.onclick = function() {
    prevSlide();
    stopAutoPlay();
    startAutoPlay();
}

// Initialize the slider
loadShow();
startAutoPlay();