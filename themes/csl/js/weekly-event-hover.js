(function ($){
$('.entry-title-wrapper').hover(function(){
  $(this).find('.entry-title').fadeOut(200);
  $(this).find('.entry-content').fadeIn(1000);
}, function(){
  $(this).find('.entry-title').fadeIn(1000);
  $(this).find('.entry-content').fadeOut(0);
});
})(jQuery);

