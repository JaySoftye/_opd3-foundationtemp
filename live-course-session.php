<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <section class="container-fluid under-header" id="search-box-container" >
      <div class="container">
        <div class="row padding-top">
          <div class="col-md-10">
            <h3><strong>Apple</strong></h3>
            <h5>Recording Podcasts</h5>
          </div>
        </div>
      </div>
    </section>

    <section class="container-fluid light-gray-bg" >
      <div class="container padding-bottom">

      <div class="row row-eq-height padding-top">
        <div class="col-md-8">
          <video class="hidden" poster="assets/video-player-image.jpg" style="width: inherit;" data-toggle="modal" data-target=".satisfaction-survey-form">
            <source src="" type="video/mp4">
              Your browser does not support the video tag.
          </video>
        </div>

        <aside class="col-md-4" id="live-chat-container">
          <div class="box-header row">
            <div class="col participants align-self-center">
              <span class="white">Chat Live</span>
            </div>
            <div class="col participants text-right align-self-center">
              <a class="dropdown-toggle participants" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3</a> <span class="white">Participants</span>
              <div class="dropdown-menu">
                <span class="dropdown-item">Participant One</span>
                <span class="dropdown-item">Participant Two</span>
                <span class="dropdown-item">Participant Three</span>
              </div>
            </div>
          </div>

          <div class="row" id="live-chat-box">
            <div>
            <p>
              <small class="teq-blue-text">Host</small>
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            </p>
            <p>
              <small class="teq-blue-text">Participant One</small>
              <span>Pellentesque ut purus non libero eleifend sagittis. Maecenas ac consectetur neque.</span>
            </p>

            <p>
              <small class="teq-blue-text">Host</small>
              <span>Aenean ut libero tempus erat tristique varius. Proin sit amet diam turpis. Pellentesque ut purus non libero eleifend sagittis.</span>
            </p>

            <p>
              <small class="teq-blue-text">Participant One</small>
              <span>Maecenas ac consectetur neque.</span>
            </p>
            <p>
              <small class="teq-blue-text">Participant Two</small>
              <span>Aenean ut libero tempus erat tristique varius. Proin sit amet diam turpis. Pellentesque ut purus non libero eleifend sagittis.</span>
            </p>
            </div>
          </div>

          <div class="row" id="live-chat-form">
            <div class="col">
              <form name="" method="">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Type...">
                    <span class="input-group-btn">
                      <button class="btn" type="button">Send</button>
                    </span>
                  </div>
              </form>
            </div>
          </div>
        </aside>
      </div>

      <div class="row padding-top padding-bottom">
        <div class="col-md-3 course-details  align-self-center">
          <a class="btn quiz-btn active" data-toggle="modal" data-target=".course-quiz"><img src="assets/take-quiz-icon.svg" height="48" alt="Take Certificationi Quiz" /></a>
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-3 course-details badges  align-self-center">
          <a href="#" data-toggle="modal" data-target=".certification-complete">Earn your Recording Podcasts with Audacity Badge  </a>
        </div>
        <div class="col-md-1 no-padding course-details badges  align-self-center">
          <a href="#" data-toggle="modal" data-target=".certification-complete"><img src="assets/badge-default-icon.jpg" /></a>
        </div>
      </div>

      </div>
        <?php include 'live-course-session-quiz.php'; ?>
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
