(function ($){
  
  $( '.toggle-open' ).click(function() {
    $( '.mobile-menu' ).toggleClass('display');
    $('.line1').toggleClass('line1-active');
    $('.line2').toggleClass('line2-active');
    $('.line3').toggleClass('line3-active');
    $('#masthead').toggleClass('header-teal');
    $( '.mobile-menu' ).slideToggle( 100, function() {
    });
  });

//   $('.toggle-open').on('blur', function(){
//     $('.line1').toggleClass('line1-active');
//     $('.line2').toggleClass('line2-active');
//     $('.line3').toggleClass('line3-active');
//     $('#masthead').toggleClass('header-teal');
//     $('.mobile-menu').slideUp(100, function(){
//     });
// });
})(jQuery);
