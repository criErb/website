<!-- header -->
<?php require('header.php'); ?>
  <body class="foody__body">
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
        <div class="work__image work__image--foody">
        </div>
        <div class="work__intro">
          <h2 class="work__intro-heading">Foody</h2>
          <h5 class="work__intro-sub-heading">UX/UI design & prototyping</h5>
          <p class="work__intro-text-content spacer--medium">
            Foody is a personal project.<br>
            The aim of this app concept is get user's favorite food everywhere and at any time.<br>
            UX path begin from three user needs:<br>
            Personal taste.<br>
            Short time.<br>
            Brand's confidence.<br>
          </p>
        </div>
        </div>
      </div>
      <div class="work__wrapper work__wrapper--white" id="firstWork">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Three ways, one goal</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              The user is asked how he wants to looking for the restaurants.<br>
              He can choose by his favorites meal, his position or his favorite brand.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image" src="assets/img/works/foody/screen1.png" alt="">
          </div>
      </div>
      <div class="work__wrapper work__wrapper--black">
        <div class="work__section">
          <div class="work__section">
            <div class="work__heading-wrapper">
              <h4 class="work__heading-content">Discover restaurants</h4>
            </div>
            <div class="reanimatio__hider-line reanimatio__hider-line--white"></div>
            <div class="work__paragraph-wrapper">
              <p class="work__paragraph-content">
                A map show to the user where are the restaurants, filtered by his previous choice.<br>
                Below the map I placed a scrollable list of restaurants with generic informations like users feedback, opening time and other infos.<br>
                Once user selects the restaurant, he can see it profile with images, menu with prices, in-depth informations and offers.
              </p>
            </div>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image" src="assets/img/works/foody/screen2.png" alt="">
          </div>
      </div>
      <div class="work__wrapper work__wrapper--white">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Meal customization</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              User can add extra ingredients to the meal, increase or decrease item quantity, write notes about the order and
              finally add it to the basket.<br>
              He will be able to decide where consume the item and how to get it.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image" src="assets/img/works/foody/screen3.png" alt="">
          </div>
      </div>
      <div class="work__wrapper work__wrapper--black">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Resume and checkout</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--white"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              User views a detailed order resume.<br>
              He can change order parameters and select reservation/delivery time.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image" src="assets/img/works/foody/screen4.png" alt="">
          </div>
      </div>
      <div class="work__others-wrapper">
        <a href="savethechildren_work" class="work__others-content works__item-background--savethechildren">
          <span>
            <h4>Prev</h4>
            <p>Save the Children</p>
          </span>
        </a>
        <a href="fmsrevo_work" class="work__others-content works__item-background--fmsrevo">
          <span>
            <h4>Next</h4>
            <p>FMS Revo</p>
          </span>
        </a>
      </div>
      <!-- footer -->
      <?php require('footer.php'); ?>
