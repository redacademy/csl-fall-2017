(function ($){


$('.entry-title-wrapper').hover(function(){
  $(this).find('.entry-title').fadeOut(50);
  $(this).find('.entry-content').fadeIn(100);
}, function(){
  $(this).find('.entry-title').fadeIn(200);
  $(this).find('.entry-content').fadeOut(100);
});
})(jQuery);

