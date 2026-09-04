<!-- FOOTER / PIED DE PAGE -->
<footer class="bg-primary-dark text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-10 mb-12 sm:grid-cols-2 lg:grid-cols-4">
            
            <!-- Col 1 : À propos ONG -->
            <div class="space-y-4">
                <a href="{{ url('/') }}" class="inline-block">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo ONG AIL" class="h-25 w-auto" />
                </a>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Organisation non gouvernementale dédiée à l'autonomisation, la santé et l'éducation des communautés locales.
                </p>
                <div class="pt-2">
                    <a href="/don" class="inline-block bg-secondary hover:bg-[var(--color-accent-dark)] text-white font-extrabold px-5 py-2.5 text-sm transition-colors shadow">
                        Soutenir nos actions
                    </a>
                </div>
            </div>

            <!-- Col 2 : Navigation rapide -->
            <div>
                <h4 class="text-lg font-bold mb-4 text-secondary">Navigation</h4>
                <ul class="space-y-2.5 text-sm text-gray-300">
                    <li><a href="/" class="hover:text-[var(--color-primary-light)] transition-colors">&rarr; Accueil</a></li>
                    <li><a href="/a-propos" class="hover:text-[var(--color-primary-light)] transition-colors">&rarr; À Propos</a></li>
                    <li><a href="/projets" class="hover:text-[var(--color-primary-light)] transition-colors">&rarr; Nos Projets</a></li>
                    <li><a href="/blog" class="hover:text-[var(--color-primary-light)] transition-colors">&rarr; Actualités & Blog</a></li>
                    <li><a href="/contact" class="hover:text-[var(--color-primary-light)] transition-colors">&rarr; Contact</a></li>
                </ul>
            </div>

            <!-- Col 3 : Contact & Info -->
            <div>
                <h4 class="text-lg font-bold mb-4 text-secondary">Contact</h4>
                <ul class="space-y-3 text-sm text-gray-300">
                    <li class="flex items-start gap-2">
                        <span class="text-[var(--color-secondary)] font-bold">&bull;</span>
                        <span>Siège Social, Quartier Administratif</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-[var(--color-secondary)] font-bold">&bull;</span>
                        <a href="tel:+22800000000" class="hover:underline">+228 00 00 00 00</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-[var(--color-secondary)] font-bold">&bull;</span>
                        <a href="mailto:contact@ong-ail.org" class="hover:underline">contact@ong-ail.org</a>
                    </li>
                </ul>
            </div>

            <!-- Col 4 : Newsletter -->
            <div>
                <h4 class="text-lg font-bold mb-4 text-secondary">Newsletter</h4>
                <p class="text-xs text-gray-300 mb-3">
                    Restez informé de nos actions et de l'impact de vos dons.
                </p>
                <form class="flex flex-col gap-2">
                    <input 
                        type="email" 
                        placeholder="Votre adresse email" 
                        class="px-4 py-2.5 bg-white/10 text-white placeholder-gray-400 border border-white/20 focus:outline-none focus:border-[var(--color-primary)] text-sm"
                        required
                    />
                    <button 
                        type="submit" 
                        class="bg-accent hover:bg-white  text-primary-dark font-bold py-2.5 text-sm transition-colors"
                    >
                        S'abonner
                    </button>
                </form>
            </div>

        </div>

        <!-- Bas du footer -->
        <div class="flex flex-col items-start justify-between gap-4 border-t border-white/10 pt-8 text-xs text-gray-400 sm:flex-row sm:items-center">
            <p>&copy; 2026 ONG AIL. Tous droits réservés.</p>
            <div class="flex flex-wrap gap-x-6 gap-y-2">
                <a href="/mentions-legales" class="hover:underline">Mentions légales</a>
                <a href="/confidentialite" class="hover:underline">Politique de confidentialité</a>
            </div>
        </div>
    </div>
</footer>