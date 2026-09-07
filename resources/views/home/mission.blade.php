<section class="py-16 bg-[var(--color-light)]">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-12">
            
            <!-- BLOC GAUCHE : À Propos (Image + Texte + CTA) -->
            <div class="flex flex-col space-y-6 lg:col-span-7">
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
                <h2 class="text-3xl font-extrabold tracking-wide text-[var(--color-dark)] uppercase border-b border-secondary">
                    Notre Mission
                </h2>

                <div class="space-y-4 text-[var(--color-dark)] leading-relaxed text-base">
                    <p class="text-justify">
                        La mission de l’ONG Appui aux Initiatives Locales (AIL) est de contribuer à l’amélioration durable des conditions de vie des communautés de base, en particulier des femmes et des jeunes, à travers l’autonomisation économique et sociale, l’insertion socioprofessionnelle, la promotion de l’agriculture biologique et des énergies vertes, ainsi que l’accès équitable à l’éducation, à la santé, aux droits humains et aux opportunités économiques, tout en renforçant un développement local participatif, inclusif et durable.
                    </p>

                </div>

                <!-- CTA -->
                <div class="pt-2">
                    <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-[var(--color-primary)] font-semibold text-sm hover:text-[var(--color-secondary)] hover:underline transition-colors">
                        <span class="text-[var(--color-secondary)]">&rarr;</span>
                        <span>Découvrir nos valeurs et notre histoire</span>
                    </a>
                </div>
            </div>

            <aside class="flex min-h-[320px] flex-col justify-center border border-[var(--color-primary-light)] bg-white p-8 text-center shadow-sm lg:col-span-5">
                <h3 class="text-2xl font-extrabold uppercase text-[var(--color-dark)]">
                    Actualités
                </h3>
                <div class="mx-auto mt-4 h-1 w-12 bg-secondary"></div>
                <p class="mt-6 text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                    Retrouvez bientôt les nouvelles, activités et temps forts de l’ONG AIL.
                </p>
                <span class="mx-auto mt-6 inline-flex items-center border border-secondary px-4 py-2 text-xs font-bold uppercase tracking-wide text-[var(--color-primary)]">
                    Bientôt disponible
                </span>
            </aside>

        </div>
    </div>
</section>