<!doctype html>
<html class="no-js" lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Teq Online Professional Development</title>

    <!-- Roboto -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">

    <!-- Compiled Version of Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="css/course-calendar.css">
    <link rel="stylesheet" href="css/course-details.css">
    <link rel="stylesheet" href="css/course-library_category-details.css">
    <link rel="stylesheet" href="css/main-nav_now-chat_login-window.css">
    <link rel="stylesheet" href="css/main-styles.css">
    <link rel="stylesheet" href="css/user-profile.css">
    <link rel="stylesheet" href="css/pricing-plans_sign-up-forms.css">
    <link rel="stylesheet" href="css/mobile-ui.css">

    <link rel="stylesheet" href="css/course-chapter-popovers.css">

  </head>
    <body class="course-session-vid">

      <?php include 'login-window.php'; ?>

      <header>
        <div class="container-fluid">

        <div class="row top-header-bar">

          <nav class="container" id="main-navbar">
            <div class="row" id="mainBanner">
              <div class="col-md-9">
                <a href="#"><img src="assets/opd_the_fusion_of_technology_and_learning.svg" alt="Online Professional Development the fusion of technology and learning" /></a>
              </div>
              <div class="col-md-3 hidden-sm-down">
                <section class="row align-items-center active" id="user-logged-in">
                  <div class="col no-padding"><a href="#" id="profile-image"><span>UN</span></a></div>
                  <div class="col no-padding"><a class="user-name" href="#">User Name</a></div>
                </section>
              </div>
            </div>
            <div class="row">
              <div class="col-md-9">
                <ul class="nav main-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="profile-nav-option" data-toggle="dropdown" aria-expanded="false">My Profile</a>
                      <div class="sub-menu dropdown-menu" aria-labelledby="profile-nav-option">
                        <section class="container">
                          <ul class="nav sub-nav">
                            <li class="nav-item">
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
                        </section>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="calendar-nav-option" data-toggle="dropdown" aria-expanded="false">Course Calendar</a>
                      <div class="sub-menu dropdown-menu" aria-labelledby="calendar-nav-option">
                        <section class="container">
                          <ul class="nav sub-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="#">All</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Teachers</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Administrators</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Parents</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Free</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="library-nav-option" data-toggle="dropdown" aria-expanded="false">Course Library</a>
                      <div class="sub-menu dropdown-menu" aria-labelledby="library-nav-option">
                        <section class="container">
                          <ul class="nav sub-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="#">All</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Teachers</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Administrators</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Parents</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Free</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="help-nav-option" data-toggle="dropdown" aria-expanded="false">Help Center</a>
                      <div class="sub-menu dropdown-menu" aria-labelledby="help-nav-option">
                        <section class="container">
                          <ul class="nav sub-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="#">How-to-videos</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Skills and Techniques</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Lessons</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item hidden">
                    <a class="nav-link administrative-plan" href="#"><span class="green-text">Admin</span></a>
                  </li>
                </ul>
              </div>

              <div class="col-md-3 no-padding">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link btn blue-fill" href="#">GETTING STARTED</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link btn blue-fill" data-toggle="modal" data-target=".login-window">LOG OUT</a>
                    <a href="#" class="nav-link btn hidden"><span class="white">LOG OUT</span></a>
                  </li>
                </ul>
              </div>
            </div>

          </nav>
        </div>

        </div>
          <?php include 'mobile-navbar.php'; ?>

      </header>
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
          <div class="row course-chapters">


<div class="col-2 active">
  <a href="http://opd-dev.teq.com/events/view/29/13843#" class="chapter-link active" title="" data-chapteridx="0" data-start="0" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="00min 15secs" data-original-title="Chapter 1"></a>
</div>
<div class="col-2">
  <a href="http://opd-dev.teq.com/events/view/29/13843#" class="chapter-link" title="" data-chapteridx="1" data-start="15" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="00min 15secs" data-original-title="Chapter 2"></a>
</div>
<div class="col-2">
  <a href="http://opd-dev.teq.com/events/view/29/13843#" class="chapter-link" title="" data-chapteridx="2" data-start="30" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="00min 15secs" data-original-title="Chapter 3"></a>
</div>
<div class="col-2">
  <a href="http://opd-dev.teq.com/events/view/29/13843#" class="chapter-link" title="" data-chapteridx="3" data-start="45" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="00min 05secs" data-original-title="Chapter 4"></a>
</div>
<div class="col-2">
  <a href="http://opd-dev.teq.com/events/view/29/13843#" class="chapter-link" title="" data-chapteridx="4" data-start="50" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="00min 10secs" data-original-title="Chapter 5"></a>
</div>
<div class="col-2">
  <a href="http://opd-dev.teq.com/events/view/29/13843#" class="chapter-link" title="" data-chapteridx="0" data-start="0" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="00min 15secs" data-original-title="Chapter 6"></a>
</div>
<div class="col-2">
  <a href="http://opd-dev.teq.com/events/view/29/13843#" class="chapter-link" title="" data-chapteridx="1" data-start="15" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="00min 15secs" data-original-title="Chapter 7"></a>
</div>
<div class="col-2">
  <a href="http://opd-dev.teq.com/events/view/29/13843#" class="chapter-link" title="" data-chapteridx="2" data-start="30" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="00min 15secs" data-original-title="Chapter 8"></a>
</div>
<div class="col-2">
  <a href="http://opd-dev.teq.com/events/view/29/13843#" class="chapter-link" title="" data-chapteridx="3" data-start="45" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="00min 05secs" data-original-title="Chapter 9"></a>
</div>
<div class="col-2">
  <a href="http://opd-dev.teq.com/events/view/29/13843#" class="chapter-link" title="" data-chapteridx="4" data-start="50" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="00min 10secs" data-original-title="Chapter 10"></a>
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

    </section>

  </main>

<?php include 'footer.php'; ?>
