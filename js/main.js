$(function() {
  "use strict";

  var nav_offset_top = $("header").height() + 50;
  /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

  //* Navbar Fixed
  function navbarFixed() {
    if ($(".header_area").length) {
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= nav_offset_top) {
          $(".header_area").addClass("navbar_fixed");
        } else {
          $(".header_area").removeClass("navbar_fixed");
        }
      });
    }
  }
  navbarFixed();

  if ($(".blog-slider").length) {
    $(".blog-slider").owlCarousel({
      loop: true,
      margin: 30,
      items: 1,
      nav: true,
      autoplay: 2500,
      smartSpeed: 1500,
      dots: false,
      responsiveClass: true,
      navText: [
        "<div class='blog-slider__leftArrow'><img src='img/home/left-arrow.png'></div>",
        "<div class='blog-slider__rightArrow'><img src='img/home/right-arrow.png'></div>"
      ],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  }
});
