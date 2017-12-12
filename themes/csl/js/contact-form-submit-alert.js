(function($){

  $('.wpcf7-form').on('submit', function() {

    function checkSubmit(){

      if($('.wpcf7-form').hasClass('sent')){
        // console.log('email sent');


        $('.alert-container').css({
          "display": "block"
        });

      }
      else {
      //  console.log('email not sent?');
      }
    }
   
    setTimeout(checkSubmit, 1000);

  });

})(jQuery);