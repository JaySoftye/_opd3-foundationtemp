<?php include 'header.php'; ?>

  <main>

    <?php include 'getting-started-header.php'; ?>



    <section class="container-fluid light-gray-bg">
      <div class="container">
      <div id="getting-started-category-videos">

        <div id="getting-started-category-videos-1" class="getting-started-category-videos-container active">
          <div class="row row-eq-height padding-top padding-bottom">
            <div class="col-lg-8">
              <div id="player">
                <video>
                  <source type="video/mp4" src="https://l3video.lwcdn.com/v-970221bd-eb7b-4a87-8626-1d7e1f8eda8a.mp4">
                </video>
              </div>
            </div>
            <div class="col-lg-4 course-details">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span id="playerTime">37min</span>
                </li>
                <li class="nav-item"></li>
              </ul>
              <article>
                <h5 id="playerTitle">SMART BOARD BASICS: 6000 SERIES</h5>
                <p id="playerDesc">The SMART Board 6000 series interactive displays is considered a new era of classroom collaboration. This product gives teachers and students a premium touch experience, superior collaborative features, and 4K Ultra HD resolution. Come join is to learn how the 6000 series provides reliability, simplicity, and intuition to help you teach, collaborate and share.</p>
              </article>
              <div class="row log-in-access active padding-bottom">
                <div class="col-lg-8 course-details">
                  <a class="btn quiz-btn active" data-toggle="modal" data-target=".course-quiz"><img src="assets/take-quiz-icon.svg" width="179" height="36" alt="Take Certificationi Quiz" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-eq-height padding-top padding-bottom category-events">
            <article class="col-md-4">
              <div class="card" data-id="1">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>37min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb">
                    <div class="videoPlayer">
                      <video><source type="video/mp4" src="https://l3video.lwcdn.com/v-970221bd-eb7b-4a87-8626-1d7e1f8eda8a.mp4"></video>
                    </div>
                    <div class="card-title">SMART BOARD BASICS: 6000 SERIES</div>
                    <div class="card-text">The SMART Board 6000 series interactive displays is considered a new era of classroom collaboration. This product gives teachers and students a premium touch experience, superior collaborative...</div>
                  </div>
                </div>
              </div>
            </article>
            <script>

    $("div.video-thumb").click(function(){
      var videoContent = $(this);

      $("div#player").replaceWith( videoContent($('div').first()) );
      $('div.videoPlayer').flowplayer();

    });

            </script>
            <article class="col-md-4">
              <div class="card" data-id="15">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>26min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3video.lwcdn.com/i/v-i-36145672-41e5-4a48-b6a0-16b2c0da94d1-1124x70.jpg"></div>
                  <h5 class="card-title">SMART Board Basics 4000 Series</h5>
                  <p class="card-text">The SMART Board 4000 series interactive displays is considered a new era of classroom collaboration. This product gives teachers and students a superior touch experience, collaborative features, and...</p>
                </div>
              </div>
            </article>
            <article class="col-md-4">
              <div class="card" data-id="4">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>02min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3video.lwcdn.com/i/v-i-cf9963e2-f532-4ef8-8e58-3a9fc90f34d3-1124x70.jpg"></div>
                  <h5 class="card-title">Resolving Touch Issues on Google Chrome Web Browser and 6000 series</h5>
                  <p class="card-text">This video will run through trouble shooting when using touch and Google Chrome Web Browser.</p>
                </div>
              </div>
            </article>
            <article class="col-md-4">
              <div class="card" data-id="5">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>03min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3video.lwcdn.com/i/v-i-7997c19a-de6b-4efc-a4e1-99fde6ef17fd-4124x70.jpg"></div>
                  <h5 class="card-title">Focusing Attention using SMART ink</h5>
                  <p class="card-text">This video will show using SMART ink tools to focus student attention on the SMRT 6000 series IFP.</p>
                </div>
              </div>
            </article>
            <article class="col-md-4">
              <div class="card" data-id="16">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>38min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3video.lwcdn.com/i/v-i-87574164-da3e-4f9d-b3cf-aed53bbc86b0-4124x70.jpg"></div>
                  <h5 class="card-title">SMART iq Module</h5>
                  <p class="card-text">The SMART kapp iQ is an add on module to the SMART IFP 6000 series. This add on will free the teacher's computer from the SMART IFP and allows student to interact with a variety of apps built right...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
        <div id="getting-started-category-videos-4" class="getting-started-category-videos-container hidden">
          <div class="row row-eq-height padding-top padding-bottom">
            <div class="col-lg-8">
              <div class="player">
                <video>
                  <source type="video/mp4" src="https://l3561eb26.lwcdn.com/v-66a4b52f-33d9-4d24-989a-6e4e5abdaec1.mp4">
                </video>
              </div>
            </div>
            <div class="col-lg-4 course-details">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>42min</span>
                </li>
                <li class="nav-item"></li>
              </ul>
              <article>
                <h6>What's New in SMART Learning Suite 16.2</h6>
                <p>The latest version of the SMART Learning Suite version 16.2, has been released and Teq’s PD team is here to share all of the latest features with you. Updates include: New interfaces and content management tools in SMART lab Changes to bookmarks Changes to handouts Google Classroom integration in SMART amp The addition of a robust math equation editor within SMART Notebook Join our professional development specialists to learn more about SMART’s latest creations and how all of the changes can benefit your classroom.</p>
              </article>
              <div class="row log-in-access active padding-bottom">
                <div class="col-lg-8 course-details">
                  <a class="btn quiz-btn active" data-toggle="modal" data-target=".course-quiz"><img src="assets/take-quiz-icon.svg" width="179" height="36" alt="Take Certificationi Quiz" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-eq-height padding-top padding-bottom category-events">
            <article class="col-md-4">
              <div class="card" data-id="10">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>42min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-66a4b52f-33d9-4d24-989a-6e4e5abdaec1-1124x70.jpg"></div>
                  <h5 class="card-title">What's New in SMART Learning Suite 16.2</h5>
                  <p class="card-text">The latest version of the SMART Learning Suite version 16.2, has been released and Teq’s PD team is here to share all of the latest features with you. Updates include: New interfaces and content...</p>
                </div>
              </div>
            </article>
            <article class="col-md-4">
              <div class="card" data-id="9">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>29min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-888e3d05-4157-4e49-add4-bf5c4d9cabec-3124x70.jpg"></div>
                  <h5 class="card-title">Administering SMART amp</h5>
                  <p class="card-text">Did you just obtain SMART amp at your school, and you want to know how to get started? Learn about how to use SMART amp from the very beginning, and discover how to successfully introduce it into your...</p>
                </div>
              </div>
            </article>
            <article class="col-md-4">
              <div class="card" data-id="11">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>47min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-f40ab5b0-19b9-454f-a550-5ce246a7a56f-1124x70.jpg"></div>
                  <h5 class="card-title">Benefits of a SMART Learning Suite Subscription Session 1: Successfully Integrate Student Devices with SMART Notebook &amp; the SMART Learning Suite</h5>
                  <p class="card-text">Discover how to successfully integrate SMART Learning Suite features and your students’ devices to create effective learning experiences. In this introductory session, our PD team will begin to...</p>
                </div>
              </div>
            </article>
            <article class="col-md-4">
              <div class="card" data-id="12">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>45min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-ccc07e12-b2cd-4658-8cf8-d9f0dcb21646-5124x70.jpg"></div>
                  <h5 class="card-title">Benefits of a SMART Learning Suite Subscription Session 2: Game-Based Learning</h5>
                  <p class="card-text">Learn how to build game-based activities using SMART lab, a major component of SMART Notebook 16.1 software. Teachers are able to create effective learning activities with speed and ease!  By...</p>
                </div>
              </div>
            </article>
            <article class="col-md-4">
              <div class="card" data-id="13">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>40min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-3718ab28-35ac-41cc-bab3-abb6eb4c55ec-1124x70.jpg"></div>
                  <h5 class="card-title">Benefits of a SMART Learning Suite Subscription Session 3: Insight Into Learning</h5>
                  <p class="card-text">Assessments help teachers gauge students’ level of understanding, and the data gathered informs your instruction. Join us for this exciting webinar in which the PD team will take a close look at SMART...</p>
                </div>
              </div>
            </article>
            <article class="col-md-4">
              <div class="card" data-id="14">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>35min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-97bfedd5-9274-45ec-895b-b996d12f2f87-5124x70.jpg"></div>
                  <h5 class="card-title">Benefits of a SMART Learning Suite Subscription Session 4: Save Teachers' Time</h5>
                  <p class="card-text">In the final session for this sequence, the PD team will discuss ways in which the SMART Learning Suite allows teachers to manage their time more efficiently. Between prepping for classes and grading...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
        <div id="getting-started-category-videos-2" class="getting-started-category-videos-container hidden">
          <div class="row row-eq-height padding-top padding-bottom">
            <div class="col-lg-8">
              <div class="player">
                <video>
                  <source type="video/mp4" src="https://l3561eb26.lwcdn.com/v-ecd8a946-ebc7-4d57-bbab-d3326ca3df19.mp4">
                </video>
              </div>
            </div>
            <div class="col-lg-4 course-details">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>45min</span>
                </li>
                <li class="nav-item"></li>
              </ul>
              <article>
                <h6>Preparing Your Google Drive for a New School Year</h6>
                <p>Teacher-created content, student assignments, lessons for presentation -- there are a lot of materials that may be crowding up your Google Drive. Join us as we discuss some best practices and techniques to organize content you may be storing in your Drive. We will cover practices of uploading and converting content, creating nested folders, and simple workflow techniques which will help you get the year started on the right foot using your cloud-based storage in Drive.</p>
              </article>
              <div class="row log-in-access active padding-bottom">
                <div class="col-lg-8 course-details">
                  <a class="btn quiz-btn active" data-toggle="modal" data-target=".course-quiz"><img src="assets/take-quiz-icon.svg" width="179" height="36" alt="Take Certificationi Quiz" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-eq-height padding-top padding-bottom category-events">
            <article class="col-md-4">
              <div class="card" data-id="7">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>45min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-ecd8a946-ebc7-4d57-bbab-d3326ca3df19-3124x70.jpg"></div>
                  <h5 class="card-title">Preparing Your Google Drive for a New School Year</h5>
                  <p class="card-text">Teacher-created content, student assignments, lessons for presentation -- there are a lot of materials that may be crowding up your Google Drive. Join us as we discuss some best practices and...</p>
                </div>
              </div>
            </article>
            <article class="col-md-4">
              <div class="card" data-id="2">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>05min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3video.lwcdn.com/i/v-i-90dc2974-d56d-4b39-843b-9f5241836ed7-1124x70.jpg"></div>
                  <h5 class="card-title">Getting Started with Your New SMART Board</h5>
                  <p class="card-text">This short video will run through the setting up and plugging in of your new SMART 6000 series IFP</p>
                </div>
              </div>
            </article>
            <article class="col-md-4">
              <div class="card" data-id="8">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>39min</span></li>
                    <li class="nav-item category-sessions-details"></li><li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-2a2c7f5d-3659-4e18-90c0-0b47eaef914f-1124x70.jpg"></div>
                  <h5 class="card-title">Age of Exploration with Google Tours</h5>
                  <p class="card-text">Join us for another session of Teq Online PD as we use Google Earth Tours to recreate the routes of three famous explorations in History: Columbus’s journey to the new world, Lewis and Clark's quest...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
        <div id="getting-started-category-videos-3" class="getting-started-category-videos-container hidden">
          <div class="row row-eq-height padding-top padding-bottom">
            <div class="col-lg-8">
              <div class="player">
                <video>
                  <source type="video/mp4" src="https://l3561eb26.lwcdn.com/v-1e6c742b-4ec1-41c1-b784-0cd74f7869c2.mp4">
                </video>
              </div>
            </div>
            <div class="col-lg-4 course-details">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>26min</span>
                </li>
                <li class="nav-item"></li>
              </ul>
              <article>
                <h6>Labdisc: Heart Rate</h6>
                <p>In this course we'll look at just one of the many applications of a Labdisc in the Biology classroom. You will need a BioChem Labdisc to perform this activity. Our Curriculum Specialists will show you how to conduct an experiment to measure heart rate using the heart rate sensor provided with your Labdisc. They will then show you how to analyze and manipulate the data within the Labdisc software.</p>
              </article>
              <div class="row log-in-access active padding-bottom">
                <div class="col-lg-8 course-details">
                  <a class="btn quiz-btn active" data-toggle="modal" data-target=".course-quiz"><img src="assets/take-quiz-icon.svg" width="179" height="36" alt="Take Certificationi Quiz" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-eq-height padding-top padding-bottom category-events">
            <article class="col-md-4">
              <div class="card" data-id="6">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>26min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-1e6c742b-4ec1-41c1-b784-0cd74f7869c2-1124x70.jpg"></div>
                  <h5 class="card-title">Labdisc: Heart Rate</h5>
                  <p class="card-text">In this course we'll look at just one of the many applications of a Labdisc in the Biology classroom. You will need a BioChem Labdisc to perform this activity. Our Curriculum Specialists will show you...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
        <div id="getting-started-category-videos-5" class="getting-started-category-videos-container hidden">
          <div class="row row-eq-height padding-top padding-bottom">
            <div class="col-lg-8">
              <div class="player">
                <video>
                  <source type="video/mp4" src="https://l3561eb26.lwcdn.com/v-a9a52adb-c652-4cdf-adcc-7fe5bd189e40.mp4">
                </video>
              </div>
            </div>
            <div class="col-lg-4 course-details">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>45min</span>
                </li>
                <li class="nav-item"></li>
              </ul>
              <article>
                <h6>Ultimaker: Optimizing Your 3D Print</h6>
                <p>The Cura 2.4 Software by Ultimaker has over 200 settings to adjust your 3D print to fit your needs. Join us as we show you where to download the software and some specific details of how to optimize your 3D print like print setup, materials, and scaling.</p>
              </article>
              <div class="row log-in-access active padding-bottom">
                <div class="col-lg-8 course-details">
                  <a class="btn quiz-btn active" data-toggle="modal" data-target=".course-quiz"><img src="assets/take-quiz-icon.svg" width="179" height="36" alt="Take Certificationi Quiz" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-eq-height padding-top padding-bottom category-events">
            <article class="col-md-4">
              <div class="card" data-id="17">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>45min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-a9a52adb-c652-4cdf-adcc-7fe5bd189e40-1124x70.jpg"></div>
                  <h5 class="card-title">Ultimaker: Optimizing Your 3D Print</h5>
                  <p class="card-text">The Cura 2.4 Software by Ultimaker has over 200 settings to adjust your 3D print to fit your needs. Join us as we show you where to download the software and some specific details of how to optimize...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
        <div id="getting-started-category-videos-6" class="getting-started-category-videos-container hidden">
          <div class="row row-eq-height padding-top padding-bottom">
            <div class="col-lg-8">
              <div class="player">
                <video poster="http://l3561eb26.lwcdn.com/i/v-i-a4c40690-16d6-467c-966c-f79daaaae9cc-0.jpg">
                  <source type="video/mp4" src="https://l3561eb26.lwcdn.com/v-a4c40690-16d6-467c-966c-f79daaaae9cc.mp4">
                </video>
              </div>
            </div>
            <div class="col-lg-4 course-details">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>10min</span>
                </li>
                <li class="nav-item"></li>
              </ul>
              <article>
                <h6>New York State CTLE Requirements</h6>
                <p>Teq’s New York State Continuing Teacher and Leader Education (CTLE) Webinar provides a brief overview of the new regulations required by educators (Teachers, Teaching Assistants, and Administrators) to maintain their Certifications in NYS. The Webinar provides school and district leaders with valuable information on the CTLE Requirements, CTLE Approved Sponsors or Providers of Professional Development, as well as an overview of Teq’s CTLE Approved Professional Development, which includes our Onsite CTLE Approved Courses, our over 900 Online CTLE Approved Courses, and access to over 10 hours of “Free” CTLE Approved Courses via our “Getting Started” Site. At the conclusion of this Webinar, Teachers and School/District Leaders will have a better understanding of the NYS CTLE Requirements, greater insight into Teq’s Onsite and Online Professional Development Programs, Courses, and Platforms, and a list of resources and websites where they can find detailed information pertaining New York State’s Continuing Teacher and Leader Education (CTLE) Regulations and Teq’s CTLE Approved Professional Development.</p>
              </article>
              <div class="row log-in-access active padding-bottom">
                <div class="col-lg-8 course-details">
                  <a class="btn quiz-btn active" data-toggle="modal" data-target=".course-quiz"><img src="assets/take-quiz-icon.svg" width="179" height="36" alt="Take Certificationi Quiz" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-eq-height padding-top padding-bottom category-events">
            <article class="col-md-4">
              <div class="card" data-id="18">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>10min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-a4c40690-16d6-467c-966c-f79daaaae9cc-5124x70.jpg"></div>
                  <h5 class="card-title">New York State CTLE Requirements</h5>
                  <p class="card-text">Teq’s New York State Continuing Teacher and Leader Education (CTLE) Webinar provides a brief overview of the new regulations required by educators (Teachers, Teaching Assistants, and Administrators)...</p>
                </div>
              </div>
            </article>
            <article class="col-md-4">
              <div class="card" data-id="19">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>41min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-661b1cfe-310b-4d75-8775-3df98545a405-1124x70.jpg"></div>
                  <h5 class="card-title">Technology to Support the Danielson Framework - Domain 4</h5>
                  <p class="card-text">Teachers face countless choices  daily when it comes to their students, lesson planning, parent interaction, and the environment of where learning takes place. With a profession as challenging as...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
        <div id="getting-started-category-videos-7" class="getting-started-category-videos-container hidden">
          <div class="row row-eq-height padding-top padding-bottom">
            <div class="col-lg-8">
              <div class="player">
                <video>
                  <source type="video/mp4" src="https://l3561eb26.lwcdn.com/v-042358fd-6703-40ad-bacf-a64ff94328ac.mp4">
                </video>
              </div>
            </div>
            <div class="col-lg-4 course-details">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>03min</span>
                </li>
                <li class="nav-item"></li>
              </ul>
              <article>
                <h6>Getting Started with your Audio Enhancement</h6>
                <p>In our Introduction to Audio Enhancement video, we will take you through the basics and proper use and care of your teacher and student microphones. Join us to learn about charging, pairing and tips for using the Audio Enhancement system.</p>
              </article>
              <div class="row log-in-access active padding-bottom">
                <div class="col-lg-8 course-details">
                  <a class="btn quiz-btn active" data-toggle="modal" data-target=".course-quiz"><img src="assets/take-quiz-icon.svg" width="179" height="36" alt="Take Certificationi Quiz" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-eq-height padding-top padding-bottom category-events">
            <article class="col-md-4">
              <div class="card" data-id="20">
                <div class="card-header">
                  <ul class="nav">
                    <li class="nav-item category-duration-details"><span>03min</span></li>
                    <li class="nav-item category-sessions-details"></li>
                    <li class="nav-item"></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="video-thumb"><img src="http://l3561eb26.lwcdn.com/i/v-i-042358fd-6703-40ad-bacf-a64ff94328ac-2124x70.jpg"></div>
                  <h5 class="card-title">Getting Started with your Audio Enhancement</h5>
                  <p class="card-text">In our Introduction to Audio Enhancement video, we will take you through the basics and proper use and care of your teacher and student microphones. Join us to learn about charging, pairing and tips...</p>
                </div>
              </div>
            </article>
          </div>
        </div>

        <script>
          $(function () {
            $('div#player').flowplayer();
          });
        </script>

      </div>
      </div>
      <?php include 'course-details-quiz.php'; ?>
    </section>

  </main>

<?php include 'footer.php'; ?>
