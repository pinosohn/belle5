$( document ).ready(function() {
function centerDiv(){
        window_height = $(window).height();
       alert("hallo");
        $("footer").css('height', (window_height/1.5));
        $("footer").css('max-height', (window_height/1.5));
    }
   
    centerDiv();
    $(window).resize(function(){
    centerDiv();
    });
  }