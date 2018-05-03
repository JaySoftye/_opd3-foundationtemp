<div class="category-search-box-wrapper" style="background-image: url('./assets/library-category-default-image.jpg');">
<?php /** query the category image for background image **/ ?>

<section class="container-fluid category-image-bg" id="search-box-container" >
  <div class="container">

    <div class="row" id="breadcrumbs">
      <div class="col">
        <small><span><a href="#">Home</a></span> > <span><a href="#">Electronic Resource Center</a></span> </small>
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
          <li class="col-md-5">
            <select name="" form="">
              <option disabled selected>Select Category</option>
              <option value="All Categories">All Categories</option>
              <option value="Mixed Reality 3D Content">Mixed Reality 3D Content</option>
              <option value="ELA - Elementary">ELA - Elementary</option>
              <option value="ELA - Middle">ELA - Middle</option>
              <option value="ELA - High">ELA - High</option>
              <option value="Math - Elementary">Math - Elementary</option>
              <option value="Math - Middle">Math - Middle</option>
              <option value="Math - High">Math - High</option>
              <option value="Other - Elementary">Other - Elementary</option>
              <option value="Other - Middle">Other - Middle</option>
              <option value="Other - High">Other - High</option>
              <option value="Science - Elementary">Science - Elementary</option>
              <option value="Science - Middle">Science - Middle</option>
              <option value="Science - High">Science - High</option>
              <option value="Social Studies - Elementary">Social Studies - Elementary</option>
              <option value="Social Studies - Middle">Social Studies - Middle</option>
              <option value="Social Studies - High">Social Studies - High</option>
            </select>
          </li>
          <li class="col-md-5">
            <select name="" form="">
              <option disabled selected>Select File Type</option>
              <option value="All File Types">All File Types</option>
              <option value="SMART Notebook">SMART Notebook</option>
              <option value="OnDemand">Promethean ActivInspire</option>
              <option value="Teachers">Easiteach Next Generation</option>
            </select>
          </li>
          <li class="col-md-2 more-info-btn">
            <a href="#search-field-info" data-toggle="modal">
              <img src="assets/erc-more-info-btn.svg" alt="">
            </a>
          </li>
        </ul>
      </div>

    </div>

    <div class="row padding-top">
      <div class="col-lg">
        <h3><strong>
          <?php
            // TITLE WILL BE REPLACED PER SEARCH TERM AND/OR CATEGORY
            if (isset($cat)) {echo $cat;} else {echo "ERC Categories";}
          ?>
        </strong></h3>
      </div>
    </div>

    <div class="modal fade" id="search-field-info" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header card-header school-district">
            <h4 class="modal-title white">Searching for Lessons in the ERC</h4>
            <button class="white" type="button" data-dismiss="modal" aria-label="Close"> &times; </button>
          </div>
          <div class="modal-body">
            <p>We've made it easy for you to search our Resource Library. Using the dropdown in the search bar, you can easily filter more specific results. Easy filter by:</p>
            <ol>
              <li>Title or Name</li>
              <li>Category</li>
              <li>File type</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

</div>
