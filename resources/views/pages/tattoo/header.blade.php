<section class="header-tattoo">
    <ul class="navigation-list">
        <li class="navigation-item"><a href="{{ URL::route('home') }}">Home</a></li>
        <li class="navigation-item"><a href="{{ URL::route('tattoo') }}">Tattoo</a></li>
        <li class="navigation-item"><a href="{{ URL::route('piercing') }}">Piercing</a></li>
        <li class="navigation-item"><img class="navigation-item-logo" src="{{asset('/assets/images/logo.png')}}" alt="logo" />
        </li>
        <li class="navigation-item"><a href="{{ URL::route('studio') }}">Studio</a></li>
        <li class="navigation-item"><a href="{{ URL::route('removal') }}">Removal</a></li>
        <li class="navigation-item"><a href="{{ URL::route('faq') }}">FAQ</a></li>
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
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
    <h1 class="tattoo-title">Tattoo</h1>
</section>