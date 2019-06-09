$(document).ready(function() {

  var changeColor = function() {

     if ($('.desktop-menu__container').length > 0) {

        var $aboutSection = $('.about-section'),
            $aboutDistance = $aboutSection.offset().top,
            $skillsSection = $('.skills-section'),
            $skillsDistance = $skillsSection.offset().top,
            $worksSection = $('.works-section'),
            $worksDistance = $worksSection.offset().top,
            $contactsSection = $('.contacts-section'),
            $contactsDistance = $contactsSection.offset().top,
            $window = $(window);

        if ($window.scrollTop() <= ($aboutDistance - 29)) {
          $('.desktop-menu__item').css('color', '#FFFFFF');
          $('.desktop-menu__item--selected').css('color', '#ed143d');
          $('.gotop__button-wrapper').removeClass('gotop__button-wrapper--active');
          $('.desktop-menu__item').removeClass('menu--selected');
        }

        if ($window.scrollTop() >= ($aboutDistance - 29)) {
          $('.desktop-menu__item').css('color', '#000000');
          $('.aboutDesktopItem').addClass('menu--selected');
          $('.gotop__button-wrapper').addClass('gotop__button-wrapper--active');
          $('.desktop-menu__item').not('.aboutDesktopItem').removeClass('menu--selected');
          $('.desktop-menu__item--selected').css('color', '#ed143d');
        }

        if ($window.scrollTop() >= ($skillsDistance - 29)) {
           $('.skillsDesktopItem').addClass('menu--selected');
          $('.desktop-menu__item').not('.skillsDesktopItem').removeClass('menu--selected');
          $('.desktop-menu__item--selected').css('color', '#ed143d');
        }

        if ($window.scrollTop() >= ($worksDistance - 29)) {
          $('.worksDesktopItem').addClass('menu--selected');
          $('.desktop-menu__item').not('.worksDesktopItem').removeClass('menu--selected');
          $('.desktop-menu__item--selected').css('color', '#ed143d');
        }

        if ($window.scrollTop() >= ($contactsDistance - 29)) {
          $('.contactsDesktopItem').addClass('menu--selected');
          $('.desktop-menu__item').not('.contactsDesktopItem').removeClass('menu--selected');
          $('.desktop-menu__item--selected').css('color', '#ed143d');
        }
      }
  };
  $(window).on('scroll resize', changeColor);

});
