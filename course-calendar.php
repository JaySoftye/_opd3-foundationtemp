<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <?php include 'course-calendar-search-form.php'; ?>

    <section class="container padding-top">
      <div class="row">
        <div class="col-md-6">
          <h1><strong>Categories</strong></h1>
        </div>
        <div class="col-md-6 text-right">
          <a href="#" class="admin-link"><img src="assets/admin-gear-icon.svg" alt="admin" /></a>
        </div>
      </div>
    </section>

    <section class="container padding-bottom">
      <div class="row">

        <div id="calendar-wrap" class="padding-top padding-bottom">
          <div>
            <h1>July 2017</h1>
          </div>

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
              <li class="day other-month">
            		 <span class="date">25</span>
            	</li>
            	<li class="day other-month">
            		<span class="date">26</span>
            	</li>
            	<li class="day other-month">
                <span class="date">27</span>
            	</li>
            	<li class="day other-month">
            		<span class="date">28</span>
            	</li>
            	<li class="day other-month">
            		<span class="date">29</span>
            	</li>
              <li class="day other-month">
            		 <span class="date">30</span>
            	</li>
            	<li class="day">
            		<span class="date">1</span>
              </li>
            </ul>

            <ul class="days">
              <li class="day">
            		 <span class="date">2</span>
            	</li>
            	<li class="day">
            		<span class="date">3</span>
            	</li>
            	<li class="day">
                <span class="date">4</span>
            	</li>
            	<li class="day">
            		<span class="date">5</span>
            	</li>
              <li class="day">
                <a href="course-details.php"
                    tabindex="0"
                    class="event"
                    role="button"
                    data-html="true"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-placement="top"
                    title="<small>July 6, 10:00AM EDT - 11:00AM EDT</small>"
                    data-content="<p><span>Digital Manipulatives for the Science Classroom</span>There are a large variety of resources on the web to support science curriculum for all grade levels. These include Shockwave Flash simulators, Java applets, and a plethora of Flash videos. We will discover how to find, download, and make good use of these high-quality teaching aids. How are you going to distribute this to your students? We will take a quick tour.</p>">
            		  <span class="date">6</span>
                  <span class="calendar-course-type"><img src="assets/badge-default-icon.jpg" alt="admin" /></span>
                  <p class="event-title">HTML 5 lecture with Brad Traversy from Eduonix</p>
                  <small>1:00pm to 3:00pm</small>
                </a>
                <?php include 'course-calendar-admin-menu.php'; ?>
            	</li>
              <li class="day">
            		<span class="date">7</span>
            	</li>
              <li class="day">
            		<span class="date">8</span>
            	</li>
            </ul>

            <ul class="days">
              <li class="day">
            		 <span class="date">9</span>
            	</li>
            	<li class="day">
            		<span class="date">10</span>
            	</li>
            	<li class="day">
                <span class="date">11</span>
            	</li>
            	<li class="day">
            		<span class="date">12</span>
            	</li>
            	<li class="day">
            		<span class="date">13</span>
            	</li>
              <li class="day">
            		 <span class="date">14</span>
            	</li>
            	<li class="day">
            		<span class="date">15</span>
              </li>
            </ul>

            <ul class="days">
              <li class="day">
            		 <span class="date">16</span>
            	</li>
            	<li class="day">
            		<span class="date">17</span>
            	</li>
            	<li class="day">
                <span class="date">18</span>
            	</li>
            	<li class="day">
            		<span class="date">19</span>
            	</li>
            	<li class="day">
            		<span class="date">20</span>
            	</li>
              <li class="day">
            		 <span class="date">21</span>
            	</li>
            	<li class="day">
            		<span class="date">22</span>
              </li>
            </ul>
            <ul class="days">
              <li class="day">
            		 <span class="date">23</span>
            	</li>
            	<li class="day">
            		<span class="date">24</span>
            	</li>
            	<li class="day">
                <span class="date">25</span>
            	</li>
            	<li class="day">
            		<span class="date">26</span>
            	</li>
            	<li class="day">
            		<span class="date">27</span>
            	</li>
              <li class="day">
            		 <span class="date">28</span>
            	</li>
            	<li class="day">
            		<span class="date">29</span>
              </li>
            </ul>
            <ul class="days">
              <li class="day">
            		 <span class="date">30</span>
            	</li>
            	<li class="day">
            		<span class="date">31</span>
            	</li>
            	<li class="day other-month">
                <span class="date">1</span>
            	</li>
            	<li class="day other-month">
            		<span class="date">2</span>
            	</li>
            	<li class="day other-month">
            		<span class="date">3</span>
            	</li>
              <li class="day other-month">
            		 <span class="date">4</span>
            	</li>
            	<li class="day other-month">
            		<span class="date">5</span>
              </li>
            </ul>

          </div><!-- /. calendar -->
        </div><!-- /. wrap -->

      </div>
    </section>

  </main>

<?php include 'footer.php'; ?>
