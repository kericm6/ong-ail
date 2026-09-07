@php
    $aboutActive = request()->routeIs('about', 'histoire') || request()->is('notre-equipe', 'nos-objectifs');
    $domainsActive = request()->is('domaines*');
    $projectsActive = request()->is('projets*');
    $newsActive = request()->is('actualites*');
@endphp

<nav class="sticky top-0 z-90 bg-white/95 backdrop-blur-md border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="min-h-20 flex items-center justify-between gap-4 py-3">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img 
                    src="{{ asset('images/LOGO_ONG.png') }}" 
                    alt="AIL - Association d'Appui aux Initiatives Locales"
                    class="h-14 w-14 object-contain sm:h-16 sm:w-16"
                >

                <div class="hidden sm:block leading-tight">
                    <span class="block text-xl font-bold text-primary">
                        AIL
                    </span>
                    <span class="text-[9px] uppercase tracking-wider text-gray-500 sm:text-[10px]">
                        Association d'Appui aux Initiatives Locales
                    </span>
                </div>
            </a>

            {{-- Menu desktop --}}
            <div class="hidden lg:flex items-center gap-8">

                <a href="{{ route('home') }}"
                   @class([
                       'text-sm font-semibold hover:text-secondary',
                       'text-primary' => request()->routeIs('home'),
                       'text-gray-700' => ! request()->routeIs('home'),
                   ])
                   @if (request()->routeIs('home')) aria-current="page" @endif>
                    Accueil
                </a>

                {{-- Dropdown Qui sommes nous? --}}
                <div class="relative group">
                    <button @class([
                        'text-sm font-semibold hover:text-primary flex items-center gap-1',
                        'text-primary' => $aboutActive,
                        'text-gray-700' => ! $aboutActive,
                    ])>
                        Qui sommes nous?
                        <svg class="w-4 h-4 group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <a href="{{ route('about') }}"
                           @class([
                               'block px-4 py-2 text-sm font-semibold hover:bg-primary-light hover:text-primary',
                               'text-primary' => request()->routeIs('about'),
                               'text-gray-700' => ! request()->routeIs('about'),
                           ])
                           @if (request()->routeIs('about')) aria-current="page" @endif>
                            Présentation
                        </a>
                        <a href="{{ route('histoire') }}"
                           @class([
                               'block px-4 py-2 text-sm font-semibold hover:bg-primary-light hover:text-primary',
                               'text-primary' => request()->routeIs('histoire'),
                               'text-gray-700' => ! request()->routeIs('histoire'),
                           ])
                           @if (request()->routeIs('histoire')) aria-current="page" @endif>
                            Notre histoire
                        </a>
                        <a href="{{ route('equipe') }}"
                           @class([
                               'block px-4 py-2 text-sm font-semibold hover:bg-primary-light hover:text-primary',
                               'text-primary' => request()->routeIs('equipe'),
                               'text-gray-700' => ! request()->routeIs('equipe'),
                           ])
                           @if (request()->routeIs('equipe')) aria-current="page" @endif>
                            Notre équipe
                        </a>
                        <a href="{{ route('objectifs') }}"
                           @class([
                               'block px-4 py-2 text-sm font-semibold hover:bg-primary-light hover:text-primary',
                               'text-primary' => request()->routeIs('objectifs'),
                               'text-gray-700' => ! request()->routeIs('objectifs'),
                           ])
                           @if (request()->routeIs('objectifs')) aria-current="page" @endif>
                            Nos objectifs
                        </a>
                    </div>
                </div>

                <a href="{{ url('/domaines') }}"
                   @class([
                       'text-sm font-semibold hover:text-primary',
                       'text-primary' => $domainsActive,
                       'text-gray-700' => ! $domainsActive,
                   ])
                   @if ($domainsActive) aria-current="page" @endif>
                    Nos domaines
                </a>

                <a href="{{ url('/projets') }}"
                   @class([
                       'text-sm font-semibold hover:text-primary',
                       'text-primary' => $projectsActive,
                       'text-gray-700' => ! $projectsActive,
                   ])
                   @if ($projectsActive) aria-current="page" @endif>
                    Nos projets
                </a>

                <a href="{{ url('/actualites') }}"
                   @class([
                       'text-sm font-semibold hover:text-primary',
                       'text-primary' => $newsActive,
                       'text-gray-700' => ! $newsActive,
                   ])
                   @if ($newsActive) aria-current="page" @endif>
                    Actualités
                </a>

                <a href="{{ route('contact.index') }}"
                   @class([
                       'text-sm font-semibold hover:text-primary',
                       'text-primary' => request()->routeIs('contact.index'),
                       'text-gray-700' => ! request()->routeIs('contact.index'),
                   ])
                   @if (request()->routeIs('contact.index')) aria-current="page" @endif>
                    Contact
                </a>

                {{-- CTA --}}
                <a href="#don"
                   class="px-5 py-3 bg-secondary text-white text-sm font-semibold
                          hover:bg-primary-dark hover:shadow-lg">
                    Faire un don
                </a>

            </div>

            {{-- Menu mobile --}}
            <button
                id="menu-toggle"
                class="lg:hidden p-2 text-gray-700 hover:text-primary"
                aria-label="Ouvrir le menu">

                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>

            </button>

        </div>

        {{-- Menu mobile --}}
        <div id="mobile-menu" class="hidden lg:hidden pb-5">

            <div class="flex flex-col gap-4 pt-4 border-t border-gray-100">

                <a href="{{ route('home') }}"
                   @class([
                       'font-semibold hover:text-primary',
                       'text-primary' => request()->routeIs('home'),
                       'text-gray-700' => ! request()->routeIs('home'),
                   ])
                   @if (request()->routeIs('home')) aria-current="page" @endif>
                    Accueil
                </a>

                {{-- Dropdown mobile Qui sommes nous? --}}
                <div class="group">
                    <button @class([
                        'w-full text-left hover:text-primary flex items-center justify-between py-2 px-2 hover:bg-gray-50 transition',
                        'text-primary' => $aboutActive,
                        'text-gray-700' => ! $aboutActive,
                    ]) id="dropdown-toggle" @if ($aboutActive) aria-current="page" @endif>
                        <span class="font-semibold">Qui sommes nous?</span>
                        <svg class="w-4 h-4 transition-transform duration-300" id="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </button>
                    <div class="hidden pl-4 space-y-1 mt-2 border-l-4 border-primary max-h-0 overflow-hidden transition-all duration-300" id="dropdown-menu">
                        <a href="{{ route('about') }}"
                           @class([
                               'block text-sm font-semibold hover:text-primary py-2 px-2 hover:bg-gray-50 transition',
                               'text-primary' => request()->routeIs('about'),
                               'text-gray-600' => ! request()->routeIs('about'),
                           ])
                           @if (request()->routeIs('about')) aria-current="page" @endif>
                            Présentation
                        </a>
                        <a href="{{ route('histoire') }}"
                           @class([
                               'block text-sm font-semibold hover:text-primary py-2 px-2 hover:bg-gray-50 transition',
                               'text-primary' => request()->routeIs('histoire'),
                               'text-gray-600' => ! request()->routeIs('histoire'),
                           ])
                           @if (request()->routeIs('histoire')) aria-current="page" @endif>
                            Notre histoire
                        </a>
                        <a href="{{ route('equipe') }}"
                           @class([
                               'block text-sm font-semibold hover:text-primary py-2 px-2 hover:bg-gray-50 transition',
                               'text-primary' => request()->routeIs('equipe'),
                               'text-gray-600' => ! request()->routeIs('equipe'),
                           ])
                           @if (request()->routeIs('equipe')) aria-current="page" @endif>
                            Notre équipe
                        </a>
                        <a href="{{ route('objectifs') }}"
                           @class([
                               'block text-sm font-semibold hover:text-primary py-2 px-2 hover:bg-gray-50 transition',
                               'text-primary' => request()->routeIs('objectifs'),
                               'text-gray-600' => ! request()->routeIs('objectifs'),
                           ])
                           @if (request()->routeIs('objectifs')) aria-current="page" @endif>
                            Nos objectifs
                        </a>
                    </div>
                </div>

                <a href="{{ route('domaines') }}"
                   @class([
                       'font-semibold hover:text-primary',
                       'text-primary' => $domainsActive,
                       'text-gray-700' => ! $domainsActive,
                   ])
                   @if ($domainsActive) aria-current="page" @endif>
                    Nos domaines
                </a>

                <a href="#projets"
                   @class([
                       'font-semibold hover:text-primary',
                       'text-primary' => $projectsActive,
                       'text-gray-700' => ! $projectsActive,
                   ])
                   @if ($projectsActive) aria-current="page" @endif>
                    Nos projets
                </a>

                <a href="#actualites"
                   @class([
                       'font-semibold hover:text-primary',
                       'text-primary' => $newsActive,
                       'text-gray-700' => ! $newsActive,
                   ])
                   @if ($newsActive) aria-current="page" @endif>
                    Actualités
                </a>

                <a href="{{ route('contact.index') }}"
                   @class([
                       'font-semibold hover:text-primary',
                       'text-primary' => request()->routeIs('contact.index'),
                       'text-gray-700' => ! request()->routeIs('contact.index'),
                   ])
                   @if (request()->routeIs('contact.index')) aria-current="page" @endif>
                    Contact
                </a>

                <a href="#don"
                   class="inline-flex justify-center px-5 py-3
                          bg-success text-white font-semibold">
                    Faire un don
                </a>

            </div>

        </div>

    </div>
</nav>

<script>
    // Toggle du menu mobile
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuToggle && mobileMenu) {
            menuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Dropdown mobile pour "Qui sommes nous?"
        const dropdownToggle = document.getElementById('dropdown-toggle');
        const dropdownMenu = document.getElementById('dropdown-menu');
        const dropdownIcon = document.getElementById('dropdown-icon');

        if (dropdownToggle && dropdownMenu) {
            dropdownToggle.addEventListener('click', function(e) {
                e.preventDefault();
                const isHidden = dropdownMenu.classList.contains('hidden');
                
                if (isHidden) {
                    // Ouvrir
                    dropdownMenu.classList.remove('hidden');
                    dropdownMenu.classList.remove('max-h-0');
                    dropdownMenu.classList.add('max-h-48');
                    dropdownIcon.classList.add('rotate-180');
                } else {
                    // Fermer
                    dropdownMenu.classList.remove('max-h-48');
                    dropdownMenu.classList.add('max-h-0');
                    dropdownIcon.classList.remove('rotate-180');
                    
                    // Attendre la transition avant de cacher
                    setTimeout(() => {
                        if (!dropdownMenu.classList.contains('max-h-48')) {
                            dropdownMenu.classList.add('hidden');
                        }
                    }, 300);
                }
            });
        }
    });
</script>