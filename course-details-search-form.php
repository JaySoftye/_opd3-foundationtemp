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
                  <?php /* LOOP */ ?>
                  <li><a href="#" class="teq-blue-text">All</a></li>
                  <li><a href="#">Test Category</a></li>
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
          <li><a class="course-session active" href="#">1</a></li>
          <li><a class="course-session active" href="#">2</a></li>
          <li><a class="course-session active" href="#">3</a></li>
          <li><a class="course-session active" href="#">4</a></li>
          <li><a class="course-session active" href="#">5</a></li>
          <li><a class="course-session active" href="#">6</a></li>
          <li><a class="course-session active" href="#">7</a></li>
          <li><a class="course-session" href="#">8</a></li>
          <li><a class="course-session" href="#">9</a></li>
          <li><a class="course-session" href="#">10</a></li>
          <li><a class="course-session" href="#">11</a></li>
          <li><a class="course-session" href="#">12</a></li>
        </ul>
        <ul class="course-sessions-taken">
          <li><a class="course-session active" href="#">1</a></li>
          <li><a class="course-session active" href="#">2</a></li>
          <li><a class="course-session active" href="#">3</a></li>
          <li><a class="course-session active" href="#">4</a></li>
          <li><a class="course-session active" href="#">5</a></li>
          <li><a class="course-session active" href="#">6</a></li>
        </ul>
      </div>
      <div class="col-md-1 text-right">
        <a href="#" class="admin-link"><img src="assets/admin-gear-icon.svg" alt="admin" /></a>
      </div>
    </div>

  </div>
</section>

</div>
