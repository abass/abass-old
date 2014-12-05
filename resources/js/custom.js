/* --------------------------------------------------------------

INDEX:

[1] External Links / Popout Window
[2] Mobile Nav
[3] Scrolling Nav
[4] Popup Lightbox
[5] Smooth Scroll
[6] Google Analytics

-------------------------------------------------------------- */

/* --------------------------------------------------------------

[1*] External Links / Popout Window

-------------------------------------------------------------- */

$.expr[':'].external = function(obj){
    return !obj.href.match(/^mailto\:/)
           && (obj.hostname != location.hostname || /.pdf$/.test(obj.href) || /.png$/.test(obj.href))
           && !obj.href.match(/^javascript\:/)
           && !obj.href.match(/^$/)
           && !obj.href.match(/^tel:/)
};

$('a:external').attr('target', '_blank');

// $('a.window').click(function(e) {
//     e.preventDefault();
//     poptastic(this.href);
// });

// function poptastic(url) {
//     var newwindow = window.open(url, 'name', 'height=260,width=500,scrollbars=yes');
//     if (newwindow.focus) {
//         newwindow.focus()
//     }
// }

/* --------------------------------------------------------------

[2*] Mobile Nav

-------------------------------------------------------------- */

$(function() {
  // $("a.search").click(function(e) {
  //   $("#search").toggleClass('hidden');
  //   $("#search-icon").toggleClass('fa-search');
  //   $("#search-icon").toggleClass('fa-search-minus');
  //   $("#search-icon").toggleClass('red');
  //   $("#search-field").focus();
  //   e.preventDefault();
  // });
  $(".menu a").click(function(e) {
    $("#nav").toggleClass('visible-desktop');
    $(".menu a").toggleClass('gray');
    $("#header").toggleClass('header-active');
    e.preventDefault();
  });
  // $("a.1-toggle").click(function(e) {
  //   $("#1").removeClass('hidden');
  //   $("a.1-toggle").addClass('toggle-selected')
  //   $("#2").addClass('hidden');
  //   $("a.2-toggle").removeClass('toggle-selected')
  //   e.preventDefault();
  // });
  // $("a.2-toggle").click(function(e) {
  //   $("#2").removeClass('hidden');
  //   $("a.2-toggle").addClass('toggle-selected')
  //   $("#1").addClass('hidden');
  //   $("a.1-toggle").removeClass('toggle-selected')
  //   e.preventDefault();
  // });
});


/* --------------------------------------------------------------

[3*] Scrolling Nav

-------------------------------------------------------------- */

// var menu = $('nav#menu');

// var watcher = scrollMonitor.create( menu );

// watcher.lock();

// watcher.stateChange(function() {
//   $(menu).toggleClass('scrolled', this.isAboveViewport)
// });

/* --------------------------------------------------------------

[4*] Popup Lightbox

-------------------------------------------------------------- */
$(document).ready(function() {
  $('.popup-with-zoom-anim').magnificPopup({
    type: 'inline',

    fixedContentPos: false,
    fixedBgPos: true,

    overflowY: 'auto',

    closeBtnInside: true,
    preloader: false,

    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
  });

  // $('.popup-with-move-anim').magnificPopup({
  //   type: 'inline',

  //   fixedContentPos: false,
  //   fixedBgPos: true,

  //   overflowY: 'auto',

  //   closeBtnInside: true,
  //   preloader: false,

  //   midClick: true,
  //   removalDelay: 300,
  //   mainClass: 'my-mfp-slide-bottom'
  // });
});

/* --------------------------------------------------------------

[5*] Smooth Scroll

-------------------------------------------------------------- */
// jQuery(function($){
//     $('.scroll a[href^="#"], a.scroll').bind('click',function(event){
//         var $anchor=$(this);

//         $('html, body').stop().animate({
//             scrollTop:$($anchor.attr('href')).offset().top
//         },700,'easeOutExpo');

//         event.preventDefault()
//     })
// });

/* --------------------------------------------------------------

[6*] Google Analytics

-------------------------------------------------------------- */
//abass.co
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46859701-1', 'auto');
  ga('require', 'displayfeatures');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');