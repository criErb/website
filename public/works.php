<!-- header -->
<?php require('header.php'); ?>
  <body class="works__body">
<!-- loader -->
    <?php require('preloader.php'); ?>
    <div class="nav__wrapper">
      <a href="index.php">
        <div class="nav__logo"></div>
      </a>
      <!-- desktop menu -->
      <?php require('desktop_menu.php'); ?>
      <!-- mobile menu -->
      <?php require('mobile_menu.php'); ?>
    </div>
    <div class="main-view">
    <div class="text-section__wrapper">
      <div class="text-section__container">
        <div class="text-section__heading-wrapper">
          <h1 class="text-section__heading">Works</h1>
        </div>
        <div class="reanimatio__big-line reanimatio__big-line--white"></div>
        <p class="text-section__paragraph">This is my portfolio, a collection of user interfaces and websites.</p>
      </div>
    </div>
      <div class="works container--medium container--center">
          <a href="hytravel_work.php" class="works__item">
            <div class="works__image works__image--work-hytravel"></div>
            <h5 class="works__title">Hy-travel</h5>
            <p class="works__role">UX/UI design & prototyping</p>
          </a>
          <a href="savethechildren_work.php" class="works__item">
            <div class="works__image works__image--work-savethechildren"></div>
            <h5 class="works__title">Save the Children</h5>
            <p class="works__role">UX/UI design & front-end development</p>
          </a>
          <a href="lorenzopreziosi_work.php" class="works__item">
            <div class="works__image works__image--work-lorenzopreziosi"></div>
            <h5 class="works__title">Lorenzo Preziosi</h5>
            <p class="works__role">UX/UI design & front-end development</p>
          </a>
          <a href="foody_work.php" class="works__item">
            <div class="works__image works__image--work-foody"></div>
            <h5 class="works__title">Foody</h5>
            <p class="works__role">UX/UI design & prototyping</p>
          </a>
          <a href="shoppingicons_work.php" class="works__item">
            <div class="works__image works__image--work-shoppingicons"></div>
            <h5 class="works__title">Shopping Icons</h5>
            <p class="works__role">Icons bundle for UI design</p>
          </a>
          <a href="fmsrevo_work.php" class="works__item">
            <div class="works__image works__image--work-fmsrevo"></div>
            <h5 class="works__title">FMS Revo</h5>
            <p class="works__role">UI design & front-end development</p>
          </a>

      </div>
    </div>
<!-- footer -->
<?php require('footer.php'); ?>
