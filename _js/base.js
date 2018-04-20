// Basic Site Jquery and JavaScript

var $ = jQuery;

$( document ).ready(function() {
  $( ".mobile-trigger" ).click(function() {
    $( ".mobile-nav-container" ).animate({ "left": "-=100%" }, "fast");
  });

  $( ".fa-times" ).click(function() {
    $( ".mobile-nav-container" ).animate({ "left": "+=100%" }, "fast" );
  });

  $( ".transcript-button" ).click(function() {

    var newTrans = $( ".transcript-container", $(this).parent() );
    if (newTrans.hasClass('open-transcript')) {
      $('.open-transcript').removeClass('open-transcript');
        return;
    }
    $('.open-transcript').removeClass('open-transcript');
    newTrans.addClass('open-transcript');
  });

  $( ".mobile-sidebar-trigger" ).click(function() {

    var mobileBtn = $($(this).parent() );
    if (mobileBtn.hasClass('open-menu')) {
      $('.open-menu').removeClass('open-menu');
        return;
    }
    $('.open-menu').removeClass('open-menu');
    mobileBtn.addClass('open-menu');
  });

  $( ".search-form-trigger" ).click(function() {

    var mobileBtn = $('.search-container');
    if (mobileBtn.hasClass('open-form')) {
      $('.open-form').removeClass('open-form');
        return;
    }
    $('.open-form').removeClass('open-form');
    mobileBtn.addClass('open-form');
  });

});
