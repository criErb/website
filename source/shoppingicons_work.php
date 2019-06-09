<!-- header -->
<?php require('header.php'); ?>
  <body class="shoppingIcons__body">
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
        <div class="work__image work__image--shoppingicons">
        </div>
        <div class="work__intro">
          <h2 class="work__intro-heading">Shopping Icons</h2>
          <h5 class="work__intro-sub-heading">Icons bundle for UI design</h5>
          <p class="work__intro-text-content spacer--medium">
            This is an icon set, designed to be used in E-commerce websites/apps.<br>
            All the icons are in SVG file format to get the best resolution all screens.<br>
          </p>
        </div>
      </div>
      <div class="work__wrapper work__wrapper--white" id="firstWork">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Defined square</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              Geometric shapes designed to work in small viewports.
            </p>
          </div>
        </div>
        <div class="work__doc-row">
          <img class="work__doc-image work__doc-image--smaller" src="assets/img/works/shoppingicons/icons-intro.png" alt="">
        </div>
      </div>
      <div class="work__wrapper work__wrapper--black">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Material colors</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--white"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              All the icons are drawn with the material design color palette.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image work__doc-image--smaller" src="assets/img/works/shoppingicons/icons-material.png" alt="">
          </div>
      </div>
      <div class="work__wrapper work__wrapper--white">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">All in</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              I think you'll find the icons you need...if not, text me!
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image work__doc-image--smaller" src="assets/img/works/shoppingicons/icons-list.png" alt="">
          </div>
      </div>
      <div class="work__others-wrapper">
        <a href="fmsrevo_work" class="work__others-content works__item-background--fmsrevo">
          <span>
            <h4>Prev</h4>
            <p>FMS Revo</p>
          </span>
        </a>
        <a href="lorenzopreziosi_work" class="work__others-content works__item-background--lorenzopreziosi">
          <span>
            <h4>Next</h4>
            <p>Lorenzo Preziosi</p>
          </span>
        </a>
    </div>
<!-- footer -->
<?php require('footer.php'); ?>
