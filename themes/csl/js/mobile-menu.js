(function ($){
  
  $( '.mobile-menu' ).hide();
  $( '.toggle-open' ).click(function() {
    $( '.mobile-menu' ).slideToggle( 'slow', function() {
    });
  });

})(jQuery);