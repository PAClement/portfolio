document.addEventListener('DOMContentLoaded', function () {

    let splide = new Splide('.splide', {
        perPage: 4,
        rewind: true,
    });

    splide.mount();
});