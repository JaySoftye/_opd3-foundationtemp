<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <?php include 'course-details-search-form-NOT-REGISTERED.php'; ?>

    <section class="container-fluid light-gray-bg" >
      <div class="container padding-bottom">

      <div class="row row-eq-height padding-top">
        <div class="col-md-8">
          <video poster="http://opd-dev.teq.com/images/default-video-placeholder.jpg" style="width: inherit;">
            <source src="" type="video/mp4">
              Your browser does not support the video tag.
          </video>
        </div>

        <div class="col-md-4 course-details">
          <article>
            <h6>iPhoto</h6>
            <p>With this course, participants will be able to successfully use iPad apps in conjunction with one another to create a project based learning activity. Throughout this session, we will demonstrate a complete activity and the use of multiple apps to perform various functions such as driving research, gathering data, and creating presentations. With this course, participants will be able to successfully use iPad apps in conjunction with one another to create a project based learning activity. Throughout this session, we will demonstrate a complete activity and the use of multiple apps to perform various functions such as driving research, gathering data, and creating presentations. </p>
          </article>
        </div>
      </div>

      <div class="row log-in-no-access padding-bottom">
        <div class="col-md-8 padding-top">
          <form action="">
            <p><button class="btn gray">Register for this course</button></p>
          </form>
        </div>
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
            <div class="card-footer"><span class="course-details-date">10am - 11pm, July 30, 2017</span><img src="assets/default-badge-icon.svg" /></div>
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
            <div class="card-footer"><span class="course-details-date">10am - 11pm, July 30, 2017</span></div>
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
            <div class="card-footer"><span class="course-details-date">10am - 11pm, July 30, 2017</span></div>
          </div>
        </article>

      </div>
    </section>

    <div class="modal fade certification-complete" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header green"></div>
          <div class="modal-body text-center course-details badges">
            <h1><strong>Congratulations!</strong></h1>
            <p>You have completed this course successfully. Click the link below to receive your certification.</p>
            <p><a href="#"><img src="assets/badge-default-icon.jpg" /></a></p>
            <p><button class="btn" href="#">Download Certificate</button></p>
          </div>
        </div>
      </div>
    </div>

  </main>

<?php include 'footer.php'; ?>
