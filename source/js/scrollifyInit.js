$(function() {
  if ($('.sectionScrollify').length > 0) {

  $.scrollify({
    section: '.sectionScrollify',
    scrollSpeed: 1600,
    offset: 0,
    interstitialSection:".footer,.works-section"
  });

  if ($(window).width() < 1280) {
    $.scrollify.disable();
  }
  }
});
