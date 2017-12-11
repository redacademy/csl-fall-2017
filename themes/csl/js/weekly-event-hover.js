(function ($){
$('.entry-title-wrapper').hover(function(){
  // $('.entry-title-wrapper').toggleClass('background');
  $(this).find('.entry-title').fadeOut();
  $(this).find('.entry-content').fadeIn();
}, function(){
  // $('.entry-title-warpper').toggleClass('background');
  $(this).find('.entry-title').fadeIn();
  $(this).find('.entry-content').fadeOut();
});
})(jQuery);

