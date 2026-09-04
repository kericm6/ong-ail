<!-- SECTION : CHIFFRES CLÉS / IMPACT -->
<section class="border-t border-[var(--color-primary-light)] bg-[var(--color-primary-dark)] py-12 text-white">
    <div class="mx-auto max-w-6xl px-6">
        <div class="grid grid-cols-2 gap-8 text-center md:grid-cols-4">
            <div class="space-y-1">
                <p class="text-3xl font-extrabold text-[var(--color-accent)] md:text-4xl"><span data-counter data-target="15000" data-suffix="+">0</span></p>
                <p class="text-xs font-medium uppercase tracking-wider text-[var(--color-primary-light)] md:text-sm">Bénéficiaires touchés</p>
            </div>
            <div class="space-y-1">
                <p class="text-3xl font-extrabold text-[var(--color-accent)] md:text-4xl"><span data-counter data-target="24">0</span></p>
                <p class="text-xs font-medium uppercase tracking-wider text-[var(--color-primary-light)] md:text-sm">Projets concrétisés</p>
            </div>
            <div class="space-y-1">
                <p class="text-3xl font-extrabold text-[var(--color-accent)] md:text-4xl"><span data-counter data-target="85" data-suffix="%">0</span></p>
                <p class="text-xs font-medium uppercase tracking-wider text-[var(--color-primary-light)] md:text-sm">Fonds sur le terrain</p>
            </div>
            <div class="space-y-1">
                <p class="text-3xl font-extrabold text-[var(--color-accent)] md:text-4xl"><span data-counter data-target="12">0</span></p>
                <p class="text-xs font-medium uppercase tracking-wider text-[var(--color-primary-light)] md:text-sm">Partenaires actifs</p>
            </div>
        </div>
    </div>
</section>

<style>
    .testimonials-carousel .owl-nav {
        margin: 0 !important;
    }

    .testimonials-carousel .owl-nav button.owl-prev,
    .testimonials-carousel .owl-nav button.owl-next {
        position: absolute;
        top: 50%;
        width: 48px;
        height: 48px;
        margin: 0;
        transform: translateY(-50%);
        background: transparent !important;
        color: var(--color-secondary) !important;
        font-size: 40px !important;
        line-height: 1 !important;
        opacity: 0;
        transition: opacity 0.2s ease;
    }

    .testimonials-carousel:hover .owl-nav button.owl-prev,
    .testimonials-carousel:hover .owl-nav button.owl-next {
        opacity: 1;
    }

    .testimonials-carousel .owl-nav button.owl-prev {
        left: 0;
    }

    .testimonials-carousel .owl-nav button.owl-next {
        right: 0;
    }
</style>

<!-- SECTION TÉMOIGNAGES + FORMULAIRE -->
<section class="py-16 bg-[var(--color-light)] border-t border-gray-200">
    <div class="max-w-6xl mx-auto px-6">
        
        <!-- En-tête de section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <h2 class="mt-3 text-2xl md:text-3xl font-extrabold text-secondary">
                    Ce que disent nos bénéficiaires et partenaires
                </h2>
            </div>
            
            <!-- Bouton déclencheur Modal Formulaire -->
            <button onclick="document.getElementById('modal-temoignage').classList.remove('hidden')" class="mt-4 md:mt-0 bg-primary-dark hover:bg-[var(--color-secondary-dark)] text-accent font-bold px-6 py-3 text-sm transition-colors hover:text-white">
                + Laisser un témoignage
            </button>
        </div>

        <!-- Un témoignage visible à la fois -->
        <div class="owl-carousel owl-theme testimonials-carousel px-10 sm:px-14">
            
            <!-- Témoignage 1 -->
            <div class="item bg-white p-6 border-l-4 border-[var(--color-primary)] border-y border-r border-gray-200 shadow-sm">
                <blockquote class="text-gray-700 italic text-sm leading-relaxed mb-6">
                    « Grâce à la prise en charge des fournitures scolaires, ma fille a pu passer son examen et continuer ses études. Cela a changé notre quotidien. »
                </blockquote>
                <div class="pt-4 border-t border-gray-100">
                    <p class="text-sm font-bold text-[var(--color-dark)]">Abla K. <span class="font-normal text-gray-500">— Mère de famille</span></p>
                </div>
            </div>

            <!-- Témoignage 2 -->
            <div class="item bg-white p-6 border-l-4 border-[var(--color-secondary)] border-y border-r border-gray-200 shadow-sm">
                <blockquote class="text-gray-700 italic text-sm leading-relaxed mb-6">
                    « La campagne de dépistage mobile dans notre village a permis de soigner plus de 200 personnes. Une initiative indispensable pour nos zones rurales. »
                </blockquote>
                <div class="pt-4 border-t border-gray-100">
                    <p class="text-sm font-bold text-[var(--color-dark)]">Koffi M. <span class="font-normal text-gray-500">— Chef de village</span></p>
                </div>
            </div>

            <!-- Témoignage 3 -->
            <div class="item bg-white p-6 border-l-4 border-[var(--color-success)] border-y border-r border-gray-200 shadow-sm">
                <blockquote class="text-gray-700 italic text-sm leading-relaxed mb-6">
                    « La formation en gestion et le micro-crédit m'ont permis de lancer mon commerce de tissus. Je suis aujourd'hui financièrement autonome. »
                </blockquote>
                <div class="pt-4 border-t border-gray-100">
                    <p class="text-sm font-bold text-[var(--color-dark)]">Aminata T. <span class="font-normal text-gray-500">— Entrepreneure</span></p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION : PARTENAIRES & BAILLEURS -->
<section class="border-t border-gray-100 bg-white py-10">
    <div class="mx-auto max-w-6xl px-6">
        <div class="mx-auto mb-10 max-w-xl text-center">
            <h2 class="mt-1 text-2xl font-extrabold text-secondary md:text-3xl">Nos Partenaires &amp; Bailleurs</h2>
        </div>

        <div class="grid grid-cols-2 items-center gap-4 sm:gap-6 md:grid-cols-4">
            <div class="p-4 text-center text-sm font-black sm:p-6">
                <img src="{{ asset('images/giz.png') }}" alt="GIZ" class="mx-auto h-12 w-full object-contain sm:h-16">
            </div>
            <div class="p-4 text-center text-sm font-black sm:p-6">
                <img src="{{ asset('images/francophonie.svg') }}" alt="Organisation internationale de la Francophonie" class="mx-auto h-12 w-full object-contain sm:h-16">
            </div>
            <div class="p-4 text-center text-sm font-black sm:p-6">
                <img src="{{ asset('images/mcld.png') }}" alt="MCLD" class="mx-auto h-12 w-full object-contain sm:h-16">
            </div>
            <div class="p-4 text-center text-sm font-black sm:p-6">
                <img src="{{ asset('images/geres.png') }}" alt="GERES" class="mx-auto h-12 w-full object-contain sm:h-16">
            </div>
            
        </div>
    </div>
</section>

<!-- MODAL : FORMULAIRE DE TÉMOIGNAGE -->
<div id="modal-temoignage" class="fixed inset-0 z-50 bg-black/70 flex items-center justify-center p-4 hidden">
    <div class="bg-white max-w-lg w-full p-6 md:p-8 border-2 border-[var(--color-primary)] relative">
        
        <!-- Bouton Fermer -->
        <button onclick="document.getElementById('modal-temoignage').classList.add('hidden')" class="absolute top-4 right-4 text-gray-500 hover:text-black font-bold text-xl">
            &times;
        </button>

        <h3 class="text-xl font-extrabold text-secondary mb-2">Partagez votre témoignage</h3>
        <p class="text-xs text-[var(--color-gray)] mb-6">
            Votre avis ou retour d'expérience sera relu avant publication sur le site.
        </p>

        <form action="/temoignage/store" method="POST" class="space-y-4">
            <div>
                <label class="block text-xs font-bold uppercase text-[var(--color-dark)] mb-1">Nom complet *</label>
                <input type="text" required placeholder="Ex: Akossiwa B." class="w-full px-4 py-2.5 bg-[var(--color-light)] border border-gray-300 text-sm focus:outline-none focus:border-[var(--color-primary)]" />
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-[var(--color-dark)] mb-1">Rôle / Qualité *</label>
                <input type="text" required placeholder="Ex: Bénéficiaire, Bénévole, Partenaire..." class="w-full px-4 py-2.5 bg-[var(--color-light)] border border-gray-300 text-sm focus:outline-none focus:border-[var(--color-primary)]" />
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-[var(--color-dark)] mb-1">Votre Témoignage *</label>
                <textarea required rows="4" placeholder="Racontez votre expérience avec l'ONG..." class="w-full px-4 py-2.5 bg-[var(--color-light)] border border-gray-300 text-sm focus:outline-none focus:border-[var(--color-primary)]"></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-2">
                <button type="button" onclick="document.getElementById('modal-temoignage').classList.add('hidden')" class="px-5 py-2.5 text-sm font-bold border border-gray-300 text-gray-700 hover:bg-gray-100 transition-colors">
                    Annuler
                </button>
                <button type="submit" class="px-6 py-2.5 text-sm font-bold bg-secondary hover:bg-[var(--color-primary-dark)] text-white transition-colors">
                    Envoyer
                </button>
            </div>
        </form>
    </div>
</div>

