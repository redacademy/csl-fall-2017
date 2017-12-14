(function($){
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop:true,
      nav:true,
      items: 1,
      center: true,
      navText: ['','']

    });
    $('.owl-prev').append('<p class="screen-reader-text">Button for previous entry.</p>');
    $('.owl-next').append('<p class="screen-reader-text">Button for next entry.</p>');
  });

})(jQuery)