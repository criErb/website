<!-- header -->
<?php require('header.php'); ?>
  <body class="saveTheChildren__body">
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
        <div class="work__image work__image--savethechildren">
        </div>
        <div class="work__intro">
          <h2 class="work__intro-heading">Save the Children</h2>
          <h5 class="work__intro-sub-heading">UX/UI design & front-end development</h5>
          <p class="work__intro-text-content spacer--medium">
            Save the Children Italy commissioned to me the project "Piano alla Mano".<br>
            "Piano alla Mano" is the digitalization of a map realized by the young guys of Save the Children Ancona.<br>
            This project talk about young people resilience in case of natural disasters.<br>
            They want to explain with a youth tone of voice to istitutions and adults about safe areas, hospitals, resource areas helpful in case of natural disasters.<br>
          </p>
          <a href="http://pianoallamano.it" target="_blank" class="button button--primary button--small button--inline spacer--medium">Visit website</a>
        </div>
      </div>
      <div class="work__wrapper work__wrapper--single work__wrapper--white" id="firstWork">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Mobile first</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              The layout was designed focused for mobile use.<br>
              I used Google Maps APIs to create features like the map marker position, the marker toggle system and the visualization of informations about clicked area.
            </p>
          </div>
        </div>
        <div class="work__doc-row">
          <img class="work__doc-image" src="assets/img/works/save_the_children/save1.png" alt="">
        </div>
      </div>
      <div class="work__wrapper work__wrapper--single work__wrapper--black">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Easy to access</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--white"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              User finds lot of informations organized with a smart hierarchy.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image" src="assets/img/works/save_the_children/save2.png" alt="">
          </div>
      </div>
      <div class="work__wrapper work__wrapper--single work__wrapper--white">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Child friendly</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--black"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              Graphic elements are aligned to the youth tone of voice: content are easy to understand.
            </p>
          </div>
        </div>
        <div class="work__doc-row">
          <img class="work__doc-image" src="assets/img/works/save_the_children/save3.png" alt="">
        </div>
      </div>
      <div class="work__wrapper work__wrapper--single work__wrapper--black">
        <div class="work__section">
          <div class="work__heading-wrapper">
            <h4 class="work__heading-content">Guidelines</h4>
          </div>
          <div class="reanimatio__hider-line reanimatio__hider-line--white"></div>
          <div class="work__paragraph-wrapper">
            <p class="work__paragraph-content">
              The company ask lots of attentions on following their visual guidelines.<br>
              Save the Children IT and design departments evaluate the design before accept it.<br>
              Below icons was drawn following the Save the Children guidelines for icon design and color palette.
            </p>
          </div>
        </div>
          <div class="work__doc-row">
            <img class="work__doc-image" src="assets/img/works/save_the_children/save4.png" alt="">
          </div>
      </div>
      <div class="work__others-wrapper">
        <a href="hytravel_work" class="work__others-content works__item-background--hytravel">
          <span>
            <h4>Prev</h4>
            <p>Hy-travel</p>
          </span>
        </a>
        <a href="foody_work" class="work__others-content works__item-background--foody">
          <span>
            <h4>Next</h4>
            <p>Foody</p>
          </span>
        </a>
      </div>
      <!-- footer -->
      <?php require('footer.php'); ?>
