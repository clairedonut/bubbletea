$(function() {

  // ---------- animate icons - testi area ----------

  // navbar area : bounce brand icon on hover
  $('.navbar-brand').hover(function() {
      $('.navbar-brand img').toggleClass('infinite animated bounce');
  });

  // media area : bounce icons when visible from scroll & on click
  $('.testi img').waypoint(function() {
      $('.testi img').toggleClass('animated bounce');
  }, { offset: '50%' });

  $(".testi img").click(function(){
    $(this).stop().toggleClass('animated bounce');
  });

  // form area : event when visible scroll & on hover

  $('.form-area').waypoint(function() {
      $('.form-icon').toggleClass('animated bounce');
  }, { offset: '50%' });

  $('.form-area').mouseenter(function() {
      $('.form-area img').addClass('infinite animated bounce');
  });
  $('.form-area').mouseleave(function() {
      $('.form-area img').removeClass('infinite animated bounce');
  });

  // toast alerts

  $(".alert").alert('');

  $('.toast').click(function(){
    $(this).fadeOut( "slow" );
  });

  // ---------- instagramLite ----------

  $('.instagram-lite').instagramLite({
	   accessToken: '6931515569.674061d.b725cbd7740647af8ae7e46d2acb47a3',
     list: false,
     urls: true,
     // limit: 20,
   });

   // adjust icon size depending on screen size

   if ( $(window).width() < 514) {
     $('.fab.fa-instagram').addClass('fa-2x');
     $('.fab.fa-instagram').removeClass('fa-3x');
   }
   else {
     $('.fab.fa-instagram').addClass('fa-3x');
     $('.fab.fa-instagram').removeClass('fa-2x');

   }

   $(window).resize(function() {
   /*If browser resized, check width again */
   if ($(window).width() < 514) {
   $('.fab.fa-instagram').addClass('fa-2x');
   $('.fab.fa-instagram').removeClass('fa-3x');

 }
   else {
     $('.fab.fa-instagram').addClass('fa-3x');
     $('.fab.fa-instagram').removeClass('fa-2x');
 }
});


}); // END
