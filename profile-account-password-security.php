<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <section class="container-fluid under-header profile-color-bg">
      <div class="container">

        <div class="row padding-top">
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
              <li class="nav-item">
                <a class="nav-link" href="#"><strong>Profile</strong></a>
              </li>
              <li class="nav-item active">
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
            <div class="padding-bottom"><a href="#" id="profile-image"><span>UN</span></a></div>

            <form action="" method="post" class="profile-form">
              <div class="form-group file-input">
                <input type="file" class="form-control-file">
              </div>

              <div class="form-group text-center">
                <button><small>[X] Remove Photo</small></button>
              </div>

            </form>

          </div>

          <div class="col-md-5 padding-top">
            <form class="padding-bottom profile-form" name="" method="">
              <p>Change your security questions and answers below:</p>
                <div class="form-group">
                  <select class="form-control">
                    <option>Security Question 1</option>
                    <option>What Color was your first car?</option>
                    <option>What was the street you grew up on?</option>
                    <option>What was the name of your first grade teacher?</option>
                  </select>
                </div>
                <div class="form-group padding-bottom">
                  <input type="text" class="form-control" placeholder="Answer for Question 1">
                </div>

                <div class="form-group">
                  <select class="form-control">
                    <option>Security Question 2</option>
                    <option>What Color was your first car?</option>
                    <option>What was the street you grew up on?</option>
                    <option>What was the name of your first grade teacher?</option>
                  </select>
                </div>
                <div class="form-group padding-bottom">
                  <input type="text" class="form-control" placeholder="Answer for Question 2">
                </div>

                <div class="form-group">
                  <select class="form-control">
                    <option>Security Question 3</option>
                    <option>What Color was your first car?</option>
                    <option>What was the street you grew up on?</option>
                    <option>What was the name of your first grade teacher?</option>
                  </select>
                </div>
                <div class="form-group padding-bottom">
                  <input type="text" class="form-control" placeholder="Answer for Question 3">
                </div>

                <div class="form-group">
                  <select class="form-control">
                    <option>Security Question 4</option>
                    <option>What Color was your first car?</option>
                    <option>What was the street you grew up on?</option>
                    <option>What was the name of your first grade teacher?</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Answer for Question 4">
                </div>
                <button type="submit" class="btn gray pull-right">Submit New Q/A</button>
              </form>

              <form class="password-change padding-top padding-bottom" name="" method="">
                <p>Change your account password below:</p>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="New Password">
                  <input type="text" class="form-control" placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn">Change Password</button>
              </form>
            </div>

            <div class="col-md-5 padding-top">
              <div class="alert alert-warning">
                <h6>Upgrade to a school plan for full access to Teq Online PD.</h6>
                <a href="#" class="btn warning text-center">Click here to sign up with your code</a>
              </div>
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
