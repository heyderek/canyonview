$(document).ready(function() {
  //Hide all captions on Load
  $('.caption').hide();  
  //Activate Flexslider Slideshow
  $('#flexslider1').flexslider({
    animation: "slide",
    controlNav: false,
    start: function(animatingTo){
      $('.caption').slideDown(300);
    },
    after: function(animatingTo){
      $('.caption').slideDown(300);
    },
    before: function(animatingTo){
      $('.caption').hide();
    },
  });
  //Activate Flexslider Carousel
  $('#flexslider2').flexslider({
    animation: "slide",
    animationLoop: false,
    slideshow: false,
    controlNav: false
  }); 
  
/*
  var winWidth = $(window).width();
  if ( winWidth < 959 ) {
    $('nav ul').hide();
    $('nav').prepend('<div id="here"><button>click me</button></div>');
    if($('nav ul').is(':hidden')) {
      $('#here button').click(function(){
        $('nav ul').slideDown();
      });
    } else {
      $('#here button').click(function(){
        $('nav ul').slideUp();
      });
    }
  } else {
  
  };
*/
});
