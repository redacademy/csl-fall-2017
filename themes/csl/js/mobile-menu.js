(function ($){
  
  $( '.mobile-menu' ).hide();
  $( '.toggle-open' ).click(function() {

    $('#masthead').toggleClass('header-teal');
    $( '.mobile-menu' ).slideToggle( 'slow', function() {
    });
  });

})(jQuery);