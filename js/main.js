$(function() {

  console.log("peekaboo!");

  // bounce icons on page load
  $( window ).load(function() {
    $(".card-title img").addClass('animated bounce');
  });

  // bounce icons on click
  $(".card-title").click(function(){
    $(this).stop().toggleClass('animated bounce');
  });

  // zoom in product images on hover

  $('.zoom').mouseenter(function() {
      $(this).css({
        "transform": "scale(1.2)",
        "-webkit-transition": "all .3s ease-in-out"
      });
  });

  $('.zoom').mouseleave(function() {
      $(this).css({
        "transform": "scale(1)",
        "-webkit-transition": "all .2s ease-in-out"
      });
  });





}); // END
