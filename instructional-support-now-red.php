<?php include 'header.php'; ?>
<div id="now-instructional-support">
  <div class="row">
    <div class="col-4">
      <img src="assets/now-instructional-support-chat-window-red.svg" alt="nOw Instructional Support" />
    </div>
  </div>
</div>

<aside id="now-chat-window">
  <button type="button" class="close" id="now-chat-close">
    <img src="assets/close-icon-red.svg" alt="close" style="border: 5px solid rgb(197, 15, 60);" />
  </button>
  <div class="mobile-now-chat-window">
    <div class="col">
      <p class="white">Connect to a live PD Specialist using the menu of options below</p>
    </div>
  </div>
  <div class="container">
    <div class="col hide-small text-center">
      <p class="white">Connect to a live PD Specialist using the menu of options below</p>
    </div>
  </div>
  <div class="row">
    <div class="col hide-small">
      <a href="#" class="active"><img src="assets/now-instructional-support-chat-now.svg" alt="Chat nOw" /></a>
    </div>
    <div class="col mobile-now-chat-window">
      <a href="#" class="active"><img src="assets/now-instructional-support-chat-now.svg" alt="Chat nOw" /></a>
    </div>
    <div class="col">
      <a href="#"><img src="assets/now-instructional-support-live-video.svg" alt="Live Video" /></a>
    </div>
    <div class="col">
      <a href="#"><img src="assets/now-instructional-support-schedule-call.svg" alt="Schedule a Call" /></a>
    </div>
    <div class="col">
      <a href="#"><img src="assets/now-instructional-support-email-us.svg" alt="Email Us" /></a>
    </div>
    <div class="col hide-small">
      <img src="assets/now-instructional-support-chat-icon.svg" alt="" />
    </div>
  </div>
  <div class="row" id="now-chat-box">
    <div class="col">
      <form name="" method="" id="chat-box-conversation">
        <input type="text" placeholder="type here">
      </form>
    </div>
  </div>
</aside>

  <main>

    <?php include 'category-details-search-form.php'; ?>

    <section class="container padding-bottom">

      <div class="row row-eq-height padding-top padding-bottom">

          <?php /** LOOP **/ ?>
        <article class="col-md-4">
          <div class="card">
            <div class="card-header">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>8hr 54min</span>
                </li>
                <li class="nav-item category-sessions-details">
                  <span>12 Sessions</span>
                </li>
                <li class="nav-item">
                  <?php include 'category-details-admin-menu.php'; ?>
                </li>
              </ul>
            </div>
            <div class="card-block">
              <h5 class="card-title"><a href="#">Digital Teacher</a></h5>
              <p class="card-text">What would humans look like if they were capable of muscle powered flight? How long would their bird-like wings need to be in relation to their height and weight? Join us to dissect this unique project based learning activity in which students explore these questions using the tools available on Chromebooks.  By the end of this session, you will have the know-how and means to deliver this lesson in your classroom right away!</p>
            </div>
            <div class="card-footer"></div>
          </div>
        </article>

        <article class="col-md-4">
          <div class="card">
            <div class="card-header">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>8hr 54min</span>
                </li>
                <li class="nav-item category-chapters-details">
                  <span>5 Chapters</span>
                </li>
                <li class="nav-item">
                  <?php include 'category-details-admin-menu.php'; ?>
                </li>
              </ul>
            </div>
            <div class="card-block">
              <h5 class="card-title"><a href="#">Creating Multi-Touch Books with iBooks Author</a></h5>
              <p class="card-text">Our fourteenth session of the Google Educator Basics Certification is where we will begin to focus on the student functionality and usability of the Google apps. Our earlier sessions built familiarity and workflow awareness for each of the apps, and throughout this session, we will take a look at various examples of how students can take ownership of their learning using a number of Google tools. Focusing in on Drawings, we will discuss various methods to increase collaboration and creativity among students for successful group-related activities and enhance communication with teacher and peers.</p>
            </div>
            <div class="card-footer"><img src="assets/default-badge-icon.svg" /></div>
          </div>
        </article>

        <article class="col-md-4">
          <div class="card">
            <div class="card-header">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>8hr 54min</span>
                </li>
                <li class="nav-item category-sessions-details">
                  <span>12 Sessions</span>
                </li>
                <li class="nav-item">
                  <?php include 'category-details-admin-menu.php'; ?>
                </li>
              </ul>
            </div>
            <div class="card-block">
              <h5 class="card-title"><a href="#">Digital Teacher iPad Certification 7: iPhoto</a></h5>
              <p class="card-text">With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream.</p>
            </div>
            <div class="card-footer"><img src="assets/default-badge-icon.svg" /></div>
          </div>
        </article>

        <article class="col-md-4">
          <div class="card">
            <div class="card-header">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>8hr 54min</span>
                </li>
                <li class="nav-item category-chapters-details">
                  <span>5 Chapters</span>
                </li>
                <li class="nav-item">
                  <?php include 'category-details-admin-menu.php'; ?>
                </li>
              </ul>
            </div>
            <div class="card-block">
              <h5 class="card-title"><a href="#">Creating Multi-Touch Books with iBooks Author</a></h5>
              <p class="card-text">The new generation, referred to as Gen Z, is growing up in a world where everyday they are immersed in technology. Students have become producers and creators of content, desiring to put their skills to use.</p>
            </div>
            <div class="card-footer"></div>
          </div>
        </article>

      </div>
    </section>

  </main>

<?php include 'footer.php'; ?>
