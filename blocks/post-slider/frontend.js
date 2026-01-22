document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.enigma-post-slider').forEach((block) => {
        const slidesToShow = parseInt(
            block.dataset.slidesToShow || 3,
            10
        );

        const el = block.querySelector('.blaze-slider');
        if (!el || !window.BlazeSlider) return;

        new window.BlazeSlider(el, {
            all: {
                slidesToShow,
                enableAutoplay: false,
                loop: true,
                transitionDuration: 800,
            },
        });
    });
});
