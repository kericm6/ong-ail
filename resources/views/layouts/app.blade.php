<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AIL | Appui aux initiatives locales') </title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    
    {{-- Owl Carousel CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        #page-loader {
            transition: opacity 0.35s ease, visibility 0.35s ease;
        }

        #page-loader.is-hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .page-loader-square {
            animation: page-loader-bounce 0.9s ease-in-out infinite;
        }

        .page-loader-square:nth-child(2) {
            animation-delay: 0.12s;
        }

        .page-loader-square:nth-child(3) {
            animation-delay: 0.24s;
        }

        @keyframes page-loader-bounce {
            0%, 100% {
                transform: translateY(0);
                opacity: 0.55;
            }
            50% {
                transform: translateY(-10px);
                opacity: 1;
            }
        }
    </style>
</head>
<body class="font-sans">

    <div id="page-loader" class="fixed inset-0 z-[100] flex items-center justify-center bg-[var(--color-dark)]" role="status" aria-label="Chargement de la page">
        <div class="flex items-center gap-2" aria-hidden="true">
            <span class="page-loader-square h-4 w-4 bg-[var(--color-accent)]"></span>
            <span class="page-loader-square h-4 w-4 bg-[var(--color-accent)]"></span>
            <span class="page-loader-square h-4 w-4 bg-[var(--color-accent)]"></span>
        </div>
    </div>

    @include('common.navbar')
    @yield('content')
    

    @include('common.footer')
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Owl Carousel JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        window.addEventListener('load', function () {
            window.setTimeout(function () {
                document.getElementById('page-loader')?.classList.add('is-hidden');
            }, 350);
        });
    </script>
    
</body>
</html>