@extends('index')

@section("content")
    <!-- Home Page -->
  <div class="main-bg"></div>
  <div class="wrapper">
    <div class="homepage">
      <nav id="nav">
        <div class="container-fluid">
          <div class="navbar">
            <div></div>
            <a href="{{ url('/') }}" class="nav-logo">
              <img src="{{ url('assets/img/logo.svg') }}" class="img-fluid" alt="" />
            </a>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="main-title text-uppercase d-flex align-items-center"><button id="fulscreenBtn"><img src="assets/img/icons/expand.svg" /></button> Advanced and integrated mobility </div>
        <div class="full-page">
          <div class="home-center text-center">
            <button id="openVideoStream" class="home-icon-col animate__animated animate__fadeInDown animate__delay-0s">
              <span class="icon-movie icon"></span>
              <div class="home-icon-title">Integrated Mobility</div>
            </button>
            <a href="{{ url('/interaction') }}" class="home-icon-col animate__animated animate__fadeInDown animate__delay-1s">
              <span class="icon-pen icon"></span>
              <div class="home-icon-title">Interactive Map</div>
            </a>
            <a href="{{ url('/signature') }}" class="home-icon-col animate__animated animate__fadeInDown animate__delay-2s">
              <span class="icon-signature icon"></span>
              <div class="home-icon-title">The Autograph Book</div>
            </a>
          </div>
        </div>
      </div>

      <footer id="footer">
        <div class="container-fluid height-fluid">
          <div class="footer-content height-fluid d-flex">
            <div class="fc-left">Saudi Aramco Mobility Center</div>
            <div class="fc-right"></div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Home Page -->

  <div class="video-collection-modal">
    <div class="vcm-wrapper">

      <button id="closeVideoCollection" class="close-video-btn">
        <img src="assets/img/icons/cancel.svg" class="img-fluid" />
      </button>

      <!-- Video Title -->
      <div class="vcm-title">Videos</div>
        
      <div class="vcm-collection">

        <!-- Add videos here -->
        {{-- <button class="vcm-card">
          <video>
            <source src="http://api.directorstudio.me/uploads/sliders/2021-03-03-03-46-45-0603faf653b96e-original.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="vcm-overlay">
            <div class="vcm-play">
              <img src="assets/img/icons/play.svg" class="img-fluid" />
            </div>
          </div>
        </button>

        <button class="vcm-card">
          <video>
            <source src="http://api.directorstudio.me/uploads/sliders/2021-03-03-03-46-45-0603faf653b96e-original.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="vcm-overlay">
            <div class="vcm-play">
              <img src="assets/img/icons/play.svg" class="img-fluid" />
            </div>
          </div>
        </button> --}}
        <!-- Add videos here -->

      </div>

    </div>
  </div>

  <!-- Video -->
  <div class="video-modal">
    <div class="video-wrapper">

      <button id="closeVideoStream" class="close-video-btn">
        <img src="assets/img/icons/cancel.svg" class="img-fluid" />
      </button>

      <div class="video-container">
        <div class="video-auto">

          <div class="vid-overlay-container">
            <div class="vid-overlay">
              <button id="playVideoStream" class="toggle-vidoe-play">
                <img src="assets/img/icons/play-vd.svg" class="img-fluid" />
              </button>
              <button id="reloadVideoStream" class="toggle-vidoe-play">
                <img src="assets/img/icons/reload.svg" class="img-fluid" />
              </button>
            </div>
          </div>

          <video id="videoPlayer" loop>
            <source src="{{ url('assets/img/aaa.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>

        </div>
      </div>
    </div>
  </div>
  <!-- Video -->
@endsection

@push('js')
<script type="text/javascript">
  $("#openVideoStream").on('click', function () {
    if ($(".vcm-card")[0]){
      $(".video-collection-modal").fadeIn(300);   
    } else {
      $(".video-modal").fadeIn(300);
    }
    $("body").css('overflowY', 'hidden');
  });

  $("#closeVideoStream").on('click', function () {
    var vid = $("#videoPlayer").get(0);
    vid.pause();
    $(".vid-overlay").addClass("active");
    $("#playVideoStream").find("img").attr("src", "assets/img/icons/play-vd.svg");
    // $(".video-modal").fadeOut(300);
    // $(".video-collection-modal").fadeIn(300);
    $("body").css('overflowY', 'auto');

    if ($(".vcm-card")[0]){
      $(".video-modal").fadeOut(300);
      $(".video-collection-modal").fadeIn(300);
    } else {
      $(".video-modal").fadeOut(300);
      $(".video-collection-modal").fadeOut(300);
    }
  });

  $("#closeVideoCollection").on('click', function () {
    $(".video-collection-modal").fadeOut(300);
    $("body").css('overflowY', 'auto');
  });

  $("#playVideoStream").on("click", function () {
    var vid = $("#videoPlayer").get(0);
    if (vid.paused) {
      vid.play();
      $(".vid-overlay").removeClass("active");
      $(this).find("img").attr("src", "assets/img/icons/pause-vd.svg");
    } else {
      vid.pause();
      $(".vid-overlay").addClass("active");
      $(this).find("img").attr("src", "assets/img/icons/play-vd.svg");
    }
  });

$("#videoPlayer").bind("ended", function () {
  $(".vid-overlay").addClass("active");
  $("#playVideoStream").find("img").attr("src", "assets/img/icons/play-vd.svg");
  // $("#videoPlayer").get(0).vid.pause();
  // $(".video-modal").fadeOut(400);
});

$("#reloadVideoStream").on('click', function() {
  $('#videoPlayer')[0].load();
  $('#videoPlayer')[0].play();
  $(".vid-overlay").addClass("active");
  $("#playVideoStream").find("img").attr("src", "assets/img/icons/pause-vd.svg");
});

$(".vcm-card").on('click', function () {
  var video = $(this).find('source').attr('src');
  var vid = $("#videoPlayer").get(0);
  vid.play();
  $("#videoPlayer").attr('src', video);
  $(".video-collection-modal").fadeOut(300);
  $(".video-modal").fadeIn(300);
});
</script>
@endpush
