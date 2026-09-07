@extends('layouts.app')

@section('title', 'Actualités & Blog - ONG AIL Kpalimé')

@section('content')

<div class="font-sans [&_h1]:font-display [&_h2]:font-display [&_h3]:font-display">


<!-- Section Blog & Actualités Ultra Moderne -->
{{--
<section class="py-16 sm:py-20 bg-white text-[var(--color-dark)] relative overflow-hidden">
    <!-- Effets de fond modernes (Gradients / Blur) -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-[var(--color-primary)]/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-emerald-500/10 rounded-full blur-[150px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- En-tête de la section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-[var(--color-accent)] bg-[var(--color-accent)]/10 border border-[var(--color-accent)]/30 px-3.5 py-1.5 rounded-full inline-block mb-3">
                    Médias & Témoignages
                </span>
                <h2 class="text-3xl sm:text-5xl font-black tracking-tight text-[var(--color-dark)]">
                    Actualités & Récits d'Impact
                </h2>
                <p class="text-[var(--color-gray)] text-base max-w-xl mt-3">
                    Suivez nos actions sur le terrain, les avancées de nos projets et les histoires inspirantes de nos bénéficiaires.
                </p>
            </div>

            <!-- Recherche & Filtres -->
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                <div class="relative">
                    <input type="text" placeholder="Rechercher un article..." class="w-full sm:w-64 bg-white border border-gray-200 rounded-xl px-4 py-2.5 pl-10 text-xs text-[var(--color-dark)] placeholder-gray-400 focus:outline-none focus:border-[var(--color-primary)] transition-all">
                    <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
            </div>
        </div>

        <!-- Filtres par catégories -->
        <div class="flex items-center gap-2 overflow-x-auto pb-4 mb-12 scrollbar-none border-b border-gray-200">
            <button class="px-4 py-2 rounded-xl text-xs font-bold bg-[var(--color-primary)] text-white shadow-lg shadow-[var(--color-primary)]/25 shrink-0 transition-all">
                Tous les articles
            </button>
            <button class="px-4 py-2 rounded-xl text-xs font-semibold bg-gray-50 text-[var(--color-gray)] hover:bg-[var(--color-primary-light)] hover:text-[var(--color-dark)] border border-gray-200 shrink-0 transition-all">
                Energies Vertes & Biogaz
            </button>
            <button class="px-4 py-2 rounded-xl text-xs font-semibold bg-gray-50 text-[var(--color-gray)] hover:bg-[var(--color-primary-light)] hover:text-[var(--color-dark)] border border-gray-200 shrink-0 transition-all">
                Autonomisation des Femmes
            </button>
            <button class="px-4 py-2 rounded-xl text-xs font-semibold bg-gray-50 text-[var(--color-gray)] hover:bg-[var(--color-primary-light)] hover:text-[var(--color-dark)] border border-gray-200 shrink-0 transition-all">
                Centre CIPE & Jeunesse
            </button>
            <button class="px-4 py-2 rounded-xl text-xs font-semibold bg-gray-50 text-[var(--color-gray)] hover:bg-[var(--color-primary-light)] hover:text-[var(--color-dark)] border border-gray-200 shrink-0 transition-all">
                Événements & Partenariats
            </button>
        </div>

        <!-- ARTICLE A LA UNE (Featured Post) -->
        <div class="relative bg-white rounded-3xl overflow-hidden shadow-sm mb-12 group transition-all duration-300">
            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                
                <!-- Visuel -->
                <div class="lg:col-span-7 h-72 lg:h-[420px] bg-gray-100 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-slate-900/90 via-slate-900/40 to-transparent z-10"></div>
                    <img src="{{ asset('images/slide1.jpg') }}" alt="Femmes agricultrices participant au projet biogaz à Kloto" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                    <span class="absolute top-4 left-4 z-20 px-3 py-1 bg-emerald-500/20 backdrop-blur-md border border-emerald-500/40 text-emerald-300 text-[11px] font-bold uppercase tracking-wider rounded-lg">
                        À la Une • Transition Écologique
                    </span>
                </div>

                <!-- Contenu -->
                <div class="lg:col-span-5 p-8 sm:p-10 z-20">
                    <div class="flex items-center gap-3 text-xs text-[var(--color-gray)] mb-4">
                        <span class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-[var(--color-primary)]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            12 Septembre 2026
                        </span>
                        <span>•</span>
                        <span>Lecture 4 min</span>
                    </div>

                    <h3 class="text-2xl sm:text-3xl font-bold text-[var(--color-dark)] mb-4 leading-tight group-hover:text-[var(--color-primary)] transition-colors">
                        Comment les biodigesteurs transforment le quotidien des agricultrices de Kloto
                    </h3>

                    <p class="text-[var(--color-gray)] text-sm leading-relaxed mb-6">
                        Grâce au programme FAME soutenu par le GERES, 50 femmes réduisent désormais leur dépendance aux engrais chimiques et produisent leur propre énergie propre.
                    </p>

                    <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-[var(--color-primary-light)] flex items-center justify-center font-bold text-xs text-[var(--color-primary)] border border-gray-200">
                                AIL
                            </div>
                            <div>
                                <span class="block text-xs font-bold text-[var(--color-dark)]">Équipe Éditoriale AIL</span>
                                <span class="block text-[10px] text-[var(--color-gray)]">Kloto, Togo</span>
                            </div>
                        </div>

                        <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 text-xs font-bold text-[var(--color-primary)] group-hover:translate-x-1 transition-transform">
                            Lire l'article
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- GRILLE D'ARTICLES (Cards Modernes) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card Article 1 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <!-- Image Card -->
                    <div class="h-52 bg-gray-100 relative overflow-hidden">
                        <img src="{{ asset('images/s.jpeg') }}" alt="Formation des jeunes filles au centre CIPE" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-purple-500/20 backdrop-blur-md border border-purple-500/40 text-purple-300 text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md">
                        Programme CIPE
                        </span>
                    </div>

                    <!-- Contenu -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-[11px] text-[var(--color-gray)] mb-3">
                            <span>05 Sept 2026</span>
                            <span>•</span>
                            <span>3 min de lecture</span>
                        </div>
                        <h4 class="text-lg font-bold text-[var(--color-dark)] group-hover:text-[var(--color-primary)] transition-colors mb-2 leading-snug">
                            Lancement de la nouvelle promotion de formation au Centre CIPE
                        </h4>
                        <p class="text-[var(--color-gray)] text-xs leading-relaxed mb-4 line-clamp-3">
                            Découvrez les ateliers pratiques en savonnerie, couture et pâtisserie ouverts aux jeunes filles déscolarisées cette saison.
                        </p>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-2 border-t border-gray-200 flex items-center justify-between text-xs">
                    <span class="text-[var(--color-gray)] font-medium">Insertion & Métiers</span>
                    <a href="{{ route('blog') }}" class="font-bold text-[var(--color-primary)] flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Lire 
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </article>

            <!-- Card Article 2 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <!-- Image Card -->
                    <div class="h-52 bg-gray-100 relative overflow-hidden">
                        <img src="{{ asset('images/S1.png') }}" alt="Parcelles pilotes du projet EcoFemme" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-blue-500/20 backdrop-blur-md border border-blue-500/40 text-blue-300 text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md">
                        Projet EcoFemme / OIF
                        </span>
                    </div>

                    <!-- Contenu -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-[11px] text-[var(--color-gray)] mb-3">
                            <span>28 Août 2026</span>
                            <span>•</span>
                            <span>5 min de lecture</span>
                        </div>
                        <h4 class="text-lg font-bold text-[var(--color-dark)] group-hover:text-[var(--color-primary)] transition-colors mb-2 leading-snug">
                            10 parcelles pilotes agroécologiques créées avec succès
                        </h4>
                        <p class="text-[var(--color-gray)] text-xs leading-relaxed mb-4 line-clamp-3">
                            Retour sur la formation de 120 femmes aux techniques d'agriculture biologique respectueuses de la biodiversité.
                        </p>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-2 border-t border-gray-200 flex items-center justify-between text-xs">
                    <span class="text-[var(--color-gray)] font-medium">Agroécologie</span>
                    <a href="{{ route('blog') }}" class="font-bold text-[var(--color-primary)] flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Lire 
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </article>

            <!-- Card Article 3 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <!-- Image Card -->
                    <div class="h-52 bg-gray-100 relative overflow-hidden">
                        <img src="{{ asset('images/slide3.jpeg') }}" alt="Action collective des bénéficiaires de l’ONG AIL" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <span class="absolute top-3 left-3 bg-amber-500/20 backdrop-blur-md border border-amber-500/40 text-amber-300 text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md">
                        Témoignages
                        </span>
                    </div>

                    <!-- Contenu -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-[11px] text-[var(--color-gray)] mb-3">
                            <span>14 Août 2026</span>
                            <span>•</span>
                            <span>4 min de lecture</span>
                        </div>
                        <h4 class="text-lg font-bold text-[var(--color-dark)] group-hover:text-[var(--color-primary)] transition-colors mb-2 leading-snug">
                            « Mon autonomie a commencé ici » : Le récit d'Afi, couturière diplômée du CIPE
                        </h4>
                        <p class="text-[var(--color-gray)] text-xs leading-relaxed mb-4 line-clamp-3">
                            Découvrez le parcours inspirant d'Afi qui a pu ouvrir son propre atelier après 6 mois de formation pratique.
                        </p>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-2 border-t border-gray-200 flex items-center justify-between text-xs">
                    <span class="text-[var(--color-gray)] font-medium">Impact Humain</span>
                    <a href="{{ route('blog') }}" class="font-bold text-[var(--color-primary)] flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Lire 
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </article>

        </div>

        <!-- CALL TO ACTION : Newsletter moderne -->
        <div class="mt-20 bg-[var(--color-primary-light)] border border-gray-200 rounded-3xl p-8 sm:p-12 relative overflow-hidden text-center sm:text-left flex flex-col lg:flex-row items-center justify-between gap-8">
            <div class="max-w-xl">
                <span class="text-xs font-bold text-[var(--color-primary)] uppercase tracking-widest block mb-2">Restez Informé(e)</span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-[var(--color-dark)]">
                    Abonnez-vous à notre Lettre d'Information
                </h3>
                <p class="text-[var(--color-gray)] text-sm mt-2">
                    Recevez chaque mois les récits de nos projets, nos appels à candidature et nos rapports d'impact directement dans votre boîte mail.
                </p>
            </div>

            <form class="w-full lg:w-auto flex flex-col sm:flex-row gap-3">
                <input type="email" placeholder="Votre adresse e-mail" required class="bg-white border border-gray-200 rounded-xl px-5 py-3 text-sm text-[var(--color-dark)] placeholder-gray-400 focus:outline-none focus:border-[var(--color-primary)] shrink-0 w-full sm:w-72">
                <button type="submit" class="px-6 py-3 bg-[var(--color-primary)] hover:bg-[var(--color-secondary)] text-white font-bold rounded-xl shadow-lg shadow-[var(--color-primary)]/30 transition-all text-sm shrink-0">
                    S'abonner
                </button>
            </form>
        </div>

    </div>
</section>
--}}

<section class="py-20 sm:py-28 bg-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <div class="mx-auto mb-8 flex h-20 w-20 items-center justify-center rounded-full bg-[var(--color-primary-light)] text-[var(--color-primary)]">
            <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2zM7 8h10M7 12h6M7 16h4"/>
            </svg>
        </div>

        <p class="text-xs font-bold uppercase tracking-[0.2em] text-[var(--color-primary)]">
            Actualités & témoignages
        </p>
        <h1 class="mt-4 text-3xl sm:text-5xl font-black tracking-tight text-[var(--color-dark)]">
            Nos actualités arrivent bientôt
        </h1>
        <p class="mx-auto mt-5 max-w-2xl text-base leading-relaxed text-[var(--color-gray)]">
            Nous préparons les prochaines histoires, nouvelles et témoignages de terrain
            pour vous faire découvrir l’impact des actions de l’ONG AIL.
        </p>

        <div class="mt-10 rounded-2xl bg-[var(--color-primary-light)]/60 px-6 py-5 text-sm text-[var(--color-dark)]">
            Revenez bientôt pour découvrir nos dernières actualités.
        </div>

        <a href="{{ route('projets') }}" class="mt-8 inline-flex items-center gap-2 rounded-xl bg-[var(--color-primary)] px-5 py-3 text-sm font-bold text-white shadow-lg shadow-[var(--color-primary)]/20 transition hover:bg-[var(--color-primary-dark)]">
            Découvrir nos projets
            <span aria-hidden="true">&rarr;</span>
        </a>
    </div>
</section>


</div>

@endsection
