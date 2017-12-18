(function($){
  $('.owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    items: 1,
    center: true,
    navText: ['',''],
    lazyLoad: true

  });
  $('.owl-carousel2').owlCarousel({
    loop:true,
    nav:false,
    items: 1,
    center: true,
    lazyLoad: true

  });
  $('.owl-carousel3').owlCarousel({
    loop:true,
    nav:true,
    items: 6,
    center: true,
    navText: ['',''],
    lazyLoad: true

  });
  $('.owl-prev').append('<p class="screen-reader-text">Button for previous entry.</p>');
  $('.owl-next').append('<p class="screen-reader-text">Button for next entry.</p>');

})(jQuery)