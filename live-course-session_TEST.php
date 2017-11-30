<?php include 'header.php'; ?>

  <main>

    <section class="container-fluid under-header" id="search-box-container" >
      <div class="container">
        <div class="row padding-top">
          <div class="col-md-10">
            <h3><strong>Apple</strong></h3>
            <h5>Recording Podcasts</h5>
          </div>
        </div>
      </div>
    </section>

    <section class="container-fluid light-gray-bg" >
      <div class="container padding-bottom">

      <div class="row row-eq-height padding-top">
        <div class="col-md-8">
          <style>.lemonwhale-embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width:100%; }.lemonwhale-embed-container iframe { position: absolute; top: 0; left:0; width: 100%; height: 100%; }</style><div class="lemonwhale-embed-container"><iframe src="//ljsp.lwcdn.com/api/video/embed.jsp?id=715c9d0e-8365-4bfc-b3ab-3d389d21fe95&pi=4be99d0f-58cd-4c0a-8d66-6c11ff0ada39" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
        </div>

        <aside class="col-md-4" id="live-chat-container">
          <div class="box-header row">
            <div class="col participants align-self-center">
              <span class="white">Chat Live</span>
            </div>
            <div class="col participants text-right align-self-center">
              <a class="dropdown-toggle participants" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3</a> <span class="white">Participants</span>
              <div class="dropdown-menu">
                <span class="dropdown-item">Participant One</span>
                <span class="dropdown-item">Participant Two</span>
              </div>
            </div>
          </div>

          <div class="row" id="live-chat-box">
            <div style="width: 100%;">
            <p>
              <small class="teq-blue-text">Host</small>
              <span>Bonjour</span>
            </p>
            </div>
          </div>

          <div class="row" id="live-chat-form">
            <div class="col">
              <form name="" method="">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Type...">
                    <span class="input-group-btn">
                      <button class="btn" type="button">Send</button>
                    </span>
                  </div>
              </form>
            </div>
          </div>
        </aside>
      </div>

      <div class="row padding-top padding-bottom">
        <div class="col-md-3 course-details  align-self-center">
          <a class="btn quiz-btn active" data-toggle="modal" data-target=".course-quiz"><img src="assets/take-quiz-icon.svg" height="48" alt="Take Certificationi Quiz" /></a>
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-3 course-details badges  align-self-center">
          <a href="#" data-toggle="modal" data-target=".certification-complete">Earn your Recording Podcasts with Audacity Badge  </a>
        </div>
        <div class="col-md-1 no-padding course-details badges  align-self-center">
          <a href="#" data-toggle="modal" data-target=".certification-complete"><img src="assets/badge-default-icon.jpg" /></a>
        </div>
      </div>

      </div>
        <?php include 'live-course-session-quiz.php'; ?>
    </section>

    <section class="container-fluid log-in-access active padding-top">
  <div class="container">
<div class="row">
  <div class="col-md-8 col-sm-12">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item hidden">
        <a class="nav-link" href="#courese-discussion-tab" role="tab" data-toggle="tab" aria-controls="courese-discussion-tab" aria-expanded="true"><img src="/assets/course-discussion-icon.svg" width="150px" height="25px" alt="Discussion"></a>
      </li>
            <li class="nav-item">
        <a class="nav-link active" href="#course-files-tab" role="tab" data-toggle="tab" aria-controls="course-files-tab"><img src="/assets/course-files-icon.svg" width="150px" height="25px" alt="Files &amp; Links"></a>
      </li>
                  <li class="nav-item hidden">
        <a class="nav-link" href="#course-skills-techniques-tab" role="tab" data-toggle="tab" aria-controls="course-skills-techniques-tab"><img src="/assets/course-skills-icon.svg" width="150px" height="25px" alt="Skills and Techniques"></a>
      </li>
    </ul>
  </div>
</div>
  </div>
</section>

<section class="container-fluid light-gray-bg log-in-access active padding-bottom">
  <div class="container">

    <div class="tab-content">

      <div role="tabpanel" class="tab-pane fade" id="courese-discussion-tab">
        <div class="row">
          <div class="col-md-8">

            <div class="post-form new-thread">
              <h6><strong>Start a New Discussion</strong></h6>
              <form name="" method="">

                <div class="form-group">
                  <input type="text" class="form-control" placeholder="subject">
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                </div>
                <button type="submit" class="btn float-right">Start Thread</button>

              </form>
            </div>

            <div class="post-form reply-thread">
              <h3 class="teq-blue-text">Thread Title Is Listed Here</h3>
              <div id="reply-container">
                <section class="row align-items-center">
                  <div class="col-md-2">
                    <a href="#"><img src="/assets/user_icon.svg" width="75" height="75" alt=""></a>
                  </div>
                  <div class="col-md-10 no-padding">
                    <p><a class="teq-blue-text" href="#">User Name Here</a><br><small>post date and time here</small></p>
                  </div>
                </section>
                <section class="row align-items-center">
                  <div class="col-md padding-sm">
                    <p>This is the post topic and subject. All the post and thread info goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nisi tortor, mollis vel tellus a, sollicitudin varius leo. Etiam semper id mauris lacinia tincidunt. Integer aliquet ex ac magna cursus consequat. Sed est ante, imperdiet in ultricies in, pulvinar sit amet leo. Aenean imperdiet eget tortor elementum sagittis.</p>
                  </div>
                </section>
                <section class="row">
                  <div class="col-md-2">
                    <a data-toggle="collapse" href="#thread-reply-form" aria-expanded="false" aria-controls="thread-reply-form"><img src="/assets/reply-button-icon.svg" alt=""></a>
                  </div>
                  <div class="col-md-10 text-right">
                    <p><a class="teq-blue-text" href="#">View all Replies</a></p>
                  </div>
                </section>
              </div>
              <div class="collapse" id="thread-reply-form">
                <form name="" method="">

                  <div class="form-group">
                    <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                  </div>
                  <button type="submit" class="btn float-right">Leave your reply</button>

                </form>
              </div>
            </div>

          </div>
          <div class="col-md-4">
            <h6><strong>Previous Threads</strong></h6>
            <div class="card thread-post">
              <div class="card-block">
                <p class="card-title"><a href="#" class="teq-blue-text">One thought on “Welcome to SMART Notebook 2015 Digital Teacher Certification!”</a></p>
                <small class="card-text">posted 10:30AM, May 16, 2015 by Priscilla Kageni</small>
                <p><a href="#" class="card-link teq-blue-text">5 Replies</a></p>
              </div>
            </div>
            <div class="card thread-post">
              <div class="card-block">
                <p class="card-title"><a href="#" class="teq-blue-text">One thought on “Welcome to SMART Notebook 2015 Digital Teacher Certification!”</a></p>
                <small class="card-text">posted 10:30AM, May 16, 2015 by Priscilla Kageni</small>
                <p><a href="#" class="card-link teq-blue-text">5 Replies</a></p>
              </div>
            </div>
            <div class="card thread-post">
              <div class="card-block">
                <p class="card-title"><a href="#" class="teq-blue-text">One thought on “Welcome to SMART Notebook 2015 Digital Teacher Certification!”</a></p>
                <small class="card-text">posted 10:30AM, May 16, 2015 by Priscilla Kageni</small>
                <p><a href="#" class="card-link teq-blue-text">5 Replies</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade show active" id="course-files-tab">
        <div class="row">
          <div class="col-sm-8">
            <ul class="nav flex-column files-list nav-tabs" role="tablist">
                                    <li class="nav-item">
                      <a class="nav-link active" href="#folder-1239" role="tab" data-toggle="tab" aria-controls="folder-1239">Domain 1 <small class="float-right"><span>0</span> Files, <span>11</span> Links</small></a>
                    </li>
                            </ul>
          </div>
          <div class="col-sm-4">
            <div class="tab-content files-list-attachments">
                                    <div role="tabpanel" class="tab-pane fade show active" id="folder-1239">
                                                                            <a href="https://www.canva.com/" target="_blank" title="Canva" class="link">Canva</a>
                                                    <a href="https://plus.google.com/communities/100662407427957932931" target="_blank" title="Connected Classrooms on Google+" class="link">Connected Classrooms on Google+</a>
                                                    <a href="http://www.discoveryeducation.com/" target="_blank" title="Discovery Education" class="link">Discovery Education</a>
                                                    <a href="https://gsuite.google.com/together/" target="_blank" title="G Suite for Education" class="link">G Suite for Education</a>
                                                    <a href="https://www.google.com/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=1&amp;cad=rja&amp;uact=8&amp;ved=0ahUKEwjpiJritrXRAhUK1GMKHRuBAFMQFggZMAA&amp;url=https%3A%2F%2Fhangouts.google.com%2F&amp;usg=AFQjCNGtAUmBhFi-HFw2RnuffWBK_4o1Og&amp;bvm=bv.142059868,d.eWE" target="_blank" title="Google Hangouts" class="link">Google Hangouts</a>
                                                    <a href="https://scholar.google.com/" target="_blank" title="Google Scholar" class="link">Google Scholar</a>
                                                    <a href="https://www.opened.com/" target="_blank" title="OpenEd" class="link">OpenEd</a>
                                                    <a href="http://rubistar.4teachers.org/index.php" target="_blank" title="Rubistar" class="link">Rubistar</a>
                                                    <a href="https://www.smartamp.com/" target="_blank" title="SMART amp" class="link">SMART amp</a>
                                                    <a href="https://education.smarttech.com/en/products/notebook/download" target="_blank" title="SMART Notebook Download" class="link">SMART Notebook Download</a>
                                                    <a href="https://www.socrative.com/" target="_blank" title="Socrative" class="link">Socrative</a>
                                            </div>
                            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade" id="course-assignments-tab">
            </div>

      <div role="tabpanel" class="tab-pane fade" id="course-skills-techniques-tab">
        <div class="row">


            <article class="col-md-3 col-sm-6">
              <div class="card sm-card">
                <div class="card-header">
                  <p class="category-duration-details"><span>2min</span></p>
                </div>
                <div class="card-block">
                  <p class="card-title"><a href="#">All of your favorite apps, organized just the way you want</a></p>
                  <p class="card-text">With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared...</p>
                </div>
              </div>
            </article>
            <article class="col-md-3 col-sm-6">
              <div class="card sm-card">
                <div class="card-header">
                  <p class="category-duration-details"><span>1min</span></p>
                </div>
                <div class="card-block">
                  <p class="card-title"><a href="#">Title Course 2</a></p>
                  <p class="card-text">With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared...</p>
                </div>
              </div>
            </article>
            <article class="col-md-3 col-sm-6">
              <div class="card sm-card">
                <div class="card-header">
                  <p class="category-duration-details"><span>1min 36sec</span></p>
                </div>
                <div class="card-block">
                  <p class="card-title"><a href="#">Title Course 3</a></p>
                  <p class="card-text">With this course, participants will be able to add and organize </p>
                </div>
              </div>
            </article>
            <article class="col-md-3 col-sm-6">
              <div class="card sm-card">
                <div class="card-header">
                  <p class="category-duration-details"><span>2min 2sec</span></p>
                </div>
                <div class="card-block">
                  <p class="card-title"><a href="#">Title Course 4</a></p>
                  <p class="card-text">Collaborate with others through a shared Photostream...</p>
                </div>
              </div>
            </article>


      </div>
    </div>

  </div>
</div></section>

    <section class="container padding-top padding-bottom">
      <h4><strong>Similar courses you may be interested in:</strong></h4>
      <div class="row row-eq-height padding-top padding-bottom">
        <?php /** LOOP **/ ?>
        <article class="col-md-4">
          <div class="card">
            <div class="card-header">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>8hr 54min</span>
                </li>
                <li class="nav-item category-sessions-details">
                  <span>12 Sessions</span>
                </li>
                <li class="nav-item">
                  <?php include 'category-details-admin-menu.php'; ?>
                </li>
              </ul>
            </div>
            <div class="card-block">
              <h5 class="card-title"><a href="#">Digital Teacher iPad Certification 7: iPhoto</a></h5>
              <p class="card-text">With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream...</p>
            </div>
            <div class="card-footer"><img src="assets/default-badge-icon.svg" /></div>
          </div>
        </article>
        <article class="col-md-4">
          <div class="card">
            <div class="card-header">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>8hr 54min</span>
                </li>
                <li class="nav-item category-sessions-details">
                  <span>12 Sessions</span>
                </li>
                <li class="nav-item">
                  <?php include 'category-details-admin-menu.php'; ?>
                </li>
              </ul>
            </div>
            <div class="card-block">
              <h5 class="card-title"><a href="#">Digital Teacher iPad Certification 7: iPhoto</a></h5>
              <p class="card-text">With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream...</p>
            </div>
            <div class="card-footer"></div>
          </div>
        </article>
        <article class="col-md-4">
          <div class="card">
            <div class="card-header">
              <ul class="nav">
                <li class="nav-item category-duration-details">
                  <span>8hr 54min</span>
                </li>
                <li class="nav-item category-sessions-details">
                  <span>12 Sessions</span>
                </li>
                <li class="nav-item">
                  <?php include 'category-details-admin-menu.php'; ?>
                </li>
              </ul>
            </div>
            <div class="card-block">
              <h5 class="card-title"><a href="#">Digital Teacher iPad Certification 7: iPhoto</a></h5>
              <p class="card-text">With this course, participants will be able to add and organize content to iPhoto and collaborate with others through a shared Photostream...</p>
            </div>
            <div class="card-footer"></div>
          </div>
        </article>

      </div>
    </section>

    <div class="modal fade certification-complete" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header green"></div>
          <div class="modal-body text-center course-details badges">
            <h1><strong>Congratulations!</strong></h1>
            <p>You have completed this course successfully. Click the link below to receive your certification.</p>
            <p><a href="#"><img src="assets/badge-default-icon.jpg" /></a></p>
            <p><button class="btn" href="#">Download Certificate</button></p>
          </div>
        </div>
      </div>
    </div>

  </main>

<?php include 'footer.php'; ?>
