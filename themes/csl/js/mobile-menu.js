(function ($){
  
  $( '.mobile-menu' ).hide();
  $( '.toggle-open' ).click(function() {

    $('#masthead').toggleClass('header-teal');
    $( '.mobile-menu' ).slideToggle( 'slow', function() {
    });
  });

})(jQuery);


// (function ($){
  
//   $( '.entry-title' ).hover(function() {
//     $('.entry-title').css('display','none');
//   },
//   function (){
//     $('.entry-content').css('display','block');
  
//   });
// })(jQuery);