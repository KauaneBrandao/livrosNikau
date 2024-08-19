const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
const carousel = document.querySelector('.carousel');

let index = 0;

function updateCarousel() {
    const cardWidth = document.querySelector('.card').offsetWidth;
    carousel.style.transform = `translateX(-${index * cardWidth}px)`;
}

nextButton.addEventListener('click', () => {
    const totalCards = document.querySelectorAll('.card').length;
    index = (index + 1) % totalCards;
    updateCarousel();
});

prevButton.addEventListener('click', () => {
    const totalCards = document.querySelectorAll('.card').length;
    index = (index - 1 + totalCards) % totalCards;
    updateCarousel();
});
