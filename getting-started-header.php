<div class="category-search-box-wrapper getting-started-header">

<section class="container-fluid">
  <div class="container">

    <div class="row padding-top">
      <div class="col">
        <h1 class="getting-started-text">Getting Started</h1>
      </div>
    </div>

    <div class="row padding-top">

      <div class="col-md-2 padding-bottom">
        <h6 class="white"><strong>First Name Last Name</strong></h6>
        <p>UserEmail@useremail.com</p>
        <p>User Title</p>
        <p>User School or District</p>
        <p>User State</p>
        <p>User Zip</p>
      </div>
      <div class="col-md-5 padding-bottom">
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
      <div class="col-md-5 padding-bottom">
        <h6 class="white"><strong>Your Membership Includes Full Access to Teq Online PD</strong></h6>
        <ul>
          <li class="white">Hundreds of <a href="http://onlinepd.teq.com/courses" class="teq-blue-text"><u>courses</u></a> on Classroom Technology Integration</li>
          <li class="white">On Demand Professional Development with <a href="http://now.teq.com/" class="teq-blue-text"><u>nOw Instructional Support</u></a></li>
          <li class="white"><a href="http://www.teq.com/state-approved" class="teq-blue-text"><u>State Approved</u></a> Certification Courses</li>
        </ul>
        <p><a href="http://www.teq.com/state-approved"><img src="assets/teq-state-approved-map_link.svg" /></a></p>
      </div>

    </div>

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

  </div>
</section>

<section class="container-fluid getting-started-bar">
  <div class="container padding-sm">
    <div class="row">

      <div class="col-md-7">
        <h5 class="getting-started-text">Select an <span class="white">area of technology</span> from the drop down list to view the free instructional videos available:</h5>
      </div>
      <div class="col-md-5">
        <select name="getting-started-categories" id="getting-started-categories">

        </select>
      </div>

      <script>
      /** Select menu accordion
      DELETE THIS IF USING A DIFFERENT FUNCTION
      **/
      var categories = [{'name' : 'SMART', 'id': 'getting-started-category-videos-1'} , {'name' : 'SMART Learning Suite', 'id' : 'getting-started-category-videos-4'} , {'name' : 'Google', 'id' : 'getting-started-category-videos-2'} , {'name' : 'Labdisc', 'id' : 'getting-started-category-videos-3'} , {'name' : 'Ultimaker', 'id' : 'getting-started-category-videos-5'} , {'name' : 'Professional Development', 'id' : 'getting-started-category-videos-6'} , {'name' : 'Audio Enhancement', 'id' : 'getting-started-category-videos-7'}]

      var option = '';

      categories.forEach(function(e) {
        option += '<option value="'+ e.id + '">' + e.name + '</option>';
      });
        $('select#getting-started-categories').append(option);

      $('select#getting-started-categories').change(function() {
        $('select#getting-started-categories option:selected').each(function() {

          var optionValue = $('#getting-started-categories').val();
          $('html, body').animate({ scrollTop: $('#getting-started-categories').offset().top }, 800);
          $('div.getting-started-category-videos-container').removeClass('active').addClass('hidden');
          $('div#'+optionValue).removeClass('hidden').addClass('active');

        });
      });

  </script>

    </div>
  </div>
</section>

</div>
