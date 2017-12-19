(function($){
  $('.owl-seasonal').owlCarousel({
    loop:true,
    nav:true,
    items: 1,
    center: true,
    navText: ['',''],
    lazyLoad: true

  });
  $('.owl-event-main').owlCarousel({
    loop:false,
    nav:true,
    dots: true,
    navText: ['',''],
    items: 1,
    center: true,
    lazyLoad: true,
    startPosition: 0

  }).on('dragged.owl.carousel', function(e) {
    // if (e.property.name != 'position') return;
    console.log(e);
    $('.owl-event-thumbs').trigger('to.owl.carousel', [ e.page.index , 300]);
  });
  $('.owl-event-thumbs').owlCarousel({
    loop:false,
    nav:true,
    dots: false,
    items: 6,
    center: false,
    navText: ['',''],
    lazyLoad: true,
    startPosition: 0,
    mouseDrag: false,
    touchDrag: false,
    freeDrag: false,
    pullDrag: false

  });
  $('.owl-event-thumbs .owl-prev').on('click', function(){
    $('.owl-event-main').trigger('prev.owl.carousel', [300]);
  });
  $('.owl-event-thumbs .owl-next').on('click', function(){
    $('.owl-event-main').trigger('next.owl.carousel', [300]);
  });
  $('.thumbnail-wrapper img').on('click', function(e){
    // console.log(e);
    $('.owl-event-main').trigger('to.owl.carousel', [ e.target.getAttribute('sync-data') , 300]);
    $('.owl-event-thumbs').trigger('to.owl.carousel', [ e.target.getAttribute('sync-data') , 300]);
  });
  $('.owl-prev').append('<p class="screen-reader-text">Button for previous entry.</p>');
  $('.owl-next').append('<p class="screen-reader-text">Button for next entry.</p>');
})(jQuery)