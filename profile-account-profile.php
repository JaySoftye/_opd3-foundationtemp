<?php include 'header-not-logged-in.php'; ?>
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
            <div class="padding-bottom hidden"><a href="#" id="profile-image"><span>UN</span></a></div>
            <div class="profile-photo" style="background-image: url(http://opd-dev.teq.com/images/person_placeholder.jpg);"></div>

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
                <select class="form-control" id="state-select" onchange="showState()" disabled>
                  <option value="">AR</option>
                  <option value="new-york" selected>NY</option>
                  <option value="pennsylvania">PA</option>
                  <option value="">TX</option>
                </select>
              </div>
              <div class="form-group" id="test">
                <label>Zip:</label>
                <input type="number" class="form-control" placeholder="11566" disabled>
              </div>

              <div class="collapse show" id="new-york-pd">
                <div class="form-group">
                  <div class="col alert alert-info">
                    <h4>State Approved Certification Registration</h4>
                    <p><small>This is <strong>required for your New York State CTLE certification</strong>. For a full list of state PD requirements please <a href="#"><u>contact us</u></a>.</small></p>
                    <label>(month/day)</label>
                    <div class="row">
                      <div class="col">
                        <input class="form-control" type="text" disabled>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="collapse padding-bottom" id="pennsylvania-pd">
                <div class="form-group">
                  <div class="col alert alert-info">
                    <h4>State Approved Certification Registration</h4>
                    <p><small>This is <strong>required for your Pennsylvania State Certification</strong>. For a full list of state PD requirements please <a href="#"><u>contact us</u></a>.</small></p>
                    <label>Professional Personal ID (PPID):</label>
                    <div class="row">
                      <div class="col">
                        <input class="form-control" type="text" placeholder="enter your PPID" disabled>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <fieldset class="form-group">
                <h6 class="padding-top"><strong>Configure your email notifications below</strong></h6>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" value="" checked disabled>
                      Email me when I register for a course
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" value="" checked disabled>
                      Email me a reminder the day before a course
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" value="" checked disabled>
                      Email me a reminder the week before a course
                    </label>
                  </div>
                </fieldset>
              </form>

              <div id="edit-info">
                <button id="edit-info-button" class="btn btn-simple float-right" onclick="showHide()">Edit Info</button>
              </div>

              <div id="edit-info-submit" style="display: none;">
                <button class="btn gray">Submit Profile Changes</button>
              </div>

              <script>
              /**
              DELETE THIS
              ONLY USED TO SHOW HOW THE FORM WILL WORK ON THE FRONT END
              **/
                function showState() {
                  var x = document.getElementById('state-select');
                  var y = document.getElementById('new-york-pd');
                  var z = document.getElementById('pennsylvania-pd');

                  if (x.value === 'new-york') {
                    y.classList.add("show");
                    z.classList.remove("show");
                  } else if (x.value === 'pennsylvania') {
                    z.classList.add("show");
                    y.classList.remove("show");
                  } else {
                    y.classList.remove("show");
                    z.classList.remove("show");
                  }
                }

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
                      for(var i = 0; i < select.length; i++) {
                        select[i].disabled = false;
                      }
                  } else {
                    y.style.display = 'none';
                    }
                  }
                </script>


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
                    <a href="#account-renewal-form" data-toggle="modal" class="btn blue-border" href="#">Renew Account</a> <a href="#requeset-full-access-form" data-toggle="modal" class="btn teq-blue-text" href="#">Request Full Access</a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <div class="modal fade" id="account-renewal-form" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header card-header school-district">
                  <h4 class="modal-title white">Renew Your Account</h4>
                  <button class="white" type="button" data-dismiss="modal" aria-label="Close"> &times; </button>
                </div>
                <div class="modal-body">
                  <p>To <strong>renew your OPD Account</strong>, fill out the form below and a Online PD Specialist will reach out to you directly or call us toll free at <strong class="teq-blue-text">877.455.9369</strong>.</p>
                  <section class="hubspot-form-fields">
                    <!--[if lte IE 8]>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                    <![endif]-->
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                    <script>
                    hbspt.forms.create({
                      portalId: '182596',
                      formId: '3b84439e-9301-4aff-a92c-0b848040d055'
                    });
                    </script>
                  </section>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="requeset-full-access-form" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header card-header school-district">
                  <h4 class="modal-title white">Request Full Access</h4>
                  <button class="white" type="button" data-dismiss="modal" aria-label="Close"> &times; </button>
                </div>
                <div class="modal-body">
                  <p>To <strong>request full access to Online PD</strong>, fill out the form below and a Online PD Specialist will reach out to you directly or call us toll free at <strong class="teq-blue-text">877.455.9369</strong>.</p>
                  <section class="hubspot-form-fields">
                    <!--[if lte IE 8]>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                    <![endif]-->
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                    <script>
                    hbspt.forms.create({
                      portalId: '182596',
                      formId: 'c3b8cfc0-fd6e-4b69-9f00-8ececf18bba4'
                    });
                    </script>
                  </section>
                </div>
              </div>
            </div>
          </div>

        </section>

  </main>

<?php include 'footer.php'; ?>
