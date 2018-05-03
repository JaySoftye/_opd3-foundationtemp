<?php include 'erc_header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>
    <?php
      // SEARCH TERM AND/OR CATEGORY
      $cat = 'DNA Structure';
    ?>

    <?php include 'erc_search-form.php'; ?>

    <section class="container padding-top padding-bottom erc-library">
      <div class="row erc-content">
        <div class="col-md-3">
          <label>Category:</label>
          <a id="lesson-category">Science - Middle</a>
          <label>Lessson Duration:</label>
          <p>approx 1 hour</p>
        </div>
        <div class="col-md">
          <img src="assets/ERC_DNA-Structure-01.jpg" alt="">
          <p>This file is an introduction into DNA. The lesson covers the history of the structure (Watson & Crick), the basic structure of DNA (the backbone and rungs), nitrogen base pairing and an introduction into DNA replication.</p>
          <p><a class="lg-btn blue-fill" href="#">Download Lesson</a><img class="file-type" src="assets/erc-item-notebook.svg" alt=""></p>
        </div>
      </div>
    </section>

    <section id="erc-recommendation" class="container-fluid">
      <div class="container">
        <div class="row erc-content">
          <div class="col-md">
            <ul>
              <li>
                <h3><strong>Take your lessons even further.</strong></h3>
                <p>To get the most out of this lesson, we recommend the following OPD course(s) for you. Simply click on the link(s) below to view the course.</p>
              </li>
              <li>
                <a href="#">Intro to SMART Notebook</a>
                <p>In this course, you will learn the skills to create your own SMART Notebook lessons, including how to link your file to the Internet, how to use Notebook's pre-made templates to create lessons with ease, and how to import outside presentations and interactive files into your SMART Notebook.</p>
              </li>
              <li>
                <a href="#">Intro to SMART Notebook</a>
                <p>In this course, you will learn the skills to create your own SMART Notebook lessons, including how to link your file to the Internet, how to use Notebook's pre-made templates to create lessons with ease, and how to import outside presentations and interactive files into your SMART Notebook.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>



  </main>

<?php include 'footer.php'; ?>
