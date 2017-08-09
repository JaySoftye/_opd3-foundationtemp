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
          <h1><strong>Individual</strong> Plan Sign Up</h1>
          <p>Your plan membership includes full access to <a href="http://onlinepd.teq.com/" title="http://onlinepd.teq.com/" class="teq-blue-text"><u>onlinepd.teq.com</u></a>, course management, profile activity, certification tracks, and more! To gain immediate access please complete the form below.</p>
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
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>State:</strong></label>
              <div class="col-md-3 col-sm-6">
                <select class="form-control" id="state-select" onchange="showState()">
                  <option value="" selected></option>
                  <option value="">Arkansas</option>
                  <option value="new-york">New York</option>
                  <option value="pennsylvania">Pennsylvania</option>
                  <option value="">Texas</option>
                </select>
              </div>
            </div>
            <div class="collapse" id="new-york-pd">
              <div class="form-group row">
                <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Date of Birth (mm/yy):</strong></label>
                <div class="col-md-1 col-sm-4">
                  <select class="form-control">
                    <option selected>01</option>
                  </select>
                </div>
                <span class="lead hidden-sm-down"> / </span>
                <div class="col-md-1 col-sm-4">
                  <select class="form-control">
                    <option selected>Year</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="collapse" id="pennsylvania-pd">
              <div class="form-group row">
                <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Professional Personal ID (PPID):</strong></label>
                <div class="col-md-3 col-sm-3">
                  <input class="form-control" type="text">
                </div>
              </div>
            </div>

            <div class="form-group row padding-top padding-bottom">
              <div class="col-md-3 align-self-center text-right"><strong>Have a <u>Group Code</u></strong>?</div>
              <div class="col-md-6 align-self-center form-inline">
                <a class="mx-sm-1 text-muted" data-toggle="collapse" href="#group-view-code" aria-expanded="false" aria-controls="group-view-code">+ Register Here</a>
                <div class="collapse" id="group-view-code">
                  <input type="text" class="form-control" placeholder="Enter Group Code">
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
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Security Question Answer 2:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="password">
              </div>
            </div>
            <div class="form-group row padding-top">
              <label class="col-sm-3"></label>
              <div class="col-sm-2">
                <button type="submit" class="btn" onclick="showCheckout(); return false;">Next</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      </div>
    </section>

    <section class="container padding-top padding-bottom" id="secure-checkout" style="display:none;">
      <div class="row padding-top">
        <div class="col-md-3"><img src="assets/pricing-checkout-icon.svg" class="hidden-sm-down" width="255" /></div>
        <div class="col-md-9">
          <h1><strong>Secure</strong> Checkout</h1>
        </div>
      </div>
      <div class="row padding-top">
        <div class="col">
          <form action="" method="post" class="sign-up-form">
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Select a plan:</strong></label>
              <div class="col-md-4 col-sm-9">
                <select class="form-control" id="plan-option" onchange="showPrice()">
                  <option selected>choose a plan...</option>
                  <option value="monthly">Monthly</option>
                  <option value="yearly">Yearly</option>
                </select>
              </div>
            </div>

            <div class="form-group row" >
              <label class="ol-md-3 col-sm-3 col-form-label text-right"><strong>Total Pricing:</strong></label>
              <div class="col-md-4 col-sm-9">
                <img src="assets/pricing-individual-plan-monthly.svg" width="350" alt="19.99 per month" id="monthly-price" style="display:none;" />
                <img src="assets/pricing-individual-plan-yearly.svg" width="350" alt="199.99 per year" id="yearly-price" style="display:none;" />
                <hr />
              </div>
            </div>

            <div class="form-group row padding-bottom">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Payment Method:</strong></label>
              <div class="col-md-4 col-sm-9">
                <label class="form-check-label col-form-label">
                  <input type="radio" class="form-check-input" name="" value="">
                  <span><img src="assets/credit-cards-icon.svg" alt="Credit Card" /></span>
                </label>
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="" value="">
                  <span><img src="assets/paypal-card-icon.svg" alt="Credit Card" /></span>
                </label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Card Number:</strong></label>
              <div class="col-md-4 col-sm-9">
                <input class="form-control" type="password">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Car Holder Name:</strong></label>
              <div class="col-md-4 col-sm-9">
                <input class="form-control" type="password">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Expiration Date (MM/YY):</strong></label>
              <div class="col-md-1 col-sm-4">
                <select class="form-control">
                  <option selected>01</option>
                </select>
              </div>
              <span class="lead hidden-sm-down"> / </span>
              <div class="col-md-2 col-sm-4">
                <select class="form-control">
                  <option selected>2017</option>
                </select>
              </div>
            </div>
            <div class="form-group row has-danger">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Security Code:</strong></label>
              <div class="col-md-3 col-sm-9">
                <input class="form-control form-control-danger" type="password">
              </div>
              <div class="form-control-feedback">You forgot to enter a CSV Code.</div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Billing Zip:</strong></label>
              <div class="col-md-3 col-sm-9">
                <input class="form-control" type="password">
              </div>
            </div>
            <div class="form-group row padding-top">
              <label class="col-md-3 col-sm-3 col-form-label text-right"></label>
              <div class="col-md-6 col-sm-9">
                <div class="form-check">
                  <label class="form-check-label no-padding">
                    <input class="form-check-input" type="checkbox"> Enable automatic renewal
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3"></label>
              <div class="col-sm-2">
                <button type="submit" class="btn">Submit</button>
              </div>
            </div>
          </form>
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

      function showPrice() {
        var s = document.getElementById('plan-option');
        var t = document.getElementById('monthly-price');
        var u = document.getElementById('yearly-price');

        if (s.value === 'monthly') {
          t.style.display = 'block';
          u.style.display = 'none';
        } else if (s.value === 'yearly') {
          t.style.display = 'none';
          u.style.display = 'block';
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

      function showCheckout() {
        var y = document.getElementById('security-questions');
        var z = document.getElementById('secure-checkout');;

        if (z.style.display === 'none') {
          y.style.display = 'none';
          z.style.display = 'block';
        } else {
          z.style.display = 'none';
          }
        }

      </script>

    </main>

  <?php include 'footer.php'; ?>
