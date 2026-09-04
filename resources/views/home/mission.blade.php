<section class="py-16 bg-[var(--color-light)]">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- BLOC GAUCHE : À Propos (Image + Texte + CTA) -->
            <div class="lg:col-span-7 flex flex-col space-y-6">
                <!-- Image -->
                <div class="relative overflow-hidden shadow-sm border border-[var(--color-primary-light)]">
                    <img 
                        src="{{'images/about.png'}}" 
                        alt="Notre équipe avec les bénéficiaires" 
                        class="h-[240px] w-full object-cover sm:h-[320px]"
                    />
                    <div class="absolute inset-0 bg-[var(--color-dark)]/15"></div>
                </div>

                <!-- Texte -->
                <h2 class="text-3xl font-extrabold tracking-wide text-secondary uppercase border-b">
                    Notre Mission
                </h2>

                <div class="space-y-4 text-[var(--color-dark)] leading-relaxed text-base">
                    <p class="text-justify">
                        Fondée en 2018 par des acteurs engagés, notre organisation œuvre pour l'autonomisation durable des communautés locales. Nous nous concentrons sur l'éducation de qualité pour tous, l'accès à la santé et le développement économique responsable.
                    </p>
                    <p class="text-justify">
                        En collaboration avec les bénéficiaires et des partenaires internationaux, nous avons impacté plus de 5000 vies à travers des projets concrets et mesurables. Notre transparence et notre impact sont au cœur de notre démarche.
                    </p>
                </div>

                <!-- CTA -->
                <div class="pt-2">
                    <a href="/a-propos" class="inline-flex items-center gap-2 text-red-700 font-semibold text-sm hover:text-[var(--color-secondary)] hover:underline transition-colors">
                        <span class="text-primary">&rarr;</span>
                        <span>Découvrir nos valeurs et notre histoire</span>
                    </a>
                </div>
            </div>


            <!-- BLOC DROITE : Sidebar Blog (Cartes Superposées) -->
            <aside class="lg:col-span-5 bg-white p-6 border border-gray-100 shadow-sm flex flex-col">
                
                <!-- En-tête Sidebar -->
                <div class="flex items-center justify-between pb-4 mb-6 border-b border-[var(--color-primary-light)]">
                    <h3 class="text-lg font-semibold text-secondary sm:text-xl">
                        Dernieres Actualités
                    </h3>
                </div>

                <!-- Cartes Superposées (Stack) -->
                <div class="flex flex-col gap-4">
                    
                    <!-- Carte 1 -->
                    <article class="p-4 bg-[var(--color-light)] border border-gray-100 hover:shadow-md transition-all group">
                        <span class="text-xs font-semibold text-[var(--color-gray)]">12 Mai 2026</span>
                        <h4 class="font-bold text-[var(--color-dark)] text-base mt-1 mb-2 group-hover:text-[var(--color-primary)] transition-colors leading-snug">
                            <a href="/blog/succes-campagne-sante">Retour sur notre grande journée de santé communautaire</a>
                        </h4>
                        <p class="text-[var(--color-gray)] text-xs line-clamp-2 mb-3">
                            Grâce à l'aide de nos bénévoles, nous avons pu ausculter plus de 300 enfants ce weekend...
                        </p>
                        <a href="/blog/succes-campagne-sante" class="inline-flex items-center gap-1.5 text-xs font-bold text-secondary group-hover:text-[var(--color-secondary)] transition-colors">
                            <span class="text-red">&rarr;</span>
                            <span>Lire la suite</span>
                        </a>
                    </article>

                    <!-- Carte 2 -->
                    <article class="p-4 bg-[var(--color-light)] border border-gray-100 hover:shadow-md transition-all group">
                        <span class="text-xs font-semibold text-[var(--color-gray)]">28 Avril 2026</span>
                        <h4 class="font-bold text-[var(--color-dark)] text-base mt-1 mb-2 group-hover:text-[var(--color-primary)] transition-colors leading-snug">
                            <a href="/blog/nouveau-partenaire">Un nouveau soutien pour nos programmes éducatifs</a>
                        </h4>
                        <p class="text-[var(--color-gray)] text-xs line-clamp-2 mb-3">
                            Signature officielle d'un accord visant à équiper 3 nouvelles écoles d'outils numériques.
                        </p>
                        <a href="/blog/succes-campagne-sante" class="inline-flex items-center gap-1.5 text-xs font-bold text-secondary group-hover:text-[var(--color-secondary)] transition-colors">
                            <span class="text-red">&rarr;</span>
                            <span>Lire la suite</span>
                        </a>
                    </article>

                    <!-- Carte 3 -->
                    <article class="p-4 bg-[var(--color-light)] border border-gray-100 hover:shadow-md transition-all group">
                        <span class="text-xs font-semibold text-[var(--color-gray)]">15 Avril 2026</span>
                        <h4 class="font-bold text-[var(--color-dark)] text-base mt-1 mb-2 group-hover:text-[var(--color-primary)] transition-colors leading-snug">
                            <a href="/blog/temoignage-aminata">« L'accès aux cours a changé ma vie »</a>
                        </h4>
                        <p class="text-[var(--color-gray)] text-xs line-clamp-2 mb-3">
                            Découvrez le parcours inspirant d'Aminata, bénéficiaire de notre programme.
                        </p>
                        <a href="/blog/succes-campagne-sante" class="inline-flex items-center gap-1.5 text-xs font-bold text-secondary group-hover:text-[var(--color-secondary)] transition-colors">
                            <span class="text-red">&rarr;</span>
                            <span>Lire la suite</span>
                        </a>
                    </article>

                </div>
                <!-- Pied de Sidebar -->
                <div class="mt-6 pt-4 border-t border-gray-100 text-center">
                    <a href="/blog" class="inline-flex items-center gap-2 text-sm  text-red-700 font-semibold hover:text-secondary transition-colors">
                        <span>Voir tous les articles du blog</span>
                        <span class="text-[var(--color-secondary)]">&rarr;</span>
                    </a>
                </div>

            </aside>

        </div>
    </div>
</section>