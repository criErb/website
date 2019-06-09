setTimeout(function() {

// Pagine lavori
    $('.work__wrapper').bind('inview', function(event, visible) {
      if (visible) {
        $(this).find('.reanimatio__hider-line').addClass('reanimatio__hider-line--active');
        $(this).find('.work__heading-content').addClass('work__heading-content--active');
        $(this).find('.work__paragraph-content').addClass('work__paragraph-content--active');
        $(this).find('.work__doc-image').addClass('work__doc-image--active');
      }
    });

// Index, sezioni secondarie
    $('.section__content--text').bind('inview', function(event, visible) {
      if (visible) {
        $(this).find('.text-section__heading').addClass('text-section__heading--active');
        $(this).find('.reanimatio__big-line').addClass('reanimatio__big-line--active');
        $(this).find('.text-section__paragraph').addClass('text-section__paragraph--active');
      }
    });

    $('.intro-section__container').bind('inview', function(event, visible) {
      if (visible) {
        $(this).find(".intro-section__tagline").addClass('intro-section__tagline--active');
        $(this).find(".intro-section__paragraph").addClass('intro-section__paragraph--active');
      }
    });

},400);
