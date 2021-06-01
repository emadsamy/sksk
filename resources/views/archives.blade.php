@extends('index')

@section("content")
    <!-- Home Page -->
  <div class="wrapper">
    <div class="homepage">
      <nav id="nav">
        <div class="container-fluid">
          <div class="navbar">
            <div class="nav-title text-uppercase"></div>
            <a href="{{ url('/') }}" class="nav-logo">
              <img src="assets/img/logo.svg" class="img-fluid" alt="" />
              <span class="taller-line"></span>
            </a>
          </div>
        </div>
      </nav>

      <div class="timeline-container">
        <div class="container-fluid">
          <div class="main-title text-uppercase"><button id="fulscreenBtn"><img src="assets/img/icons/expand.svg" /></button> Advanced and integrated mobility</div>

          <!-- Slider -->
          <div class="timeline-wrapper">

            <div class="archive-row">
              <div class="archive-wrapper">
                <div class="achive-title mb-5">
                  <img src="assets/img/icons/archives.svg" class="img-fluid" /> 
                  <div class="title">Archives</div>
                </div>
                <div class="swiper-container">
                  <div id="dataGrid" class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach($data as $row)
                    <div class="swiper-slide">
                      <div class="swiper-slide-touchpad-card">
                        {{-- Must add php artisan storage:link to work --}}
                        <div class="swiper-touchpad-img">
                          <img src="{{ url('storage/signatures/' . $row->image_name) }}" class="img-fluid" alt="" />
                        </div>
                        <div class="touchpad-name">{{ $row->name }}</div>
                        <div class="touchpad-date">{{ $row->date }}</div>
                      </div>
                    </div>
                    @endforeach

                  </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-archive-arrows">
                  <div class="swiper-button swiper-button-prev"></div>
                  <div class="swiper-button swiper-button-next"></div>
                </div>
              </div>
            </div>

            <div class="swiper-arrows pt-3 d-flex">
              <a href="{{ url('/signature') }}" class="swiper-btn swiper-home-btn">
                <img src="assets/img/icons/home.svg" class="icon-home img-fluid" alt="">
              </a>
              <!-- <button id="showAllTabs">Show All</button> -->
            </div>
          </div>
        </div>
      </div>

      <footer id="footer">
        <div class="container-fluid height-fluid">
          <div class="footer-content height-fluid d-flex align-items-start">
            <div class="fc-left">Saudi Aramco Mobility Center</div>
            <div class="fc-right"></div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Home Page -->
@endsection

@push('css')
    <link rel="stylesheet" href="assets/css/interaction.css" />
  <link rel="stylesheet" href="assets/css/signature.css" />
  <style type="text/css">
    .swiper-touchpad-img {
      background: #fff;
      height: 150px;
      display: flex;
      justify-content: center;
      place-items: center;
      margin-bottom: 10px;
    }
    .swiper-touchpad-img img {
      height: 100%;
      width: auto !important;
      height: 100%;
      margin: 15px 0 ;
    }
    .achive-title img {
      width: 40px;
      margin-bottom: 10px
    }
    .achive-title .title {
      color: #fff;
      line-height: 1;
      font-size: 20px
    }
    @media (min-width: 3800px) and (min-height: 2100px) {
      .swiper-touchpad-img {
        height: 280px;
      }
    }
  </style>
@endpush

@push('js')
    <script>
    const aircrafts = new Swiper(`.swiper-container`, {
      // Optional parameters
      direction: 'horizontal',
      // init: true,
      // loop: true,
      speed: 700,
      // effect: "fade",
      // autoplayDisableOnInteraction: false,
      slidesPerView: 5,
      spaceBetween: 20,
      autoplay: false,
      slidesPerGroup: 1,
      // allowTouchMove: false,
      // slideToClickedSlide: true,
      // observer: true,
      observeParents: true,
      // parallax: true,
      watchSlidesVisibility: true,
      observer: true,
      // freeModeMomentum: true,

      // Navigation arrows
      navigation: {
        nextEl: `.swiper-button-next`,
        prevEl: `.swiper-button-prev`,
      },
    });
  </script>

  <script type="text/javascript">
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      });
    // Fetch Data
    // function fetchData() {
    //     $.ajax({
    //         url: "{{ url('/fetch-signatures') }}",
    //         type: "GET",
    //         success: function (data) {
    //             console.log(data);
    //             var htmlData = '';
    //             if (data.data) {
    //                 for (let x = 0; x < data.data.length; x++) {
    //                     htmlData += `<div class="swiper-slide">
    //                   <div class="swiper-slide-touchpad-card">
    //                     <img src="${data.data[x].image_path}" class="img-fluid" alt="" />
    //                     <div class="touchpad-name">${data.data[x].name}</div>
    //                     <div class="touchpad-date">${data.data[x].date}</div>
    //                   </div>
    //                 </div>`;
    //                 }
    //             }
    //             $("#dataGrid").html(htmlData);
    //         }
    //     });
    // }
    // fetchData();
  </script>
@endpush