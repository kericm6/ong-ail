@extends('layouts.app')

@section('title', 'Projets - ONG AIL Kpalimé')

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
            <span class="text-[var(--color-accent)]">Projets</span>
        </nav>

        <h1 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
            Nos <span class="text-secondary inline-block">projets</span>
        </h1>

        <p class="text-sm sm:text-base text-gray-300 max-w-2xl leading-relaxed">
            À travers des projets concrets et durables, l’ONG AIL soutient les femmes, les jeunes et les communautés de Kpalimé dans leur autonomisation, leur inclusion sociale et leur développement local.
        </p>

    </div>
</section>

<!-- Section Projets et programmes en cours -->
<section class="py-10 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="mb-8">
            <p class="text-xs font-bold uppercase tracking-[0.2em] text-[var(--color-primary)]">2025 – 2026</p>
            <h2 class="mt-3 text-3xl font-extrabold text-accent uppercase tracking-wide">
                Projets et programmes<br>en cours
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
            <article class="bg-white border border-gray-100 shadow-sm flex flex-col">
                <div class="relative h-40 bg-gray-200 overflow-hidden">
                    <img src="../images/slide1.jpg" alt="Projet biogaz pour l’autonomisation des femmes agricultrices" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-[var(--color-dark)]/20"></div>
                </div>
                <div class="p-4 pb-1">
                    <div class="mb-3 flex items-center justify-between gap-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-primary)]">Agriculture & énergie</span>
                        <span class="inline-flex items-center gap-1.5 bg-[var(--color-accent)] text-[var(--color-dark)] text-[10px] font-extrabold px-2.5 py-1 shadow-sm">
                            <span class="w-2 h-2 bg-[var(--color-dark)] animate-pulse"></span>
                            En cours
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-[var(--color-dark)]">
                        Biogaz pour l’autonomisation des femmes agricultrices de Kloto
                    </h3>
                    <p class="mt-1 text-xs text-[var(--color-gray)]">Avec l’appui financier du programme FAME et de GERES</p>
                </div>
                <div class="border-t border-gray-200 px-4 pb-4 pt-2">
                    <div class="bg-slate-50 rounded-xl p-3">
                        <ul class="space-y-1.5 text-sm text-[var(--color-gray)] leading-relaxed">
                            <li><strong class="text-[var(--color-dark)]">Zone :</strong> Préfecture de Kloto</li>
                            <li><strong class="text-[var(--color-dark)]">Bénéficiaires :</strong> 50 femmes agricultrices</li>
                            <li>
                                <strong class="text-[var(--color-dark)]">Réalisations clés :</strong>
                                <ul class="mt-1 space-y-0.5">
                                    <li>- Construction de 2 biodigesteurs fonctionnels</li>
                                    <li>- Formation de 50 femmes aux biofertilisants et au biogaz</li>
                                    <li>- Réduction estimée de 30 à 40 % des dépenses d’engrais chimiques</li>
                                </ul>
                            </li>
                            <li>
                                <strong class="text-[var(--color-dark)]">Impact attendu :</strong>
                                <ul class="mt-1 space-y-0.5">
                                    <li>- Amélioration des rendements agricoles</li>
                                    <li>- Réduction de la pénibilité du travail</li>
                                    <li>- Transition vers des énergies propres et durables</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="bg-white border border-gray-100 shadow-sm flex flex-col">
                <div class="relative h-40 bg-gray-200 overflow-hidden">
                    <img src="../images/S1.png" alt="Projet EcoFemme d’agriculture biologique et d’énergies vertes" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-[var(--color-dark)]/20"></div>
                </div>
                <div class="p-4 pb-1">
                    <div class="mb-3 flex items-center justify-between gap-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-primary)]">Agriculture biologique</span>
                        <span class="inline-flex items-center gap-1.5 bg-[var(--color-accent)] text-[var(--color-dark)] text-[10px] font-extrabold px-2.5 py-1 shadow-sm">
                            <span class="w-2 h-2 bg-[var(--color-dark)] animate-pulse"></span>
                            En cours
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-[var(--color-dark)]">
                        EcoFemme : agriculture biologique et énergies vertes
                    </h3>
                    <p class="mt-1 text-xs text-[var(--color-gray)]">Avec l’appui financier de l’OIF – La Francophonie avec elles</p>
                </div>
                <div class="border-t border-gray-200 px-4 pb-4 pt-2">
                    <div class="bg-slate-50 rounded-xl p-3">
                        <ul class="space-y-1.5 text-sm text-[var(--color-gray)] leading-relaxed">
                            <li><strong class="text-[var(--color-dark)]">Zone :</strong> Préfecture de Kloto</li>
                            <li><strong class="text-[var(--color-dark)]">Bénéficiaires :</strong> 130 femmes rurales</li>
                            <li>
                                <strong class="text-[var(--color-dark)]">Réalisations clés :</strong>
                                <ul class="mt-1 space-y-0.5">
                                    <li>- Mise en place de 10 parcelles pilotes en agriculture biologique</li>
                                    <li>- Formation de 120 femmes aux pratiques agroécologiques et aux énergies vertes</li>
                                </ul>
                            </li>
                            <li>
                                <strong class="text-[var(--color-dark)]">Impact attendu :</strong>
                                <ul class="mt-1 space-y-0.5">
                                    <li>- Amélioration de la sécurité alimentaire</li>
                                    <li>- Adoption de pratiques agricoles respectueuses de l’environnement</li>
                                    <li>- Renforcement de l’autonomie économique des femmes rurales</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="bg-white border border-gray-100 shadow-sm flex flex-col">
                <div class="relative h-40 bg-gray-200 overflow-hidden">
                    <img src="../images/s.jpeg" alt="Formation et insertion socioprofessionnelle des jeunes filles au CIPE" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-[var(--color-dark)]/20"></div>
                </div>
                <div class="p-4 pb-1">
                    <div class="mb-3 flex items-center justify-between gap-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-primary)]">Formation & insertion</span>
                        <span class="inline-flex items-center gap-1.5 bg-[var(--color-accent)] text-[var(--color-dark)] text-[10px] font-extrabold px-2.5 py-1 shadow-sm">
                            <span class="w-2 h-2 bg-[var(--color-dark)] animate-pulse"></span>
                            En cours
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-[var(--color-dark)]">
                        Formation et insertion socioprofessionnelle des jeunes filles – CIPE
                    </h3>
                    <p class="mt-1 text-xs text-[var(--color-gray)]">Centre Incubateur pour la Promotion de l’Entrepreneuriat</p>
                </div>
                <div class="border-t border-gray-200 px-4 pb-4 pt-2">
                    <div class="bg-slate-50 rounded-xl p-3">
                        <ul class="space-y-1.5 text-sm text-[var(--color-gray)] leading-relaxed">
                            <li><strong class="text-[var(--color-dark)]">Lieu :</strong> Centre CIPE</li>
                            <li><strong class="text-[var(--color-dark)]">Public cible :</strong> jeunes filles et adolescentes scolarisées et non scolarisées</li>
                            <li>
                                <strong class="text-[var(--color-dark)]">Activités principales :</strong>
                                <ul class="mt-1 space-y-0.5">
                                    <li>- Sessions pratiques de formation professionnelle</li>
                                    <li>- Ateliers d’éducation à la transition écologique</li>
                                </ul>
                            </li>
                            <li>
                                <strong class="text-[var(--color-dark)]">Résultats attendus / observés :</strong>
                                <ul class="mt-1 space-y-0.5">
                                    <li>- Acquisition de compétences professionnelles et entrepreneuriales</li>
                                    <li>- Renforcement de l’employabilité et de l’auto-emploi</li>
                                    <li>- Sensibilisation aux enjeux environnementaux et climatiques</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>


<!-- Section Principale Projets -->
<section class="py-10 bg-white border-[var(--color-primary-light)]">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 items-center gap-4">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-[var(--color-primary)]">2019 – 2025</p>
                <h2 class="mt-3 text-3xl font-extrabold text-secondary uppercase tracking-wide">
                    Principaux projets<br> réalisés par l’ONG AIL
                </h2>
            </div>
            <a href="/" class="mt-4 md:mt-0 text-[var(--color-secondary)] font-semibold hover:text-[var(--color-secondary-dark)] inline-flex items-center gap-2 transition-colors">
                <span>Retour à l’accueil</span>
                <span class="text-[var(--color-secondary)]">&rarr;</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">

            <article class="group bg-[var(--color-light)] overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-all flex flex-col">
                    <div class="relative h-40 bg-gray-200 overflow-hidden">
                        <img src="../images/projet1.png" alt="Autonomisation économique des femmes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                        <div class="absolute inset-0 bg-[var(--color-dark)]/20"></div>
                    </div>
                    <div class="p-4 pb-1">
                        <div class="mb-3 flex items-center justify-between gap-2">
                            <span class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-primary)]">Agr</span>
                            <span class="inline-flex items-center gap-1 bg-secondary text-white text-[10px] font-extrabold px-2.5 py-1 shadow-sm">
                                <span>✓</span>
                                Réalisé
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-[var(--color-dark)] mb-0 group-hover:text-[var(--color-primary)] transition-colors">
                            Autonomisation économique des femmes à travers les AGR
                        </h3>

                    </div>
                <div class="border-t border-gray-200 px-4 pb-4 pt-2">
                    <div class="bg-slate-50 rounded-xl p-3">
                        <ul class="space-y-1.5 text-sm text-[var(--color-gray)] leading-relaxed">
                            <li><strong class="text-[var(--color-dark)]">Zone :</strong> Plateaux et Maritime</li>
                            <li><strong class="text-[var(--color-dark)]">Bénéficiaires directs :</strong> 250 femmes</li>
                            <li>
                                <strong class="text-[var(--color-dark)]">Réalisations clés :</strong>
                                <ul class="mt-1 space-y-0.5">
                                    <li>- Création ou renforcement de 180 activités génératrices de revenus</li>
                                    <li>- Formation en gestion financière et entrepreneuriat féminin</li>
                                </ul>
                            </li>
                            <li><strong class="text-[var(--color-dark)]">Impact :</strong> augmentation moyenne estimée de 35 % des revenus.</li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="group bg-[var(--color-light)] overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-all flex flex-col">
                    <div class="relative h-40 bg-gray-200 overflow-hidden">
                        <img src="../images/histoie2.jpeg" alt="Insertion socioprofessionnelle des jeunes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                        <div class="absolute inset-0 bg-[var(--color-dark)]/20"></div>
                    </div>
                    <div class="p-4 pb-1">
                        <div class="mb-3 flex items-center justify-between gap-2">
                            <span class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-primary)]">Jeunes</span>
                            <span class="inline-flex items-center gap-1 bg-secondary text-white text-[10px] font-extrabold px-2.5 py-1 shadow-sm">
                                <span>✓</span>
                                Réalisé
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-[var(--color-dark)] mb-0 group-hover:text-[var(--color-primary)] transition-colors">
                            Insertion socioprofessionnelle des jeunes
                        </h3>

                    </div>
                <div class="border-t border-gray-200 px-4 pb-4 pt-2">
                    <div class="bg-slate-50 rounded-xl p-3">
                        <ul class="space-y-1.5 text-sm text-[var(--color-gray)] leading-relaxed">
                            <li><strong class="text-[var(--color-dark)]">Zone :</strong> Plateaux, Centrale</li>
                            <li><strong class="text-[var(--color-dark)]">Bénéficiaires directs :</strong> 200 jeunes</li>
                            <li>
                                <strong class="text-[var(--color-dark)]">Réalisations clés :</strong>
                                <ul class="mt-1 space-y-0.5">
                                    <li>- Formation professionnelle</li>
                                    <li>- Coaching</li>
                                    <li>- Accompagnement à l’emploi et à l’auto-emploi</li>
                                </ul>
                            </li>
                            <li><strong class="text-[var(--color-dark)]">Impact :</strong> amélioration de l’employabilité et réduction du chômage des jeunes.</li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="group bg-[var(--color-light)] overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-all flex flex-col">
                    <div class="relative h-40 bg-gray-200 overflow-hidden">
                        <img src="../images/projet3.png" alt="Éducation et orientation des jeunes filles" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                        <div class="absolute inset-0 bg-[var(--color-dark)]/20"></div>
                    </div>
                    <div class="p-4 pb-1">
                        <div class="mb-3 flex items-center justify-between gap-2">
                            <span class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-primary)]">Éducation</span>
                            <span class="inline-flex items-center gap-1 bg-secondary text-white text-[10px] font-extrabold px-2.5 py-1 shadow-sm">
                                <span>✓</span>
                                Réalisé
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-[var(--color-dark)] mb-0 group-hover:text-[var(--color-primary)] transition-colors">
                            Éducation, orientation scolaire et professionnelle des jeunes filles
                        </h3>

                    </div>
                <div class="border-t border-gray-200 px-4 pb-4 pt-2">
                    <div class="bg-slate-50 rounded-xl p-3">
                        <ul class="space-y-1.5 text-sm text-[var(--color-gray)] leading-relaxed">
                            <li><strong class="text-[var(--color-dark)]">Zone :</strong> Préfecture de Kloto, établissements scolaires et centre CIPE</li>
                            <li><strong class="text-[var(--color-dark)]">Bénéficiaires directs :</strong> 300 jeunes filles</li>
                            <li>
                                <strong class="text-[var(--color-dark)]">Réalisations clés :</strong>
                                <ul class="mt-1 space-y-0.5">
                                    <li>- Sensibilisation</li>
                                    <li>- Suivi scolaire</li>
                                    <li>- Orientation</li>
                                    <li>- Accompagnement professionnel</li>
                                </ul>
                            </li>
                            <li><strong class="text-[var(--color-dark)]">Impact :</strong> amélioration de la motivation scolaire et réduction des abandons.</li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="group bg-[var(--color-light)] overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-all flex flex-col">
                    <div class="relative h-40 bg-gray-200 overflow-hidden">
                        <img src="../images/slide3.jpeg" alt="Égalité, créativité et leadership" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                        <div class="absolute inset-0 bg-[var(--color-dark)]/20"></div>
                    </div>
                    <div class="p-4 pb-1">
                        <div class="mb-3 flex items-center justify-between gap-2">
                            <span class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-primary)]">Leadership</span>
                            <span class="inline-flex items-center gap-1 bg-secondary text-white text-[10px] font-extrabold px-2.5 py-1 shadow-sm">
                                <span>✓</span>
                                Réalisé
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-[var(--color-dark)] mb-0 group-hover:text-[var(--color-primary)] transition-colors">
                            Égalité, Créativité et Leadership pour un Développement Durable
                        </h3>

                    </div>
                <div class="border-t border-gray-200 px-4 pb-4 pt-2">
                    <div class="bg-slate-50 rounded-xl p-3">
                        <ul class="space-y-1.5 text-sm text-[var(--color-gray)] leading-relaxed">
                            <li><strong class="text-[var(--color-dark)]">Zone :</strong> communautés locales et écoles</li>
                            <li><strong class="text-[var(--color-dark)]">Bénéficiaires directs :</strong> 400 femmes et jeunes</li>
                            <li>
                                <strong class="text-[var(--color-dark)]">Réalisations clés :</strong>
                                <ul class="mt-1 space-y-0.5">
                                    <li>- Ateliers de leadership</li>
                                    <li>- Créativité</li>
                                    <li>- Citoyenneté active</li>
                                    <li>- Engagement communautaire</li>
                                </ul>
                            </li>
                            <li><strong class="text-[var(--color-dark)]">Impact :</strong> renforcement du leadership féminin et de la citoyenneté active.</li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="group bg-[var(--color-light)] overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-all flex flex-col">
                    <div class="relative h-40 bg-gray-200 overflow-hidden">
                        <img src="../images/s.jpeg" alt="Sensibilisation communautaire et médiatique" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                        <div class="absolute inset-0 bg-[var(--color-dark)]/20"></div>
                    </div>
                    <div class="p-4 pb-1">
                        <div class="mb-3 flex items-center justify-between gap-2">
                            <span class="text-[10px] font-extrabold uppercase tracking-[0.12em] text-[var(--color-primary)]">Sensibilisation</span>
                            <span class="inline-flex items-center gap-1 bg-secondary text-white text-[10px] font-extrabold px-2.5 py-1 shadow-sm">
                                <span>✓</span>
                                Réalisé
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-[var(--color-dark)] mb-0 group-hover:text-[var(--color-primary)] transition-colors">
                            Sensibilisation communautaire et médiatique
                        </h3>

                    </div>
                <div class="border-t border-gray-200 px-4 pb-4 pt-2">
                    <div class="bg-slate-50 rounded-xl p-3">
                        <ul class="space-y-1.5 text-sm text-[var(--color-gray)] leading-relaxed">
                            <li>
                                <strong class="text-[var(--color-dark)]">Réalisations clés :</strong>
                                <ul class="mt-1 space-y-0.5">
                                    <li>- Campagnes d’information</li>
                                    <li>- Interventions radios communautaires</li>
                                    <li>- Ateliers de sensibilisation</li>
                                </ul>
                            </li>
                            <li><strong class="text-[var(--color-dark)]">Impact :</strong> meilleure information des communautés sur l’orientation scolaire, les droits humains et l’autonomisation des femmes.</li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="md:col-span-2 xl:col-span-1 bg-[var(--color-dark)] rounded-none overflow-hidden shadow-sm border border-[var(--color-dark)] text-white flex flex-col justify-between">
                <div class="p-6">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-[var(--color-primary-light)]">Bilan global</p>
                    <h3 class="mt-3 text-2xl font-extrabold text-white">2019 – 2025</h3>

                    <ul class="mt-6 space-y-3 text-sm leading-relaxed text-gray-200">
                        <li><strong class="text-white">Bénéficiaires directs :</strong> plus de 1 200 personnes</li>
                        <li><strong class="text-white">Bénéficiaires indirects :</strong> plus de 5 000 personnes</li>
                        <li><strong class="text-white">Femmes et filles :</strong> environ 70 %</li>
                        <li><strong class="text-white">Zones couvertes :</strong> 4 préfectures</li>
                        <li><strong class="text-white">Partenaires :</strong> GERES, OIF, MCLD, GIZ, collectivités locales, radios communautaires</li>
                    </ul>
                </div>
            </article>

        </div>
    </div>
</section>

<div>


@endsection