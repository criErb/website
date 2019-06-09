<!-- header -->
<?php require('header.php'); ?>
  <body class="index__body">
<!-- loader -->
    <?php require('preloader.php'); ?>
    <div class="nav__wrapper">
      <div class="nav__logo top-button">
        <?php echo file_get_contents("assets/img/logo.svg"); ?>
      </div>
      <!-- menu desktop -->
      <?php require('desktop_menu.php'); ?>
      <!-- menu mobile -->
      <?php require('mobile_menu.php'); ?>
    </div>
      <section class="sectionScrollify section__background section__background--intro top-section">
        <div class="section__container">
          <div class="section__wrapper section__wrapper--mobile">
            <div class="section__content section__content--flex">
              <?php echo file_get_contents('assets/img/svg/illustration_gameboy_mobileul.svg'); ?>
            </div>
          </div>
          <div class="section__wrapper">
            <div class="section__content">
              <div class="intro-section__container">
                <div class="intro-section__tagline-wrapper">
                  <h1>Hey there!</h1>
                  <h2 class="intro-section__tagline">My name is Cristiano</h2>
                </div>
                <div class="intro-section__paragraph-wrapper">
                  <span class="intro-section__paragraph">
                    <p>I'm an Italian UI Designer & Front-end developer.<br> I love to work with creative design and interactions.
                    </p>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="section__wrapper section__wrapper--desktop">
            <div class="section__content section__content--illustration-intro">
              <?php echo file_get_contents('assets/img/svg/illustration_gameboy.svg'); ?>
            </div>
          </div>

          <div class="intro-section__scroll-wrapper">
            <div class="intro-section__scroll-text">Tell me more!</div>
            <div class="intro-section__scroll-arrow"></div>
          </div>
        </div>
      </section>

<!-- About -->

      <section class="sectionScrollify section__background section__background--about about-section">
        <div class="section__container">
          <div class="section__wrapper section__wrapper--desktop">
            <div class="section__content section__content--flex">
              <?php echo file_get_contents('assets/img/svg/illustration_about.svg'); ?>
            </div>
          </div>
          <div class="section__wrapper section__wrapper--mobile">
            <div class="section__content section__content--flex">
              <?php echo file_get_contents('assets/img/svg/illustration_about_mobile.svg'); ?>
            </div>
          </div>
          <div class="section__wrapper">
            <div class="section__content section__content--text">
                <div class="text-section__heading-wrapper">
                  <h1 class="text-section__heading">About</h1>
                </div>
                <div class="reanimatio__big-line reanimatio__big-line--black"></div>
                <p class="text-section__paragraph">
                  My name is Cristiano Erbacci, I'm from Italy and I'm 30 years old.<br>
                  I work in the fantastic world of visual design since 2006, year of my High School diploma in Graphic Design.<br>
                  In the last 4 years I completely moved my focus on UI design and Front-end development.<br>
                </p>
            </div>
          </div>
        </div>
      </section>

<!-- Skills -->

      <section class="sectionScrollify section__background section__background--skills skills-section">
        <div class="section__container">
          <div class="section__wrapper section__wrapper--mobile">
            <div class="section__content section__content--flex">
              <?php echo file_get_contents('assets/img/svg/illustration_skills_mobile.svg'); ?>
            </div>
          </div>
          <div class="section__wrapper">
            <div class="section__content section__content--text">
                <div class="text-section__heading-wrapper">
                  <h1 class="text-section__heading">Skills</h1>
                </div>
                <div class="reanimatio__big-line reanimatio__big-line--black"></div>
                <p class="text-section__paragraph">
                  <b>DESIGN SKILLS &#8594; </b> UI design | Interactive mockups | Icon design | Branding design | Logo design<br>
                  <b>DESIGN TOOLS &#8594; </b> Sketch | Invision | Experience Design (XD) | Quirk tools | Illustrator | Photoshop<br><br>
                  <b>DEV SKILLS &#8594; </b> Responsive design | Animation and transitions | Wordpress custom themes | BEM<br>
                  <b>DEV TOOLS &#8594; </b> HTML5 | CSS3 | Sass | JavaScript | JQuery | Gulp | Git | Atom editor
                </p>
            </div>
          </div>
          <div class="section__wrapper section__wrapper--desktop">
            <div class="section__content section__content--flex">
              <?php echo file_get_contents('assets/img/svg/illustration_skills.svg'); ?>
            </div>
          </div>
        </div>
      </section>

<!-- works -->

      <section class="sectionScrollify section__background--works works-section" id="works">
        <div class="section__content section__content--text section__content--works">
            <div class="text-section__heading-wrapper">
              <h1 class="text-section__heading">Works</h1>
            </div>
            <div class="reanimatio__big-line reanimatio__big-line--black"></div>
            <div class="text-section__paragraph text-section__paragraph--works">
              <p class="">
                Drag for more
              </p>
              <div class="section__drag">
                <img src="assets/img/svg/drag-hand-02.svg" />
              </div>
            </div>
        </div>
        <div class="works__row">
          <div class="works__item-wrapper">
            <a href="hytravel_work" class="works__item-content works__item-background works__item-background--hytravel">
              <span class="works__item-caption">
                <h3>Hy-travel</h3>
                <div class="reanimatio__medium-line reanimatio__medium-line--black"></div>
                <p>UX/UI design & prototyping</p>
              </span>
              <img class="works__item-image" src="assets/img/works/hytravel/hytravel1.png"/>
            </a>
          </div>
          <div class="works__item-wrapper">
            <a href="savethechildren_work"  class="works__item-content works__item-background works__item-background--savethechildren">
              <span class="works__item-caption">
                <h3>Save The Children</h3>
                <div class="reanimatio__medium-line reanimatio__medium-line--black"></div>
                <p>UX/UI design & front-end development</p>
              </span>
              <img class="works__item-image" src="assets/img/works/save_the_children/pres-save.png"/>
            </a>
          </div>
          <div class="works__item-wrapper">
            <a href="foody_work"  class="works__item-content works__item-background works__item-background--foody">
              <span class="works__item-caption">
                <h3>Foody</h3>
                <div class="reanimatio__medium-line reanimatio__medium-line--black"></div>
                <p>UX/UI design & prototyping</p>
              </span>
              <img class="works__item-image" src="assets/img/works/foody/pres-foody.png"/>
            </a>
          </div>
          <div class="works__item-wrapper">
            <a href="fmsrevo_work"  class="works__item-content works__item-background works__item-background--fmsrevo">
              <span class="works__item-caption">
                <h3>FMS Revo</h3>
                <div class="reanimatio__medium-line reanimatio__medium-line--black"></div>
                <p>UI design & front-end development</p>
              </span>
              <img class="works__item-image" src="assets/img/works/fms_revo/pres-fms.png"/>
            </a>
          </div>
          <div class="works__item-wrapper">
            <a href="shoppingicons_work"  class="works__item-content works__item-background works__item-background--shoppingicons">
              <span class="works__item-caption">
                <h3>Shopping Icons</h3>
                <div class="reanimatio__medium-line reanimatio__medium-line--black"></div>
                <p>Icon bundle for UI design</p>
              </span>
              <img class="works__item-image" src="assets/img/works/shoppingicons/pres-shopping.png"/>
            </a>
          </div>
          <div class="works__item-wrapper">
            <a href="lorenzopreziosi_work"  class="works__item-content works__item-background works__item-background--lorenzopreziosi">
              <span class="works__item-caption">
                <h3>Lorenzo Preziosi</h3>
                <div class="reanimatio__medium-line reanimatio__medium-line--black"></div>
                <p>UX/UI design & Front-end development</p>
              </span>
              <img class="works__item-image" src="assets/img/works/lorenzo_preziosi/pres-preziosi.png"/>
            </a>
          </div>
        </div>
      </section>

<!-- contacts -->
      <section class="sectionScrollify section__background section__background--contacts contacts-section">
        <div class="section__container">
          <div class="section__wrapper section__wrapper--desktop">
            <div class="section__content section__content--flex">
              <?php echo file_get_contents('assets/img/svg/illustration_contacts.svg'); ?>
            </div>
          </div>
          <div class="section__wrapper section__wrapper--mobile">
            <div class="section__content section__content--flex">
              <?php echo file_get_contents('assets/img/svg/illustration_contacts_mobile.svg'); ?>
            </div>
          </div>
          <div class="section__wrapper">
            <div class="section__content section__content--text">
              <div class="text-section__heading-wrapper">
                <h1 class="text-section__heading">Contacts</h1>
              </div>
              <div class="reanimatio__big-line reanimatio__big-line--black"></div>
              <p class="text-section__paragraph">
                What do you think about doing a project together?<br>
                I'll be happy to start a new collaboration with you.
                <a class="text-section__mail" href="mailto: info@cristianoerbacci.it">info@cristianoerbacci.it</a>
              </p>
            </div>
          </div>
        </div>
      </section>

<!-- gotop -->
<?php require('gotop.php'); ?>
<!-- footer -->
<?php require('footer.php'); ?>
