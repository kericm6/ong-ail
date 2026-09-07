@extends('layouts.app')

@section('title', 'Nos objectifs - ONG AIL Kpalimé')

@section('content')

<div class="font-sans [&_h1]:font-display [&_h2]:font-display [&_h3]:font-display">

{{-- BANNIÈRE SIMPLE (PAGE HEADER) --}}
<section class="relative bg-[var(--color-dark)] text-white py-16 sm:py-20  overflow-hidden">
    
    <div class="absolute inset-0 z-0">
        <img 
            src="../images/objectifs.jpeg" 
            alt="Équipe ONG AIL à votre écoute" 
            class="h-full w-full object-cover object-[center_35%] opacity-10"
        />
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        
        <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[var(--color-primary-light)] mb-4">
            <a href="{{ route('home') }}" class="hover:text-[var(--color-accent)] transition-colors">Accueil</a>
            <span>/</span>
            <span class="text-[var(--color-accent)]">Nos objectifs</span>
        </nav>

        <h1 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
            Nos <span class="text-secondary inline-block">objectifs</span>
        </h1>

        <p class="text-sm sm:text-base text-gray-300 max-w-2xl leading-relaxed">
            Renforcer l’autonomie des communautés et faire émerger des solutions durables pour un développement local inclusif à Kpalimé et dans ses environs.
        </p>

    </div>
</section>














<section class="bg-white py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-12 lg:gap-20">
            <div class="lg:col-span-5  lg:pl-8">
                <div class="mb-5 flex items-center gap-3 text-sm font-bold uppercase tracking-wider text-accent">
                    <span class="h-px w-10 bg-accent text-accent"></span>
                    Objectifs de l’ONG AIL
                </div>

                <h2 class="max-w-lg text-3xl font-extrabold leading-tight tracking-tight text-[var(--color-dark)] sm:text-4xl">
                    Agir pour l’autonomie et le développement local
                </h2>
            </div>

            <div class=" bg-[var(--color-primary-light)] px-6 py-7 sm:px-8 sm:py-9 lg:col-span-7">
                <div class="mb-4 flex items-center gap-3">
                    <h3 class="text-xl font-extrabold text-[var(--color-primary-dark)] sm:text-2xl">
                        Objectif général
                    </h3>
                </div>

                <p class="text-base leading-8 text-[var(--color-dark)] sm:text-lg">
                    Contribuer à l’autonomisation économique, sociale et professionnelle des femmes et des jeunes filles vulnérables dans les communautés locales, tout en promouvant l’innovation, la durabilité environnementale et le développement local intégré.
                </p>
            </div>
        </div>

        <div class="mt-16 border-t border-gray-200 pt-10">
            <div class="mb-8 max-w-2xl">
                <div class="mb-3 text-sm font-bold uppercase tracking-wider text-secondary">
                    Nos priorités d’action
                </div>
                <h3 class="text-2xl font-extrabold text-[var(--color-dark)] sm:text-3xl">
                    Objectifs spécifiques
                </h3>
            </div>

            <ol class="grid gap-x-10 md:grid-cols-2">
                <li class="flex gap-5 border-b border-gray-200 py-6 sm:gap-8">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center bg-secondary text-sm font-black text-white sm:h-12 sm:w-12 sm:text-base">01</span>
                    <div>
                        <strong class="font-display text-base font-extrabold leading-relaxed text-[var(--color-dark)] sm:text-lg">Renforcer l’autonomie et l’organisation des populations</strong>
                        <ul class="mt-3 space-y-2 text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                            <li>- Donner un appui organisationnel aux populations en difficulté pour qu’elles puissent mieux gérer leurs initiatives et ressources.</li>
                            <li>- Promouvoir la création et le développement de groupes d’intérêt et de coopératives, en particulier féminines, pour améliorer la production agricole et artisanale locale.</li>

                        </ul>
                    </div>
                </li>
                <li class="flex gap-5 border-b border-gray-200 py-6 sm:gap-8">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center bg-[var(--color-primary)] text-sm font-black text-white sm:h-12 sm:w-12 sm:text-base">02</span>
                    <div>
                        <strong class="font-display text-base font-extrabold leading-relaxed text-[var(--color-dark)] sm:text-lg">Encourager la participation active au développement local</strong>
                        <ul class="mt-3 space-y-2 text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                            <li>- Pousser les populations à s’impliquer activement dans les processus de développement de leur milieu.</li>
                            <li>- Sensibiliser et former les communautés à la gouvernance locale, à la gestion de projets et à la prise de décision collective.</li>
                        </ul>
                    </div>
                </li>
                <li class="flex gap-5 border-b border-gray-200 py-6 sm:gap-8">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center bg-[var(--color-accent)] text-sm font-black text-[var(--color-dark)] sm:h-12 sm:w-12 sm:text-base">03</span>
                    <div>
                        <strong class="font-display text-base font-extrabold leading-relaxed text-[var(--color-dark)] sm:text-lg">Promouvoir l’innovation et la durabilité</strong>
                        <ul class="mt-3 space-y-2 text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                            <li>- Mettre en place des solutions durables comme les biodigesteurs pour valoriser les déchets organiques et produire du biogaz et des biofertilisants.</li>
                            <li>- Former les femmes et les jeunes aux pratiques agricoles respectueuses de l’environnement, à l’agriculture biologique et à la transformation de produits locaux.</li>
                        </ul>
                    </div>
                </li>
                <li class="flex gap-5 border-b border-gray-200 py-6 sm:gap-8">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center bg-[var(--color-success)] text-sm font-black text-white sm:h-12 sm:w-12 sm:text-base">04</span>
                    <div>
                        <strong class="font-display text-base font-extrabold leading-relaxed text-[var(--color-dark)] sm:text-lg">Accompagner les jeunes filles et renforcer leur insertion socio-professionnelle</strong>
                        <ul class="mt-3 space-y-2 text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                            <li>- Offrir un accompagnement complet aux jeunes filles déscolarisées ou vulnérables via le Centre Incubateur de l’AIL (CIPE).</li>
                            <li>- Développer leurs compétences techniques, numériques et entrepreneuriales.</li>
                            <li>- Faciliter leur insertion socio-professionnelle et leur participation active au développement local.</li>
                        </ul>
                    </div>
                </li>
                <li class="flex gap-5 border-b border-gray-200 py-6 sm:gap-8">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center bg-[var(--color-primary-dark)] text-sm font-black text-white sm:h-12 sm:w-12 sm:text-base">05</span>
                    <div>
                        <strong class="font-display text-base font-extrabold leading-relaxed text-[var(--color-dark)] sm:text-lg">Lutter contre les fléaux socio-économiques</strong>
                        <ul class="mt-3 space-y-2 text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                            <li>- Mettre en œuvre des actions concrètes pour réduire la pauvreté, la vulnérabilité économique et sociale, et les pratiques à risque dans les communautés.</li>
                            <li>- Promouvoir la solidarité, l’entraide et la résilience au sein des groupes et des communautés locales.</li>
                        </ul>
                    </div>
                </li>
            </ol>
        </div>
    </div>
</section>

</div>
@endsection