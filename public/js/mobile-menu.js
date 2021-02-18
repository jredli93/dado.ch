
$('.navigation-hamburger').on('click', function () {
  $(this).removeClass('show-menu-button');
  $('.overlay').slideDown('slow');
});

$('.close-button').on('click', function() {
	$('.overlay').slideUp('slow');
	$('.menu-button').addClass('show-menu-button');
});

var myNav = document.getElementById('navigation-mobile');
window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100 ) {
        myNav.classList.add("nav-colored");
        myNav.classList.remove("nav-transparent");
    } 
    else {
        myNav.classList.add("nav-transparent");
        myNav.classList.remove("nav-colored");
    }
};