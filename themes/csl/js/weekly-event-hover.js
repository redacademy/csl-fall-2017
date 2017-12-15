(function ($){

  $('.entry-title-wrapper').hover(function(){
    $(this).find('.entry-title').stop().fadeOut(200);
    $(this).find('.entry-content').stop().fadeIn(1000);
  }, function(){
    $(this).find('.entry-title').stop().fadeIn(1000);
    $(this).find('.entry-content').stop().fadeOut(0);
  });

})(jQuery);
