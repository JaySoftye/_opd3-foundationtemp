<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <?php include 'course-details-search-form-NOT-REGISTERED.php'; ?>

    <section class="container padding-bottom">

      <div class="row row-eq-height padding-top">

        <div class="col-md-8">
          <video poster="assets/video-player-image.jpg" style="width: inherit;" data-toggle="modal" data-target=".satisfaction-survey">
            <source src="" type="video/mp4">
              Your browser does not support the video tag.
          </video>
        </div>

        <div class="col-md-4 course-details">
          <ul class="nav">
            <li class="nav-item category-duration-details">
              <span>1hr 54min</span>
            </li>
            <li class="nav-item">
              <?php include 'category-details-admin-menu.php'; ?>
            </li>
          </ul>
          <article>
            <h6>TED-Ed Videos for the Math Classroom</h6>
            <p>TED-Ed is a lesson planning resource created by TED, a media organization with the mission of spreading innovative and noteworthy ideas. We’ll explore the free videos TED-Ed has on their YouTube channel, and gather some ideas about how to incorporate these videos into your classroom instruction. In this session our Curriculum Specialists will share with you three exemplary examples of TED-Ed’s top Math videos, and the creative ways to use them as discussion starters or tools to support learning standards. </p>
          </article>

          <div class="row log-in-access active padding-bottom">
            <div class="col-md-8 course-details">
            </div>
            <div class="col-md-4 course-details badges">
              <img src="assets/badge-default-icon.jpg" />
            </div>
          </div>

        </div>
      </div>

      <div class="row log-in-no-access padding-bottom">
        <div class="col-md-8 padding-top">
          <p><button class="btn gray" data-toggle="modal" data-target=".login-window">Register for this course</button></p>
        </div>
      </div>

    </section>

    <section class="container padding-top padding-bottom">
      <h4><strong>Similar courses you may be interested in:</strong></h4>
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
              <h5 class="card-title"><a href="#">Digital Teacher iPad Certification 7: iPhoto</a></h5>
              <p class="card-text">With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream...</p>
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
              <p class="card-text">With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream...</p>
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
              <p class="card-text">With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream...</p>
            </div>
            <div class="card-footer"></div>
          </div>
        </article>

      </div>
    </section>

  </main>

<?php include 'footer.php'; ?>
