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
    <link rel="stylesheet" href="css/course-chapter-popovers.css">
    <link rel="stylesheet" href="css/course-library_category-details.css">
    <link rel="stylesheet" href="css/main-nav_now-chat_login-window.css">
    <link rel="stylesheet" href="css/main-styles.css">
    <link rel="stylesheet" href="css/user-profile.css">
    <link rel="stylesheet" href="css/pricing-plans_sign-up-forms.css">
    <link rel="stylesheet" href="css/event.css">
    <link rel="stylesheet" href="css/mobile-ui.css">

    <link rel="stylesheet" href="css/erc-stylesheet.css">

<script src="https://cdn.jsdelivr.net/lodash/4.17.4/lodash.min.js" integrity="sha256-IyWBFJYclFY8Pn32bwWdSHmV4B9M5mby5bhPHEmeY8w=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="//releases.flowplayer.org/7.1.2/skin/skin.css">
<script src="http://releases.flowplayer.org/7.1.1/commercial/flowplayer.min.js"></script>
<script src="http://releases.flowplayer.org/hlsjs/flowplayer.hlsjs.min.js"></script>

  </head>
    <body>

      <?php include 'login-window.php'; ?>

      <header>
        <div class="container-fluid">

        <div class="row top-header-bar">

          <nav class="container" id="main-navbar">
            <div class="row" id="mainBanner">
              <div class="col-md-9">
                <a href="#"><img src="assets/erc-electronic-resource-center.svg" alt="ERC Electronic Resource Center" /></a>
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
                  <li class="nav-item dropdown disabled">
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
                    <a class="nav-link btn white" href="#">All ERC Categories</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link btn blue-fill" data-toggle="modal" data-target=".login-window">BACK TO OPD</a>
                  </li>
                </ul>
              </div>
            </div>

          </nav>
        </div>

        </div>

        <nav class="container-fluid hidden-md-up" id="mobile-navbar">

          <section class="container" id="mainBanner">
            <div class="row">
              <div class="col-1 no-padding">
                <a data-toggle="collapse" href="#mobile-main-nav" aria-expanded="false" aria-controls="mobile-main-nav"><img src="assets/mobile_navbar_menu_icon.svg" alt="menu" /></a>
              </div>
              <div class="col-7 no-padding">
                <a href="http://onlinepd.teq.com/erc"><img src="assets/erc-mobile-navbar-logo.svg" alt="Online Professional Development the fusion of technology and learning" /></a>
              </div>
              <div class="col-4 no-padding">
                <a href="#" id="mobile-now-window"><img src="assets/mobile_navbar_now_logo.svg" alt="now instructional support" /></a>
              </div>
            </div>
          </section>

          <section class="collapse container" id="mobile-main-nav">
            <div class="row">
              <div class="col">
                <button type="button" class="close float-left" data-toggle="collapse" href="#mobile-main-nav" aria-expanded="false" aria-controls="mobile-main-nav">
                  <span class="display-3 white">&times;</span>
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <ul class="nav flex-column">
                  <li class="nav-item hidden">
                    <a class="nav-link" href="#" data-toggle="modal" data-target=".login-window">Login</a>
                  </li>
                  <li class="nav-item">
                    <section class="align-items-center active">
                      <div class="row"><a href="#" id="profile-image"><span>UN</span></a></div>
                    </section>
                    <a class="nav-link" href="#">Log Out</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="" id="profile-mobilenav-option">My Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="" id="calendar-mobilenav-option">Course Calendar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="" id="library-mobilenav-option">Course Library</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="" id="library-mobilenav-option">Help Center</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                </ul>
              </div>
            </div>
            </section>

        </nav>

      </header>
