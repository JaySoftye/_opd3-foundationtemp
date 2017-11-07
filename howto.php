<?php include 'header.php'; ?>
<?php include 'now-chat-window.php'; ?>

  <main>

    <section class="container-fluid under-header howto-color-bg">
      <div class="container">
        <div class="row padding-top">
          <div class="col">
            <ul class="nav profile-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">How it works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FAQ's</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="container padding-bottom">
      <div class="row padding-top">
        <div class="col">
          <h2>How-to <strong>Videos</strong></h2>
          <p>Here you have access to view all the How-to Videos on how to navigate our website.<br />Don't find your answers below? Click on the <a id="now-button-text" class="now-text"><strong>nOw</strong></a> button for help.</p>
        </div>
      </div>

      <script>
      // CLICK EVENT FOR NOW WINDOW; STORE IN FUNCTION
      $( "a#now-button-text" ).click(function() {
        $( "#now-chat-window" ).animate({
          width: '770',
          height: '440'
        }, 100, function() {
          $(this).css('z-index', 10010)
        });
      });
      </script>

      <div class="row padding-top">

          <article class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav">
                  <li class="nav-item category-sessions-details">
                    <span><strong>Add to Playlist</strong></span>
                  </li>
                  <li class="nav-item">
                  </li>
                </ul>
              </div>

              <div class="card-body" data-toggle="modal" data-target=".add-to-playlist"><span class="how-to-video-icon"></span><img src="https://l3561eb26.lwcdn.com/i/v-i-1c916b27-0d49-47d7-a277-39fa1995392c-high-1.jpg" style="cursor:pointer;" /></div>
              <div class="modal fade add-to-playlist" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add to Playlist</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="flowplayer">
                      <video>
                        <source type="application/x-mpegurl" src="https://l3561eb26.lwcdn.com/hls/1c916b27-0d49-47d7-a277-39fa1995392c/playlist.m3u8">
                        <source type="video/mp4" src="https://l3561eb26.lwcdn.com/v-1c916b27-0d49-47d7-a277-39fa1995392c.mp4">
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <article class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav">
                  <li class="nav-item category-sessions-details">
                    <span><strong>Chapters Screen</strong></span>
                  </li>
                  <li class="nav-item">
                  </li>
                </ul>
              </div>

              <div class="card-body" data-toggle="modal" data-target=".chapters-screen"><span class="how-to-video-icon"></span><img style="cursor:pointer;"  src="https://l3561eb26.lwcdn.com/i/v-i-0d2aa6c9-3528-4ace-9dd2-84ef85215ab7-high-1.jpg" /></div>

              <div class="modal fade chapters-screen" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Chapters Screen</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="flowplayer">
                      <video>
                        <source type="application/x-mpegurl" src="https://l3561eb26.lwcdn.com/hls/0d2aa6c9-3528-4ace-9dd2-84ef85215ab7/playlist.m3u8">
                        <source type="video/mp4" src="https://l3561eb26.lwcdn.com/v-0d2aa6c9-3528-4ace-9dd2-84ef85215ab7.mp4">
                      </video>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </article>

          <article class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav">
                  <li class="nav-item category-sessions-details">
                    <span><strong>Group Code</strong></span>
                  </li>
                  <li class="nav-item">
                  </li>
                </ul>
              </div>

              <div class="card-body" data-toggle="modal" data-target=".group-code"><span class="how-to-video-icon"></span><img style="cursor:pointer;"  src="https://l3561eb26.lwcdn.com/i/v-i-b38437a2-4762-4fce-9387-6dc1254c6e49-high-1.jpg" /></div>

              <div class="modal fade group-code" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Group Code</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="flowplayer">
                      <video>
                        <source type="application/x-mpegurl" src="https://l3561eb26.lwcdn.com/hls/b38437a2-4762-4fce-9387-6dc1254c6e49/playlist.m3u8">
                        <source type="video/mp4" src="https://l3561eb26.lwcdn.com/v-b38437a2-4762-4fce-9387-6dc1254c6e49.mp4">
                      </video>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </article>

          <article class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav">
                  <li class="nav-item category-sessions-details">
                    <span><strong>Quiz</strong></span>
                  </li>
                  <li class="nav-item">
                  </li>
                </ul>
              </div>

              <div class="card-body" data-toggle="modal" data-target=".taking-a-quiz"><span class="how-to-video-icon"></span><img style="cursor:pointer;"  src="https://l3561eb26.lwcdn.com/i/v-i-712eae8f-73ed-44eb-a51e-a8c77889b518-high-1.jpg" /></div>

              <div class="modal fade taking-a-quiz" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Quiz</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="flowplayer">
                      <video>
                        <source type="application/x-mpegurl" src="https://l3561eb26.lwcdn.com/hls/712eae8f-73ed-44eb-a51e-a8c77889b518/playlist.m3u8">
                        <source type="video/mp4" src="https://l3561eb26.lwcdn.com/v-712eae8f-73ed-44eb-a51e-a8c77889b518.mp4">
                      </video>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </article>

          <article class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav">
                  <li class="nav-item category-sessions-details">
                    <span><strong>Register for a Course</strong></span>
                  </li>
                  <li class="nav-item">
                  </li>
                </ul>
              </div>

              <div class="card-body" data-toggle="modal" data-target=".register-for-a-course"><span class="how-to-video-icon"></span><img style="cursor:pointer;"  src="https://l3561eb26.lwcdn.com/i/v-i-1a5f11d2-b19c-4795-a7d8-b4e64e2b1409-high-1.jpg" /></div>

              <div class="modal fade register-for-a-course" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Register for a Course</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="flowplayer">
                      <video>
                        <source type="application/x-mpegurl" src="https://l3561eb26.lwcdn.com/hls/1a5f11d2-b19c-4795-a7d8-b4e64e2b1409/playlist.m3u8">
                        <source type="video/mp4" src="https://l3561eb26.lwcdn.com/v-1a5f11d2-b19c-4795-a7d8-b4e64e2b1409.mp4">
                      </video>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </article>

          <article class="col-md-4">
            <div class="card">
              <div class="card-header">
                <ul class="nav">
                  <li class="nav-item category-sessions-details">
                    <span><strong>User Profile</strong></span>
                  </li>
                  <li class="nav-item">
                  </li>
                </ul>
              </div>

              <div class="card-body" data-toggle="modal" data-target=".user-profile"><span class="how-to-video-icon"></span><img style="cursor:pointer;"  src="https://l3561eb26.lwcdn.com/i/v-i-758711b0-fe1f-4df7-8287-d1d5f4248ae2-high-1.jpg" /></div>

              <div class="modal fade user-profile" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">User Profile</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="flowplayer">
                      <video>
                        <source type="application/x-mpegurl" src="https://l3561eb26.lwcdn.com/hls/758711b0-fe1f-4df7-8287-d1d5f4248ae2/playlist.m3u8">
                        <source type="video/mp4" src="https://l3561eb26.lwcdn.com/v-758711b0-fe1f-4df7-8287-d1d5f4248ae2.mp4">
                      </video>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </article>

      </div>
    </section>

  </main>

<?php include 'footer-certifications-bar.php'; ?>
