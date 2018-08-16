<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>OPD Deployment</title>

      <script src="//code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
      <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
      <script src="_javascript/jquery-1.12.4.min.js" type="text/javascript"></script>

      <script>
      $(document).ready(function(){
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){

            window.location.hash = hash;
            });
          } // End if
      });
    });
    </script>

    <!-- Roboto -->
	  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/app.css">

  </head>

  <body>

    <header class="hero is-medium is-primary">
      <nav class="container">
          <div class="navbar">
            <div class="navbar-menu navbar-start">
              <h1><a href="https://onlinepd.teq.com/"><img class="navbar-item" src="assets/opd-fusion-of-technology-and-learning.svg" alt="OPD The Fusion of Technology and Learning" /></a></h1>
            </div>
            <div class="navbar-end">
              <a class="navbar-item" href="https://onlinepd.teq.com/">Online PD</a>
              <a class="navbar-item" href="https://onlinepd.teq.com/howto/videos">Help Center</a>
              <p class="navbar-item"><strong>877.455.9369</strong></p>
            </div>
          </div>
      </nav>
    </header>

    <section class="hero main section">
      <div class="hero-body" id="main-deployment-vid">
        <div class="container">
          <div class="content center-content">
            <h2>Welcome to Teq Online PD(<strong>Opd</strong>)! Watch the video below for a <strong>overview of our Online PD platform</strong> for both <strong class="pink-text">Educators</strong> and <strong class="green-text">Admin Users</strong>.</h2>

            <div class="inner-content">
              <script src="https://fast.wistia.com/embed/medias/2trousrlw7.jsonp" async></script>
              <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

              <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                  <div class="wistia_embed wistia_async_2trousrlw7 videoFoam=true" style="height:100%;position:relative;width:100%">
                    <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
                      <img src="https://fast.wistia.com/embed/medias/2trousrlw7/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" onload="this.parentNode.style.opacity=1;" />
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="columns is-mobile">
              <div class="column">
                <p>Section 1:</p>
                <button id="chapterOne">
                  <img src="assets/opd-deployment-chapter-button-1.jpg" />
                  <span><br />Opd Deployment</span>
                </button>
                <p class="green-text">Admin Users</p>
              </div>
              <div class="column">
                <p>Section 2:</p>
                <button id="chapterTwo">
                  <img src="assets/opd-deployment-chapter-button-2.jpg" />
                  <span>Opd Website Overview</span>
                </button>
                <p class="pink-text">Educators</p>
              </div>
              <div class="column">
                <p>Section 3:</p>
                <button id="chapterThree">
                  <img src="assets/opd-deployment-chapter-button-3.jpg" />
                  <span>Courses & Certifications</span>
                </button>
                <p class="pink-text">Educators</p>
              </div>
              <div class="column">
                <p>Section 4:</p>
                <button id="chapterFour">
                  <img src="assets/opd-deployment-chapter-button-4.jpg" />
                  <span>Admin Dashboard</span>
                </button>
                <p class="green-text">Admin Users</p>
              </div>
            </div>

            <script>
            window._wq = window._wq || [];

            //grab that video by tag
            _wq.push({
              id: "2trousrlw7",
              onReady: function(video) {
                console.log("I got a handle on the video - push it real good!", video);
              }
            });
            //use jquery to push the play function
            $("#chapterOne").click(function() {
              _wq.push({
                id: "2trousrlw7", onReady: function(video) {
                  video.time(96);
                  video.play();
                }
              });
            })
            $("#chapterTwo").click(function() {
              _wq.push({
                id: "2trousrlw7", onReady: function(video) {
                  video.time(205);
                  video.play();
                }
              });
            })
            $("#chapterThree").click(function() {
              _wq.push({
                id: "2trousrlw7", onReady: function(video) {
                  video.time(387);
                  video.play();
                }
              });
            })
            $("#chapterFour").click(function() {
              _wq.push({
                id: "2trousrlw7", onReady: function(video) {
                  video.time(542);
                  video.play();
                }
              });
            })
            </script>

          </div>
        </div>
      </div>
    </section>

    <section class="hero is-medium intro-header section padding-bottom">
      <div class="container">
        <div class="columns is-desktop">
          <div class="column is-half">
            <div class="content padding-bottom">
              <h1>Get Started with the <strong>Opd Platform</strong> today</h1>
              <div class="button-row">
                <a class="video" href="#main-deployment-vid">Watch the Video</a>
                <a class="pd" href="https://onlinepd.teq.com/">Visit Online PD (Opd)</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="columns">
          <div class="column is-two-fifths">
            <div class="content">
              <h1 class="white"><strong class="white">Questions?</strong><br />Request a feature.<br />Report a bug.</h1>
              <h6><a href="mailto:onlinepd@teq.com" class="teq-blue-text"><strong>OnlinePD@teq.com</strong></a></h6>
            </div>
          </div>
          <div class="column">
            <div class="content">
              <img src="assets/teq-logo.svg" alt="Teq" />
              <h6 class="white">7 Norden Lane<br />Huntington Station, NY<br />11766</h6>
              <h6><strong class="white">877.455.9369</strong></h6>
            </div>
          </div>
          <div class="column hide-small">
            <div class="content">
              <h6 class="white">Follow us on:</h6>
              <div class="navbar-start">
                <a class="navbar-item" href="https://www.facebook.com/myTeq/"><img src="assets/facebook-icon.svg" alt="facebook" /></a>
                <a class="navbar-item" href="https://twitter.com/TeqPD"><img src="assets/twitter-icon.svg" alt="twitter" /></a>
                <a class="navbar-item" href="https://plus.google.com/100123653505446384048"><img src="assets/google-plus-icon.svg" alt="google plus" /></a>
              </div>
            </div>
          </div>
        </div>
        <div class="columns is-desktop">
          <div class="column">
            <div class="content">
              <small class="white">Copyright © Teq 2018</small>
            </div>
          </div>
          <div class="column" id="skyrocket-in-flight">
            <img src="assets/opd-rockert-ship-1.svg" id="skyrocket-in-flight-1" />
            <img src="assets/opd-rockert-ship-2.svg" id="skyrocket-in-flight-2" />
            <img src="assets/opd-rockert-ship-3.svg" id="skyrocket-in-flight-3" />
            <img src="assets/opd-rockert-ship-4.svg" id="skyrocket-in-flight-4" />
            <img src="assets/opd-rockert-ship-5.svg" id="skyrocket-in-flight-5" />
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>
