
    <section class="container padding-top padding-bottom" id="security-questions">
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
