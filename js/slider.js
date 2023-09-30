jQuery(function ($) {
  // Home Slider
  var $owlHome = $('.home-slider');
  //var $owlHomeThumb = $(".home-slider-thumbs");
  //var $slidesPerPage = 5;
  var $owledSecondary = true;

  var slider_settings = {
    arrowLeft: sliderData.arrowLeft,
    arrowRight: sliderData.arrowRight,
    // Otras configuraciones del carrusel...
  };

// El resto de tu código JavaScript para inicializar el carrusel, etc.

  $owlHome.owlCarousel({
    rtl: $("html").attr("dir") == 'rtl' ? true : false,
    items: 1,
    autoplay: true,
    autoplayTimeout: 10000,
    margin: 0,
    loop: true,
    dots: false,
    nav: true,
    navText: [slider_settings.arrowLeft, slider_settings.arrowRight],
    singleItem: true,
    transitionStyle: "fade",
    touchDrag: true,
    mouseDrag: true,
    slideSpeed: 1000,
    responsiveRefreshRate: 200,
    responsive: {
      0: {
        nav: false
      },
      992: {
        nav: true
      }
    }
  }).on('changed.owl.carousel', owlPosition);

  /*$owlHomeThumb.on('initialized.owl.carousel', function () {
    $owlHomeThumb.find(".owl-item").eq(0).addClass("current");
  }).owlCarousel({
    items: $slidesPerPage,
    dots: false,
    nav: false,
    margin: 20,
    smartSpeed: 200,
    slideSpeed: 500,
    touchDrag: true,
    mouseDrag: true,
    slideBy: $slidesPerPage,
    responsiveRefreshRate: 100
  }).on('changed.owl.carousel', owlPosition2);*/

  function owlPosition(el) {
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - (el.item.count / 2) - .5);
    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
   /* $owlHomeThumb.find(".owl-item").removeClass("current").eq(current).addClass("current");
    var onscreen = $owlHomeThumb.find('.owl-item.active').length - 1;
    var start = $owlHomeThumb.find('.owl-item.active').first().index();
    var end = $owlHomeThumb.find('.owl-item.active').last().index();
    if (current > end) {
      $owlHomeThumb.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      $owlHomeThumb.data('owl.carousel').to(current - onscreen, 100, true);
    }*/
  }

  function owlPosition2(el) {
    if ($owledSecondary) {
      var number = el.item.index;
      $owlHome.data('owl.carousel').to(number, 100, true);
    }
  }

 /* $owlHomeThumb.on("click", ".owl-item", function (e) {
    e.preventDefault();
    var number = $(this).index();
    $owlHome.data('owl.carousel').to(number, 300, true);
  });*/
  $owlHome.owlCarousel();
  $owlHome.on('translate.owl.carousel', function (event) {
    var data_anim = $("[data-animation]");
    data_anim.each(function () {
      var anim_name = $(this).data('animation');
      $(this).removeClass('animated ' + anim_name).css('opacity', '0');
    });
  });
  $("[data-delay]").each(function () {
    var anim_del = $(this).data('delay');
    $(this).css('animation-delay', anim_del);
  });
  $("[data-duration]").each(function () {
    var anim_dur = $(this).data('duration');
    $(this).css('animation-duration', anim_dur);
  });
  $owlHome.on('translated.owl.carousel', function () {
    var data_anim = $owlHome.find('.owl-item.active').find("[data-animation]");
    data_anim.each(function () {
      var anim_name = $(this).data('animation');
      // Quitar clases de animación antes de agregarlas de nuevo
      $(this).removeClass('animate__' + anim_name + ' animate__animated');

      setTimeout(function () {
        $(this).addClass('animate__' + anim_name).css('opacity', '1');
        $(this).addClass('animate__animated');
      }.bind(this), 10);


    });
  });

  var numItems = $('#owl-productos .service-item').length; // Suponiendo que cada elemento tenga una clase 'item'

  if (numItems >= 3) {
    $('#owl-productos').owlCarousel({
      autoplay: true,
      rewind: true, /* use rewind if you don't want loop */
      margin: 20,
      nav:false,
      dots:false,
      animateOut: 'fadeOut',
     animateIn: 'fadeIn',

      responsiveClass: true,
      autoHeight: true,
      autoplayTimeout: 3000,
      smartSpeed: 800,
      responsive: {
        0: {
          items: 1
        },

        600: {
          items: 3
        },

        1024: {
          items: 3
        },

        1366: {
          items: 3
        }
      }
    });
  } else {
    $('#owl-productos').owlCarousel({
      center: true,
      loop: false,  // Desactiva el loop para que sea estático
      margin: 10,
      nav: false,
      dots: false,  // Desactiva la navegación
      autoplay:false,  // Desactiva el autoplay
      items: 2,
      mouseDrag:false,
      responsive: {
        0: {
          items: 2
        },
        700: {
          items: 1
        },
        1000: {
          items: 2
        }
      }
    });

  }



});
