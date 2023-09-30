(function ($) {
  'use strict';

  // ScrollUp
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 200) {
      $('.scrollingUp').addClass('is-active');
    } else {
      $('.scrollingUp').removeClass('is-active');
    }
  });
  // Sticky Header
  $(window).on('scroll', function () {
    if ($(window).scrollTop() >= 100) {
      $('.is-sticky-on').addClass('is-sticky-menu');
    }
    else {
      $('.is-sticky-on').removeClass('is-sticky-menu');
    }
  });
  $(window).on('scroll', function () {
    var scrollThreshold = $(window).width() <= 768 ? 0 : 480; // Cambia el umbral para dispositivos más pequeños
    if ($(window).scrollTop() >= scrollThreshold) {
      $('.box').removeClass('hidden');
      $('.box').addClass('animate__fadeInUp');
    }
    else {
      $('.box').removeClass('animate__fadeInUp');
      $('.box').addClass('hidden');
    }
  });

  $(document).ready(function () {
    $('.scrollingUp').on('click', function () {
      $("html, body").animate({
        scrollTop: 0
      }, 600);
      return false;
    });
    $('.ver_mas').on('click', function () {
      $(this).hide();
      $(this).siblings('.ver_menos').show();
    });

    $('.ver_menos').on('click', function () {
      $(this).hide();
      $(this).siblings('.ver_mas').show();
    });


  });
}(jQuery));