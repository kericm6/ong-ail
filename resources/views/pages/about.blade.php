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
            À propos de <span class="text-secondary">Nous</span>
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
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-5">
                <span class="text-emerald-600 font-semibold text-sm uppercase tracking-wider">Cap sur l'avenir</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2 mb-4">
                    Nos Objectifs Principaux
                </h2>
                <p class="text-slate-600 leading-relaxed text-base">
                    Toutes nos actions s'articulent autour d'orientations stratégiques visant l'autonomie et le bien-être durable des populations.
                </p>
            </div>

            <div class="lg:col-span-7">
                <ul class="space-y-3">
                    @foreach([
                        "Donner un appui organisationnel aux populations en difficulté.",
                        "Encourager la participation active des populations au développement de leur milieu.",
                        "Promouvoir la création de groupes d’intérêt et de coopératives locales.",
                        "Renforcer l’autonomie économique et sociale des femmes et des jeunes filles.",
                        "Lutter contre les fléaux socio-économiques et améliorer la sécurité alimentaire.",
                        "Favoriser l’innovation agricole et la durabilité environnementale."
                    ] as $objectif)
                        <li class="flex items-start gap-3.5 p-4 rounded-xl bg-slate-50 border border-slate-100">
                            <div class="p-1 bg-emerald-600 text-white rounded-full shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-slate-800 font-medium text-sm sm:text-base">{{ $objectif }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>


{{-- 4. NOS VALEURS --}}
<section class="py-16 lg:py-20 bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-emerald-400 font-semibold text-sm uppercase tracking-wider">Nos principes d'action</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-1">Nos Valeurs</h2>
            <p class="text-slate-400 mt-3 text-sm sm:text-base">
                AIL s’appuie sur un ensemble de valeurs fondamentales qui guident chacune de ses actions et décisions.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            @php
                $valeurs = [
                    ['title' => 'Solidarité & Inclusion', 'desc' => 'Chaque femme et chaque jeune fille doivent pouvoir participer pleinement à la vie de leur communauté.'],
                    ['title' => 'Leadership Féminin & Empowerment', 'desc' => 'Encourager les femmes à devenir des actrices du changement et à prendre des décisions dans leur vie et milieu.'],
                    ['title' => 'Innovation & Durabilité', 'desc' => 'Développer des solutions locales adaptées et respectueuses de l’environnement pour un impact durable.'],
                    ['title' => 'Transparence & Responsabilité', 'desc' => 'Garantir une gestion efficace et responsable des projets et des ressources.'],
                    ['title' => 'Redevabilité', 'desc' => 'Être responsable envers les communautés, les partenaires et les bénéficiaires de nos actions.'],
                    ['title' => 'Engagement Citoyen', 'desc' => 'Inciter à la participation active dans le développement local et la vie de la communauté.'],
                    ['title' => 'Respect Mutuel', 'desc' => 'Promouvoir le respect et l’écoute entre les membres, partenaires et bénéficiaires.'],
                    ['title' => 'Loyauté', 'desc' => 'Agir avec intégrité et fidélité envers nos valeurs, nos partenaires et nos bénéficiaires.']
                ];
            @endphp

            @foreach($valeurs as $valeur)
                <div class="bg-slate-800/70 border border-slate-700/60 p-6 rounded-2xl hover:border-emerald-500/50 transition duration-200">
                    <h3 class="text-base font-bold text-emerald-400 mb-2">{{ $valeur['title'] }}</h3>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">{{ $valeur['desc'] }}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>


{{-- 5. NOTRE MÉTHODOLOGIE --}}
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-emerald-600 font-semibold text-sm uppercase tracking-wider">Approche sur le terrain</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-1">Notre Méthodologie</h2>
            <p class="text-slate-600 mt-3 text-sm sm:text-base">
                AIL adopte une approche participative, inclusive et durable. Notre méthodologie repose sur plusieurs principes et étapes clés.
            </p>
        </div>

        <div class="space-y-6 max-w-4xl mx-auto">
            
            {{-- Étape 1 --}}
            <div class="flex flex-col sm:flex-row gap-5 p-6 rounded-2xl bg-slate-50 border border-slate-200/80">
                <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white font-extrabold text-lg flex items-center justify-center shrink-0">1</div>
                <div>
                    <h3 class="text-lg font-bold text-slate-900 mb-1.5">Identification des besoins et diagnostic participatif</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Analyse approfondie des besoins des communautés selon les réalités socio-économiques, culturelles et environnementales. Implication directe des populations dès le départ pour élaborer des projets ciblés, pertinents et acceptés par tous.
                    </p>
                </div>
            </div>

            {{-- Étape 2 --}}
            <div class="flex flex-col sm:flex-row gap-5 p-6 rounded-2xl bg-slate-50 border border-slate-200/80">
                <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white font-extrabold text-lg flex items-center justify-center shrink-0">2</div>
                <div>
                    <h3 class="text-lg font-bold text-slate-900 mb-1.5">Mobilisation et organisation communautaire</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Création et accompagnement de groupes d’intérêt, de coopératives et de structures locales (particulièrement pour les femmes et jeunes filles). Formations sur la gouvernance locale et la gestion de groupe pour renforcer la cohésion sociale.
                    </p>
                </div>
            </div>

            {{-- Étape 3 --}}
            <div class="flex flex-col sm:flex-row gap-5 p-6 rounded-2xl bg-slate-50 border border-slate-200/80">
                <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white font-extrabold text-lg flex items-center justify-center shrink-0">3</div>
                <div>
                    <h3 class="text-lg font-bold text-slate-900 mb-1.5">Formation et renforcement de capacités</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Modules adaptés : entrepreneuriat, gestion financière, agriculture durable, technologies numériques, santé et leadership féminin. Le <strong>Centre Incubateur de l’AIL (CIPE)</strong> assure un suivi personnalisé pour les jeunes filles vulnérables.
                    </p>
                </div>
            </div>

            {{-- Étape 4 --}}
            <div class="flex flex-col sm:flex-row gap-5 p-6 rounded-2xl bg-slate-50 border border-slate-200/80">
                <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white font-extrabold text-lg flex items-center justify-center shrink-0">4</div>
                <div>
                    <h3 class="text-lg font-bold text-slate-900 mb-1.5">Mise en œuvre des projets et suivi</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Mise en œuvre participative où les bénéficiaires sont acteurs du changement. Suivi régulier et accompagnement technique (coopératives, biodigesteurs, ateliers) pour maximiser les impacts économiques, sociaux et environnementaux.
                    </p>
                </div>
            </div>

            {{-- Étape 5 --}}
            <div class="flex flex-col sm:flex-row gap-5 p-6 rounded-2xl bg-slate-50 border border-slate-200/80">
                <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white font-extrabold text-lg flex items-center justify-center shrink-0">5</div>
                <div>
                    <h3 class="text-lg font-bold text-slate-900 mb-1.5">Évaluation et capitalisation</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Évaluation continue des résultats selon des indicateurs précis. Capitalisation et partage des expériences réussies pour inspirer d’autres communautés et adapter les interventions futures.
                    </p>
                </div>
            </div>

            {{-- Étape 6 --}}
            <div class="flex flex-col sm:flex-row gap-5 p-6 rounded-2xl bg-emerald-50 border border-emerald-200">
                <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white font-extrabold text-lg flex items-center justify-center shrink-0">6</div>
                <div>
                    <h3 class="text-lg font-bold text-emerald-950 mb-1.5">Approche intégrée et durable</h3>
                    <p class="text-emerald-900 text-sm leading-relaxed">
                        Combinaison de l'autonomisation économique, de l'éducation, de l'innovation agricole et de la durabilité environnementale dans toutes les interventions pour un changement réel et pérenne.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

    </div>

@endsection