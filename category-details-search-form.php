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
      <div class="col-md-6">
        <h2><strong>Category Title</strong></h2>
      </div>
      <div class="col-md-6 text-right">
        <a href="#" class="admin-link"><img src="assets/admin-gear-icon.svg" alt="admin" /></a>
      </div>
    </div>

  </div>
</section>

</div>
