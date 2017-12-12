(function ($){
  
  $( '.mobile-menu' ).hide();
  $( '.toggle-open' ).click(function() {
    $('.line1').toggleClass('.line1-active');
    $('.line2').toggleClass('.line2-active');
    $('.line3').toggleClass('.line3-active');
    $('#masthead').toggleClass('header-teal');
    $( '.mobile-menu' ).slideToggle( 'slow', function() {
    });
  });
  
})(jQuery);
