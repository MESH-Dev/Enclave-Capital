jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded!');

  //Let's do something awesome!

  // Sets the first panel on the homepage to 100%

  function screen_size() {
  	var wWidth = $(window).width();
  	var wHeight = $(window).height();

  	$('.container#home').css({height:wHeight});

  }

  screen_size();
  $(window).resize(screen_size);

  //=============================================================

  // Smooth page scroll
  // https://css-tricks.com/snippets/jquery/smooth-scrolling/

  $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 800);
        return false;
      }
    }
  });
});


  //=============================================================

});
