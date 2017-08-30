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

    <link rel="stylesheet" href="http://releases.flowplayer.org/5.5.2/skin/minimalist.css">
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://releases.flowplayer.org/5.5.2/flowplayer.min.js"></script>


  </head>
    <body>

      <?php include 'login-window.php'; ?>

      <header>
        <div class="container-fluid">

        <div class="row top-header-bar">

          <nav class="container" id="main-navbar">
            <div class="row" id="mainBanner">
              <div class="col-md-9">
                <a href="#"><img src="assets/opd_the_fusion_of_technology_and_learning.svg" alt="Online Professional Development the fusion of technology and learning" /></a>
              </div>
              <div class="col-md-3">
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
                    <a href="#" class="nav-link btn blue-fill hidden" data-toggle="modal" data-target=".login-window">LOG IN</a>
                    <a href="#" class="nav-link btn"><span class="white">LOG OUT</span></a>
                  </li>
                </ul>
              </div>
            </div>

          </nav>
        </div>

        </div>
          <?php include 'mobile-navbar.php'; ?>

      </header>
