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


//Equal height divs

/* Thanks to CSS Tricks for pointing out this bit of jQuery
http://css-tricks.com/equal-height-blocks-in-rows/
It's been modified into a function called at page load and then each time the page is resized. One large modification was to remove the set height before each new calculation. */

equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function() {
  equalheight('.eh .columns');
});


$(window).resize(function(){
  equalheight('.eh .columns');
});

  //=============================================================

  //external link manager

  // New tabs

  /* ==========
     Variables
   ========== */
   var url = location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');

  /* ==========
      Utilities
    ========== */
   function beginsWith(needle, haystack){
     return (haystack.substr(0, needle.length) == needle);
   };


  /* ==========
     Anchors open in new tab/window
   ========== */
   $('a').each(function(){

     if(typeof $(this).attr('href') != "undefined") {
      var test = beginsWith( url, $(this).attr('href') );
      //if it's an external link then open in a new tab
      if( test == false && $(this).attr('href').indexOf('#') == -1){
        $(this).attr('target','_blank').prepend('<span class="sr-only">External link, opens in new window</span>');
      }
     }
   });

   //=============================================================

   //var link_text = $('.main-navigation li a').text();
   $('.main-navigation li').each(
      function(){
        var link_text = $(this).text();
        var lower = link_text.toLowerCase();
        $(this).addClass(lower);
      });



   // var bodyTop = $('body').scrollTop();
   // var wTop = $(window).scrollTop();
   // var svcTop = $('#services').offset().top;
   // var regTop = $('#regulations').offset().top;
   // var cltTop = $('#clients').offset().top;
   // var mgmtTop = $('#management').offset().top;
   // var wHeight = $('body').height();
   // var pos = wHeight - wTop;


   $(window).scroll(function (){
    //$('body').append('<div class="wTop">'+ wTop +'</div><div class="svcTop">' + svcTop + '</div><div class-"regTop">' + regTop + '</div>')

    var bodyTop = $('body').scrollTop();
   var wTop = $(window).scrollTop();
   var svcTop = $('#services').offset().top - 50;
   var regTop = $('#regulations').offset().top - 50;
   var cltTop = $('#clients').offset().top - 50;
   var mgmtTop = $('#management').offset().top - 50;
   var ctcTop = $('#contact').offset().top - 50;
   var ctcHeight = $('#contact').height();
   var footerH = $('footer').height();
   var bottom = ctcHeight + footerH;
   var wHeight = $('body').height();
   var pos = wTop - wHeight;
   var d = $(document).height();
   var w = $(window).height();
   var s = $(this).scrollTop();

   var pos2 = (d - (w + s));
   var bottom2 = 600;
   var posString = pos2.toString();
    //console.log(pos);
    // console.log('wTop = ' + wTop);
    // console.log(wHeight);
    // console.log('regTop = ' + regTop);
    // console.log('svcTop = ' + svcTop);
    // console.log('ctcTop = ' + ctcTop);
    // console.log('pos2 = ' + pos2);
    // console.log('bottom = '+bottom);

    console.log(wTop);

    if (wTop >= svcTop && wTop < regTop){
      $('.main-navigation li.services a').addClass('active');
      $('.main-navigation li:not(.services) a').removeClass('active');
   } else if (wTop >= regTop && wTop < cltTop){
      $('.main-navigation li.regulations a').addClass('active');
      $('.main-navigation li:not(.regulations) a').removeClass('active');
   }else if (wTop >= cltTop && wTop < mgmtTop){
      $('.main-navigation li.clients a').addClass('active');
      $('.main-navigation li:not(.clients) a').removeClass('active');
   }else if (wTop >= mgmtTop && pos2 > 100 ){//&& wTop < ctcTop
      $('.main-navigation li.management a').addClass('active');
      $('.main-navigation li:not(.management) a').removeClass('active');
   }else if (pos2 <= 100) {
      $('.main-navigation li.contact a').addClass('active');
      $('.main-navigation li:not(.contact) a').removeClass('active');
      console.log('Pos2!!');
      //alert('Pos2!!')
   }

   else if(wTop < svcTop){
    $('.main-navigation li a').removeClass('active');
   }

   });


  //sidr

  $('.sidr-trigger').sidr({
    name:'sidr-menu',
    renaming:false,
    source: 'header .main-navigation'
  })

  $('.sidr-close').click(
    function(){
      $.sidr('close', 'sidr-menu');
       console.log("Sidr should be closed");
    });

});
