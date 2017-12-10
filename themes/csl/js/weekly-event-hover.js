(function ($){
//   $( '.entry-title' ).hover(function() {
//     $('.entry-title').toggleClass('hidden');
//   },
//   function (){
//     $('.entry-content').toggleClass('display');  
//   });
// })(jQuery);


$('.entry-title').hover(
  function(){ $('.entry-title').addClass('hover') 
  $('.entry-content').addClass('display')
},
  function(){ $('.entry-title').removeClass('hover')
  $('.entry-content').removeClass('display')
}
)})(jQuery)