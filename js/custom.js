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
  
  //Grab the navigation, and create an options menu for mobile dropdown.
  $(function() {
    //Append the select element to the navigation
    $("<select />").appendTo("nav");
    $("<option />", {
       "selected": "selected",
       "value"   : "",
       "text"    : "Go to..."
    }).appendTo("nav select");
    //Find the links within the nav, and convert them to options
    $("#header_wrap nav a").each(function() {
     var navLink = $(this);
    //Grab the values and attribute them to the proper option element
    $("<option />", {
         "value" : navLink.attr("href"),
         "text" : navLink.text()
     }).appendTo("nav select");
    });
    $("nav select").change(function() {
      window.location = $(this).find("option:selected").val();
    });
  });

});
