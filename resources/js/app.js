import './bootstrap';
import './bootstrap';
import 'owl.carousel';

// Initialisation du carrousel des témoignages
document.addEventListener('DOMContentLoaded', function() {
    const owl = $('.testimonials-carousel');
    
    if (owl.length) {
        owl.owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            smartSpeed: 800,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    }

    const counters = document.querySelectorAll('[data-counter]');
    const numberFormatter = new Intl.NumberFormat('fr-FR');

    const animateCounter = (counter) => {
        const target = Number(counter.dataset.target);
        const suffix = counter.dataset.suffix || '';
        const duration = 900;
        const startTime = performance.now();

        const updateCounter = (currentTime) => {
            const progress = Math.min((currentTime - startTime) / duration, 1);
            const easedProgress = 1 - Math.pow(1 - progress, 3);
            const currentValue = Math.round(target * easedProgress);

            counter.textContent = `${numberFormatter.format(currentValue)}${suffix}`;

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            }
        };

        requestAnimationFrame(updateCounter);
    };

    if ('IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });

        counters.forEach((counter) => counterObserver.observe(counter));
    } else {
        counters.forEach((counter) => {
            counter.textContent = `${numberFormatter.format(Number(counter.dataset.target))}${counter.dataset.suffix || ''}`;
        });
    }
});