<!-- header -->
<?php require('header.php'); ?>
  <body class="fmsRevo__body">
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
        <div class="work__image work__image--fmsrevo"></div>
        <div class="work__intro">
          <h2 class="work__intro-heading">FMS Revo</h2>
          <h5 class="work__intro-sub-heading">UI design & front-end development</h5>
          <p class="work__intro-text-content spacer--medium">
            FMS Revo is a fanta management soccer platform with over 30.000 users.<br>
            My role in this project was the redesign of the new UI and the front-end development of it.<br>
            1 month after the release, more than 90% of users have opted for the new layout.<br>
          </p>
          <a href="http://www.fmsrevo.it/intro/" target="_blank" class="button button--primary button--inline button--small spacer--medium">Visit website</a>
        </div>
      </div>
      <div class="work__wrapper work__wrapper--white" id="firstWork">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Old VS New</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              Old FMS Revo did not provide a mobile version with the same features of desktop website.<br>
              The new release allows user to watch his league status and apply changes from smartphone and tablets.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image" src="assets/img/works/fms_revo/fmsOldNewDesign-mobile.png" alt="">
          </div>
      </div>
      <div class="work__wrapper work__wrapper--black">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Team and messages</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--white"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              Each team have a descripion page, where user views informations about the team history, team results and other statistics.<br>
              Users sends messages each other through a chat panel, accessible at any time.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image" src="assets/img/works/fms_revo/fmsTeamChat.png" alt="">
          </div>
      </div>
      <div class="work__wrapper work__wrapper--white">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Masonry layout</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              FMS Revo allows Users to customize widget positions on the dashboard.<br>
              I used a Masonry layout which is a smart solution to get a flexible design.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image" src="assets/img/works/fms_revo/fmsMasonryAccess.png" alt="">
          </div>
      </div>
      <div class="work__wrapper work__wrapper--black">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Team management</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--white"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              The core of FMS Revo is the formation page, with which user sends the team line-up for the near matches.<br>
              This page is available also in mobile version.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image" src="assets/img/works/fms_revo/fmsManagement.png" alt="">
          </div>
      </div>
      <div class="work__wrapper work__wrapper--white">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Transfer market</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              This section allows User to sell and buy players.<br>
              The state of the market are managed by actions, implemented through buttons and messages.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image" src="assets/img/works/fms_revo/fmsPlayerMarket.png" alt="">
          </div>
      </div>
      <div class="work__others-wrapper">
        <a href="foody_work" class="work__others-content works__item-background--foody">
          <span>
            <h4>Prev</h4>
            <p>Foody</p>
          </span>
        </a>
        <a href="shoppingicons_work" class="work__others-content works__item-background--shoppingicons">
          <span>
            <h4>Next</h4>
            <p>Shopping Icons</p>
          </span>
        </a>
      </div>
      <!-- footer -->
      <?php require('footer.php'); ?>
