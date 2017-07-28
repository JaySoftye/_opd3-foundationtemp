<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <?php include 'course-calendar-search-form.php'; ?>

    <section class="container padding-bottom">
      <div class="row align-items-center">
        <div class="col-md-3 col-sm-6">
          <p><img src="assets/course-calendar-type-icons.svg" /></p>
        </div>
        <div class="col-md-9 col-sm-6">
          <p><small class="blue-text">To view course details simply <strong>click on the course title</strong>.</small></p>
        </div>
      </div>
    </section>

    <section class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div id="course-calendar-date-selector" class="carousel slide" >
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item">
                <h2>June 2017</h2>
              </div>
              <div class="carousel-item active">
                <h2>July 2017</h2>
              </div>
              <div class="carousel-item">
                <h2>August 2017</h2>
              </div>
            </div>
            <a class="carousel-control-prev" href="#course-calendar-date-selector" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#course-calendar-date-selector" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-6 text-right hidden-sm-down">
          <a class="calendar-view-change active"><img src="assets/course-calendar-Calendar-view.svg" /> Calendar View</a>
          <a class="calendar-view-change"><img src="assets/course-calendar-list-view.svg" /> List View</a>
        </div>
      </div>
    </section>

    <section class="container padding-bottom">
      <div class="row">

        <div id="calendar-wrap" class="padding-bottom">

          <div id="calendar">
            <ul class="weekdays">
              <li>Sunday</li>
            	<li>Monday</li>
            	<li>Tuesday</li>
            	<li>Wednesday</li>
            	<li>Thursday</li>
            	<li>Friday</li>
            	<li>Saturday</li>
            </ul>

            <ul class="days">
              <li class="day other-month disabled disabled">
                <a class="event">
                <span class="date">25</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day other-month disabled">
                <a class="event">
            		 <span class="date">26</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day other-month disabled">
                <a class="event">
            		 <span class="date">27</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day other-month disabled">
                <a class="event">
            		 <span class="date">28</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day other-month disabled">
                <a class="event">
            		 <span class="date">29</span>
                 <p class="event-title"></p>
                </a>
            	</li>
              <li class="day other-month disabled">
                <a class="event">
                <span class="date">30</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">1</span>
                 <p class="event-title"></p>
                </a>
              </li>
            </ul>

            <ul class="days">
              <li class="day empty">
                <a class="event">
                <span class="date">2</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">3</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">4</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">5</span>
                 <p class="event-title"></p>
                </a>
            	</li>
              <li class="day">
                <a class="event" href="course-details.php"
                    tabindex="0"
                    role="button"
                    data-html="true"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-placement="top"
                    title="<small>July 6, 10:00AM EDT - 11:00AM EDT</small>"
                    data-content="<p><span>Digital Manipulatives for the Science Classroom</span>There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>">
            		  <span class="date">6</span>
                  <span class="week-of-date hidden-sm-up">Thursday</span>
                  <span class="calendar-course-type"><img src="assets/course-calendar-free-icon.svg" /></span>
                  <p class="event-title">HTML 5 lecture with Brad Traversy from Eduonix</p>
                  <p class="hidden-sm-up">There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>
                  <small>1:00pm to 3:00pm</small>
                </a>
                <?php include 'course-calendar-admin-menu.php'; ?>
            	</li>
              <li class="day">
                <a class="event" href="course-details.php"
                    tabindex="0"
                    role="button"
                    data-html="true"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-placement="top"
                    title="<small>July 6, 10:00AM EDT - 11:00AM EDT</small>"
                    data-content="<p><span>Digital Manipulatives for the Science Classroom</span>There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>">
            		  <span class="date">7</span>
                  <span class="week-of-date hidden-sm-up">Friday</span>
                  <span class="calendar-course-type"><img src="assets/course-calendar-certification-icon.svg" /></span>
                  <p class="event-title">HTML 5 lecture with Brad Traversy from Eduonix</p>
                  <p class="hidden-sm-up">There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>
                  <small>1:00pm to 3:00pm</small>
                </a>
                <?php include 'course-calendar-admin-menu.php'; ?>
            	</li>
              <li class="day empty">
                <a class="event">
            		 <span class="date">8</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            </ul>

            <ul class="days">
              <li class="day empty">
                <a class="event">
                <span class="date">9</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">10</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">11</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">12</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">13</span>
                 <p class="event-title"></p>
                </a>
            	</li>
              <li class="day empty">
                <a class="event">
                <span class="date">14</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">15</span>
                 <p class="event-title"></p>
                </a>
              </li>
            </ul>

            <ul class="days">
              <li class="day empty">
                <a class="event">
                <span class="date">16</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">17</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">18</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">19</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">20</span>
                 <p class="event-title"></p>
                </a>
            	</li>
              <li class="day empty">
                <a class="event">
                <span class="date">21</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">22</span>
                 <p class="event-title"></p>
                </a>
              </li>
            </ul>
            <ul class="days">
              <li class="day empty">
                <a class="event">
            		 <span class="date">23</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day">
                <a class="event" href="course-details.php"
                    tabindex="0"
                    role="button"
                    data-html="true"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-placement="top"
                    title="<small>July 6, 10:00AM EDT - 11:00AM EDT</small>"
                    data-content="<p><span>Digital Manipulatives for the Science Classroom</span>There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>">
            		  <span class="date">24</span>
                  <span class="week-of-date hidden-sm-up">Monday</span>
                  <span class="calendar-course-type"><img src="assets/course-calendar-live-icon.svg" /></span>
                  <p class="event-title">HTML 5 lecture with Brad Traversy from Eduonix</p>
                  <p class="hidden-sm-up">There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>
                  <small>1:00pm to 3:00pm</small>
                </a>
                <?php include 'course-calendar-admin-menu.php'; ?>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">25</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">26</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">27</span>
                 <p class="event-title"></p>
                </a>
            	</li>
              <li class="day empty">
                <a class="event">
                <span class="date">28</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">29</span>
                 <p class="event-title"></p>
                </a>
              </li>
            </ul>
            <ul class="days disabled">
              <li class="day empty">
                <a class="event">
                <span class="date">30</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day empty">
                <a class="event">
            		 <span class="date">31</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day other-month disabled">
                <a class="event">
            		 <span class="date">1</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day other-month disabled">
                <a class="event">
            		 <span class="date">2</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day other-month disabled">
                <a class="event">
            		 <span class="date">3</span>
                 <p class="event-title"></p>
                </a>
            	</li>
              <li class="day other-month disabled">
                <a class="event">
                <span class="date">4</span>
                 <p class="event-title"></p>
                </a>
            	</li>
            	<li class="day other-month disabled">
                <a class="event">
            		 <span class="date">5</span>
                 <p class="event-title"></p>
                </a>
              </li>
            </ul>

          </div><!-- /. calendar -->
        </div><!-- /. wrap -->

      </div>
    </section>

  </main>

<?php include 'footer.php'; ?>
