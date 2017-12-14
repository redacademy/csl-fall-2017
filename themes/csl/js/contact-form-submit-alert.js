(function($){

  $('.wpcf7-form').on('submit', function() {

    function checkSubmit(){

      if($('.wpcf7-form').hasClass('sent')){
        $('.alert-container').css({
          'display': 'block'
        });
      }
    }
  
    setTimeout(checkSubmit, 1000);

  });

})(jQuery);