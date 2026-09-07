@extends('layouts.app')

@section('title', 'Notre équipe - ONG AIL Kpalimé')

@section('content')

<div class="font-sans [&_h1]:font-display [&_h2]:font-display [&_h3]:font-display">

{{-- BANNIÈRE SIMPLE (PAGE HEADER) --}}
<section class="relative overflow-hidden bg-[var(--color-dark)] py-10 text-white sm:py-14">

    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('images/about.jpeg') }}"
            alt="Équipe ONG AIL à votre écoute"
            class="h-full w-full object-cover object-[center_30%] opacity-35"
        />
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-[var(--color-dark)] via-[var(--color-dark)]/80 to-primary/30"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">

        <nav class="mb-4 flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[var(--color-primary-light)]">
            <a href="{{ route('home') }}" class="transition-colors hover:text-[var(--color-accent)]">Accueil</a>
            <span>/</span>
            <span class="text-[var(--color-accent)]">Notre équipe</span>
        </nav>

        <h1 class="mb-4 text-3xl font-black uppercase tracking-tight text-white sm:text-4xl md:text-5xl">
            Gouvernance <span class="text-secondary">& Équipe</span>
        </h1>

        <p class="max-w-2xl text-sm leading-relaxed text-gray-300 sm:text-base">
            Découvrez la structure organisationnelle et les femmes et hommes engagés qui pilotent les actions de l'ONG AIL au quotidien pour le développement local.
        </p>

    </div>
</section>

{{-- Banner de la page Équipe --}}
<!-- <section class="relative bg-[var(--color-dark)] text-white py-16 sm:py-20 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('images/team_banner.png') }}"
            alt="Équipe ONG AIL"
            class="h-full w-full object-cover object-[center_20%] opacity-20"
        />
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[var(--color-primary-light)] mb-4">
            <a href="{{ route('home') }}" class="hover:text-[var(--color-accent)] transition-colors">Accueil</a>
            <span>/</span>
            <span class="text-[var(--color-accent)]">Notre Équipe</span>
        </nav>

        <h1 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
            Gouvernance & <span class="text-secondary">Équipe</span>
        </h1>

        <p class="text-sm sm:text-base text-gray-300 max-w-2xl leading-relaxed">
            Découvrez la structure organisationnelle et les femmes et hommes engagés qui pilotent les actions de l'ONG AIL au quotidien pour le développement local.
        </p>
    </div>
</section> -->

{{-- Contenu principal --}}
<div class="bg-[var(--color-light)] py-16 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- 1. Structure organisationnelle --}}
        <div class="mb-24">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-xs font-bold uppercase tracking-wider text-[var(--color-accent)] mb-2">Structure & Gouvernance</h2>
                <h3 class="text-2xl font-extrabold text-[var(--color-dark)] sm:text-3xl">
                    Les Organes de Décision et d'Action
                </h3>
                <p class="mt-4 text-sm leading-relaxed text-gray-600 sm:text-base">
                    Notre organisation repose sur des responsabilités claires. Les décisions sont prises au bon niveau, la stratégie est suivie par le conseil, et les activités sont mises en œuvre chaque jour par la direction et les équipes.
                </p>
            </div>

            <div class="grid items-center gap-10 lg:grid-cols-2">
                <div class="overflow-hidden">
                    <img
                        src="{{ asset('images/equipe.jpeg') }}"
                        alt="Structure de gouvernance de l'ONG AIL"
                        class="h-[420px] w-full object-cover"
                    />
                </div>

                <div class="max-w-xl">
                    <ul class="space-y-4 text-left text-sm leading-relaxed text-gray-700 sm:text-base">
                        <li>
                            <span class="font-bold text-[var(--color-dark)]">- Assemblée Générale (AG) :</span> instance qui fixe les grandes orientations de l’ONG et valide les résultats.
                        </li>
                        <li>
                            <span class="font-bold text-[var(--color-dark)]">- Conseil d’Administration (CA) :</span> pilote la stratégie et veille à la mise en œuvre des décisions.
                        </li>
                        <li>
                            <span class="font-bold text-[var(--color-dark)]">- Direction Exécutive :</span> coordonne les activités quotidiennes et les actions sur le terrain.
                        </li>
                        <li>
                            <span class="font-bold text-[var(--color-dark)]">- Conseil de Contrôle :</span> vérifie la gestion financière et administrative pour garantir transparence et rigueur.
                        </li>
                        <li>
                            <span class="font-bold text-[var(--color-dark)]">- Équipe de techniciens bénévoles :</span> apporte un appui concret aux projets et aide les communautés à avancer.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- 2. Organigramme Schématique --}}
        <div class="mb-20">
            <div class="relative left-1/2 -ml-[50vw] w-screen overflow-hidden bg-white p-4 sm:p-10">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-xs font-bold uppercase tracking-wider text-[var(--color-accent)] mb-2">Gouvernance</h2>
            <h3 class="text-2xl sm:text-3xl font-black uppercase text-[var(--color-dark)] ">
                Organigramme Fonctionnel
            </h3>
        </div>
        <div class="relative mx-auto w-full max-w-4xl text-center">

            {{-- Level 1: Assemblée Générale --}}
            <div class="relative z-10 mx-auto w-72 bg-[var(--color-dark)] px-5 py-4 text-white shadow-md">
                <span class="mt-1 block font-bold">Assemblée Générale (AG)</span>
            </div>

            {{-- Connecteur AG -> Ligne transversale --}}
            <div class="w-full h-8 flex justify-center">
                <div class="w-px h-full bg-slate-300"></div>
            </div>

            {{-- Ligne transversale & barres descendantes vers Gouvernance / Contrôle --}}
            <div class="relative mx-auto h-6 max-w-2xl">
                {{-- Ligne horizontale reliant les 2 piliers --}}
                <div class="absolute left-[25%] right-[25%] top-0 h-px bg-slate-300 max-md:hidden"></div>
                {{-- Barre au-dessus de Gouvernance (CA) --}}
                <div class="absolute left-[25%] top-0 h-full w-px bg-slate-300 max-md:hidden"></div>
                {{-- Barre au-dessus de Contrôle (Conseil de Contrôle) --}}
                <div class="absolute right-[25%] top-0 h-full w-px bg-slate-300 max-md:hidden"></div>
                <div class="absolute left-1/2 top-0 h-full w-px -translate-x-1/2 bg-slate-300 md:hidden"></div>
            </div>

            {{-- Level 2: CA et Conseil de Contrôle --}}
            <div class="relative z-10 mx-auto grid max-w-2xl grid-cols-1 gap-4 md:grid-cols-2 md:gap-12">
                <div class="bg-secondary/10 px-5 py-4 text-[var(--color-dark)] shadow-sm">
                    <span class="mt-1 block font-bold">Conseil d'Administration (CA)</span>
                </div>

                <div class="bg-accent/15 px-5 py-4 text-[var(--color-dark)] shadow-sm">
                    <span class="mt-1 block font-bold">Conseil de Surveillant
</span>
                </div>
            </div>

            {{-- Connecteur CA -> Direction Exécutive --}}
            <div class="mx-auto hidden h-10 w-full max-w-2xl grid-cols-2 gap-12 md:grid">
                <div class="flex justify-center">
                    <div class="w-px h-full bg-slate-300"></div>
                </div>
                <div></div>
            </div>
            <div class="mx-auto flex h-8 justify-center md:hidden">
                <div class="h-full w-px bg-slate-300"></div>
            </div>

            {{-- Level 3: Direction Exécutive --}}
            <div class="relative z-10 mx-auto grid max-w-2xl grid-cols-1 gap-12 md:grid-cols-2">
                <div class="bg-primary px-5 py-4 text-white shadow-md">
                    <span class="mt-1 block font-bold">Direction Exécutive</span>
                </div>
            </div>

            {{-- Connecteur Direction Exécutive -> Pôles Opérationnels --}}
            <div class="relative mx-auto hidden h-12 w-full max-w-2xl md:block">
                {{-- Ligne descendant de la Direction Exécutive --}}
                <div class="absolute left-[25%] top-0 h-6 w-px bg-slate-300"></div>
                {{-- Ligne horizontale distributive --}}
                <div class="absolute top-6 left-[16.66%] right-[16.66%] h-px bg-slate-300"></div>
                {{-- 3 lignes descendant vers les 3 blocs du bas --}}
                <div class="absolute top-6 left-[16.66%] h-6 w-px bg-slate-300"></div>
                <!-- <div class="absolute top-6 left-1/2 h-6 w-px bg-slate-300 -translate-x-1/2"></div> -->
                <div class="absolute top-6 right-[16.66%] h-6 w-px bg-slate-300"></div>
            </div>
            <div class="mx-auto flex h-8 justify-center md:hidden">
                <div class="h-full w-px bg-slate-300"></div>
            </div>

            {{-- Level 4: Pôles Opérationnels --}}
            <div class="relative z-10 mx-auto w-full max-w-2xl">
                <!-- <div class="absolute left-[75%] top-[-1.5rem] h-6 w-px bg-slate-300"></div> -->
                <!-- <div class="absolute left-[50%] top-[-1.5rem] h-px w-[25%] bg-slate-300"></div> -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div class="bg-[var(--color-secondary-light)] px-4 py-4 text-sm font-bold text-[var(--color-dark)] shadow-sm">
                        Chargé de mission.
                    </div>
                    <div class="bg-[var(--color-accent-light)] px-4 py-4 text-sm font-bold text-[var(--color-dark)] shadow-sm">
                        Secrétariat comptablilité
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

        {{-- 3. Membres du Conseil d'Administration & Équipe --}}
        <div>
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-xs font-bold uppercase tracking-wider text-[var(--color-accent)] mb-2">Membres & Collaborateurs</h2>
                <h3 class="text-2xl sm:text-3xl font-black uppercase text-[var(--color-dark)]">
                    Conseil d'Administration & Équipe Exécutive
                </h3>
                <p class="mt-3 text-sm text-gray-600">
                    Des personnalités engagées, issues des communautés locales cibles de l'ONG.
                </p>
            </div>

            <div class="w-full overflow-hidden border border-slate-200 bg-white shadow-sm">
                <table class="w-full min-w-0 table-fixed border-collapse text-left">
                    <thead class="bg-[var(--color-dark)] text-xs uppercase tracking-wider text-white">
                        <tr>
                            <th class="w-[38%] px-3 py-3 font-bold sm:px-5 sm:py-4">Nom</th>
                            <th class="w-[18%] px-3 py-3 font-bold sm:px-5 sm:py-4">Genre</th>
                            <th class="w-[44%] px-3 py-3 font-bold sm:px-5 sm:py-4">Fonction</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 text-xs sm:text-sm [&_td]:break-words [&_td]:px-3 [&_td]:py-3 sm:[&_td]:px-5 sm:[&_td]:py-4">
                        <tr class="bg-white hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">LAGUDA Kossi Sénam</td>
                            <td class="px-5 py-4"><span class="text-primary"><span class="sm:hidden">H</span><span class="hidden sm:inline">Homme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-secondary">Président</td>
                        </tr>
                        <tr class="bg-slate-50 hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">AGBENOWOSSI Akossiwa</td>
                            <td class="px-5 py-4"><span class="text-pink-600"><span class="sm:hidden">F</span><span class="hidden sm:inline">Femme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-secondary">Secrétaire</td>
                        </tr>
                        <tr class="bg-white hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">AMEDANU Yawa Kafui</td>
                            <td class="px-5 py-4"><span class="text-pink-600"><span class="sm:hidden">F</span><span class="hidden sm:inline">Femme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-secondary">Trésorière</td>
                        </tr>
                        <tr class="bg-slate-50 hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">CHAKPLA Essi Mansan Séna</td>
                            <td class="px-5 py-4"><span class="text-pink-600"><span class="sm:hidden">F</span><span class="hidden sm:inline">Femme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-secondary">Directrice Exécutive</td>
                        </tr>
                        <tr class="bg-white hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">AYISSA K. Mawuli Abel</td>
                            <td class="px-5 py-4"><span class="text-primary"><span class="sm:hidden">H</span><span class="hidden sm:inline">Homme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-primary">Responsable Admin. & Financier (RAF)</td>
                        </tr>
                        <tr class="bg-slate-50 hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">DZOGBENU Ama Mawuli</td>
                            <td class="px-5 py-4"><span class="text-pink-600"><span class="sm:hidden">F</span><span class="hidden sm:inline">Femme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-gray-500">Conseillère</td>
                        </tr>
                        <tr class="bg-white hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">GAGNO Kwami Adoukpo</td>
                            <td class="px-5 py-4"><span class="text-primary"><span class="sm:hidden">H</span><span class="hidden sm:inline">Homme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-gray-500">Conseiller</td>
                        </tr>
                        <tr class="bg-slate-50 hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">AFAMBO</td>
                            <td class="px-5 py-4"><span class="text-primary"><span class="sm:hidden">H</span><span class="hidden sm:inline">Homme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-primary">Point focal Ogou</td>
                        </tr>
                        <tr class="bg-white hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">DZITRI Edo Immaculé</td>
                            <td class="px-5 py-4"><span class="text-pink-600"><span class="sm:hidden">F</span><span class="hidden sm:inline">Femme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-secondary">Technicienne agricole</td>
                        </tr>
                        <tr class="bg-slate-50 hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">AGAGAH Clifford Marius</td>
                            <td class="px-5 py-4"><span class="text-primary"><span class="sm:hidden">H</span><span class="hidden sm:inline">Homme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-primary">Animateur de projet</td>
                        </tr>
                        <tr class="bg-white hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">ATITSOGBE Mawufemo</td>
                            <td class="px-5 py-4"><span class="text-pink-600"><span class="sm:hidden">F</span><span class="hidden sm:inline">Femme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-primary">Animatrice de projet</td>
                        </tr>
                        <tr class="bg-slate-50 hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">DJINADJI Ida</td>
                            <td class="px-5 py-4"><span class="text-pink-600"><span class="sm:hidden">F</span><span class="hidden sm:inline">Femme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-purple-600">Bénévole</td>
                        </tr>
                        <tr class="bg-white hover:bg-[var(--color-secondary-light)]">
                            <td class="px-5 py-4 font-bold text-[var(--color-dark)]">AMETONAYO Kokouvi</td>
                            <td class="px-5 py-4"><span class="text-primary"><span class="sm:hidden">H</span><span class="hidden sm:inline">Homme</span></span></td>
                            <td class="px-5 py-4 font-semibold text-gray-500">Chauffeur</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-10 bg-[var(--color-secondary-light)] px-6 py-7 sm:flex sm:items-center sm:justify-between sm:gap-8 sm:px-8">
                <div>
                    <h3 class="font-display text-xl font-extrabold text-[var(--color-dark)] sm:text-2xl">
                        Envie de rejoindre l’équipe ?
                    </h3>
                    <p class="mt-2 max-w-2xl text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                        Vous souhaitez contribuer aux actions de l’ONG AIL comme bénévole, technicien ou partenaire ? Présentez-nous votre profil et vos motivations.
                    </p>
                </div>
                <a href="{{ route('contact.index') }}" class="mt-5 inline-flex shrink-0 items-center justify-center bg-[var(--color-dark)] px-5 py-3 text-sm font-bold text-white transition-colors hover:bg-[var(--color-primary)] sm:mt-0">
                    Proposer ma candidature
                </a>
            </div>
            <!--

                {{-- Membre 1 : Président --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-blue-50 text-blue-600 font-bold text-[10px] rounded-full">Homme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary/20">
                        👨‍💼
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">LAGUDA Kossi Sénam</h4>
                    <p class="text-xs font-bold text-secondary uppercase mt-1">Président</p>
                </div>

                {{-- Membre 2 : Secrétaire --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-pink-50 text-pink-600 font-bold text-[10px] rounded-full">Femme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary/20">
                        👩‍💼
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">AGBENOWOSSI Akossiwa</h4>
                    <p class="text-xs font-bold text-secondary uppercase mt-1">Secrétaire</p>
                </div>

                {{-- Membre 3 : Trésorière --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-pink-50 text-pink-600 font-bold text-[10px] rounded-full">Femme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary/20">
                        👩‍💼
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">AMEDANU Yawa Kafui</h4>
                    <p class="text-xs font-bold text-secondary uppercase mt-1">Trésorière</p>
                </div>

                {{-- Membre 4 : Directrice Exécutive --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden ring-2 ring-secondary/30">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-pink-50 text-pink-600 font-bold text-[10px] rounded-full">Femme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary">
                        👩‍💼
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">CHAKPLA Essi Mansan Séna</h4>
                    <p class="text-xs font-bold text-secondary uppercase mt-1">Directrice Exécutive</p>
                </div>

                {{-- Membre 5 : RAF --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-blue-50 text-blue-600 font-bold text-[10px] rounded-full">Homme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary/20">
                        👨‍💼
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">AYISSA K. Mawuli Abel</h4>
                    <p class="text-xs font-bold text-[var(--color-primary)] uppercase mt-1">Responsable Admin. & Financier (RAF)</p>
                </div>

                {{-- Membre 6 : Conseillère --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-pink-50 text-pink-600 font-bold text-[10px] rounded-full">Femme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary/20">
                        👩‍💼
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">DZOGBENU Ama Mawuli</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-1">Conseillère</p>
                </div>

                {{-- Membre 7 : Conseiller --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-blue-50 text-blue-600 font-bold text-[10px] rounded-full">Homme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary/20">
                        👨‍💼
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">GAGNO Kwami Adoukpo</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-1">Conseiller</p>
                </div>

                {{-- Membre 8 : Point Focal Ogou --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-blue-50 text-blue-600 font-bold text-[10px] rounded-full">Homme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary/20">
                        👨‍💼
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">AFAMBO</h4>
                    <p class="text-xs font-bold text-[var(--color-primary)] uppercase mt-1">Point focal Ogou</p>
                </div>

                {{-- Membre 9 : Technicienne agricole --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-pink-50 text-pink-600 font-bold text-[10px] rounded-full">Femme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary/20">
                        👩‍🌾
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">DZITRI Edo Immaculé</h4>
                    <p class="text-xs font-bold text-green-600 uppercase mt-1">Technicienne agricole</p>
                </div>

                {{-- Membre 10 : Animateur de projet --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-blue-50 text-blue-600 font-bold text-[10px] rounded-full">Homme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary/20">
                        👨‍💼
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">AGAGAH Clifford Marius</h4>
                    <p class="text-xs font-bold text-blue-600 uppercase mt-1">Animateur de projet</p>
                </div>

                {{-- Membre 11 : Animatrice de projet --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-pink-50 text-pink-600 font-bold text-[10px] rounded-full">Femme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary/20">
                        👩‍💼
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">ATITSOGBE Mawufemo</h4>
                    <p class="text-xs font-bold text-blue-600 uppercase mt-1">Animatrice de projet</p>
                </div>

                {{-- Membre 12 : Bénévole --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-pink-50 text-pink-600 font-bold text-[10px] rounded-full">Femme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary/20">
                        👩‍💼
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">DJINADJI Ida</h4>
                    <p class="text-xs font-bold text-purple-600 uppercase mt-1">Bénévole</p>
                </div>

                {{-- Membre 13 : Chauffeur --}}
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3 px-2 py-0.5 bg-blue-50 text-blue-600 font-bold text-[10px] rounded-full">Homme</div>
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-100 flex items-center justify-center text-gray-400 font-bold text-2xl mb-4 border-2 border-secondary/20">
                        👨‍✈️
                    </div>
                    <h4 class="font-bold text-base text-[var(--color-dark)]">AMETONAYO Kokouvi</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-1">Chauffeur</p>
                </div>

            </div> -->
        </div>

    </div>
</div>



</div>
@endsection
