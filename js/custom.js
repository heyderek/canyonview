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
});
