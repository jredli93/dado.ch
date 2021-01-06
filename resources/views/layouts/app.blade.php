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

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vegas.min.css') }}" rel="stylesheet">
    
</head>
<body>
    <section id="header" class="header">      
        <ul class="navigation-list">
            <li class="navigation-item">Home</li>
            <li class="navigation-item">Tattoo</li>
            <li class="navigation-item">Piercing</li>                
            <li class="navigation-item"><img class="navigation-item-logo" src="{{url('/images/logo.png')}}" alt="logo"/></li>
            <li class="navigation-item">Studio</li>
            <li class="navigation-item">Tattoo removal</li>
            <li class="navigation-item">FAQ</li>
            {{-- @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest --}}
        </ul>
        <div class="cta">
            <h1 class="cta-heading">Dado Tattoo</h1>
            <div class="est-wrap">
                <hr class="cta-line">
                <span class="cta-year">EST. 2011</span>
                <hr class="cta-line">
            </div>
            <button class="cta-btn">Showcase</button>
        </div>
    </section>
    </div>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="{{ asset('js/vegas.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>
</html>
