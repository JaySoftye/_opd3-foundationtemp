<div class="dropdown">
  <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/admin-dropdown-icon.svg" alt="admin" /></a>
  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item green-text" href="#"><strong>Video Setting</strong></a>
    <a class="dropdown-item green-text" href="#" data-toggle="modal" data-target=".add-to-playlist"><strong>Add to Playlist</strong></a>
    <a class="dropdown-item green-text" href="#"><strong>Admin</strong></a>
  </div>
</div>

<div class="modal fade add-to-playlist" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <section class="modal-body light-gray-bg">
        <section class="container">
          <h6 class="blue-text"><img src="assets/default-course-icon.svg">Course</h6>
          <h5><strong>SMART Notewbook 15 Digital Teacher Certification: Session 1</strong></h5>
        </section>
      </section>

      <section class="modal-body">
        <section class="container">
          <p>To add this course to a users playlist, start by creating a new playlist or selecting an existing playlist then simply click the <i>add to playlist</i> button. You'll be given the option to share this course once you successfully added it to the selected playlist.</p>

          <form name="" method="" id="add-to-playlist-form">
          <div class="form-group row">
            <div class="col-5">
              <input class="form-control" type="text" placeholder="New playlist name">
            </div>
            <div class="col-1 align-self-top text-center no-padding">or</div>
            <div class="col-5 profile-plan-menu">
              <button class="dropdown-toggle playlist-btn" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Playlist...</button>
                <ul class="dropdown-menu">
                  <li><a href="#" id="playlist-selection">Super Awesome Playlist 1</a></li>
                </ul>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-5">
              <button class="btn add-to-playlist-btn" type="submit">Add to playlist</button>
            </div>
          </div>
          </form>

          <div class="form-group row" id="share-playlist" style="display:none;">
            <div class="col">
              <hr />
              <h5>This course has been successfully added to the <span id="playlist-name"></span> Playlist.</h5>
              <p><strong>You can now use the button below to share.</strong></p>
              <button class="btn share-playlist-btn" type="submit">Share Course</button>
            </div>
          </div>
        </section>
      </section>

      <form name="" method="" id="share-playlist-form" style="display:none;">
      <section class="modal-body light-gray-bg">
        <section class="container">
          <div class="form-group row">
            <div class="col-5 profile-plan-menu">
              <button class="dropdown-toggle playlist-btn" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select District...<span class="profile-plan-menu-item"></span></button>
                <ul class="dropdown-menu">
                  <li><a class="district-option" href="#" onclick="addDistrict(this);">East Orange School District</a></li>
                </ul>
            </div>
            <div class="col-1"></div>
            <div class="col-5 profile-plan-menu">
              <button class="dropdown-toggle playlist-btn" type="button" name="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select School...<span class="profile-plan-menu-item"></span></button>
                <ul class="dropdown-menu">
                  <li><a class="school-option" href="#" onclick="addSchool(this);">Tyson Middle School</a></li>
                  <li><a class="school-option" href="#" onclick="addSchool(this);">East Orange Schools Admin</a></li>
                  <li><a class="school-option" href="#" onclick="addSchool(this);">East Orange Tech Thursdays</a></li>
                </ul>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-5 profile-plan-menu" id="districts-seletected"></div>
            <div class="col-1"></div>
            <div class="col-5 profile-plan-menu" id="schools-seletected">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-5">
              <textarea class="form-control" rows="5"></textarea>
            </div>
            <div class="col-1 align-self-center"><button><img src="assets/share-playlist-add-icon.svg" alt="add" /></button><button><img src="assets/share-playlist-subtract-icon.svg" alt="subtract" /></button></div>
            <div class="col-5">
              <textarea class="form-control" rows="5"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-11">
              <button class="btn email-playist" type="submit">Send Email</button>
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
var a = document.getElementById('playlist-selection');
var b = document.getElementById('add-to-playlist-form');
var c = document.getElementById('share-playlist');
var d = document.getElementById('playlist-name');
var e = document.getElementById('share-playlist-form');
var f = document.getElementsByClassName("share-playlist-btn")[0];
var g = document.getElementById('district-options');

a.onclick = function() {
    b.style.display = 'none';
    c.style.display = 'block';
    d.innerHTML = a.innerHTML;
  }

f.onclick = function() {
    e.style.display = 'block';
  }

function addDistrict(obj) {
    var h = document.createElement('button');
    var i = document.getElementById('districts-seletected');
    h.className += "remove-item";
    h.innerHTML = "&times; " + obj.innerHTML;
    h.onclick = function() {this.parentNode.removeChild(this); }
    i.appendChild(h);
}

function addSchool(obj) {
    var j = document.createElement('button');
    var k = document.getElementById('schools-seletected');
    j.className += "remove-item";
    j.innerHTML = "&times; " + obj.innerHTML;
    j.onclick = function() {this.parentNode.removeChild(this); }
    k.appendChild(j);
}

function remove() {
    var l = document.getElementById('dummy');
    elem.parentNode.removeChild(elem);
    return false;
}

</script>
