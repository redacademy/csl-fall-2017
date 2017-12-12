(function ($){
  
  $( '.mobile-menu' ).hide();
  $( '.toggle-open' ).click(function() {
    $('.line1').addClass('.line1-active');
    $('.line2').addClass('.line2-active');
    $('.line3').addClass('.line3-active');
    $('#masthead').toggleClass('header-teal');
    $( '.mobile-menu' ).slideToggle( 'slow', function() {
    });
  });
  
})(jQuery);
