<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <section class="container-fluid under-header padding-top padding-bottom">

      <section class="container padding">
        <div class="row">
          <div class="col">
            <img src="assets/weclome_to_the_new_opd.svg" alt="welcome to the new OPD" />
            <p>We've improved quite a few things, please take a moment to update a few new items on your account profile.</p>
          </div>
        </div>
      </section>
      <form action="" method="post" class="sign-up-form">
      <section class="container">
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

        <div class="form-group row">
          <label class="col-md-3 col-sm-3 col-form-label text-right"><strong>Zip:</strong></label>
          <div class="col-md-2 col-sm-4">
            <input class="form-control" type="text">
          </div>
        </div>
        <div class="form-group row align-items-center">
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
          <small><strong>* Some areas may require additional info for State Approved Certification</strong></small>
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
              <div class="form-group row padding-top">
                <label class="col-sm-3"></label>
                <div class="col-sm-2">
                  <button type="submit" class="btn" onclick="showNextStep(); return false;">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <form action="" method="post" class="sign-up-form">

    </section>

  </main>


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

    </script>

<?php include 'footer.php'; ?>
