try {
    window.$ = window.jQuery = require('jquery');
 
    //require('bootstrap');
 
    require('jquery.easing');
    require('jquery-lazy')

} catch (e) {}



// Importing JavaScript
//
// You have two choices for including Bootstrap's JS files—the whole thing,
// or just the bits that you need.


// Option 1
//
// Import Bootstrap's bundle (all of Bootstrap's JS + Popper.js dependency)

// import "../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";


// Option 2
//
// Import just what we need

// If you're importing tooltips or popovers, be sure to include our Popper.js dependency
// import "../../node_modules/popper.js/dist/popper.min.js";

//import "../../node_modules/bootstrap/js/dist/util.js";
//import "../../node_modules/bootstrap/js/dist/alert.js";
//import "../../node_modules/bootstrap/js/dist/button.js";
//import "../../node_modules/bootstrap/js/dist/carousel.js";
import "../../node_modules/bootstrap/js/dist/collapse.js";
import "../../node_modules/bootstrap/js/dist/dropdown.js";
//import "../../node_modules/bootstrap/js/dist/index.js";
//import "../../node_modules/bootstrap/js/dist/modal.js";
//import "../../node_modules/bootstrap/js/dist/popover.js";
import "../../node_modules/bootstrap/js/dist/scrollspy.js";
//import "../../node_modules/bootstrap/js/dist/tab.js";
//import "../../node_modules/bootstrap/js/dist/toast.js";
//import "../../node_modules/bootstrap/js/dist/tooltip.js";
//import "../../node_modules/bootstrap/js/dist/util.js";

//import "../../node_modules/lightgallery/dist/js/lightgallery.min";

import SimpleLightbox from "simplelightbox";

let gallery = new SimpleLightbox('.gallery a');
gallery.on('show.simplelightbox', function () {

});


/* import AOS from 'aos' */

// AOS Animation on scroll

/*  AOS.init({
  duration: 1200,
}) */


// LAZY loading

$(function() {
  $('.lazy').Lazy();
  
});

// Scroll on top button


	$(window).scroll(function () {
			if ($(this).scrollTop() > 800) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 1000);
			return false;
		});




// fadeIn description on header

$('.desc').delay(800).animate({'opacity':'1'},1200);
$('.desc .fade-left').first().delay(500).animate({'opacity':'1'},1000);
$('.desc .fade-left').last().delay(2000).animate({'opacity':'1'},1000);

