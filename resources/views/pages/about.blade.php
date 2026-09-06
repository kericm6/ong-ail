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
                        <span class="block text-3xl font-extrabold text-[var(--color-dark)]">2002</span>
                        <span class="text-sm font-medium text-[var(--color-gray)]">Année de création</span>
                    </div>
                    <div class="border-l-4 border-[var(--color-accent)] bg-[var(--color-accent-light)] px-5 py-4">
                        <span class="block text-3xl font-extrabold text-[var(--color-dark)]">Kpalimé</span>
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
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-end mb-12">
            <div class="lg:col-span-5">
                <div class="flex items-center gap-3 text-sm font-bold uppercase tracking-wider text-secondary">
                    <span class="h-px w-10 bg-secondary"></span>
                    Piliers d'action
                </div>
                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-[var(--color-dark)]">
                    Des solutions pensées pour le terrain
                </h2>
            </div>
            <p class="lg:col-span-7 max-w-2xl text-base leading-relaxed text-[var(--color-gray)] lg:pb-1">
                Nos interventions répondent aux besoins concrets des communautés et relient inclusion sociale, autonomie économique et protection de l’environnement.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-6">
            
            {{-- Domaine 1 --}}
            <div class="group relative overflow-hidden border-l-4 border-secondary bg-white p-7 shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg">
                <span class="absolute right-6 top-5 text-4xl font-black text-secondary/15">01</span>
                <div class="relative mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-[var(--color-secondary-light)] text-secondary transition group-hover:bg-secondary group-hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <h3 class="relative mb-3 text-xl font-bold text-[var(--color-dark)]">Autonomisation économique et sociale des femmes</h3>
                <p class="relative text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                    Accompagnement des coopératives féminines agricoles et artisanales pour la production, la transformation et la commercialisation de produits locaux et bio.
                </p>
            </div>

            {{-- Domaine 2 --}}
            <div class="group relative overflow-hidden border-l-4 border-[var(--color-primary)] bg-white p-7 shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg">
                <span class="absolute right-6 top-5 text-4xl font-black text-primary/15">02</span>
                <div class="relative mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-[var(--color-primary-light)] text-primary transition group-hover:bg-primary group-hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="relative mb-3 text-xl font-bold text-[var(--color-dark)]">Innovation et durabilité environnementale</h3>
                <p class="relative text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                    Mise en place de projets tels que les biodigesteurs pour valoriser les déchets organiques et produire du biogaz et des biofertilisants.
                </p>
            </div>

            {{-- Domaine 3 --}}
            <div class="group relative overflow-hidden border-l-4 border-[var(--color-accent)] bg-white p-7 shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg">
                <span class="absolute right-6 top-5 text-4xl font-black text-accent/25">03</span>
                <div class="relative mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-[var(--color-accent-light)] text-[var(--color-accent-dark)] transition group-hover:bg-accent group-hover:text-[var(--color-dark)]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                </div>
                <h3 class="relative mb-3 text-xl font-bold text-[var(--color-dark)]">Formation et insertion des jeunes filles (CIPE)</h3>
                <p class="relative text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                    Prise en charge des jeunes filles déscolarisées ou vulnérables au <strong class="text-[var(--color-dark)]">Centre Incubateur de l’AIL (CIPE)</strong>, avec un accompagnement complet pour leur formation et leur insertion socio-professionnelle.
                </p>
            </div>

            {{-- Domaine 4 --}}
            <div class="group relative overflow-hidden border-l-4 border-[var(--color-success)] bg-white p-7 shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg">
                <span class="absolute right-6 top-5 text-4xl font-black text-success/15">04</span>
                <div class="relative mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-[var(--color-success-light)] text-success transition group-hover:bg-success group-hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="relative mb-3 text-xl font-bold text-[var(--color-dark)]">Renforcement des communautés</h3>
                <p class="relative text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                    Promotion de la création de groupes d’intérêt et de coopératives, sensibilisation des populations à la participation active au développement local et lutte contre les fléaux socio-économiques.
                </p>
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