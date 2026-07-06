
import AOS from 'aos';
import BlazeSlider from 'blaze-slider'

window.BlazeSlider = BlazeSlider;

// set default transition duration to 1.25s for AOS

AOS.init({
    duration: 1250,
    easing: 'cubic-bezier(0.23, 1, 0.32, 1)'
});

/* Smooth scroll to anchor links
=============================================*/

document.addEventListener("DOMContentLoaded", () => {
    // Select all links that have a hash in their href
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            const targetId = this.getAttribute("href");

            // Ignore if it's just "#"
            if (targetId.length > 1) {
                e.preventDefault();
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                }
            }
        });
    });
});

/* Testimonial Slider
=============================================*/

document.addEventListener('DOMContentLoaded', () => {

    var testimonialSliders = document.querySelectorAll('[data-slider="reviews"]');
	
    testimonialSliders.forEach((el) => {

        el.classList.add('is-fade');

        const slider = new BlazeSlider(el, {
            all: {
                slidesToShow: 1,
                loop: true,
                transitionDuration: 0,
                slideGap: '0px',
                draggable: false
            },
            '(min-width: 768px)': {
                slidesToShow: 1,
            },
            '(min-width: 1024px)': {
                slidesToShow: 1,
            },
        });

        const setActiveSlide = () => {
            Array.from(slider.track.children).forEach((slide, index) => {
                const isActive = index === 0;

                slide.classList.toggle('is-active', isActive);
                slide.setAttribute('aria-hidden', isActive ? 'false' : 'true');
            });
        };

        setActiveSlide();
        slider.onSlide(setActiveSlide);
    })

})
