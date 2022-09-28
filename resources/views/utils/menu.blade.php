<ul class="navigation-list">
    <li class="navigation-item"><a href="{{ URL::route('home') }}">Home</a></li>
    <li class="navigation-item"><a href="{{ URL::route('tattoo') }}">Tattoo</a></li>
    <li class="navigation-item"><img class="navigation-item-logo" src="{{asset('/assets/images/logo.svg')}}" alt="logo" /></li>
    <!-- <li class="navigation-item"><a href="{ URL::route('laser') }}">Laser</a></li> -->
    <li class="navigation-item"><a href="{{ URL::route('laser') }}">Laser</a></li>
    <li class="navigation-item"><a href="{{ URL::route('faq') }}">FAQ</a></li>
</ul>
<div class="navigation-mobile" id="navigation-mobile">
    <img class="navigation-mobile-logo" src="{{asset('/assets/images/logo.svg')}}" alt="logo" />
    <span class="navigation-hamburger"><i class="fas fa-bars"></i></span>
</div>