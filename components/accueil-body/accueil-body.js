document.addEventListener('DOMContentLoaded', function () {
    var heroCarouselEl = document.getElementById('heroCarousel');
    if (heroCarouselEl && typeof bootstrap !== 'undefined' && bootstrap.Carousel) {
        new bootstrap.Carousel(heroCarouselEl, {
            interval: 5000,
            ride: 'carousel',
            pause: 'hover'
        });
    }
});

