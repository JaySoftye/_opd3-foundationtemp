<?php include 'header.php'; ?>
<?php include 'now-chat-window.php'; ?>

  <main>

    <section class="container-fluid under-header howto-color-bg">
      <div class="container">
        <div class="row padding-top">
          <div class="col">
            <ul class="nav profile-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">How it works</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">FAQ's</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="container padding-bottom">
      <div class="row padding-top">
        <div class="col">
          <h2><strong>Common Questions</strong> when using the OPD Plaform</h2>
          <p>Don't find your answers below? Click on the <a id="now-button-text" class="now-text"><strong>nOw</strong></a> button for help.</p>
        </div>
      </div>

      <div class="row padding-top faq-list">
        <ul>
          <li class="faq">
            <a class="question">How do I receive my Certificate after viewing a course?</a>
            <div class="collapse" id="receivecertificate">
              <span class="answer">After watching a video course the "Take Certification Quiz" will become available. Complete the quiz and survey to receive your certificate for this course.</span>
            </div>
          </li>
          <li class="faq">
            <a class="question">How do I print my Certificates?</a>
            <div class="collapse" id="printcertificate">
              <span class="answer">Certificates can be found on the individual course page or in the "My Usage" part of you "My Profile". Click to Download the PDF certificate and Print as needed.</span>
            </div>
          </li>
          <li class="faq">
            <a class="question">How do I reset my Password?</a>
            <div class="collapse" id="passwordreset">
              <span class="answer">Use the "Forgot Password" option in the log in menu or email us at <a href="onlinepd@teq.com">onlinepd@teq.com</a></span>
            </div>
          </li>
          <li class="faq">
            <a class="question">How do I complete a Certification Track?</a>
            <div class="collapse" id="certificationtrack">
              <span class="answer">Certification tracks are multiple courses that are tracked together to receive a Teq Digital Teacher Certification in a variety of Topics. To complete the Certification Track you must watch all videos associated with the track, complete all quizzes with each video and submit associated assignments to each course that is part of the Certification Track.</span>
            </div>
          </li>
          <li class="faq">
            <a class="question">How do I upload an Assignment?</a>
            <div class="collapse" id="uploadassignment">
              <span class="answer">Courses with Assignments will have an assignment tab underneath the video. You can upload assignments by commenting and uploading files using the "Browse" and "Submit" buttons.</span>
            </div>
          </li>
          <li class="faq">
            <a class="question">How do I register for an Upcoming Course?</a>
            <div class="collapse" id="upcomingcourse">
              <span class="answer">Navigating to any upcoming course in the "Course Calendar"  will allow you to view the course description and register.</span>
            </div>
          </li>
          <li class="faq">
            <a class="question">Can I view a course after it is broadcasted?</a>
            <div class="collapse" id="courseboardcasted">
              <span class="answer">Can I view a course after it is broadcasted? Yes, all of our live broadcasts are archived and available in the "Course Library" 24-48 hours after their initial broadcast.</span>
            </div>
          </li>
          <li class="faq">
            <a class="question">When will my Assignment be graded?</a>
            <div class="collapse" id="assignmentgraded">
              <span class="answer">We review assignments on Wednesdays and Fridays every week.</span>
            </div>
          </li>
          <li class="faq">
            <a class="question">Where do I find courses recommended to me by my school?</a>
            <div class="collapse" id="coursesrecommended">
              <span class="answer">If a playlist has been created and shared by your School or Districts administrators you can find it in your "My PD Plan". <a href="https://onlinepd.teq.com/users/plan/recommended">https://onlinepd.teq.com/users/plan/recommended</a></span>
            </div>
          </li>
        </ul>
      </div>

    </section>

    <script>
    // CLICK EVENT FOR NOW WINDOW; STORE IN FUNCTION
    $( "a#now-button-text" ).click(function() {
      $( "#now-chat-window" ).animate({
        width: '770',
        height: '440'
      }, 100, function() {
        $(this).css('z-index', 10010)
      });
    });

    // TOGGLE DROPDOWN ICON
    $( "a.question" ).click(function() {
      $(this.parentNode).toggleClass('closecollapse');
    });

    // LOOP FOR COLLAPSE LINKS CAUSE I'M LAZY
    $("li.faq").each(function () {
      var faqId = $(this).find("div").attr('id')
      $(this).find("a").attr({ 'href' : '#' + faqId, 'aria-controls' : faqId, 'data-toggle' : 'collapse', 'aria-expanded' : 'false' });
    });
    </script>

  </main>

<?php include 'footer-certifications-bar.php'; ?>
