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
            <form name="" method="" class="profile-form">
              <div class="form-group">
                <img src="assets/credit-cards-icon.svg" width="370" height="55" alt="" />
              </div>

              <div class="form-group">
                <label>Card Number:</label>
                <input class="form-control" type="password" value="password123" disabled>
              </div>

              <div class="form-group row align-items-center">
                <label class="col-12">Expiration Date:</label>
                <div class="col-4">
                  <input class="form-control" type="password" value="mm" disabled>
                </div>
                <div class="col-1 text-center no-padding">/</div>
                <div class="col-4">
                  <input class="form-control" type="password" value="yy" disabled>
                </div>
              </div>

              <div class="form-group">
                <label>Security Code:</label>
                <input class="form-control" type="password" value="123" disabled>
              </div>

              <div class="form-group">
                <label>Billing Zip:</label>
                <input class="form-control" type="password" value="12345" disabled>
              </div>

              <div class="form-group">
                <label>Card Holder Name:</label>
                <input class="form-control" type="password" value="John Smith" disabled>
              </div>

            </form>

            <div id="edit-info">
              <button id="edit-info-button" class="btn btn-simple float-right" onclick="showHide()">Edit Info</button>
            </div>

            <div id="edit-info-submit" style="display: none;">
              <small class="teq-blue-text"><strong>WARNING: This action cannot be undone.</strong></small>
              <button type="submit" class="btn">Update Payment Info</button>
            </div>

          <script>
          /**
          DELETE THIS
          ONLY USED TO SHOW HOW THE FORM WILL WORK ON THE FRONT END
          **/
            function showHide() {
              var x = document.getElementById('edit-info');
              var y = document.getElementById('edit-info-submit');
              var inputs = document.getElementsByClassName('form-control');
              var checks = document.getElementsByClassName('form-check-input');

              if (y.style.display === 'none') {
                x.style.display = 'none';
                y.style.display = 'block';
                  for(var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = false;
                  }
                  for(var i = 0; i < checks.length; i++) {
                    checks[i].disabled = false;
                  }
              } else {
                y.style.display = 'none';
                }
              }
            </script>
            
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
