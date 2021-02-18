<ul class="navigation-list">
    <li class="navigation-item"><a href="{{ URL::route('home') }}">Home</a></li>
    <li class="navigation-item"><a href="{{ URL::route('tattoo') }}">Tattoo</a></li>
    <li class="navigation-item"><a href="{{ URL::route('piercing') }}">Piercing</a></li>
    <li class="navigation-item"><img class="navigation-item-logo" src="{{asset('/assets/images/logo.png')}}" alt="logo" /></li>
    <li class="navigation-item"><a href="{{ URL::route('studio') }}">Studio</a></li>
    <li class="navigation-item"><a href="{{ URL::route('removal') }}">Removal</a></li>
    <li class="navigation-item"><a href="{{ URL::route('faq') }}">FAQ</a></li>
</ul>
<div class="navigation-mobile" id="navigation-mobile">
    <img class="navigation-mobile-logo" src="{{asset('/assets/images/logo.png')}}" alt="logo" />
    <span class="navigation-hamburger"><i class="fas fa-bars"></i></span>
</div>