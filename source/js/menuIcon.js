(function() {

  var button = $('.menu__button'),
      bar1 = $('.menu__bar--st'),
      bar2 = $('.menu__bar--nd'),
      bar3 = $('.menu__bar--rd'),
      barCloseLeft = $('.menu__bar--close-left'),
      barCloseRight = $('.menu__bar--close-right'),
      wrapperPanelMenu = $('.menu__section-wrapper');

      button.on('click', function() {

        if ($(this).hasClass('hideMenu')) {

          $(this).removeClass('hideMenu');
          $('body').addClass('menuFixed');
          $(this).addClass('menu__button--show-menu');
          $('.menu__bar').addClass('menu__bar--show-menu');
          $('.logo').addClass('logo--black');

          bar1.animate({
            left: '-30px',
          }, 400);

          bar2.animate({
            left: '30px',
          }, 400);

          bar3.animate({
            left: '-30px',
          }, 400);

          barCloseLeft.animate({
            top: '7px',
            left: '-1px',
            MarginTop: '-1px'
          }, 400);

          barCloseRight.animate({
            top: '7px',
            left: '-1px',
            MarginTop: '-1px',
          }, 400);

          wrapperPanelMenu.animate({
            right: '0',
          }, 600);

        } else {

          $(this).addClass('hideMenu');
          $('body').removeClass('menuFixed');

          setTimeout(function() {
            $('.menu__button').removeClass('menu__button--show-menu');
            $('.menu__bar').removeClass('menu__bar--show-menu');
            $('.logo').removeClass('logo--hidden');
          },500);

          if ($('body').hasClass('clients__background') || $('body').hasClass('index__background') ) {
            setTimeout(function() {
              $('.logo').addClass('logo--white');
              $('.logo').removeClass('logo--black');

            },500);
          }

          bar1.animate({
            left: '0',
          }, 400);

          bar2.animate({
            left: '0',
          }, 400);

          bar3.animate({
            left: '0',
          }, 400);

          barCloseLeft.animate({
            top: '-17px',
            left: '-24px',
            MarginTop: '-1px'
          }, 400);

          barCloseRight.animate({
            top: '-17px',
            left: '24px',
            MarginTop: '-1px',
          }, 400);

          wrapperPanelMenu.animate({
           right: '-120%',
         }, 600);
        }
      });
})();
