var nav = document.getElementById("topNav");
var main = document.getElementById("main");
var menu = document.getElementsByClassName("menuitems");
var close = document.getElementsByClassName("close-btn");

//default to measure if/else from
nav.style.height = "50px";
main.style.marginTop = "50px";
for (i = 0; i < menu.length; i++){menu[i].style.marginTop="100px";};

close.addEventListener("click", function(){
  var menuIcon = close.children;
  for (i = 0; i < menuIcon.length; i++){
  menuIcon[i].classList.toggle("active");
  }   
});

function navToggle() {	
	//to close
	if (nav.style.height <= "275px") {
	nav.style.height = "50px";
  main.style.marginTop = "50px";
  
  document.body.style.backgroundColor = "rgba(0,0,0,0.0)";
	
  } 
  
	//to open
	else if (nav.style.height <= "50px") {
	nav.style.height = "275px";
	main.style.marginTop = "275px";

  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	
	}

};

(function ($){
  
      $('#close-btn').click(function() {
        $(this).toggleClass("btn-open");
      });
   
  
  })(jQuery);
