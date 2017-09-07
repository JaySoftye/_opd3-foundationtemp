<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <section class="container-fluid under-header pricing-plans">
      <div class="container padding-top">

        <div class="row">
          <div class="col padding-top padding-bottom">
            <h1 class="text-center">Faculty. Staff. Administrator. Parents. </h1>
            <p class="text-center">No matter who you are, Teq Online Professional Development offers just the right solution for you.</p>
          </div>
        </div>

        <div class="row align-items-end justify-content-md-center padding-top">
          <article class="col-md-4">
            <div class="card">
              <div class="card-header basic">
                <h5 class="text-center white">Basic Plan</h5>
              </div>
              <div class="card-block text-center">
                <dl>
                  <dt><img src="assets/pricing-basic-plan.svg" width="310" alt="0.00" /></dt>
                  <dd><hr /></dd>
                  <dd>Absolutely <strong>FREE</strong></dd>
                  <dd>Access to OPD non-certification courses</dd>
                  <dd>Track personal progress</dd>
                </dl>
                <hr />
                <a href="#" class="btn basic-plan"><strong>Sign Up for Free</strong></a>
              </div>

            </div>
          </article>

          <article class="col-md-4 hidden">
            <div class="card">
              <div class="card-header individual">
                <h5 class="text-center white">Individual Plans</h5>
              </div>
              <div class="card-block text-center">
                <dl>
                  <dt><img src="assets/pricing-individual-plan.svg" width="310" alt="19.99 per month or 199.99 per year" /></dt>
                  <dd><hr /></dd>
                  <dd>1 individual license for Teq OPD</dd>
                  <dd>Unlimited access to all courses</dd>
                  <dd>Track personal progress</dd>
                  <dd>nOw Instructional Support</dd>
                  <dd>Earn professional development hours</dd>
                  <dd>Earn Badges and Certificates</dd>
                </dl>
                <hr />
                <a href="#" class="btn individual-plan"><strong>Sign Up Today</strong></a>
              </div>
            </div>
          </article>

          <article class="col-md-4">
            <div class="card">
              <div class="card-header school-district">
                <h5 class="text-center white">School and District Plans</h5>
              </div>
              <div class="card-block text-center">
                <dl>
                  <dt><img src="assets/pricing-school-district-plan.svg" width="310" alt="contact us for pricing" /></dt>
                  <dd><hr /></dd>
                  <dd>Licensing Plans</dd>
                  <dd>Manage Users</dd>
                  <dd>Manage Categories</dd>
                  <dd>Track User Progress</dd>
                  <dd>Usage Reports</dd>
                  <dd>Create Course Quizzes</dd>
                  <dd>Assign Courses and Playlists</dd>
                  <dd>nOw Instructional Support</dd>
                  <dd>Earn professional development hours</dd>
                  <dd>Earn Badges and Certificates</dd>
                  <dd><hr /></dd>
                  <dd><a href="#" class="btn gray-fill"><strong>Group Code Sign Up</strong></a></dd>
                </dl>
                <hr />
                <a href="#exampleModal" class="btn school-district-plan" data-toggle="modal"><strong>Contact Us for Pricing</strong></a>
              </div>
            </div>
          </article>
        </div>

      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header card-header school-district">
              <h4 class="modal-title white">School and District Pricing Plans</h4>
              <button class="white" type="button" data-dismiss="modal" aria-label="Close"> &times; </button>
            </div>
            <form action="" method="post" class="sign-up-form">
              <div class="modal-body">
                <p>For more information on <strong>School or District Group Pricing</strong>, fill out the form below and a Online PD Specialist will reach out to you directly or call us toll free at <strong class="teq-blue-text">877.455.9369</strong>.</p>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="phone" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="School or District">
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option selected>Please Select Your title/role...</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option selected>State</option>
                  </select>
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Additional Information"></textarea>
                </div>
                <div class="form-check">
                  <label>
                    <i><input type="checkbox" class="form-check-input">
                    I already have a OPD account</i>
                  </label>
                </div>
                <div class="form-group row padding-top">
                  <div class="col-6">
                    <button type="submit" class="btn ">Request Pricing</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </section>

  </main>

<?php include 'footer.php'; ?>
