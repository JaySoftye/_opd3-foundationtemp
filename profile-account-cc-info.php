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

    <section class="container padding-top">
      <div class="row">
        <div class="col">
          <ul class="nav activity-nav">
            <li class="nav-item">
              <a class="nav-link" href="#"><strong>Profile</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><strong>Password/Security</strong></a>
            </li>
            <li class="nav-item active">
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
        </div>

        <div class="col-md-5 padding-top">
          <form name="" method="">
            <div class="form-group row align-items-center">
              <label class="col-4 col-form-label text-right"></label>
              <div class="col-8"><img src="assets/credit-cards-icon.svg" width="" height="" alt="" /></div>
            </div>

            <div class="form-group row">
              <label class="col-4 col-form-label text-right">Card Number:</label>
              <div class="col-8">
                <input class="form-control" type="password" value="password123">
              </div>
            </div>

            <div class="form-group row align-items-center">
              <label class="col-4 col-form-label text-right">Expiration Date:</label>
              <div class="col-3">
                <input class="form-control" type="text" placeholder="MM">
              </div>
              <div class="col-2 text-center no-padding">
                /
              </div>
              <div class="col-3">
                <input class="form-control" type="text" placeholder="YY">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-4 col-form-label text-right">Security Code:</label>
              <div class="col-8">
                <input class="form-control" type="password" value="123">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-4 col-form-label text-right">Billing Zip:</label>
              <div class="col-8">
                <input class="form-control" type="number">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-4 col-form-label text-right">Card Holder:</label>
              <div class="col-8">
                <input class="form-control" type="text">
              </div>
            </div>
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

  </main>

<?php include 'footer.php'; ?>
