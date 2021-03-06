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

    <section class="container padding-top padding-bottom" id="basic-plan">
      <div class="row padding-top">
        <div class="col-md-3"></div>
        <div class="col-md-9">
          <h1><strong>Basic</strong> Plan</h1>
          <p>Your basic membership includes access to select content on <a href="http://onlinepd.teq.com/" title="http://onlinepd.teq.com/" class="teq-blue-text"><u>onlinepd.teq.com</u></a> and access to basic use vides at <a href="http://onlinepd.teq.com/index/getting-started" title="http://onlinepd.teq.com/index/getting-started" class="teq-blue-text"><u>Getting Started</u></a>. To gain immediate access please complete the form below.</p>
        </div>
      </div>

      <div class="row padding-top">
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
            <div class="form-group row">
              <label class="ccol-md-3 col-sm-3 col-form-label text-right"><strong>Confirm Email Address:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="email">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Contact Number:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="phone">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>School/District:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="phone">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Zip:</strong></label>
              <div class="col-md-2 col-sm-4">
                <input class="form-control" type="text">
              </div>
            </div>
            <div class="form-group row align-items-center">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>State:</strong></label>
              <div class="col-md-1 col-sm-4">
                <select class="form-control" id="state-select" onchange="showState()">
                  <option value="" selected></option>
                  <option value="">AR</option>
                  <option value="new-york">NY</option>
                  <option value="pennsylvania">PA</option>
                  <option value="">TX</option>
                </select>
              </div>
              <small><strong>* Some areas may require additional info for State Approved Certification</strong></small>
            </div>
            <div class="form-group row padding-top">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Password:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="password">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Confirm Password:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="password">
              </div>
            </div>
            <div class="form-group row padding-bottom">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>I am a:</strong></label>
              <div class="col-md-2 col-sm-4">
                <select class="form-control">
                  <option selected>Your title/role...</option>
                  <option>Parent</option>
                  <option>Educator</option>
                  <option>Administrator</option>
                </select>
              </div>
              <span class="lead hidden-sm-down"> - </span>
              <div class="col-md-4 col-sm-5">
                <select class="form-control">
                  <option selected>Reason for using this trial...</option>
                  <option>Using this trial for Personal use</option>
                  <option>Using this trial for School, district, or campus evaluation</option>
                  <option>Using this trial for Other</option>
                </select>
              </div>
            </div>
            <div class="collapse padding-bottom" id="new-york-pd">
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
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"></label>
              <div class="col-md-6 col-sm-9 no-padding">
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
                <button type="submit" class="btn" onclick="showNextStep(); return false;">Next</button>
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
            <div class="form-group row padding-bottom">
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

      function showNextStep() {
        var c = document.getElementById('basic-plan');
        var d = document.getElementById('security-questions');

        if (d.style.display === 'none') {
          c.style.display = 'none';
          d.style.display = 'block';
        } else {
          d.style.display = 'none';
          }
        }

      </script>



  </main>

<?php include 'footer.php'; ?>
