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

  <!-- Video -->
  <div class="video-modal">
    <div class="video-wrapper">
      <button id="closeVideoStream" class="close-video-btn">
        <img src="assets/img/icons/cancel.svg" class="img-fluid" />
      </button>
      <div class="video-container">
        <div class="video-auto">
          <div class="vid-overlay">
            <button id="playVideoStream" class="toggle-vidoe-play">
              <img src="assets/img/icons/play-vd.svg" class="img-fluid" />
            </button>
          </div>
          <video id="videoPlayer">
            <source src="https://cdn.emaarmisr.com/wp-content/uploads/2021/04/Belle-Vie-TEXT-TOP.mp4" type="video/mp4">
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
    $(".video-modal").fadeIn(300);
  });

  $("#closeVideoStream").on('click', function () {
    var vid = $("#videoPlayer").get(0);
    vid.pause();
    $(".vid-overlay").addClass("active");
    $("#playVideoStream").find("img").attr("src", "assets/img/icons/play-vd.svg");
    $(".video-modal").fadeOut(300);
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
  $(".video-modal").fadeOut(400);
});
</script>
@endpush