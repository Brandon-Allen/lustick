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
    var newTrans = $( ".transcript-container", $(this).parent() );
    newTrans.addClass('open-transcript');
  });
});
