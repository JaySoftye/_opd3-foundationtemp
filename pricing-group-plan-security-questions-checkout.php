<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <section class="container under-header">
      <div class="row" id="breadcrumbs">
        <div class="col">
          <small><span><a href="#">Home</a></span> > <span><a href="#">Categories</a></span> > Category Title </small>
        </div>
      </div>
    </section>

    <section class="container padding-top padding-bottom" id="individual-plan">
      <div class="row padding-top padding-bottom">
        <div class="col-md-3"></div>
        <div class="col-md-9">
          <h1><strong>Group, District or Institutional</strong> Plans</h1>
          <p>Your group plan membership includes full access to <a href="http://onlinepd.teq.com/" title="http://onlinepd.teq.com/" class="teq-blue-text"><u>onlinepd.teq.com</u></a>, course management, profile activity, certification tracks, and more! To gain immediate access please complete the form below. Please note a <strong>Group Code is required</strong> for all group, district or institutional plan sign ups. If you have not been supplied one please contact your administrator or <a href="#"><u>contact us</u></a>.</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <form action="" method="post" class="sign-up-form">
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>First Name:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Last Name:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Email Address:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="email">
              </div>
            </div>
            <div class="form-group row padding-bottom">
              <label class="ccol-md-3 col-sm-3 col-form-label text-right"><strong>Confirm Email Address:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="email">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Password:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="password">
              </div>
            </div>
            <div class="form-group row padding-bottom">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Confirm Password:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="password">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Title/Role:</strong></label>
              <div class="col-md-6 col-sm-9">
                <select class="form-control">
                  <option selected>...</option>
                  <option>Parent</option>
                  <option>Educator</option>
                  <option>Administrator</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>School/District:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="phone">
              </div>
            </div>
            <div class="form-group row padding-bottom">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>State:</strong></label>
              <div class="col-md-2 col-sm-4">
                <select class="form-control" id="state-select" onchange="showState()">
                  <option value="" selected></option>
                  <option value="">AR</option>
                  <option value="new-york">NY</option>
                  <option value="pennsylvania">PA</option>
                  <option value="">TX</option>
                </select>
              </div>
            </div>

            <div class="collapse" id="new-york-pd">
              <div class="form-group row">
                <label class="col-md-3"></label>
                <div class="col-md-6 col-sm-9 alert alert-info">
                  <h4>State Approved Certification Registration</h4>
                  <p><small>This is <strong>required for your New York State CTLE certification</strong>. For a full list of state PD requirements please <a href="#"><u>contact us</u></a>.</small></p>
                  <label><strong>Date of Birth (month/day):</strong></label>
                  <div class="row">
                    <div class="col">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse padding-bottom" id="pennsylvania-pd">
              <div class="form-group row">
                <label class="col-md-3"></label>
                <div class="col-md-6 col-sm-9 alert alert-info">
                  <h4>State Approved Certification Registration</h4>
                  <p><small>This is <strong>required for your Pennsylvania State Certification</strong>. For a full list of state PD requirements please <a href="#"><u>contact us</u></a>.</small></p>
                  <label><strong>Professional Personal ID (PPID):</strong></label>
                  <div class="row">
                    <div class="col">
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group row padding-top padding-bottom">
              <div class="col-md-3 align-self-center text-right"><strong>Register a Group Code:</strong></div>
              <div class="col-md-6 col-sm-9 align-self-center form-inline">
                <div id="group-view-code">
                  <input type="text" class="form-control" placeholder="Enter Group Code"> <small>If you do not have a group code contact your administrator.</small>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"></label>
              <div class="col-md-6 col-sm-9">
                <div class="form-check">
                  <label class="form-check-label no-padding">
                    <input class="form-check-input" type="checkbox">
                    I have read and agree to the
                  </label>
                  <span><a href="#"><strong><u>Terms</u></strong></a> and <a href="#"><strong><u>Policies</u></strong></a>.</span>
                </div>
              </div>
            </div>
            <div class="form-group row padding-top">
              <label class="col-sm-3"></label>
              <div class="col-sm-2">
                <button type="submit" class="btn" onclick="showQuestions(); return false;">Next</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      </div>
    </section>

    <section class="container padding-top padding-bottom" id="security-questions" style="display: none;">
      <div class="row padding-top">
        <div class="col-md-3"><img src="assets/pricing-security-icon.svg" class="hidden-sm-down" width="255" /></div>
        <div class="col-md-9">
          <h1>Security <strong>Questions</strong></h1>
          <p>In case of a lost password please select and answer two security questions from the options below. In case of lost or forgotten passwords, you will need these questions and answers to reset your password.</p>
        </div>
      </div>
      <div class="row padding-top">
        <div class="col">
          <form action="" method="post" class="sign-up-form">
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Security Question 1:</strong></label>
              <div class="col-md-6 col-sm-9">
                <select class="form-control">
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="form-group row padding-bottom">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Security Question Answer 1:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="password">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Security Question 2:</strong></label>
              <div class="col-md-6 col-sm-9">
                <select class="form-control">
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="form-group row padding-bottom">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Security Question Answer 2:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="password">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Security Question 3:</strong></label>
              <div class="col-md-6 col-sm-9">
                <select class="form-control">
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="form-group row padding-bottom">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Security Question Answer 3:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="password">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Security Question 4:</strong></label>
              <div class="col-md-6 col-sm-9">
                <select class="form-control">
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Security Question Answer 4:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="password">
              </div>
            </div>
            <div class="form-group row padding-top">
              <label class="col-sm-3"></label>
              <div class="col-sm-2">
                <button type="submit" class="btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      </div>
    </section>

    <script>
    /**
    DELETE THIS
    ONLY USED TO SHOW HOW THE FORM WILL WORK ON THE FRONT END
    **/
      function showState() {
        var e = document.getElementById('state-select');
        var f = document.getElementById('new-york-pd');
        var g = document.getElementById('pennsylvania-pd');

        if (e.value === 'new-york') {
          f.classList.add("show");
          g.classList.remove("show");
        } else if (e.value === 'pennsylvania') {
          g.classList.add("show");
          f.classList.remove("show");
        } else {
          f.classList.remove("show");
          g.classList.remove("show");
        }
      }

      function showQuestions() {
        var w = document.getElementById('individual-plan');
        var x = document.getElementById('security-questions');

        if (x.style.display === 'none') {
          w.style.display = 'none';
          x.style.display = 'block';
        } else {
          x.style.display = 'none';
          }
        }

      </script>

    </main>

  <?php include 'footer.php'; ?>
