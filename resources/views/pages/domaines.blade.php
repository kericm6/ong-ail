@extends('layouts.app')

@section('title', 'Nos domaines d’intervention - ONG AIL Kpalimé')

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
            <a href="{{ route('home') }}" class="hover:text-[var(--color-accent)] transition-colors">Accueil</a>
            <span>/</span>
            <span class="text-[var(--color-accent)]">Nos domaines d’intervention</span>
        </nav>

        <h1 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
            Nos <span class="text-secondary inline-block">domaines d’intervention</span>
        </h1>

        <p class="text-sm sm:text-base text-gray-300 max-w-2xl leading-relaxed">
            Découvrez les secteurs dans lesquels l’ONG AIL agit avec les communautés pour renforcer l’autonomie, protéger l’environnement et favoriser un développement local durable.
        </p>

    </div>
</section>

<section class="bg-[var(--color-light)] py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class=" mb-12 max-w-3xl  sm:mb-16">
            <div class="mb-4 flex items-center  gap-3 text-sm font-bold uppercase tracking-wider text-secondary">
                Nos domaines d’action
                <span class="h-px w-10 bg-secondary"></span>
            </div>
            <h2 class="font-display text-3xl font-extrabold leading-tight text-[var(--color-dark)] sm:text-4xl">
                Des actions pensées avec les communautés
            </h2>
            <p class="mt-4 text-base leading-relaxed text-[var(--color-gray)] sm:text-lg">
                L’ONG AIL déploie une approche intégrée qui relie l’autonomie, l’insertion, la protection de l’environnement et la participation citoyenne pour répondre durablement aux besoins locaux.
            </p>
        </div>

        <div class="mb-16 grid gap-4 sm:grid-cols-2 lg:grid-cols-12 lg:gap-6">
            <div class="group relative min-h-[280px] overflow-hidden sm:row-span-2 lg:col-span-7 lg:min-h-[460px]">
                <img src="{{ asset('images/projet2.png') }}" alt="Des femmes engagées dans une activité agricole durable" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-dark)]/85 via-[var(--color-dark)]/10 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-6 text-white sm:p-8">
                    <span class="text-xs font-bold uppercase tracking-wider text-[var(--color-accent)]">Agriculture durable</span>
                    <p class="mt-2 max-w-md text-lg font-extrabold leading-snug sm:text-2xl">Produire autrement, préserver les ressources et renforcer les moyens de subsistance.</p>
                </div>
            </div>
            <div class="group relative min-h-[220px] overflow-hidden lg:col-span-5">
                <img src="{{ asset('images/projet3.png') }}" alt="Femmes développant une activité génératrice de revenus" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-dark)]/80 via-transparent to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <span class="text-xs font-bold uppercase tracking-wider text-[var(--color-accent)]">Autonomisation</span>
                    <p class="mt-1 text-lg font-extrabold leading-snug">Créer des opportunités pour les femmes et les communautés.</p>
                </div>
            </div>
            <div class="group relative min-h-[220px] overflow-hidden lg:col-span-5">
                <img src="{{ asset('images/projet1.png') }}" alt="Action collective au sein des communautés" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-dark)]/80 via-transparent to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <span class="text-xs font-bold uppercase tracking-wider text-[var(--color-accent)]">Action communautaire</span>
                    <p class="mt-1 text-lg font-extrabold leading-snug">Agir ensemble pour un développement local inclusif.</p>
                </div>
            </div>
        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach([
                ['title' => 'Autonomisation économique et sociale des femmes', 'desc' => 'Renforcer les compétences, les revenus et le pouvoir d’action des femmes afin de soutenir leur autonomie et celle de leurs familles.'],
                ['title' => 'Insertion socioprofessionnelle des jeunes', 'desc' => 'Accompagner les jeunes vers la formation, l’emploi et l’entrepreneuriat pour faciliter leur intégration durable dans la vie professionnelle.'],
                ['title' => 'Agriculture durable et transition écologique', 'desc' => 'Encourager des pratiques agricoles responsables qui préservent les sols, les ressources naturelles et les moyens de subsistance.'],
                ['title' => 'Promotion des énergies vertes et de l’innovation écologique', 'desc' => 'Développer des solutions innovantes et accessibles pour valoriser les ressources locales et réduire l’impact environnemental.'],
                ['title' => 'Éducation, formation et renforcement des capacités', 'desc' => 'Donner aux enfants, aux jeunes et aux adultes les connaissances et les compétences nécessaires pour agir et construire leur avenir.'],
                ['title' => 'Santé communautaire et santé sexuelle et reproductive', 'desc' => 'Améliorer l’accès à l’information, à la prévention et aux services de santé adaptés aux réalités des communautés.'],
                ['title' => 'Promotion des droits humains et de l’égalité de genre', 'desc' => 'Sensibiliser et agir pour une société plus juste, respectueuse des droits, de la dignité et de l’égalité entre les femmes et les hommes.'],
                ['title' => 'Développement local participatif et gouvernance communautaire', 'desc' => 'Associer les populations aux décisions et aux initiatives qui transforment leur milieu de vie.'],
                ['title' => 'Leadership féminin, citoyenneté active et engagement communautaire', 'desc' => 'Faire émerger des femmes et des citoyens engagés, capables de porter des initiatives et de contribuer à la vie collective.']
            ] as $index => $domaine)
                <article class="group bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md sm:p-7">
                    <div class="mb-5 flex items-center justify-between">
                        <span class="flex h-11 w-11 items-center justify-center bg-secondary text-sm font-black text-white transition-colors group-hover:bg-[var(--color-primary)]">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <span class="h-px w-16 bg-[var(--color-accent)]"></span>
                    </div>
                    <h3 class="font-display text-lg font-extrabold leading-snug text-[var(--color-dark)] sm:text-xl">
                        {{ $domaine['title'] }}
                    </h3>
                    <p class="mt-3 text-sm leading-relaxed text-[var(--color-gray)] sm:text-base">
                        {{ $domaine['desc'] }}
                    </p>
                </article>
            @endforeach
        </div>
    </div>
</section>


</div>

@endsection