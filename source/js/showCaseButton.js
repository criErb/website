$(document).ready(function() {

  $('.viewShowCase').click(function() {
    $('html,body').animate({
      scrollTop: $('#firstWork').offset().top
    }, 1000);
  });

});
