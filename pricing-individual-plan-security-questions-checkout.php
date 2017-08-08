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
      <div class="row padding-top">
        <div class="col-md-3"></div>
        <div class="col-md-9">
          <h1><strong>Individual</strong> Plan Sign Up</h1>
          <p>Your plan membership includes full access to <a href="http://onlinepd.teq.com/" title="http://onlinepd.teq.com/" class="teq-blue-text"><u>onlinepd.teq.com</u></a>, course management, profile activity, certification tracks, and more! To gain immediate access please complete the form below.</p>
        </div>
      </div>

      <div class="row padding-top">
        <div class="col">
          <form action="" method="post" class="sign-up-form">
            <div class="form-group row has-danger">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>First Name:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control form-control-danger" type="text">
                <div class="form-control-feedback">Thats a terrible first name. Try another?</div>
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
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Country:</strong></label>
              <div class="col-md-2 col-sm-9">
                <select class="form-control">
                  <option value="">Mercia!</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>State:</strong></label>
              <div class="col-md-2 col-sm-9">
                <select class="form-control">
                  <option value="">Mercia!</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Zip:</strong></label>
              <div class="col-md-6 col-sm-9">
                <input class="form-control" type="text">
              </div>
            </div>
            <div class="form-group row padding-bottom has-danger">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Date of Birth:</strong></label>
              <div class="col-md-2 col-sm-4">
                <select class="form-control">
                  <option selected>January</option>
                </select>
              </div>
              <span class="lead hidden-sm-down"> / </span>
              <div class="col-md-2 col-sm-4">
                <select class="form-control">
                  <option selected>Year</option>
                </select>
              </div>
              <div class="form-control-feedback">Please select the year</div>
            </div>
            <div class="form-group row padding-top">
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
            <div class="form-group row padding-bottom">
              <label class="col-md-3 col-sm-3 col-form-label text-right"><a type="submit" class="btn btn-primary">Sign in</a></label>
              <div class="col-md-6 col-sm-9">
                <select class="form-control">
                  <option selected>Your title/role...</option>
                  <option>Parent</option>
                  <option>Educator</option>
                  <option>Administrator</option>
                </select>
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
              <label class="col-sm-3"></label>
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

      function showCheckout() {
        var v = document.getElementById('security-questions');
        var w = document.getElementById('secure-checkout');

        if (w.style.display === 'none') {
          v.style.display = 'none';
          w.style.display = 'block';
        } else {
          w.style.display = 'none';
          }
        }

      </script>

    </main>

  <?php include 'footer.php'; ?>
