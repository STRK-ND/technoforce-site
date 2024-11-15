// Popup Overlay

// window.addEventListener('load', function() {
//     setTimeout(function() {
//         document.getElementById('popupOverlay').classList.add('active');
//     }, 2000); // Shows popup after 2 seconds
// });

// // Close popup when clicking the close button
// document.querySelector('.text-gray-500').addEventListener('click', function() {
//     document.getElementById('popupOverlay').classList.remove('active');
// });

// // Close popup when clicking outside
// document.getElementById('popupOverlay').addEventListener('click', function(e) {
//     if (e.target === this) {
//         this.classList.remove('active');
//     }
// });


// Navbar
function toggleMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const menuOpen = document.getElementById('menuOpen');
    const menuClose = document.getElementById('menuClose');
    
    mobileMenu.classList.toggle('hidden');
    menuOpen.classList.toggle('hidden');
    menuClose.classList.toggle('hidden');
}

// Image Crousal
const carousel = document.getElementById('carousel1');
let currentSlide = 0;
const slideCount = 5;

function nextSlide() {
    currentSlide = (currentSlide + 1) % slideCount;
    carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
}

setInterval(nextSlide, 3000);