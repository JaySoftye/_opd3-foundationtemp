<?php include 'erc_header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>
    <?php
      // SEARCH TERM AND/OR CATEGORY
      $cat = 'Mixed Reality 3D Content';
    ?>

    <?php include 'erc_search-form.php'; ?>

    <section class="container padding-top padding-bottom erc-library">

      <div class="row erc-results">
        <div class="col">
          <p>Showing <em>Mixed Reality 3D Content</em> results <span id="results">1- 20</span></p>
          <nav>
            <ul class="pagination erc-pages">
              <li class="page-item">
                <a id="itemsOne" class="page-link active" href="#">1</a>
              </li>
              <li class="page-item">
                <a id="itemsTwo" class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a id="itemsThree" class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a id="itemsFour" class="page-link" href="#">4</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <div id="ercItemsContainer" class="erc-items row"></div>


      <script>
        /* CREATE PAGINATION */
        $(document).ready(function(){
          $("li.page-item a.page-link").click(function(){
            $('li.page-item a.page-link').not(this).removeClass('active');
            $(this).addClass('active');
          })
        });

        /* START LOOPS */
        var resultsContainer = document.getElementById("results");
        var container = document.getElementById("ercItemsContainer");
        var one = document.getElementById("itemsOne");
        var two = document.getElementById("itemsTwo");
        var three = document.getElementById("itemsThree");
        var four = document.getElementById("itemsFour");


        for (var i = 0; i < 20; i++) {
          var pageOne = document.createElement('article')
          pageOne.className = 'col-md-3 col-sm-6';
          pageOne.innerHTML = '<div class="card"><a href="" class="item-link"><img src="assets/erc-item-default.svg" alt=""></a><div class="card-body"><h6><a href="" class="item-link">Mixed Reality 3D Content</a></h6><h4><a href="" class="item-link"><strong>ERC File' + (i + 1) + '</strong></a></h4></div></div>';
          container.appendChild(pageOne);
        }

        one.addEventListener("click", function() {
          while (container.hasChildNodes()) {
            container.removeChild(container.firstChild);
            resultsContainer.textContent = '1 - 20';
          }
          for (var i = 0; i < 20; i++) {
            var pageOne = document.createElement('article')
            pageOne.className = 'col-md-3 col-sm-6';
            pageOne.innerHTML = '<div class="card"><a href="" class="item-link"><img src="assets/erc-item-default.svg" alt=""></a><div class="card-body"><h6><a href="" class="item-link">Mixed Reality 3D Content</a></h6><h4><a href="" class="item-link"><strong>ERC File' + (i + 1) + '</strong></a></h4></div></div>';
            container.appendChild(pageOne);
          }
        });

        two.addEventListener("click", function() {
          while (container.hasChildNodes()) {
            container.removeChild(container.firstChild);
            resultsContainer.textContent = '20 - 40';
          }
          for (var i = 20; i < 40; i++) {
            var pageTwo = document.createElement('article')
            pageTwo.className = 'col-md-3 col-sm-6';
            pageTwo.innerHTML = '<div class="card notebook"><a href="" class="item-link"><img src="assets/erc-item-default.svg" alt=""></a><div class="card-body"><h6><a href="" class="item-link">Mixed Reality 3D Content</a></h6><h4><a href="" class="item-link"><strong>ERC File' + (i + 1) + '</strong></a></h4></div></div>';
            container.appendChild(pageTwo);
          }
        });

        three.addEventListener("click", function() {
          while (container.hasChildNodes()) {
            container.removeChild(container.firstChild);
            resultsContainer.textContent = '40 - 60';
          }
          for (var i = 40; i < 60; i++) {
            var pageThree = document.createElement('article')
            pageThree.className = 'col-md-3 col-sm-6';
            pageThree.innerHTML = '<div class="card activinspire"><a href="" class="item-link"><img src="assets/erc-item-default.svg" alt=""></a><div class="card-body"><h6><a href="" class="item-link">Mixed Reality 3D Content</a></h6><h4><a href="" class="item-link"><strong>ERC File' + (i + 1) + '</strong></a></h4></div></div>';
            container.appendChild(pageThree);
          }
        });

        four.addEventListener("click", function() {
          while (container.hasChildNodes()) {
            container.removeChild(container.firstChild);
            resultsContainer.textContent = '61 - 65';
          }
          for (var i = 60; i < 65; i++) {
            var pageFour = document.createElement('article')
            pageFour.className = 'col-md-3 col-sm-6';
            pageFour.innerHTML = '<div class="card easiteach"><a href="" class="item-link"><img src="assets/erc-item-default.svg" alt=""></a><div class="card-body"><h6><a href="" class="item-link">Mixed Reality 3D Content</a></h6><h4><a href="" class="item-link"><strong>ERC File' + (i + 1) + '</strong></a></h4></div></div>';
            container.appendChild(pageFour);
          }
        });

      </script>

    </section>

  </main>

<?php include 'footer.php'; ?>
