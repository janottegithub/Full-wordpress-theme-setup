// 3rd party packages from NPM
import $ from 'jquery';
import slick from 'slick-carousel';

// Our modules / classes
import MobileMenu from './modules/MobileMenu';
import HeroSlider from './modules/HeroSlider';

// Instantiate a new object using our modules/classes
var mobileMenu = new MobileMenu();
var heroSlider = new HeroSlider();

/*
$(document).ready(function(){
    VANTA.BIRDS({
        el: "#birds-div",
        mouseControls: true,
        touchControls: true,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color1: 0xff4a,
        birdSize: 1.10,
        wingSpan: 35.00,
        speedLimit: 6.00,
        separation: 18.00,
        alignment: 9.00,
        cohesion: 100.00
      })
});
*/
$(document).ready(function () {

    $('.navbar .dropdown-item.dropdown').on('click', function (e) {
        var $el = $(this).children('.dropdown-toggle');
        if ($el.length > 0 && $(e.target).hasClass('dropdown-toggle')) {
            var $parent = $el.offsetParent(".dropdown-menu");
            $(this).parent("li").toggleClass('open');
    
            if (!$parent.parent().hasClass('navbar-nav')) {
                if ($parent.hasClass('show')) {
                    $parent.removeClass('show');
                    $el.next().removeClass('show');
                    $el.next().css({"top": -999, "left": -999});
                } else {
                    $parent.parent().find('.show').removeClass('show');
                    $parent.addClass('show');
                    $el.next().addClass('show');
                    $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
                }
                e.preventDefault();
                e.stopPropagation();
            }
            return;
        }
    });

    $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });

});

alert("Hello this is a test.");
