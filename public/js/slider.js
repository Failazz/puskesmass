// const slider = document.querySelector('.slider');
// const prevBtn = document.querySelector('.prev-btn');
// const nextBtn = document.querySelector('.next-btn');

// let scrollAmount = 0;
// let autoplayInterval;

// // Data dinamis untuk card
// const cardData = [
//     { title: "Card 1", description: "Some description for card 1" },
//     { title: "Card 2", description: "Some description for card 2" },
//     { title: "Card 3", description: "Some description for card 3" },
//     { title: "Card 4", description: "Some description for card 4" },
//     { title: "Card 5", description: "Some description for card 5" },
// ];

// // Generate card secara dinamis
// function generateCards() {
//     cardData.forEach(data => {
//         const card = document.createElement('div');
//         card.classList.add('card');
//         card.innerHTML = `<h3>${data.title}</h3><p>${data.description}</p>`;
//         slider.appendChild(card);
//     });
// }

// // Pindah slider ke kiri atau kanan
// function slide(direction) {
//     const cardWidth = document.querySelector('.card').offsetWidth + 20; // card width + margin
//     const maxScroll = slider.scrollWidth - slider.clientWidth;
    
//     if (direction === 'next') {
//         if (scrollAmount >= maxScroll) {
//         scrollAmount = 0;  // Loop kembali ke awal
//         } else {
//         scrollAmount += cardWidth;
//         }
//     } else if (direction === 'prev') {
//         if (scrollAmount <= 0) {
//         scrollAmount = maxScroll;  // Loop kembali ke akhir
//         } else {
//         scrollAmount -= cardWidth;
//         }
//     }
    
//     slider.style.transform = `translateX(-${scrollAmount}px)`;
// }

// // Event listener untuk tombol prev/next
// nextBtn.addEventListener('click', () => slide('next'));
// prevBtn.addEventListener('click', () => slide('prev'));

// // Autoplay function
// function startAutoplay() {
//     autoplayInterval = setInterval(() => {
//         slide('next');
//     }, 3000);  // Setiap 3 detik
// }

// // Swipe gesture handling
// let startX;

// slider.addEventListener('touchstart', (e) => {
//     startX = e.touches[0].clientX;
// });

// slider.addEventListener('touchend', (e) => {
//     const endX = e.changedTouches[0].clientX;
//     if (startX > endX + 50) {  // Swipe ke kiri (next)
//         slide('next');
//     } else if (startX < endX - 50) {  // Swipe ke kanan (prev)
//         slide('prev');
//     }
// });

// // Inisialisasi
// generateCards();
// startAutoplay();

// // Pause autoplay saat mouse masuk ke slider
// slider.addEventListener('mouseenter', () => clearInterval(autoplayInterval));
// // Mulai autoplay lagi saat mouse keluar
// slider.addEventListener('mouseleave', startAutoplay);

// var swiper = new Swiper(".slide-container", {
//     slidesPerView: 3,
//     spaceBetween: 30,
//     slidesPerGroup: 3,
//     loop: true,
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });