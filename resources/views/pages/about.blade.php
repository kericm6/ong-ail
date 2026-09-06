@extends('layouts.app')

@section('title', 'Présentation - ONG AIL Kpalimé')

@section('content')

<div class="font-sans [&_h1]:font-display [&_h2]:font-display [&_h3]:font-display">

{{-- BANNIÈRE SIMPLE (PAGE HEADER) --}}
<section class="relative bg-[var(--color-dark)] text-white py-16 sm:py-20  overflow-hidden">
    
    <div class="absolute inset-0 z-0">
        <img 
            src="../images/about.jpeg" 
            alt="Équipe ONG AIL à votre écoute" 
            class="h-full w-full object-cover object-[center_20%] opacity-10"
        />
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        
        <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[var(--color-primary-light)] mb-4">
            <a href="/" class="hover:text-[var(--color-accent)] transition-colors">Accueil</a>
            <span>/</span>
            <span class="text-[var(--color-accent)]">Présentation</span>
        </nav>

        <h1 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
            À propos de  <span class="text-secondary  inline-block"> Nous</span>
        </h1>

        <p class="text-sm sm:text-base text-gray-300 max-w-2xl leading-relaxed">
            Depuis Kpalimé, l’ONG AIL accompagne les femmes, les jeunes et les communautés pour construire un développement local inclusif, autonome et durable.
        </p>

    </div>
</section>


{{-- 1. QUI SOMMES-NOUS ? --}}
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <div class="lg:col-span-7 space-y-6">
                <div class="flex items-center gap-3 text-sm font-bold uppercase tracking-wider text-secondary">
                    <span class="h-px w-10 bg-secondary"></span>
                    Notre identité
                </div>

                <h2 class="text-3xl sm:text-4xl font-extrabold text-[var(--color-dark)] tracking-tight">
                    Agir localement, transformer durablement
                </h2>

                <p class="text-[var(--color-gray)] text-base sm:text-lg leading-relaxed">
                    AIL est une organisation à but non lucratif basée à <strong class="text-[var(--color-dark)]">Kpalimé, au Togo</strong>. Depuis 2002, nous concevons avec les communautés des solutions concrètes pour renforcer leur autonomie et leurs capacités d’action.
                </p>

                <p class="text-[var(--color-gray)] text-base sm:text-lg leading-relaxed">
                    Notre approche relie l’autonomisation des femmes, l’insertion des jeunes, l’agriculture durable, l’environnement, la santé et la sécurité alimentaire pour faire émerger un changement porté par les acteurs locaux.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-3">
                    <div class="border-l-4 border-secondary bg-[var(--color-secondary-light)] px-5 py-4">
                        <span class="block text-3xl font-extrabold text-secondary">2002</span>
                        <span class="text-sm font-medium text-[var(--color-gray)]">Année de création</span>
                    </div>
                    <div class="border-l-4 border-[var(--color-accent)] bg-[var(--color-accent-light)] px-5 py-4">
                        <span class="block text-3xl font-extrabold text-accent">Kpalimé</span>
                        <span class="text-sm font-medium text-[var(--color-gray)]">Ancrage territorial</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <div class="absolute -bottom-4 -left-4 h-24 w-24 border-l-4 border-b-4 border-[var(--color-accent)]"></div>
                    <div class="relative aspect-4/3 overflow-hidden shadow-xl bg-[var(--color-light)] border-8 border-white">
                        <img src="{{ asset('images/s.jpeg') }}" alt="Équipe ONG AIL Kpalimé" class="w-full h-full object-cover">
                        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[var(--color-dark)]/80 to-transparent px-5 pb-5 pt-12 text-white">
                            <p class="text-sm font-semibold">Une action ancrée dans les réalités locales</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


{{-- 2. NOS DOMAINES D'INTERVENTION --}}
<section class="relative overflow-hidden bg-[var(--color-light)] py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-7">
                <div class="mb-9 max-w-2xl">
                    <div class="flex items-center gap-3 text-sm font-bold uppercase tracking-wider text-secondary">
                        <span class="h-px w-10 bg-secondary"></span>
                        Piliers d'action
                    </div>
                    <h2 class="mt-3 text-3xl font-extrabold text-[var(--color-dark)] sm:text-4xl">Nos domaines d’intervention</h2>
                    <p class="mt-4 text-base leading-relaxed text-[var(--color-gray)]">
                        Des actions concrètes, pensées avec les communautés pour renforcer leur autonomie et préserver leur environnement.
                    </p>
                </div>

                <div class="space-y-1">
                    <article class="group flex gap-4 border-t border-slate-200 pt-2">
                        <span class="text-sm font-black text-secondary">01</span>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-secondary">Autonomisation des femmes</h3>
                            <p class="text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">Accompagnement des coopératives féminines agricoles et artisanales, de la production à la commercialisation.</p>
                        </div>
                    </article>

                    <article class="group flex gap-4 border-t border-slate-200 pt-2">
                        <span class="text-sm font-black text-primary">02</span>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-primary">Durabilité environnementale</h3>
                            <p class="text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">Des solutions comme les biodigesteurs pour valoriser les déchets et produire du biogaz et des biofertilisants.</p>
                        </div>
                    </article>

                    <article class="group flex gap-4 border-t border-slate-200 pt-2">
                        <span class="text-sm font-black text-[var(--color-accent-dark)]">03</span>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-[var(--color-accent-dark)]">Formation des jeunes filles</h3>
                            <p class="text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">Le CIPE accompagne les jeunes filles vulnérables vers la formation et l’insertion socio-professionnelle.</p>
                        </div>
                    </article>

                    <article class="group flex gap-4 border-t border-slate-200 pt-2">
                        <span class="text-sm font-black text-success">04</span>
                        <div>
                            <h3 class="mb-2 text-lg font-bold text-success">Communautés renforcées</h3>
                            <p class="text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">Création de groupes et de coopératives pour faire des populations les actrices de leur développement.</p>
                        </div>
                    </article>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="grid grid-cols-2 gap-3 sm:gap-4">
                    <div class="group relative col-span-2 overflow-hidden bg-white shadow-sm">
                        <img src="{{ asset('images/projet2.png') }}" alt="Action collective dans un champ communautaire" class="h-56 w-full object-cover sm:h-64">
                        <div class="pointer-events-none absolute inset-0 bg-primary/10 transition-colors duration-300 group-hover:bg-primary/20"></div>
                    </div>
                    <div class="group relative overflow-hidden bg-white shadow-sm">
                        <img src="{{ asset('images/projet1.png') }}" alt="Agriculture durable portée par les femmes" class="h-36 w-full object-cover sm:h-44">
                        <div class="pointer-events-none absolute inset-0 bg-secondary/10 transition-colors duration-300 group-hover:bg-secondary/20"></div>
                    </div>
                    <div class="group relative overflow-hidden bg-white shadow-sm">
                        <img src="{{ asset('images/projet3.png') }}" alt="Formation et activité génératrice de revenus" class="h-36 w-full object-cover object-[center_35%] sm:h-44">
                        <div class="pointer-events-none absolute inset-0 bg-accent/10 transition-colors duration-300 group-hover:bg-accent/20"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- 3. NOS OBJECTIFS PRINCIPAUX --}}
<section class="bg-white py-16 lg:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-5">
                <div class="relative min-h-[440px] overflow-hidden bg-[var(--color-dark)] shadow-xl">
                    <img src="{{ asset('images/about.jpeg') }}" alt="Action communautaire de l’ONG AIL" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-dark)] via-[var(--color-dark)]/30 to-transparent"></div>
                    <div class="absolute inset-x-0 bottom-0 p-7 text-white sm:p-9">
                        <p class="mt-2 max-w-xs text-lg font-bold leading-snug">priorités pour faire grandir l’autonomie locale.</p>
                        <div class="mt-5 h-1 w-14 bg-secondary"></div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7">
                <div class="mb-8 max-w-xl">
                    <span class="flex items-center gap-3 text-sm font-bold uppercase tracking-wider text-secondary">
                        <span class="h-px w-10 bg-secondary"></span>
                        Cap sur l’avenir
                    </span>
                    <h2 class="mt-4 text-3xl font-extrabold text-[var(--color-dark)] sm:text-4xl">Nos objectifs principaux</h2>
                    <p class="mt-4 text-base leading-relaxed text-[var(--color-gray)]">
                        Chaque projet est pensé pour produire un changement concret, renforcer les capacités locales et ouvrir de nouvelles possibilités.
                    </p>
                </div>

                <div class="grid gap-3 sm:grid-cols-2">
                    @foreach([
                        ['icon' => 'fa-hands-helping', 'text' => 'Donner un appui organisationnel aux populations en difficulté.'],
                        ['icon' => 'fa-people-arrows', 'text' => 'Encourager la participation active des populations au développement de leur milieu.'],
                        ['icon' => 'fa-users-gear', 'text' => 'Promouvoir la création de groupes d’intérêt et de coopératives locales.'],
                        ['icon' => 'fa-person-dress', 'text' => 'Renforcer l’autonomie économique et sociale des femmes et des jeunes filles.'],
                        ['icon' => 'fa-wheat-awn', 'text' => 'Lutter contre les fléaux socio-économiques et améliorer la sécurité alimentaire.'],
                        ['icon' => 'fa-seedling', 'text' => 'Favoriser l’innovation agricole et la durabilité environnementale.']
                    ] as $objectif)
                        <article class="group flex gap-3 border border-slate-200 bg-[var(--color-light)] p-4 transition-all duration-200 hover:-translate-y-1 hover:border-secondary hover:bg-white hover:shadow-md">
                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-secondary text-sm text-white transition-colors group-hover:bg-[var(--color-dark)]">
                                <i class="fa-solid {{ $objectif['icon'] }}" aria-hidden="true"></i>
                            </span>
                            <div class="flex-1 font-sans font-semibold">
                                <h3 class="text-sm leading-snug text-[var(--color-dark)] sm:text-base" style="font-family: 'Lato', ui-sans-serif, system-ui, sans-serif;">{{ $objectif['text'] }}</h3>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- 4. NOS VALEURS --}}
<section class="relative overflow-hidden bg-[var(--color-dark)] py-16 text-white lg:py-24">
    <div
        role="img"
        aria-label="Échange autour des valeurs de l’ONG AIL"
        class="absolute inset-0 bg-cover bg-center bg-fixed opacity-35"
        style="background-image: url('{{ asset('images/about.png') }}');"
    ></div>
    <div class="absolute inset-0 bg-[var(--color-dark)]/85"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-4">
                <span class="flex items-center gap-3 text-sm font-bold uppercase tracking-wider text-accent">
                    <span class="h-px w-10 bg-accent"></span>
                    Nos principes d’action
                </span>
                <h2 class="mt-4 text-3xl font-extrabold text-white sm:text-4xl">Nos valeurs, notre manière d’agir</h2>
                <p class="mt-5 max-w-md text-sm leading-relaxed text-white/70 sm:text-base">
                    Ces repères orientent nos décisions, nos partenariats et chaque action menée avec les communautés.
                </p>
            </div>

            <div class="grid gap-x-10 gap-y-5 sm:grid-cols-2 lg:col-span-8">
                @foreach([
                    'Solidarité & Inclusion',
                    'Leadership féminin',
                    'Innovation & Durabilité',
                    'Transparence & Responsabilité',
                    'Redevabilité',
                    'Engagement citoyen',
                    'Respect mutuel',
                    'Loyauté'
                ] as $index => $valeur)
                    <div class="flex items-center gap-4 border-b border-white/20 pb-4">
                        <span class="text-sm font-black text-accent">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3 class="text-base font-bold text-white sm:text-lg">{{ $valeur }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- 5. NOTRE MÉTHODOLOGIE --}}
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-auto mb-14 max-w-3xl text-center">
            <span class="text-sm font-semibold uppercase tracking-wider text-secondary">Approche sur le terrain</span>
            <h2 class="mt-2 text-3xl font-extrabold text-[var(--color-dark)] sm:text-4xl">Notre méthodologie</h2>
            <p class="mt-3 text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                Une démarche progressive qui transforme les besoins identifiés en actions suivies et durables.
            </p>
        </div>

        <div class="relative mx-auto max-w-6xl">
            <div class="absolute left-5 top-5 hidden h-px w-[calc(100%-2.5rem)] bg-secondary/30 lg:block"></div>
            <div class="grid gap-8 lg:grid-cols-6 lg:gap-5">
                @foreach([
                    ['title' => 'Écouter', 'desc' => 'Identifier les besoins avec les communautés.'],
                    ['title' => 'Mobiliser', 'desc' => 'Organiser les groupes et les acteurs locaux.'],
                    ['title' => 'Former', 'desc' => 'Renforcer les compétences et l’autonomie.'],
                    ['title' => 'Agir', 'desc' => 'Mettre en œuvre des solutions adaptées.'],
                    ['title' => 'Suivre', 'desc' => 'Mesurer les progrès et ajuster l’action.'],
                    ['title' => 'Partager', 'desc' => 'Capitaliser les expériences et les résultats.']
                ] as $index => $etape)
                    <article class="relative flex gap-4 lg:block lg:text-center">
                        <div class="relative z-10 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border-4 border-white bg-secondary text-sm font-extrabold text-white shadow-md lg:mx-auto">
                            {{ $index + 1 }}
                        </div>
                        <div class="pt-1 lg:pt-5">
                            <h3 class="text-lg font-bold text-[var(--color-dark)]">{{ $etape['title'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-[var(--color-gray)]">{{ $etape['desc'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

    </div>
</section>

    </div>

@endsection