<section class="relative -mt-6 w-screen max-w-none overflow-hidden left-1/2 -ml-[50vw]">

    {{-- Carrousel des images avec Owl Carousel --}}
    <div class="owl-carousel owl-theme banner-carousel w-screen max-w-none ml-0" id="banner-carousel">

        {{-- Slide 1 - Accueil --}}
        <div class="banner-slide relative flex h-[430px] items-center overflow-hidden sm:h-[450px] md:h-[500px] lg:h-[600px]">
            <img src="{{ asset('images/S1.png') }}" alt="Accueil AIL" class="absolute inset-0 h-full w-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-transparent"></div>
            <div class="relative z-10 w-full h-full flex flex-col justify-center">
                <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                    <div class="max-w-2xl">
                        <p class="text-secondary text-xl font-semibold mb-3">Bienvenue chez AIL</p>
                        <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl md:text-5xl lg:text-6xl">
                            Ensemble pour un développement<br class="hidden sm:block" />local durable
                        </h2>
                        <p class="mb-6 text-base text-white/80 sm:text-lg md:text-xl">
                            Nous accompagnons les initiatives locales et renforçons l'autonomie des communautés
                        </p>
                        <a href="#about"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-secondary text-white font-semibold hover:bg-white hover:text-secondary transition">
                            Découvrir AIL
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Slide 2 - Nos Domaines --}}
        <div class="banner-slide relative flex h-[430px] items-center overflow-hidden sm:h-[450px] md:h-[500px] lg:h-[600px]">
            <img src="{{ asset('images/S2.png') }}" alt="Nos Domaines" class="absolute inset-0 h-full w-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-transparent"></div>
            <div class="relative z-10 w-full h-full flex flex-col justify-center">
                <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                    <div class="max-w-2xl">
                        <p class="text-accent text-xl font-semibold mb-3">Nos Domaines</p>
                        <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl md:text-5xl lg:text-6xl">
                            Education, Santé et<br class="hidden sm:block" />Développement Communautaire
                        </h2>
                        <p class="mb-6 text-base text-white/80 sm:text-lg md:text-xl">
                            Nos actions couvrent l'éducation, la santé et le renforcement de capacités locales
                        </p>
                        <a href="#services"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-secondary text-white font-semibold hover:bg-white hover:text-secondary transition">
                            Nos domaines
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Slide 3 - Projets et Initiatives --}}
        <div class="banner-slide relative flex h-[430px] items-center overflow-hidden sm:h-[450px] md:h-[500px] lg:h-[600px]">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=600&fit=crop" alt="Nos Projets" class="absolute inset-0 h-full w-full object-cover" />
            <div class="absolute inset-0 bg-primary/70"></div>
            <div class="relative z-10 w-full h-full flex flex-col justify-center">
                <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                    <div class="max-w-2xl">
                        <p class="text-accent text-xl font-semibold mb-3">Nos Projets</p>
                        <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl md:text-5xl lg:text-6xl">
                            Des initiatives<br class="hidden sm:block" />qui transforment les vies
                        </h2>
                        <p class="mb-6 text-base text-white/80 sm:text-lg md:text-xl">
                            Découvrez comment nous créons des opportunités pour les communautés locales
                        </p>
                        <a href="#projects"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-secondary text-white font-semibold hover:bg-white hover:text-secondary transition">
                            Voir nos projets
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Slide 4 - Engagement --}}
        <div class="banner-slide relative flex h-[430px] items-center overflow-hidden sm:h-[450px] md:h-[500px] lg:h-[600px]">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=600&fit=crop" alt="Engagement" class="absolute inset-0 h-full w-full object-cover" />
            <div class="absolute inset-0 bg-primary/70"></div>
            <div class="relative z-10 w-full h-full flex flex-col justify-center">
                <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                    <div class="max-w-2xl">
                        <p class="text-accent text-xl font-semibold mb-3">Rejoignez-nous</p>
                        <h2 class="mb-4 text-3xl font-bold text-white sm:text-4xl md:text-5xl lg:text-6xl">
                            Soyez acteur du<br class="hidden sm:block" />changement positif
                        </h2>
                        <p class="mb-6 text-base text-white/80 sm:text-lg md:text-xl">
                            Ensemble, nous construisons un avenir meilleur pour les générations futures
                        </p>
                        <a href="#contact"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-secondary text-white font-semibold hover:bg-white hover:text-secondary transition">
                            Nous soutenir
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<style>
    .owl-dots {
        position: absolute !important;
        bottom: 28px !important;
        left: 50% !important;
        transform: translateX(-50%) !important;
        z-index: 20;
        display: flex !important;
        align-items: center;
        justify-content: center;
        gap: 12px;
    }

    .owl-dot {
        width: 18px !important;
        height: 18px !important;
        margin: 0 !important;
        border-radius: 0 !important;
        background: transparent !important;
        border: none !important;
        box-shadow: none !important;
        transition: all 0.3s ease;
        flex: 0 0 auto;
    }

    .owl-dot span {
        display: block !important;
        width: 18px !important;
        height: 18px !important;
        border-radius: 0 !important;
        background: rgba(255, 255, 255, 0.7) !important;
        transition: all 0.3s ease;
    }

    .owl-dot.active {
        margin-left: 8px !important;
        margin-right: 8px !important;
    }

    .owl-dot.active span {
        width: 30px !important;
        height: 18px !important;
        background: #17af3a !important;
    }

    .owl-dot:not(.active) span {
        opacity: 0.82;
    }

    @media (min-width: 1024px) {
        .owl-dots {
            bottom: 42px !important;
            gap: 14px;
        }

        .owl-dot,
        .owl-dot span {
            width: 22px !important;
            height: 22px !important;
        }

        .owl-dot.active {
            margin-left: 10px !important;
            margin-right: 10px !important;
        }

        .owl-dot.active span {
            width: 40px !important;
            height: 22px !important;
            background: #17af3a !important;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof jQuery !== 'undefined' && jQuery.fn.owlCarousel) {
        jQuery("#banner-carousel").owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 800,
            autoplayHoverPause: true,
            nav: false,
            navSpeed: 800,
            dots: true,
            dotsSpeed: 800,
            smartSpeed: 800,
            fluidSpeed: true,
            dragEndSpeed: 800,
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
});
</script>