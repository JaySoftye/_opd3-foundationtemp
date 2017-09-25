<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <section class="container-fluid under-header profile-color-bg">
      <div class="container">

        <div class="row padding-top">
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

    <section class="container-fluid light-gray-bg padding-top padding-bottom">
      <div class="container">

        <div class="row">
          <div class="col">
            <ul class="nav activity-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/users/plan"><strong>Upcoming Courses</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/users/plan/recommended"><strong>Recommended Courses</strong></a>
              </li>
            </ul>
          </div>
        </div>

        <div class="row padding-top padding-bottom">
          <div class="col">
            <h4 class="salmon-text"><strong>We’re sorry.</strong></h4>
            <p class="salmon-text">You do not appear to be registered for any upcoming courses.</p>
          </div>
        </div>

        <div class="row">
          <article class="col-8">
            <div class="card">
              <div class="card-header">
                <ul class="nav">
                  <li class="nav-item">
                    <li class="nav-item">
                      <p class="lead white">NEXT AVAILABLE COURSE IS:</p>
                    </li>
                  </li>
                  <li class="nav-item">
                    <?php include 'category-details-admin-menu.php'; ?>
                  </li>
                </ul>
              </div>
              <div class="card-block">
                <h5 class="card-title"><a href="#">Teq DTC: Microsoft Office 365 Session 3- Planner and Outlook</a></h5>
                <p>Session 3 of our Microsoft Digital Teacher Certification focuses on creating a project timeline, increasing communication, and organizing meetings with the use of Microsoft Planner and Outlook. Within Planner, we will guide you through the process of assigning and organizing tasks to keep track of progress and assign jobs to keep responsibilities clear. Using Outlook, we’ll view group member availability, create meeting appointments while finding appropriate locations and times, as well as give you some beneficial tips and tricks for staying connected through emails.</p>
              </div>
              <div class="card-footer"><span class="course-details-date">Tuesday, May 26, 2015 @ 3:00PM EST</span><button class="btn gray float-right">Register for this course</button></div>
            </div>
          </article>
        </div>

        <div class="row padding-bottom">
          <div class="col">
            <h3>You can also visit the <a href="http://opd.teq.com/events"  class="teq-blue-text"><u>Course Calendar</u></a> for all our new and upcoming courses!</h3>
          </div>
        </div>

      </div>
    </section>

    <section class="container-fluid">
      <div class="container">

        <div class="row padding-top padding-bottom">
          <div class="col"><h3><strong>Similar courses you may be interested in:</strong></h3></div>
        </div>

          <div class="row row-eq-height padding-bottom">

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

      </div>
    </section>

  </main>

<?php include 'footer.php'; ?>
