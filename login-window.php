<div class="modal fade login-window" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">


    <div class="modal-content" id="login-form">
      <div class="modal-body gray-bg">
        <section class="container padding">
          <form name="" method="" class="login-password-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email Login">
              <input type="text" class="form-control" placeholder="Enter Password">
            </div>
            <button type="submit" class="login-button">Login</button>
            <p class="text-center"><small><a href="#" onclick="showHide()">Forgot Password</a> | <a href="#">Register Group Code</a></small></p>
          </form>
          <h3 class="text-center"><strong>- or -</strong></h3>
          <button type="submit" class="google-login">Login with your Google Account</button>

        </section>
      </div>
      <div class="modal-footer">
        <section class="container padding">
          <p class="text-center">Don't have a Teq Online PD account yet?<br /><strong>Find a pricing plan that works for you.</strong></p>
          <div class="row">
            <a href="#" class="col text-center">
              <img src="assets/login-group-pricing-icon.svg" alt="" />
              <h4 class="pd-blue-text"><strong>Group Pricing</strong></h4>
              <small class="pd-blue-text">School and District Pricing Plans</small>
            </a>
            <a href="#" class="col text-center">
              <img src="assets/login-single-pricing-icon.svg" alt="" />
              <h4 class="green-text"><strong>Single User Pricing</strong></h4>
              <small class="green-text">Individual Monthly and Yearly Plans</small>
            </a>
            <a href="#" class="col text-center">
              <img src="assets/login-basic-pricing-icon.svg" alt="" />
              <h4 class="lavendar-text"><strong>Basic User Account</strong></h4>
              <small class="lavendar-text">Sign Up For a Basic User Account</small>
            </a>
          </div>
        </section>
      </div>
    </div>

    <div class="modal-content" id="password-reset-form" style="display: none;">
      <div class="modal-body gray-bg">
        <section class="container padding">
          <h3><strong>Forgot Your Password?</strong></h3>
          <p>Please enter the <strong>email address associated with your account</strong> and follow the instructions to reset your password. <small>Can't remember the email? <a href="#"><u>Contact us</u></a>.</small></p>
          <form name="" method="">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <button type="submit" class="login-button" onclick="showQues(); return false;">Enter</button>
          </form>
        </section>
      </div>
      <div class="modal-footer">
        <section class="container">
          <a href="#"><small class="blue-text">Not a member? <u>Click here</u></small></a>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </section>
      </div>
    </div>

    <div class="modal-content" id="security-ques-form" style="display: none;">
      <div class="modal-body gray-bg">
        <section class="container padding">
          <h3 class="padding-bottom"><strong>Please answer the following security questions to reset your password.</strong></h3>
          <form name="" method="">
            <p class="text-center">What color was your first car?</<p>
            <div class="form-group">
              <input type="text" class="form-control">
            </div>
            <p class="text-center">What was the street you grew up on?</<p>
            <div class="form-group">
              <input type="text" class="form-control">
            </div>
            <button type="submit" class="login-button">Submit Answers</button>
          </form>
        </section>
      </div>
      <div class="modal-footer">
        <section class="container">
          <a href="#"><small class="blue-text">Not a member? <u>Click here</u></small></a>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </section>
      </div>
    </div>

      <script>
      /**
      DELETE THIS
      ONLY USED TO SHOW HOW THE FORM WILL WORK ON THE FRONT END
      **/
        function showHide() {
          var x = document.getElementById('login-form');
          var y = document.getElementById('password-reset-form');

          if (y.style.display === 'none') {
            x.style.display = 'none';
            y.style.display = 'block';
          } else {
            y.style.display = 'none';
            }
          }

          function showQues() {
            var a = document.getElementById('security-ques-form');
            var b = document.getElementById('password-reset-form');

            if (a.style.display === 'none') {
              b.style.display = 'none';
              a.style.display = 'block';
            } else {
              a.style.display = 'none';
              }
            }
        </script>




  </div>
</div>
