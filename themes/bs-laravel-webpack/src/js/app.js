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

import "../../node_modules/lightgallery/dist/js/lightgallery.min";

import AOS from 'aos'

// AOS Animation on scroll

/* AOS.init({
  duration: 1200,
})
 */

// LAZY loading


$(function() {
  $('.lazy').Lazy();
  
});



//  LIGHTGALLERY


  $("#lightgallery").lightGallery({
    pager: true,
    thumbMargin: 10,
  });

