<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <section class="container-fluid under-header light-blue-bg">
      <div class="container">

        <div class="row">
          <div class="col">
            <ul class="nav profile-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">My PD Plan</a>
              </li>
              <li class="nav-item active">
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

    <section class="container padding-top">
      <div class="row">
        <div class="col">
          <ul class="nav activity-nav">
            <li class="nav-item">
              <a class="nav-link" href="#"><strong>In Progess</strong></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#"><strong>Completed</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><strong>Achievements</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link green-text" href="#"><strong>Teachers</strong></a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="container padding-top padding-bottom">
      <div class="row">
        <div class="col">
          <p class="green-text"><strong>Completed Training</strong></p>
          <p>Quite a list you have there <a href="#" class="teq-blue-text"><strong>User Name</strong></a>.<br />Keep up the great work!</p>
        </div>
      </div>
    </section>

    <section class="container-fluid light-green-bg padding-top padding-bottom">
      <div class="container">
        <div class="row align-items-center padding-sm">
          <div class="col-1"></div>
          <div class="col-5">
            <h3><strong>Certifications</strong></h3>
          </div>
        </div>

        <div class="d-flex align-items-stretch">
        <?php /** LOOP **/ ?>

          <article class="col-md-3 col-sm-6">
            <div class="card">
              <div class="card-header"></div>
              <div class="card-block">
                <p class="card-title"><a href="#">Creating Multi-Touch Books with iBooks Author</a></p>
              </div>
              <div class="card-footer">
                <a class="btn blue-border" href="#">Get Certificate</a>
              </div>
            </div>
          </article>
          <article class="col-md-3 col-sm-6">
            <div class="card">
              <div class="card-header"></div>
              <div class="card-block">
                <p class="card-title"><a href="#">Creating Multi-Touch Books with iBooks Author</a></p>
              </div>
              <div class="card-footer">
                <a class="btn blue-border" href="#">Get Certificate</a>
              </div>
            </div>
          </article>
          <article class="col-md-3 col-sm-6">
            <div class="card">
              <div class="card-header"></div>
              <div class="card-block">
                <p class="card-title"><a href="#">Creating Apps</a></p>
              </div>
              <div class="card-footer">
                <a class="btn blue-border" href="#">Get Certificate</a>
              </div>
            </div>
          </article>

        </div>
      </div>
    </section>

    <section class="container-fluid light-orange-bg padding-top padding-bottom">
      <div class="container">
        <div class="row align-items-center padding-sm">
          <div class="col-1">
            <img src="assets/default-badge-icon.svg">
          </div>
          <div class="col-5">
            <h3><strong>Certification Tracks</strong></h3>
          </div>
        </div>

        <div class="row">
        <?php /** LOOP **/ ?>

        <article class="col-md-3 col-sm-6">
          <div class="card">
            <div class="card-header"></div>
            <div class="card-block">
              <p class="card-title"><a href="#">Digital Teacher iPad Certification 1</a></p>
            </div>
            <div class="card-footer">
              <a class="btn blue-border" href="#">Get Certificate</a>
            </div>
          </div>
        </article>
        <article class="col-md-3 col-sm-6">
          <div class="card">
            <div class="card-header"></div>
            <div class="card-block">
              <p class="card-title"><a href="#">Digital Teacher iPad Certification 2 with usage of iOS </a></p>
            </div>
            <div class="card-footer">
              <a class="btn blue-border" href="#">Get Certificate</a>
            </div>
          </div>
        </article>
        <article class="col-md-3 col-sm-6">
          <div class="card">
            <div class="card-header"></div>
            <div class="card-block">
              <p class="card-title"><a href="#">Digital Teacher iPad Certification 3</a></p>
            </div>
            <div class="card-footer">
              <a class="btn blue-border" href="#">Get Certificate</a>
            </div>
          </div>
        </article>
        <article class="col-md-3 col-sm-6">
          <div class="card">
            <div class="card-header"></div>
            <div class="card-block">
              <p class="card-title"><a href="#">Digital Teacher iPad Certification 4</a></p>
            </div>
            <div class="card-footer">
              <a class="btn blue-border" href="#">Get Certificate</a>
            </div>
          </div>
        </article>
        <article class="col-md-3 col-sm-6">
          <div class="card">
            <div class="card-header"></div>
            <div class="card-block">
              <p class="card-title"><a href="#">Digital Teacher iPad Certification 5</a></p>
            </div>
            <div class="card-footer">
              <a class="btn blue-border" href="#">Get Certificate</a>
            </div>
          </div>
        </article>
        <article class="col-md-3 col-sm-6">
          <div class="card">
            <div class="card-header"></div>
            <div class="card-block">
              <p class="card-title"><a href="#">Digital Apple Certification</a></p>
            </div>
            <div class="card-footer">
              <a class="btn blue-border" href="#">Get Certificate</a>
            </div>
          </div>
        </article>

        </div>
      </div>
    </section>


  </main>

<?php include 'footer.php'; ?>
