<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <section class="container-fluid under-header profile-color-bg">
      <div class="container">

        <div class="row padding-top">
          <div class="col">
            <ul class="nav profile-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">My PD Plan</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">My Usage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">My Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">My Reports</a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>

  <section class="container-fluid light-gray-bg">

    <section class="container padding-top">
      <div class="row">
        <div class="col">
          <ul class="nav activity-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#"><strong>In Progess</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><strong>Completed</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><strong>Achievements</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link green-text" href="#"><strong>Teachers</strong></a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="container padding-top padding-bottom">
      <div class="row">
        <div class="col">
          <p class="green-text"><strong>Courses in Progress</strong></p>
          <p>You are doing amazing <a href="#" class="teq-blue-text"><strong>User Name</strong></a>! <br />It looks like you were last working on the <a href="#" class="teq-blue-text">Course title here</a> course.</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <table class="course-activity-table" id="courses-in-progress">
            <thead>
              <tr>
                <th></th>
                <th>Courses</th>
                <th></th>
                <th></th>
                <th>% Watched</th>
                <th>Chapters</th>
                <th>Quiz Status</th>
              </tr>
            </thead>
            <tbody>

              <tr class="green-bg table-row-expand" data-target="#Whats-New-in-SMART-Notebook" data-toggle="collapse" aria-expanded="true" aria-controls="Whats-New-in-SMART-Notebook">
                <th><img src="assets/default-course-icon.svg" /></th>
                <td><a href="#">What's New in SMART Notebook 2014?</a></td>
                <td></td>
                <td></td>
                <td>65%</td>
                <td>2 of 3</td>
                <td></td>
              </tr>
              <tr class="collapse show" id="Whats-New-in-SMART-Notebook">
                <td colspan="7">
                  <table class="course-activity-table">
                    <tr class="green-chapter-bg">
                      <th></th>
                      <td><a href="#">Chapter 1</a></td>
                      <td></td>
                      <td></td>
                      <td>100%</td>
                      <td></td>
                      <td><img src="assets/profile-quiz-passed-icon.svg" /></td>
                    </tr>
                    <tr class="green-chapter-bg">
                      <th></th>
                      <td><a href="#">Chapter 2</a></td>
                      <td></td>
                      <td></td>
                      <td>35%</td>
                      <td></td>
                      <td><img src="assets/profile-quiz-passed-icon.svg" /></td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr class="green-bg">
                <th><img src="assets/default-course-icon.svg" /></th>
                <td><a href="#">SMART Learning Suite - Lab</a></td>
                <td></td>
                <td></td>
                <td>100%</td>
                <td>5 of 5</td>
                <td><a href="#" class="take-quiz">Take Quiz</a></td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="container padding-top padding-bottom">
      <div class="row">
        <div class="col">
          <p class="orange-text"><strong>Certifications in Progress</strong></p>
          <p>You are on your way to being certified <a href="#" class="teq-blue-text"><strong>User Name</strong></a>! <br />It looks like you were last working on the <a href="#" class="teq-blue-text">Course title here</a> Certification.</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <table class="course-activity-table" id="certifications-in-progress">
            <thead>
              <tr>
                <th></th>
                <th>Courses</th>
                <th>% Watched</th>
                <th>% Tracks</th>
                <th>% Chapters</th>
                <th>Quiz Status</th>
                <th>Assignments</th>
              </tr>
            </thead>
            <tbody>
              <tr class="orange-bg table-row-expand" data-target="#Administrator-Track-Designing-and-Building-Engaging-Learning-Environments" data-toggle="collapse" aria-expanded="true" aria-controls="Administrator-Track-Designing-and-Building-Engaging-Learning-Environments">
                <th><img src="assets/default-certification-icon.svg" /></th>
                <td><a href="#">Administrator Track: Designing and Building Engaging Learning Environments</a></td>
                <td>55%</td>
                <td>65%</td>
                <td>65%</td>
                <td></td>
                <td>No</td>
              </tr>

              <tr class="collapse show" id="Administrator-Track-Designing-and-Building-Engaging-Learning-Environments">
                <td colspan="7">
                  <table class="course-activity-table">
                    <tr class="orange-session-bg table-row-expand" data-target="#Session-1-Administrator-Track-Designing-and-Building-Engaging-Learning-Environments" data-toggle="collapse" aria-expanded="true" aria-controls="ASession-1-dministrator-Track-Designing-and-Building-Engaging-Learning-Environments">
                      <th></th>
                      <td><a href="#">Session 1</a></td>
                      <td></td>
                      <td></td>
                      <td>2 of 3</td>
                      <td>No</td>
                      <td></td>
                    </tr>

                    <tr class="collapse show" id="Session-1-Administrator-Track-Designing-and-Building-Engaging-Learning-Environments">
                      <td colspan="7">
                        <table class="course-activity-table">
                          <tr class="orange-chapter-bg">
                            <th></th>
                            <td><a href="#">Chapter 1</a></td>
                            <td>100%</td>
                            <td></td>
                            <td></td>
                            <td><img src="assets/profile-quiz-failed-icon.svg" /></td>
                            <td></td>
                          </tr>
                          <tr class="orange-chapter-bg">
                            <th></th>
                            <td><a href="#">Chapter 2</a></td>
                            <td>35%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </table>
                      </td>
                    </tr>

                    <tr class="orange-session-bg">
                      <th></th>
                      <td><a href="#">Session 2</a></td>
                      <td></td>
                      <td></td>
                      <td>3 of 3</td>
                      <td><a href="#" class="take-quiz">Take Quiz</a></td>
                      <td></td>
                    </tr>
                    <tr class="orange-session-bg">
                      <th></th>
                      <td><a href="#">Session 3</a></td>
                      <td></td>
                      <td></td>
                      <td>3 of 3</td>
                      <td><a href="#" class="take-quiz">Take Quiz</a></td>
                      <td></td>
                    </tr>
                    <tr class="orange-session-bg">
                      <th></th>
                      <td><a href="#">Session 4</a></td>
                      <td></td>
                      <td></td>
                      <td>3 of 3</td>
                      <td><a href="#" class="take-quiz">Take Quiz</a></td>
                      <td></td>
                    </tr>
                    <tr class="orange-session-bg">
                      <th></th>
                      <td><a href="#">Session 5</a></td>
                      <td></td>
                      <td></td>
                      <td>3 of 3</td>
                      <td><a href="#" class="take-quiz">Take Quiz</a></td>
                      <td></td>
                    </tr>
                    <tr class="orange-session-bg">
                      <th></th>
                      <td><a href="#">Session 6</a></td>
                      <td></td>
                      <td></td>
                      <td>3 of 3</td>
                      <td><a href="#" class="take-quiz">Take Quiz</a></td>
                      <td></td>
                    </tr>

                  </table>
                </td>
              </tr>

              <tr class="orange-bg">
                <th><img src="assets/default-certification-icon.svg" /></th>
                <td><a href="#">SMART Learning Suite - lab</a></td>
                <td>100%</td>
                <td>100%</td>
                <td>100%</td>
                <td></td>
                <td><a href="#" class="view-assignments">View</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

  </section>

  </main>

<?php include 'footer.php'; ?>
