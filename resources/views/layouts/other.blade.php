<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dado.ch') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica:ital@0;1&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons.svg') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/font-vintage1/flaticon.css') }}" rel="stylesheet"> --}}
    
</head>
<body>
    
    @yield('header')
    @yield('content')
    @yield('footer')
    
    <div class="overlay overlay-slidedown">
        <i class="fas fa-times close-button"></i>
        <nav>
            <ul>
                <li><a href="{{ URL::route('home') }}">Home</a></li>
                <li><a href="{{ URL::route('tattoo') }}">Tattoo</a></li>
                <li><a href="{{ URL::route('piercing') }}">Piercing</a></li>
                <li><a href="{{ URL::route('studio') }}">Studio</a></li>
                <li><a href="{{ URL::route('removal') }}">Removal</a></li>
                <li><a href="{{ URL::route('faq') }}">FAQ</a></li>
            </ul>
        </nav>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://kit.fontawesome.com/5abe40685b.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/aos.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/mobile-menu.js') }}" defer></script>
    <script src="{{ asset('js/accordion.js') }}" defer></script>
</body>
</html>
