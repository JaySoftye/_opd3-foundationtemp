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
              <li class="nav-item">
                <a class="nav-link" href="#">My Usage</a>
              </li>
              <li class="nav-item active">
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

      <section class="container">
        <div class="row">
          <div class="col">
            <ul class="nav activity-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"><strong>Profile</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><strong>Password/Security</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><strong>Credit Card Information</strong></a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="container padding-top padding-bottom">
        <div class="row">
          <div class="col-md-2 padding-top">
            <div class="padding-bottom" id="profile-image"><img src="assets/user_icon.svg" width="130" height="130" alt="" /></div>
            <div class="hidden">
              <p class="text-center"><button class="btn btn-simple">Update your Photo</button></p>
              <p class="text-center"><small><button>X Remove Photo</button></small></p>
            </div>
          </div>
          <div class="col-md-5 padding-top">
            <form name="" method="" class="profile-form">
              <div class="form-group">
                <label>First Name:</label>
                <input type="text" class="form-control" placeholder="John" disabled>
              </div>
              <div class="form-group">
                <label>Last Name:</label>
                <input type="text" class="form-control" placeholder="Smith" disabled>
              </div>
              <div class="form-group">
                <label>Email/Login:</label>
                <input type="email" class="form-control" placeholder="john.smith@school.com" disabled>
              </div>
              <div class="form-group">
                <label>Title/Role:</label>
                <input type="text" class="form-control" placeholder="Technology Director" disabled>
              </div>
              <div class="form-group">
                <label>School/District:</label>
                <input type="text" class="form-control" placeholder="Kennedy High School" disabled>
              </div>
              <div class="form-group">
                <label>State:</label>
                <input type="text" class="form-control" placeholder="New York" disabled>
              </div>
              <div class="form-group">
                <label>Zip:</label>
                <input type="number" class="form-control" placeholder="11566" disabled>
              </div>

              <fieldset class="form-group">
                <h6 class="padding-top"><strong>Configure your email notifications below</strong></h6>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="" value="" checked disabled>
                      Email me when I register for a course
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="" value="" checked disabled>
                      Email me a reminder the day before a course
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="" value="" checked disabled>
                      Email me a reminder the week before a course
                    </label>
                  </div>
                </fieldset>

                <button type="submit" class="btn btn-simple float-right">Edit Info</button>
              </form>
            </div>
            <div class="col-md-5 padding-top">
              <div class="card thread-post">
                  <div class="card-block">
                    <h4><strong>License Information</strong></h4>
                    <p><span><strong>2,397</strong> days until your Account Expires</span><br /><span>Sunday, December 31, 2023</span></p>
                  </div>
                  <div class="card-footer">
                    <a class="btn blue-border" href="#">Renew Account</a><a class="btn teq-blue-text" href="#">Request Full Access</a>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </section>

  </main>

<?php include 'footer.php'; ?>
