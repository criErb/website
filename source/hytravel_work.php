<!-- header -->
<?php require('header.php'); ?>
  <body class="hytravel__body">
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
        <div class="work__image work__image--hytravel">
        </div>
        <div class="work__intro">
          <h2 class="work__intro-heading">Hy-travel</h2>
          <h5 class="work__intro-sub-heading">UX/UI design & prototyping</h5>
          <p class="work__intro-text-content spacer--medium">
            Hy-travel it's a project created during the Google Startup Weekend 2015.<br>
            Working with my team, we got the second place in the event standings.<br>
            Hy-travel consists in a mobile app to book travels in different locations all over the world.<br>
            In last year I designed this mockup to explain it's UX process.<br>
          </p>
        </div>
      </div>
      <div class="work__wrapper work__wrapper--white " id="firstWork">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">User centered search</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              App splits the experience in two ways: the user can type his desired destination or get some suggestions based on his preferences.<br>
              On the nav bar, I placed the search icon shortcut that allow user to go back to search at any time he needs.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image work__doc-image--smaller" src="assets/img/works/hytravel/hytravel1-mobile.png" alt="">
          </div>
      </div>
      <div class="work__wrapper work__wrapper--black">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Accomodation description and reservation</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--white"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              User views images, description and facilities of the selected accomodation.<br>
              Hotel Manager infos increase confidence during the booking process.<br>
              Once the accomodation is selected, the reservation path begin with check-in and check-out dates.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image work__doc-image--smaller" src="assets/img/works/hytravel/hytravel2-mobile.png" alt="">
          </div>
      </div>
      <div class="work__wrapper work__wrapper--white">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Resume and confirm</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              In the end of reservation path, user views the resume listing Hotel Manager name, check-in and check-out dates, room features.<br>
              I place a bread crumb in the bottom section of the screen that allow user to move backward or forward during reservation process.<br>
              Clicking on "Reserve your room" button, user displays the Hotel Manager confirm message.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image work__doc-image--smaller" src="assets/img/works/hytravel/hytravel3-mobile.png" alt="">
          </div>
      </div>
      <div class="work__wrapper work__wrapper--black">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Account and social</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--white"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
                User can manage his personal account, invite Instragram and Facebook friends and get discounts inside the platform.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image work__doc-image--smaller" src="assets/img/works/hytravel/hytravel4-mobile.png" alt="">
          </div>
          </div>
      </div>
      <div class="work__others-wrapper">
        <a href="lorenzopreziosi_work" class="work__others-content works__item-background--lorenzopreziosi">
          <span>
            <h4>Prev</h4>
            <p>Lorenzo Preziosi</p>
          </span>
        </a>
        <a href="savethechildren_work" class="work__others-content works__item-background--savethechildren">
          <span>
            <h4>Next</h4>
            <p>Save the Children</p>
          </span>
        </a>
      </div>
<!-- footer -->
<?php require('footer.php'); ?>
