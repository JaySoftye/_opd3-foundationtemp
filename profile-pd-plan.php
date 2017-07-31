<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <section class="container-fluid under-header light-blue-bg">
      <div class="container">

        <div class="row">
          <div class="col">
            <ul class="nav profile-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">My PD Plan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">My Usage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">My Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">My Reports</a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>

    <section class="container padding-top padding-bottom">
      <div class="row">
        <div class="col">
          <h2 class="teq-blue-text"><strong>Teq Recommended</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <div class="btn-group profile-plan-menu">
            <button class="dropdown-toggle blue-bg" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Your Group Name <span class="profile-plan-menu-item"></span></button>
              <ul class="dropdown-menu">
                <?php /* LOOP */ ?>
                <li><a href="#">Group Name 1</a></li>
                <li><a href="#">Group Name 2</a></li>
                <li><a href="#">Group Name 3</a></li>
              </ul>
            </div>
        </div>
      </div>

      <div class="row row-eq-height padding-top" id="teq-recommend-profile-plan">
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
              <p class="card-text">With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream...</p>
            </div>
            <div class="card-footer"><img src="assets/default-badge-icon.svg" /></div>
          </div>
        </article>
      </div>
    </section>

    <section class="container-fluid">
      <hr />
    </section>

    <section class="container padding-top padding-bottom">
      <div class="row">
        <div class="col">
          <h2 class="orange-text"><strong>School Recommended</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <div class="btn-group profile-plan-menu">
            <button class="dropdown-toggle orange-bg" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Your Group Name <span class="profile-plan-menu-item"></span></button>
              <ul class="dropdown-menu">
                <?php /* LOOP */ ?>
                <li><a href="#">Group Name 1</a></li>
                <li><a href="#">Group Name 2</a></li>
                <li><a href="#">Group Name 3</a></li>
              </ul>
            </div>
        </div>
      </div>

      <div class="row row-eq-height padding-top" id="school-recommend-profile-plan">
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
              <p class="card-text">What would humans look like if they were capable of muscle powered flight? How long would their bird-like wings need to be in relation to their height and weight? Join us to dissect this unique project based learning activity in which students explore these questions using the tools available on Chromebooks.  By the end of this session, you will have the know-how and means to deliver this lesson in your classroom right away!</p>
            </div>
            <div class="card-footer"></div>
          </div>
        </article>
      </div>
    </section>

    <section class="container-fluid">
      <hr />
    </section>

    <section class="container padding-top padding-bottom">
      <div class="row">
        <div class="col">
          <h2 class="green-text"><strong>District Recommended</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <div class="btn-group profile-plan-menu">
            <button class="dropdown-toggle green-bg" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Your Group Name <span class="profile-plan-menu-item"></span></button>
              <ul class="dropdown-menu">
                <?php /* LOOP */ ?>
                <li><a href="#">Group Name 1</a></li>
                <li><a href="#">Group Name 2</a></li>
                <li><a href="#">Group Name 3</a></li>
              </ul>
            </div>
        </div>
      </div>

      <div class="row row-eq-height padding-top" id="District-recommend-profile-plan">
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
      </div>
    </section>

  </main>

<?php include 'footer.php'; ?>
