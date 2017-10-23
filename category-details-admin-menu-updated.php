<div class="dropdown">
  <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/admin-dropdown-icon.svg" alt="admin" /></a>
  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item green-text" href="#" data-toggle="modal" data-target=".add-to-playlist"><strong>Add to Playlist</strong></a>
    <a class="dropdown-item green-text" href="#" data-toggle="modal" data-target=".share-playlist-no-course-addition"><strong>Share Playlist</strong></a>
    <a class="dropdown-item green-text" href="#"><strong>Admin</strong></a>
  </div>
</div>

<div class="modal fade add-to-playlist" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <section class="modal-body light-gray-bg">
        <section class="container">
          <h6 class="blue-text"><img src="assets/default-course-icon.svg">Course</h6>
          <h5><strong>iPhoto - Chapter 7</strong></h5>
        </section>
      </section>

      <section class="modal-body">
        <section class="container">
          <p>To add this course to a users playlist, start by creating a new playlist or selecting an existing playlist then simply click the <i>add to playlist</i> button. You'll be given the option to share this course once you successfully added it to the selected playlist.</p>

          <form name="" method="" id="add-to-playlist-form">
          <div class="form-group row">
            <div class="col-md-5">
              <input class="form-control" type="text" placeholder="New playlist name">
            </div>
            <div class="col-md-1 align-self-top text-center no-padding">or</div>
            <div class="col-md-5 show" id="playlist-selection-menu">
              <button id="playlist-dropdown-menu-button" class="dropdown-toggle playlist-btn hide-small" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Playlist...</button>
                <ul class="dropdown-menu hide-small" id="playlist-dropdown-menu-dropdown">
                  <li><a href="#">STEAM Playlist</a></li>
                  <li><a href="#">Google Playlist</a></li>
                  <li><a href="#">Science Department Playlist</a></li>
                  <li><a href="#">Math Department Playlist</a></li>
                </ul>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-5">
              <button class="btn add-to-playlist-btn" id="playlist-dropdown-add-to">Add to playlist</button>
            </div>
          </div>
          </form>

          <div class="form-group row" id="share-playlist" style="display: none;">
            <div class="col-md">
              <hr />
              <h5>This course has been successfully added to the <span id="playlist-name"></span> Playlist.</h5>
              <p><strong>You can now use the button below to share.</strong></p>
              <button class="btn share-playlist-btn" id="playlist-dropdown-share-with">Share Course</button>
            </div>
          </div>
        </section>
      </section>

      <form name="" method="" id="share-playlist-form" style="display: none;">
      <section class="modal-body light-gray-bg">
        <section class="container">
          <div class="form-group row">
            <div class="col-md-5">
              <div id="playlist-district-menu">
                <button class="dropdown-toggle playlist-btn hide-small" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select District...<span class="profile-plan-menu-item"></span></button>
                <ul class="dropdown-menu hide-small">
                  <li><a class="district-option" href="#">East Orange School District</a></li>
                </ul>
              </div>
              <textarea class="form-control" rows="5"></textarea>
            </div>
            <div class="col-md-1 padding align-self-center"><button><img class="add-subtract-buttons" src="assets/share-playlist-add-icon.svg" alt="add" /></button><button><img class="add-subtract-buttons" src="assets/share-playlist-subtract-icon.svg" alt="subtract" /></button></div>
            <div class="col-md-5">
              <div id="playlist-school-menu">
                <button class="dropdown-toggle playlist-btn hide-small" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select School...<span class="profile-plan-menu-item"></span></button>
                <ul class="dropdown-menu hide-small">
                  <li><a class="school-option" href="#">Tyson Middle School</a></li>
                  <li><a class="school-option" href="#">East Orange Schools Admin</a></li>
                  <li><a class="school-option" href="#">East Orange Tech Thursdays</a></li>
                </ul>
              </div>
              <textarea class="form-control" rows="5"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-11">
              <button class="btn email-playist" type="submit">Share Playlist</button>
            </div>
          </div>
        </section>
      </section>
      </form>

      <section class="modal-footer">
        <section class="container">
          <a href="#"><small class="blue-text">Questions? <u>Click here</u></small></a>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
        </section>
      </section>

    </div>
  </div>
</div>

<div class="modal fade share-playlist-no-course-addition" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <section class="modal-body light-gray-bg">
        <section class="container">
          <h6 class="blue-text"><img src="assets/default-playlist-icon.svg">Share a Playlist</h6>
        </section>
      </section>

      <section class="modal-body">
        <section class="container">


          <form name="" method="" id="share-playlist-only-form">
          <div class="form-group row">
            <p>Start by selecting an existing playlist from the menu below. You'll then be given the option to share with other users by selecting the District and School they are associated with.</p>
            <div class="col-md-5">
              <button class="dropdown-toggle playlist-btn" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Playlist...</button>
                <ul class="dropdown-menu">
                  <li><a href="#" id="playlist-selection-only">Super Awesome Playlist 1</a></li>
                </ul>
            </div>
          </div>
          </form>
        </section>
      </section>

      <form name="" method="" id="share-playlist-no-addition-form">
      <section class="modal-body">
        <section class="container">
          <h5>You've selected the <span id="playlist-name-only"></span> Playlist.</h5>
          <p><strong>Search for users to share by their District and/or School from the options below.</strong></p>
        </section>
      </section>
      <section class="modal-body light-gray-bg">
        <section class="container">
          <div class="form-group row">
            <div class="col-md-5">
              <button class="dropdown-toggle playlist-btn" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select District...<span class="profile-plan-menu-item"></span></button>
                <ul class="dropdown-menu">
                  <li><a class="district-option" href="#" onclick="addDistrict(this);">East Orange School District</a></li>
                </ul>
            </div>
            <div class="col-1"></div>
            <div class="col-md-5">
              <button class="dropdown-toggle playlist-btn" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select School...<span class="profile-plan-menu-item"></span></button>
                <ul class="dropdown-menu">
                  <li><a class="school-option" href="#" onclick="addSchool(this);">Tyson Middle School</a></li>
                  <li><a class="school-option" href="#" onclick="addSchool(this);">East Orange Schools Admin</a></li>
                  <li><a class="school-option" href="#" onclick="addSchool(this);">East Orange Tech Thursdays</a></li>
                </ul>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-5 profile-plan-menu" id="districts-seletected"></div>
            <div class="col-md-1"></div>
            <div class="col-md-5 profile-plan-menu" id="schools-seletected">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-5">
              <textarea class="form-control" rows="5"></textarea>
            </div>
            <div class="col-md-1 align-self-center"><button><img src="assets/share-playlist-add-icon.svg" alt="add" /></button><button><img src="assets/share-playlist-subtract-icon.svg" alt="subtract" /></button></div>
            <div class="col-md-5">
              <textarea class="form-control" rows="5"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-11">
              <button class="btn email-playist" type="submit">Share Playlist</button>
            </div>
          </div>
        </section>
      </section>
      </form>

      <section class="modal-footer">
        <section class="container">
          <a href="#"><small class="blue-text">Questions? <u>Click here</u></small></a>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
        </section>
      </section>

    </div>
  </div>
</div>

<script>
/**
DELETE THIS
ONLY USED TO SHOW HOW THE FORM WILL WORK ON THE FRONT END
**/
$(function() {
  // Create the dropdown container
  $("<select />").appendTo("div#playlist-selection-menu");
  $("<option />", {
    "selected": "selected",
    "value"   : "",
    "text"    : "Select Playlist...",
    "disabled": "disabled"
  }).appendTo("div#playlist-selection-menu select");
    $("div#playlist-selection-menu select").addClass("mobile-dropdown").attr('id', 'playlist-selection-menu-button');
  // Populate dropdown with menu items from anchor tags
  $("div#playlist-selection-menu a").each(function() {
    var el = $(this);
    $("<option />", {
      "value"   : el.attr("href"),
      "text"    : el.text()
    }).appendTo("div#playlist-selection-menu select.mobile-dropdown");
  });

  // Create the dropdown container
  $("<select />").appendTo("div#playlist-district-menu");
  $("<option />", {
    "selected": "selected",
    "value"   : "",
    "text"    : "Select District...",
    "disabled": "disabled"
  }).appendTo("div#playlist-district-menu select");
    $("div#playlist-district-menu select").addClass("mobile-dropdown");
  // Populate dropdown with menu items from anchor tags
  $("div#playlist-district-menu a").each(function() {
    var el = $(this);
    $("<option />", {
      "value"   : el.attr("href"),
      "text"    : el.text()
    }).appendTo("div#playlist-district-menu select.mobile-dropdown");
  });

  // Create the dropdown container
  $("<select />").appendTo("div#playlist-school-menu");
  $("<option />", {
    "selected": "selected",
    "value"   : "",
    "text"    : "Select School...",
    "disabled": "disabled"
  }).appendTo("div#playlist-school-menu select");
    $("div#playlist-school-menu select").addClass("mobile-dropdown");
  // Populate dropdown with menu items from anchor tags
  $("div#playlist-school-menu a").each(function() {
    var el = $(this);
    $("<option />", {
      "value"   : el.attr("href"),
      "text"    : el.text()
    }).appendTo("div#playlist-school-menu select.mobile-dropdown");
  });

});

// Dropdown playlist menu
$("#playlist-dropdown-menu-dropdown a").click(function() {
  var clicked = $(this).text();
    $("#playlist-dropdown-menu-button").text( clicked );
});

// Add to playlist button
$("#playlist-dropdown-add-to").click(function() {

  var playlist = $("select#playlist-selection-menu-button option:selected").text();
    $("span#playlist-name").text( playlist );
    $("#add-to-playlist-form").css("display", "none");
    $("#share-playlist").css("display", "block");
});

// Share Course  button
$("#playlist-dropdown-share-with").click(function() {
  $("#share-playlist").css("display", "none");
  $("#share-playlist-form").css("display", "block");
});



</script>
