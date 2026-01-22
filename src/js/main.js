
import AOS from 'aos';
import BlazeSlider from 'blaze-slider'

window.BlazeSlider = BlazeSlider;

AOS.init();

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

        console.log(el);

        new BlazeSlider(el, {
            all: {
                slidesToShow: 1,
                loop: true,
                transitionDuration: 450,
                slideGap: '16px'
            },
            '(min-width: 768px)': {
                slidesToShow: 1,
            },
            '(min-width: 1024px)': {
                slidesToShow: 1,
            },
        })
    })

})
