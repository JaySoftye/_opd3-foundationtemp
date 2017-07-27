<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <?php include 'course-library-search-form.php'; ?>

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
      <div class="row categories-items">

          <?php /** LOOP **/ ?>
        <article class="col col-md-3 col-sm-6">
          <a href="#">
            <img src="assets/library-category-default-image.jpg" />
            <span>Category Title</span>
          </a>
        </article>
        <article class="col col-md-3 col-sm-6">
          <a href="#">
            <img src="assets/library-category-default-image.jpg" />
            <span>Category Title</span>
          </a>
        </article>
        <article class="col col-md-3 col-sm-6">
          <a href="#">
            <img src="assets/library-category-default-image.jpg" />
            <span>Category Title</span>
          </a>
        </article>
        <article class="col col-md-3 col-sm-6">
          <a href="#">
            <img src="assets/library-category-default-image.jpg" />
            <span>Category Title</span>
          </a>
        </article>
        <article class="col col-md-3 col-sm-6">
          <a href="#">
            <img src="assets/library-category-default-image.jpg" />
            <span>Category Title</span>
          </a>
        </article>
        <article class="col col-md-3 col-sm-6">
          <a href="#">
            <img src="assets/library-category-default-image.jpg" />
            <span>Category Title</span>
          </a>
        </article>

      </div>
    </section>

  </main>

<?php include 'footer.php'; ?>
