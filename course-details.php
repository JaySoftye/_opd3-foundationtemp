<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <?php include 'course-details-search-form.php'; ?>

    <section class="container padding-bottom">

      <div class="row row-eq-height padding-top">

        <div class="col-md-8">
          <video poster="assets/video-player-image.jpg" style="width: inherit;" data-toggle="modal" data-target=".satisfaction-survey">
            <source src="" type="video/mp4">
              Your browser does not support the video tag.
          </video>
          <small><strong>Watch the full course video above or the chaptered sections below. All chapters need to be finsihed for course credit.</strong></small>
          <div class="row course-chapters padding-bottom">
            <div class="col-2">
              <a href="#" class="chapter-link chapter-complete"></a>
            </div>
            <div class="col-2">
              <a href="#" class="chapter-link chapter-complete"></a>
            </div>
            <div class="col-2">
              <a href="#" class="chapter-link chapter-complete"></a>
            </div>
            <div class="col-2">
              <a href="#" class="chapter-link chapter-complete"></a>
            </div>
            <div class="col-2">
              <a href="#" class="chapter-link chapter-complete"></a>
            </div>
            <div class="col-2">
              <a href="#" class="chapter-link chapter-complete"><img src="assets/course-session-default-image.jpg" /></a>
            </div>
            <div class="col-2 active">
              <a href="#" class="chapter-link active"><img src="assets/course-session-default-image.jpg" /></a>
            </div>
            <div class="col-2">
              <a href="#" class="chapter-link"><img src="assets/course-session-default-image.jpg" /></a>
            </div>
            <div class="col-2">
              <a href="#" class="chapter-link"></a>
            </div>
            <div class="col-2">
              <a href="#" class="chapter-link"></a>
            </div>
            <div class="col-2">
              <a href="#" class="chapter-link"></a>
            </div>
            <div class="col-2">
              <a href="#" class="chapter-link"></a>
            </div>
          </div>
        </div>

        <div class="col-md-4 course-details">
          <ul class="nav">
            <li class="nav-item category-duration-details">
              <span>8hr 54min</span>
            </li>
            <li class="nav-item">
              <?php include 'category-details-admin-menu.php'; ?>
            </li>
          </ul>
          <article>
            <h6>iPhoto</h6>
            <p>With this course, participants will be able to successfully use iPad apps in conjunction with one another to create a project based learning activity. Throughout this session, we will demonstrate a complete activity and the use of multiple apps to perform various functions such as driving research, gathering data, and creating presentations. With this course, participants will be able to successfully use iPad apps in conjunction with one another to create a project based learning activity. Throughout this session, we will demonstrate a complete activity and the use of multiple apps to perform various functions such as driving research, gathering data, and creating presentations. </p>
          </article>
          <article>
            <h6>Course Objective</h6>
            <p>At the end of this course you will know how to find and access the basic settings of your iPad, access the wireless tools, and access the tools available in your Control Center.</p>
          </article>

          <div class="row log-in-access active padding-bottom">
            <div class="col-md-8 course-details">
              <a class="btn quiz-btn active" data-toggle="modal" data-target=".course-quiz"><img src="assets/take-quiz-icon.svg" width="179" height="36" alt="Take Certificationi Quiz" /></a>
              <a class="btn group-code-btn" data-toggle="modal" data-target=".viewing-code"><img src="assets/group-code-icon.svg" width="179" height="36" alt="Generate Group View Code" /></a>
                <form name="" method="">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter viewing code">
                      <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Enter</button>
                      </span>
                    </div>
                </form>
            </div>
            <div class="col-md-4 course-details badges">
              <img src="assets/badge-default-icon.jpg" />
            </div>
          </div>

        </div>
      </div>

      <div class="row log-in-no-access padding-bottom" style="display: none;">
        <div class="col-md-8">
          <small><strong>To view this video please login or sign up for a basic user account from link below.</strong></small>
          <p><a class="btn gray-fill" href="#">Sign Up Today</a></p>
        </div>
      </div>

        <?php include 'course-details-quiz.php'; ?>
        <?php include 'course-details-satisfaction-survey.php'; ?>
        <?php include 'course-details-viewing-code.php'; ?>

    </section>

    <?php include 'course-details-resources.php'; ?>

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
