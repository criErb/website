<!-- header -->
<?php require('header.php'); ?>
  <body class="lorenzoPreziosi__body">
<!-- loader -->
    <?php require('preloader.php'); ?>
    <div class="nav__wrapper">
      <a href="index">
        <div class="nav__logo top-button">
          <?php echo file_get_contents("assets/img/logo.svg"); ?>
        </div>
      </a>
<!-- back menu -->
      <?php require('work_menu.php'); ?>
    </div>
      <div class="work__header">
        <div class="work__image work__image--lorenzopreziosi">
        </div>
        <div class="work__intro">
          <h2 class="work__intro-heading">Lorenzo Preziosi</h2>
          <h5 class="work__intro-sub-heading">UX/UI design & front-end development</h5>
          <p class="work__intro-text-content spacer--medium">
            Lorenzo Preziosi is an italian windows company.<br>
            The project target was the creation of a corporate website that expresses craftsmanship company vision.<br>
            I fully developed a custom theme, applying it on Wordpress CMS.<br>
          </p>
          <a href="http://lorenzopreziosi.it" target="_blank" class="button button--primary button--small button--inline spacer--medium">Visit website</a>
        </div>
      </div>
      <div class="work__wrapper work__wrapper--single work__wrapper--white " id="firstWork">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Clean and inspirational graphics</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              I designed a clear wide layout, using brigth colors and inspirational images.<br>
              The typefaces is structured with serif headings and sans-serif body font.
            </p>
          </div>
        </div>
        <div class="work__doc-row">
            <img class="work__doc-image" src="assets/img/works/lorenzo_preziosi/screenHome1.png" alt="">
        </div>
      </div>
      <div class="work__wrapper work__wrapper--single work__wrapper--black">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Masonry layout</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--white"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              In the "Combined styles" page I used a masonry layout to have great flexibility.
            </p>
          </div>
        </div>
        <div class="work__doc-row">
          <img class="work__doc-image" src="assets/img/works/lorenzo_preziosi/abbinamenti.png" alt="">
        </div>
      </div>
      <div class="work__wrapper work__wrapper--single work__wrapper--white">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Handcrafted style illustrations</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              Instead of using 3D renderings or real images, I choosed to draw custom illustrations of the real windows to enhance the craftsmanship tone of voice.
            </p>
          </div>
        </div>
        <div class="work__doc-row">
          <img class="work__doc-image" src="assets/img/works/lorenzo_preziosi/illustrations.png" alt="">
        </div>
      </div>
      <div class="work__wrapper work__wrapper--single work__wrapper--black">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Functional layout</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--white"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              I created a large tab section to view the texture lists, core of Lorenzo Preziosi Company.
            </p>
          </div>
        </div>
        <div class="work__doc-row">
          <img class="work__doc-image" src="assets/img/works/lorenzo_preziosi/colori.png" alt="">
        </div>
      </div>
      <div class="work__others-wrapper">
        <a href="shoppingicons_work" class="work__others-content works__item-background--shoppingicons">
          <span>
            <h4>Prev</h4>
            <p>Shopping Icons</p>
          </span>
        </a>
        <a href="hytravel_work" class="work__others-content works__item-background--hytravel">
          <span>
            <h4>Next</h4>
            <p>Hy-travel</p>
          </span>
        </a>
      </div>
<!-- footer -->
<?php require('footer.php'); ?>
