$(document).ready(function() {

      var buttonScroll = $('.intro-section__scroll-wrapper'),
          buttonWelcome = $('.welcome-button'),
          introSection = $('.about-section'),

          buttonAbout = $('.about-button'),
          sectionAbout = $('.about-section'),

          buttonSkills = $('.skills-button'),
          sectionSkills = $('.skills-section'),

          buttonWorks = $('.works-button'),
          sectionWorks = $('.works-section'),

          buttonContacts = $('.contacts-button'),
          sectionContacts = $('.contacts-section'),

          logoButton = $('.nav__logo'),

          buttonTop = $('.gotop__button-wrapper'),
          sectionTop = $('.top-section');

          buttonTop.click(function() {
            $('html,body').animate({
              scrollTop: sectionTop.offset().top
            },700);
            $('.desktop-menu__item').removeClass('menu--selected');
          });

          logoButton.click(function() {
            $('html,body').animate({
              scrollTop: sectionTop.offset().top
            },700);
            $('.desktop-menu__item').removeClass('menu--selected');
          });

          buttonWelcome.click(function() {
            $('html,body').animate({
              scrollTop: introSection.offset().top
            },700);
            $('.aboutDesktopItem').addClass('menu--selected');
          });

          buttonScroll.click(function() {
            $('html,body').animate({
              scrollTop: introSection.offset().top
            },700);
            $('.aboutDesktopItem').addClass('menu--selected');
          });

          buttonAbout.click(function() {
            $('html,body').animate({
              scrollTop: sectionAbout.offset().top
            },700);
            $('.desktop-menu__item').not(this).removeClass('menu--selected');
            $(this).addClass('menu--selected');
          });

          buttonSkills.click(function() {
            $('html,body').animate({
              scrollTop: sectionSkills.offset().top
            },700);
            $('.desktop-menu__item').not(this).removeClass('menu--selected');
            $(this).addClass('menu--selected');
          });

          buttonWorks.click(function() {
            $('html,body').animate({
              scrollTop: sectionWorks.offset().top
            },700);
            $('.desktop-menu__item').not(this).removeClass('menu--selected');
            $(this).addClass('menu--selected');
          });

          buttonContacts.click(function() {
            $('html,body').animate({
              scrollTop: sectionContacts.offset().top
            },700);
            $('.desktop-menu__item').not(this).removeClass('menu--selected');
            $(this).addClass('menu--selected');
          });

});
