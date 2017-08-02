<div class="category-search-box-wrapper" style="background-image: url('./assets/library-category-default-image.jpg');">
<?php /** query the category image for background image **/ ?>

<section class="container-fluid category-image-bg" id="search-box-container" >
  <div class="container">

    <div class="row" id="breadcrumbs">
      <div class="col">
        <small><span><a href="#">Home</a></span> > <span><a href="#">Categories</a></span> > Category Title </small>
      </div>
    </div>

    <div class="row padding-top" id="search-box">
      <div class="col-sm-6">
        <form name="" post="">
          <div class="form-group search-input">
            <input type="text" class="form-control" id="search-field" placeholder="Search Courses">
            <input type="hidden" name="submit" value="">
          </div>
        </form>
      </div>
      <div class="col-sm-6">
        <ul class="nav">
          <li class="nav-item">
            <div class="btn-group search-menu-group">
              <button class="dropdown-toggle" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Role <span class="search-menu-item"></span></button>
                <ul class="dropdown-menu">
                  <?php /* LOOP */ ?>
                  <li><a href="#" class="teq-blue-text">All</a></li>
                  <li><a href="#">Test Role</a></li>
                </ul>
              </div>
          </li>
          <li class="nav-item">
            <div class="btn-group search-menu-group">
              <button class="dropdown-toggle" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Type <span class="search-menu-item"></span></button>
                <ul class="dropdown-menu">
                  <?php /* LOOP */ ?>
                  <li><a href="#" class="teq-blue-text">All</a></li>
                  <li><a href="#">Test Type</a></li>
                </ul>
              </div>
          </li>
          <li class="nav-item">
            <div class="btn-group search-menu-group">
              <button class="dropdown-toggle" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories<span class="search-menu-item"></span></button>
              <ul class="dropdown-menu">
                                  <li><a href="http://opd-dev.teq.com/courses/category">All</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/44/Administrator">Administrator</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/49/Adobe">Adobe</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/29/Apple">Apple</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/18/Assessment">Assessment</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/20/Blended-Learning">Blended Learning</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/5/Digital-Storytelling">Digital Storytelling</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/17/Early-Childhood">Early Childhood</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/14/ELA">ELA</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/51/ENLELL">ENL/ELL</a></li>
                                  <li class="active"><a href="http://opd-dev.teq.com/courses/category/8/Google" class="teq-blue-text">Google</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/41/Google-Educators-Certification">Google Educators Certification</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/16/iPad">iPad</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/19/Judaic-Studies">Judaic Studies</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/13/Math">Math</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/28/Microsoft">Microsoft</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/26/NAO">NAO</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/47/On-Demand">On Demand</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/54/Other">Other</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/43/Programming">Programming</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/42/Project-Based-Learning">Project Based Learning</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/25/Promethean">Promethean</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/38/SAFARI">SAFARI</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/12/Science">Science</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/37/SEE">SEE</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/46/Sewanhaka">Sewanhaka</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/4/SMART">SMART</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/50/SMART-Table">SMART Table</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/15/Social-Studies">Social Studies</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/36/Special-Ed">Special Ed</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/48/STEM">STEM</a></li>
                                  <li><a href="http://opd-dev.teq.com/courses/category/40/Work-Market">Work Market</a></li>
                </ul>
              </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="row padding-top">
      <div class="col-md-4">
        <h3><strong>Category Title</strong></h3>
        <h5 class="teq-blue-text"><strong>Course Title</strong></h5>
      </div>
      <div class="col-md-7">
        <ul class="course-sessions-list">
          <li><a class="course-session taken" href="#">1</a></li>
          <li><a class="course-session taken" href="#">2</a></li>
          <li><a class="course-session taken" href="#">3</a></li>
          <li><a class="course-session taken" href="#">4</a></li>
          <li><a class="course-session taken" href="#">5</a></li>
          <li><a class="course-session taken" href="#">6</a></li>
          <li><a class="course-session active" href="#">7</a></li>
          <li><a class="course-session" href="#">8</a></li>
          <li><a class="course-session" href="#">9</a></li>
          <li><a class="course-session" href="#">10</a></li>
          <li><a class="course-session" href="#">11</a></li>
          <li><a class="course-session" href="#">12</a></li>
        </ul>
      </div>
      <div class="col-md-1 text-right">
        <a href="#" class="admin-link"><img src="assets/admin-gear-icon.svg" alt="admin" /></a>
      </div>
    </div>

  </div>
</section>

</div>
