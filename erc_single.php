<?php include 'erc_header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>
    <?php include 'erc_search-form.php'; ?>
    <script>
    // hide the Ed Standards on download page
      if ($('div.erc-results').length > 0) {
        $('div.education-standards').show();
      } else {
        $('div.education-standards').hide();
      }
    </script>

    <section class="container erc-library">
      <div class="row">

        <div class="col-md-8 erc-content">
          <h1>Lesson Title Here</h1>
          <p>Category: <a href="#">Science - Middle</a> | Author: <span>Curriculum Team</span></p>
          <img src="assets/ERC_DNA-Structure-01.jpg" alt="">
          <p>This file is an introduction into DNA. The lesson covers the history of the structure (Watson & Crick), the basic structure of DNA (the backbone and rungs), nitrogen base pairing and an introduction into DNA replication.</p>
          <p><a class="download" href="#">Download</a></p>
          <div class="erc-content-tags">
            <p>Educational Standards that this lesson meets:<br /><span>1r</span><span>K-6</span>
              <span>Printing</span><span>Educational Standard Tag</span></p>
          </div>
        </div>

        <div class="col-md-4 erc-content main" id="erc-recommendation">
          <dl>
            <dd><strong>Take your lessons even further.</strong> To get the most out of this lesson, we recommend the following OPD course(s) for you. Simply click on the link(s) below to view the course.</dd>
            <dt><a href="#">Intro to SMART Notebook</a></dt>
            <dd>In this course, you will learn the skills to create your own SMART Notebook lessons, including how to link your file to the Internet, how to use Notebook's pre-made templates to create lessons with ease, and how to import outside presentations and interactive files into your SMART Notebook.</dd>
            <dt><a href="#">Intro to SMART Notebook</a></dt>
            <dd>In this course, you will learn the skills to create your own SMART Notebook lessons, including how to link your file to the Internet, how to use Notebook's pre-made templates to create lessons with ease, and how to import outside presentations and interactive files into your SMART Notebook.</dd>
            <dt><a href="#">Intro to SMART Notebook</a></dt>
            <dd>In this course, you will learn the skills to create your own SMART Notebook lessons, including how to link your file to the Internet, how to use Notebook's pre-made templates to create lessons with ease, and how to import outside presentations and interactive files into your SMART Notebook.</dd>
          </dl>
        </div>


      </div>
    </section>

  </div>
  </main>

<?php include 'footer.php'; ?>
