<?php include 'header.php'; ?>
  <?php include 'now-chat-window.php'; ?>

  <main>

    <section class="container-fluid under-header light-blue-bg">
      <div class="container">

        <div class="row">
          <div class="col">
            <ul class="nav profile-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">My PD Plan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">My Usage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">My Account</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">My Reports</a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>

    <section class="container-fluid light-gray-bg padding-top">
      <section class="container">
        <div class="row">
          <div class="col">
            <ul class="nav activity-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"><strong>View by District</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><strong>View by School</strong></a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="container padding-top">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#graph-reports" role="tab" data-toggle="tab" aria-controls="graph-reports" aria-expanded="true">Graphs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#user-reports" role="tab" data-toggle="tab" aria-controls="user-reports">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#export-reports" role="tab" data-toggle="tab" aria-controls="export-reports">Export</a>
              </li>
            </ul>
      </section>
    </section>

    <section class="container-fluid padding-bottom">
      <div class="container">
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane fade show active" id="graph-reports">
graphs here
          </div>

          <div role="tabpanel" class="tab-pane fade" id="user-reports">
users here
          </div>

          <div role="tabpanel" class="tab-pane fade" id="export-reports">
export here
          </div>

        </div>
      </div>
    </section>

  </main>

<?php include 'footer.php'; ?>
