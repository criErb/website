$(document).ready(function(){

  $('.works__row').slick({
    infinite: true,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 1680,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 1280,
        settings: {
          slidesToShow: 1,
        }
      },

    ]
  });

});
