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
              <img src="{{ url('assets/img/logo.svg') }}" class="img-fluid" alt="" />
              <span class="taller-line"></span>
            </a>
          </div>
        </div>
      </nav>

      <div class="timeline-container">
        <div class="container-fluid">
          <div class="main-title text-uppercase d-flex align-items-center"><button id="fulscreenBtn"><img src="assets/img/icons/expand.svg" /></button> Advanced and integrated mobility</div>

          <!-- Slider -->
          <div class="timeline-wrapper">

            <div class="timeline-preview-row">

              <!-- Left Data -->
              <div class="timeline-left-info">
                <div class="tli-content">
                  <div class="slide-info">

                    <!-- Tabs -->
                    <div class="main-tabs">
                      <button class="tab-header-wi " data-container="#viewLocationContainer"
                        data-main-tab="#infrastructure">
                        <span class="icon-pen icon"></span>
                        <div class="title">infrastructure</div>
                      </button>

                      <div id="infrastructure" class="ss-body-text ss-body-text-first">
                        <div data-child-tab="#airportsMarkers" class="child-tab-title"><span
                            class="icon-play icon"></span> Airports</div>
                        <div data-child-tab="#piersMarkers" class="child-tab-title"><span class="icon-play icon"></span>
                          Piers</div>
                      </div>

                      <button data-container="#slideshowContainer" class="tab-header-wi " data-main-tab="#vehicles">
                        <span class="icon-vehicles icon"></span>
                        <div class="title">Vehicles</div>
                      </button>

                      <div id="vehicles" class="ss-body-text  ss-body-text-last">
                        <div id="landVehiclesBtn" class="child-tab-title"><span class="icon-play icon"></span> Land Vehicles</div>
                        <div class="child-tabs">
                          <div class="flex-wrap">
                            <div data-child-tab="#slideshowBus" class="inside-child-tab">Buses
                            </div>
                            <div data-child-tab="#slideshowCars" class="inside-child-tab">Cars </div>
                            <div data-child-tab="#slideshowHeavyEquipments" class="inside-child-tab">Heavy Equipment
                            </div>
                          </div>
                        </div>
                        <div data-child-tab="#waterCrafts" class="child-tab-title child-tab-title-second"><span class="icon-play icon"></span>
                          Watercrafts</div>
                        <div data-child-tab="#aircrafts" class="child-tab-title"><span class="icon-play icon"></span>
                          Aircrafts</div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <!-- Right Data -->
              <div class="timeline-right-preview">
                <!-- Location Preview -->
                <div id="viewLocationContainer" class="toggle-sh-tp-container">
                  <div class="tr-view-outer d-inline-block">
                    <img id="timeline-location" src="{{ url('assets/img/locations/main-location.svg') }}"
                      class="timeline-location img-fluid" alt="" />

                    <!-- Airport Markers -->
                    <div id="airportsMarkers" class="airports-markers-container child-tab-container">
                      <div class="am-shape am-shape-1 animate__animated animate__fadeInUp animate__delay-1s">
                        <img src="{{ url('assets/img/icons/pen-gold.svg') }}" class="am-icon img-fluid" alt="" />
                        <div>
                          <div class="am-title">Tanajib Airport</div>
                          <div class="am-date">Established in 1986</div>
                        </div>
                      </div>

                      <div class="am-shape am-shape-2 animate__animated animate__fadeInUp animate__delay-2s">
                        <img src="{{ url('assets/img/icons/pen-gold.svg') }}" class="am-icon img-fluid" alt="" />
                        <div>
                          <div class="am-title">Ras Tanura</div>
                          <div class="am-date">Established in 1986</div>
                        </div>
                      </div>

                      <div class="am-shape am-shape-3 animate__animated animate__fadeInUp animate__delay-3s">
                        <img src="{{ url('assets/img/icons/pen-gold.svg') }}" class="am-icon img-fluid" alt="" />
                        <div>
                          <div class="am-title">Abqaiq Airport</div>
                          <div class="am-date">Established in 1995</div>
                        </div>
                      </div>

                      <div class="am-shape am-shape-4 animate__animated animate__fadeInUp animate__delay-4s">
                        <img src="{{ url('assets/img/icons/pen-gold.svg') }}" class="am-icon img-fluid" alt="" />
                        <div>
                          <div class="am-title">Udhailiyah Airport</div>
                          <div class="am-date">Established in 1992</div>
                        </div>
                      </div>

                      <div class="am-shape am-shape-5 animate__animated animate__fadeInUp animate__delay-5s">
                        <img src="{{ url('assets/img/icons/pen-gold.svg') }}" class="am-icon img-fluid" alt="" />
                        <div>
                          <div class="am-title">Haradh Airport</div>
                          <div class="am-date">Established in 2003</div>
                        </div>
                      </div>

                      <div class="am-shape am-shape-6 animate__animated animate__fadeInUp animate__delay-6s">
                        <img src="{{ url('assets/img/icons/pen-gold.svg') }}" class="am-icon img-fluid" alt="" />
                        <div>
                          <div class="am-title">Shaybah Airport</div>
                          <div class="am-date">Established in 1998</div>
                        </div>
                      </div>

                      <div class="am-shape am-shape-7 animate__animated animate__fadeInUp animate__delay-7s">
                        <img src="{{ url('assets/img/icons/pen-gold.svg') }}" class="am-icon img-fluid" alt="" />
                        <div>
                          <div class="am-title">Khurais Airport</div>
                          <div class="am-date">Established in 2008</div>
                        </div>
                      </div>

                      <div class="am-shape am-shape-8 animate__animated animate__fadeInUp animate__delay-8s">
                        <img src="{{ url('assets/img/icons/pen-gold.svg') }}" class="am-icon img-fluid" alt="" />
                        <div>
                          <div class="am-title">Pump Station <br /> 3 Airport</div>
                          <div class="am-date">Established in 1980</div>
                        </div>
                      </div>

                      <div class="am-shape am-shape-9 animate__animated animate__fadeInUp animate__delay-9s">
                        <img src="{{ url('assets/img/icons/pen-gold.svg') }}" class="am-icon img-fluid" alt="" />
                        <div>
                          <div class="am-title">Al Hawtah Airport</div>
                          <div class="am-date">Established in 1993</div>
                        </div>
                      </div>

                      <div class="am-shape am-shape-10 animate__animated animate__fadeInUp animate__delay-10s">
                        <img src="{{ url('assets/img/icons/pen-gold.svg') }}" class="am-icon img-fluid" alt="" />
                        <div>
                          <div class="am-title">Pump Station <br /> 6 Airport</div>
                          <div class="am-date">Established in 1980</div>
                        </div>
                      </div>

                      <div class="am-shape am-shape-11 animate__animated animate__fadeInUp animate__delay-11s">
                        <img src="{{ url('assets/img/icons/pen-gold.svg') }}" class="am-icon img-fluid" alt="" />
                        <div>
                          <div class="am-title">Pump Station <br /> 10 Airport</div>
                          <div class="am-date">Established in 1980</div>
                        </div>
                      </div>
                    </div>
                    <!-- Airport Markers -->

                    <!-- Piers Markers -->
                    <div id="piersMarkers" class="piers-markers-container  child-tab-container">
                      <div class="pm-shape pm-shape-1 animate__animated animate__fadeInUp animate__delay-1s">
                        <img src="{{ url('assets/img/icons/pier.svg') }}" class="pm-icon img-fluid" alt="" />
                        <div>
                          <div class="pm-title">Tanajib</div>
                          <div class="pm-date">Established in 1983</div>
                        </div>
                      </div>

                      <div class="pm-shape pm-shape-2 animate__animated animate__fadeInUp animate__delay-3s">
                        <img src="{{ url('assets/img/icons/pier.svg') }}" class="pm-icon img-fluid" alt="" />
                        <div>
                          <div class="pm-title">West Pier</div>
                          <div class="pm-date">Established in 1930</div>
                        </div>
                      </div>

                      <div class="pm-shape pm-shape-3 animate__animated animate__fadeInUp animate__delay-2s">
                        <img src="{{ url('assets/img/icons/pier.svg') }}" class="pm-icon img-fluid" alt="" />
                        <div>
                          <div class="pm-title">Abu Ali</div>
                          <div class="pm-date"></div>
                        </div>
                      </div>

                      <div class="pm-shape pm-shape-4 animate__animated animate__fadeInUp animate__delay-4s">
                        <img src="{{ url('assets/img/icons/pier.svg') }}" class="pm-icon img-fluid" alt="" />
                        <div>
                          <div class="pm-title">Duba</div>
                          <div class="pm-date"></div>
                        </div>
                      </div>

                      <div class="pm-shape pm-shape-5 animate__animated animate__fadeInUp animate__delay-5s">
                        <img src="{{ url('assets/img/icons/pier.svg') }}" class="pm-icon img-fluid" alt="" />
                        <div>
                          <div class="pm-title">Jeddah</div>
                          <div class="pm-date">Established in 1953</div>
                        </div>
                      </div>

                      <div class="pm-shape pm-shape-6 animate__animated animate__fadeInUp animate__delay-6s">
                        <img src="{{ url('assets/img/icons/pier.svg') }}" class="pm-icon img-fluid" alt="" />
                        <div>
                          <div class="pm-title">Jazan</div>
                          <div class="pm-date"></div>
                        </div>
                      </div>
                    </div>
                    <!-- Piers Markers -->
                  </div>
                </div>

                <!-- Slider Preview -->
                <div id="slideshowContainer" class="slideshow-container  toggle-sh-tp-container">

                  <div class="vehicles-sliders">
                    <!-- Slider Buses -->
                    <div id="slideshowBus" class="slideshow-row slideshow-buses child-tab-container">

                      <div class="slideshow-arrows slideshow-arrows-buses">
                        <button class="slideshow-arrow-btn sbus-next-btn">
                          <img src="{{ url('assets/img/icons/left-chevron.svg') }}" class="img-fluid" alt="" />
                        </button>

                        <button class="slideshow-arrow-btn sbus-prev-btn">
                          <img src="{{ url('assets/img/icons/right-chevron.svg') }}" class="img-fluid" alt="" />
                        </button>
                      </div>

                      <div class="swiper-container">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <div class="swiper-slide-card">
                              <div class="ss-vehicle-view">
                                <img src="{{ url('assets/img/vehicles_imgs/big_bus.png') }}" class="img-fluid" alt="" />
                              </div>
                              <div class="ss-vehicle-data">
                                <div class="ss-vehicle-bus">
                                  <div class="vehicle-bus-title">Big Bus</div>
                                  <div class="vehicle-bus-grid">
                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/length.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Bus Length</div>
                                        <div class="vb-desc">12180 mm</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/fule_type.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Fuel Type</div>
                                        <div class="vb-desc">Diesel</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/fuel_range.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Average Fuel Range</div>
                                        <div class="vb-desc">12180 mm</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/horsepower.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Engine name</div>
                                        <div class="vb-desc">OM 457/Euro III Diesel Engine</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/torque.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Engine Torque</div>
                                        <div class="vb-desc">2100 Nm @ 1100 rpm</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/height.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Bus Height</div>
                                        <div class="vb-desc">3710 mm</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/tank.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Fuel Tank Capacity</div>
                                        <div class="vb-desc">460 L to 490 L</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/manufacture.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Manufacturer model Name</div>
                                        <div class="vb-desc">Travego 15 RHD 457.951 LA</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/speed.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Maximum Speed</div>
                                        <div class="vb-desc">100</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/tires.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Number of tires</div>
                                        <div class="vb-desc">6</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/width.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Bus width</div>
                                        <div class="vb-desc">2550 mm</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{  url('assets/img/vehicles_icons/users.svg')}}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Maximum passengers</div>
                                        <div class="vb-desc">49 / With WC - 47</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/calendar.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Manufacture date</div>
                                        <div class="vb-desc">2012</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/horsepower.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Engine Horsepower</div>
                                        <div class="vb-desc">310 kW (415 hp) @ 1800 rpm</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/cylinder.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Number of cylinders (engine)</div>
                                        <div class="vb-desc">6 Cylinder (Inline Type)</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Slide -->
                          <div class="swiper-slide">
                            <div class="swiper-slide-card">
                              <div class="ss-vehicle-view">
                                <img src="{{ url('assets/img/vehicles_imgs/mini_bus.png') }}" class="img-fluid" alt="" />
                              </div>
                              <div class="ss-vehicle-data">
                                <div class="ss-vehicle-bus">
                                  <div class="vehicle-bus-title">Mini Bus</div>
                                  <div class="vehicle-bus-grid">
                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/length.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Bus Length</div>
                                        <div class="vb-desc">7742 mm</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/fule_type.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Fuel Type</div>
                                        <div class="vb-desc">Gasoline 95</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/manufacture.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Manufacturer model Name</div>
                                        <div class="vb-desc">Sprinter Transfer BM 906</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/horsepower.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Engine Horsepower </div>
                                        <div class="vb-desc">190 kW (256 hp)</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/cylinder.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Number of cylinders (engine) </div>
                                        <div class="vb-desc">6 Cylinder (V Type)</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/height.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Bus Height </div>
                                        <div class="vb-desc">2800 mm</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/tank.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Fuel Tank Capacity </div>
                                        <div class="vb-desc">100 L</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/horsepower.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Engine name </div>
                                        <div class="vb-desc">M 272.979 Gasoline Engine</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/torque.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Engine Torque</div>
                                        <div class="vb-desc">350 Nm @ 2500-5000 rpm</div>
                                      </div>
                                    </div>

                                    <div class="vb-card"></div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/width.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Bus width</div>
                                        <div class="vb-desc">1990 mm</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/fuel_range.svg') }}" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Average Fuel Range</div>
                                        <div class="vb-desc">0.30 L/Km</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/speed.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Maximum Speed </div>
                                        <div class="vb-desc">100</div>
                                      </div>
                                    </div>

                                    <div class="vb-card">
                                      <div>
                                        <img src="{{ url('assets/img/vehicles_icons/tires.svg') }}" class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vb-title">Number of tires </div>
                                        <div class="vb-desc">6</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    <!-- Slider Buses -->

                    <!-- Slider Cars -->
                    <div id="slideshowCars" class="slideshow-row slideshow-cars child-tab-container">

                      <div class="slideshow-arrows slideshow-arrows-cars">
                        <button class="slideshow-arrow-btn scar-next-btn">
                          <img src="assets/img/icons/left-chevron.svg" class="img-fluid" alt="" />
                        </button>

                        <button class="slideshow-arrow-btn scar-prev-btn">
                          <img src="assets/img/icons/right-chevron.svg" class="img-fluid" alt="" />
                        </button>
                      </div>

                      <div class="swiper-container">
                        <div class="swiper-wrapper">

                          <!-- Slide -->
                          <div class="swiper-slide">
                            <div class="swiper-slide-card">
                              <div class="ss-vehicle-view">
                                <img src="assets/img/vehicles_imgs/taxi.png" class="vehicle-view-car img-fluid"
                                  alt="" />
                              </div>
                              <div class="ss-vehicle-data">
                                <div class="ss-vehicle-car">
                                  <div class="vehicle-car-title">Taxi</div>
                                  <div class="vehicle-car-grid">
                                    <div class="vc-card">
                                      <div>
                                        <img src="assets/img/vehicles_icons/cars/taxi.svg" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vc-title">Total Taxi Cars </div>
                                        <div class="vc-desc">309</div>
                                      </div>
                                    </div>

                                    <div class="vc-card">
                                      <div>
                                        <img src="assets/img/vehicles_icons/cars/taxi_requests.svg"
                                          class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vc-title">Taxi Requests </div>
                                        <div class="vc-desc">155k+</div>
                                      </div>
                                    </div>

                                    <div class="vc-card">
                                      <div>
                                        <img src="assets/img/vehicles_icons/cars/rate.svg" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vc-title">Taxi Average Rejection Rate</div>
                                        <div class="vc-desc"> 0.6%</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Slide -->
                          <div class="swiper-slide">
                            <div class="swiper-slide-card">
                              <div class="ss-vehicle-view">
                                <img src="assets/img/vehicles_imgs/car_sharing.png" class="vehicle-view-car img-fluid"
                                  alt="" />
                              </div>
                              <div class="ss-vehicle-data">
                                <div class="ss-vehicle-car">
                                  <div class="vehicle-car-title">CarSharing</div>
                                  <div class="vehicle-car-grid">
                                    <div class="vc-card">
                                      <div>
                                        <img src="assets/img/vehicles_icons/cars/taxi.svg" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vc-title">Total Car Sharing Users</div>
                                        <div class="vc-desc">16K</div>
                                      </div>
                                    </div>

                                    <div class="vc-card">
                                      <div>
                                        <img src="assets/img/vehicles_icons/cars/shareing_trips.svg"
                                          class="icon img-fluid" alt="" />
                                      </div>
                                      <div>
                                        <div class="vc-title">Total Car Sharing Trips </div>
                                        <div class="vc-desc">51,732</div>
                                      </div>
                                    </div>

                                    <div class="vc-card">
                                      <div>
                                        <img src="assets/img/vehicles_icons/cars/car.svg" class="icon img-fluid"
                                          alt="" />
                                      </div>
                                      <div>
                                        <div class="vc-title">Total Car Sharing Driven</div>
                                        <div class="vc-desc">1,279,460 km</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <!-- Heavy Equipment -->
                    <div id="slideshowHeavyEquipments"
                      class="slideshow-row slideshow-heavy-equipment child-tab-container">

                      <div class="slideshow-arrows slideshow-arrows-heavy-equipment">
                        <button class="slideshow-arrow-btn sheavyEm-next-btn">
                          <img src="assets/img/icons/left-chevron.svg" class="img-fluid" alt="" />
                        </button>

                        <button class="slideshow-arrow-btn sheavyEm-prev-btn">
                          <img src="assets/img/icons/right-chevron.svg" class="img-fluid" alt="" />
                        </button>
                      </div>

                      <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <!-- Slide -->
                          <div class="swiper-slide swiper-slide swiper-slide-col-parent swiper-slide-col-he">
                            <div class="swiper-slide-col">
                              <img src="assets/img/vehicles_imgs/arial_bucket_trucks.png"
                                class="swiper-slide-col-img img-fluid" alt="" />
                              <div class="swiper-slide-col-title">Aerial Bucket Trucks</div>
                              <div class="swiper-slide-col-details">
                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/fule_type.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Engine </div>
                                    <div class="ss-col-dicons-desc">Volvo D13a Engine - 6 cylinders inline / Volvo
                                      Engine 400HP @ 1400-1800 RPM with
                                      MAX speed 88 km/h</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/ships/crane.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Crane</div>
                                    <div class="ss-col-dicons-desc">Articulated boom of 15.2 m height, 2-man bucket of
                                      272 kg capacity</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Slide -->

                          <!-- Slide -->
                          <div class="swiper-slide swiper-slide-col-parent swiper-slide-col-he">
                            <div class="swiper-slide-col">
                              <img src="assets/img/vehicles_imgs/flatbed.png" class="swiper-slide-col-img img-fluid"
                                alt="" />
                              <div class="swiper-slide-col-title">Flatbed Crane Trucks</div>
                              <div class="swiper-slide-col-details">
                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/fule_type.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Engine </div>
                                    <div class="ss-col-dicons-desc">Volvo D13a Engine - 6 cylinders inline / Volvo
                                      Volvo D13A - 6 Cylinders in line / 400 HP with MAX speed 90 km/h</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/ships/crane.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Crane</div>
                                    <div class="ss-col-dicons-desc">Max working radius 19.6m /Max working height 22.6m
                                      /Max lifting height 21.8m</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Slide -->

                          <!-- Slide -->
                          <div class="swiper-slide swiper-slide-col-parent swiper-slide-col-he">
                            <div class="swiper-slide-col">
                              <img src="assets/img/vehicles_imgs/wireline.png" class="swiper-slide-col-img img-fluid"
                                alt="" />
                              <div class="swiper-slide-col-title">Wireline Trucks</div>
                              <div class="swiper-slide-col-details">
                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/fule_type.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Engine </div>
                                    <div class="ss-col-dicons-desc">Cummins ISM-385 Euro 3, 380@1900, 6 Cylinders in
                                      line with MAX speed of 105 km/h</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/ships/crane.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Crane</div>
                                    <div class="ss-col-dicons-desc">Hydraulically operated, telescope boom crane from
                                      National Crane 690H series or equivalent 18 metric ton capacity (capable to carry
                                      360 Kg @ 90 ft boom length)</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Slide -->

                        </div>
                      </div>
                    </div>
                    <!-- Heavy Equipment -->

                    <!-- WaterCrafts -->
                    <div id="waterCrafts" class="slideshow-row slideshow-watercrafts child-tab-container">

                      <div class="slideshow-arrows slideshow-arrows-watercrafts">
                        <button class="slideshow-arrow-btn wc-next-btn">
                          <img src="assets/img/icons/left-chevron.svg" class="img-fluid" alt="" />
                        </button>

                        <button class="slideshow-arrow-btn wc-prev-btn">
                          <img src="assets/img/icons/right-chevron.svg" class="img-fluid" alt="" />
                        </button>
                      </div>

                      <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <!-- Slide -->
                          <div class="swiper-slide swiper-slide swiper-slide-col-parent swiper-slide-col-wc">
                            <div class="swiper-slide-col">
                              <img src="assets/img/vehicles_imgs/karan8.png" class="swiper-slide-col-img img-fluid"
                                alt="" />
                              <div class="swiper-slide-col-title">KARAN 8</div>
                              <div class="swiper-slide-col-details">
                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/fule_type.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Type</div>
                                    <div class="ss-col-dicons-desc">Hydrographic Survey</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/calendar.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Year</div>
                                    <div class="ss-col-dicons-desc">1994</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/length.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Length</div>
                                    <div class="ss-col-dicons-desc">65.3 M</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/manufacture.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Main Engines </div>
                                    <div class="ss-col-dicons-desc">3830 HP</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/speed.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Avg. Speed</div>
                                    <div class="ss-col-dicons-desc">10.00 knot</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Slide -->

                          <!-- Slide -->
                          <div class="swiper-slide swiper-slide swiper-slide-col-parent swiper-slide-col-wc">
                            <div class="swiper-slide-col">
                              <img src="assets/img/vehicles_imgs/abqaiq.png" class="swiper-slide-col-img img-fluid"
                                alt="" />
                              <div class="swiper-slide-col-title">ABQAIQ</div>
                              <div class="swiper-slide-col-details">
                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/fule_type.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Type</div>
                                    <div class="ss-col-dicons-desc">Tug Boat</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/calendar.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Year</div>
                                    <div class="ss-col-dicons-desc">1981</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/length.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Length</div>
                                    <div class="ss-col-dicons-desc">35.82 M</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/manufacture.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Main Engines </div>
                                    <div class="ss-col-dicons-desc"> 2100 HP</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/speed.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Avg. Speed</div>
                                    <div class="ss-col-dicons-desc">12.00 knot</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Slide -->

                          <!-- Slide -->
                          <div class="swiper-slide swiper-slide swiper-slide-col-parent swiper-slide-col-wc">
                            <div class="swiper-slide-col">
                              <img src="assets/img/vehicles_imgs/midyan.png" class="swiper-slide-col-img img-fluid"
                                alt="" />
                              <div class="swiper-slide-col-title">MIDYAN</div>
                              <div class="swiper-slide-col-details">
                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/fule_type.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Type</div>
                                    <div class="ss-col-dicons-desc">Pollution Control Boat</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/calendar.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Year</div>
                                    <div class="ss-col-dicons-desc">2000</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/length.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Length</div>
                                    <div class="ss-col-dicons-desc">69.20 M</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/speed.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Avg. Speed</div>
                                    <div class="ss-col-dicons-desc">11.00 knot</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Slide -->

                          <!-- Slide -->
                          <div class="swiper-slide swiper-slide swiper-slide-col-parent swiper-slide-col-wc">
                            <div class="swiper-slide-col">
                              <img src="assets/img/vehicles_imgs/tanajib.png" class="swiper-slide-col-img img-fluid"
                                alt="" />
                              <div class="swiper-slide-col-title">TANAJIB</div>
                              <div class="swiper-slide-col-details">
                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/fule_type.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Type</div>
                                    <div class="ss-col-dicons-desc">Docking Tug </div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/calendar.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Year</div>
                                    <div class="ss-col-dicons-desc">1966</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/length.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Length</div>
                                    <div class="ss-col-dicons-desc">37.52M</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/manufacture.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Main Engines </div>
                                    <div class="ss-col-dicons-desc"> 6168 HP</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/speed.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Avg. Speed</div>
                                    <div class="ss-col-dicons-desc">11.50 knot</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Slide -->

                          <!-- Slide -->
                          <div class="swiper-slide swiper-slide swiper-slide-col-parent swiper-slide-col-wc">
                            <div class="swiper-slide-col">
                              <img src="assets/img/vehicles_imgs/ABU-HADRIYAH.png"
                                class="swiper-slide-col-img img-fluid" alt="" />
                              <div class="swiper-slide-col-title">ABU HADRIYAH</div>
                              <div class="swiper-slide-col-details">
                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/fule_type.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Type</div>
                                    <div class="ss-col-dicons-desc">Docking Tug</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/calendar.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Year</div>
                                    <div class="ss-col-dicons-desc">1982</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/length.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Length</div>
                                    <div class="ss-col-dicons-desc">35.81 M</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/manufacture.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Main Engines </div>
                                    <div class="ss-col-dicons-desc"> 4610 HP</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/speed.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Avg. Speed</div>
                                    <div class="ss-col-dicons-desc">10.50 knot</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Slide -->

                        </div>
                      </div>
                    </div>
                    <!-- WaterCrafts -->

                    <!-- Aircrafts -->
                    <div id="aircrafts" class="slideshow-row slideshow-aircrafts child-tab-container">

                      <div class="slideshow-arrows slideshow-arrows-aircrafts">
                        <button class="slideshow-arrow-btn ac-next-btn">
                          <img src="assets/img/icons/left-chevron.svg" class="img-fluid" alt="" />
                        </button>

                        <button class="slideshow-arrow-btn ac-prev-btn">
                          <img src="assets/img/icons/right-chevron.svg" class="img-fluid" alt="" />
                        </button>
                      </div>

                      <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <!-- Slide -->
                          <div class="swiper-slide swiper-slide swiper-slide-col-parent swiper-slide-col-ac">
                            <div class="swiper-slide-col">
                              <img src="assets/img/vehicles_imgs/agusta.png" class="swiper-slide-col-img img-fluid"
                                alt="" />
                              <div class="swiper-slide-col-title">Agusta AW139</div>
                              <div class="swiper-slide-col-sub-title">Operated 2010 - Present</div>
                              <div class="swiper-slide-col-details">
                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/airplane.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Cruise Speed</div>
                                    <div class="ss-col-dicons-desc">20 km</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/speed.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Takeoff Weight</div>
                                    <div class="ss-col-dicons-desc">20 kg</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/manufacture.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Engine Horsepower</div>
                                    <div class="ss-col-dicons-desc">20 hp</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/altitude.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Altitude</div>
                                    <div class="ss-col-dicons-desc">20 feet</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/location.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Range</div>
                                    <div class="ss-col-dicons-desc">20 nm</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/fleet.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Number in Fleet</div>
                                    <div class="ss-col-dicons-desc">20</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/users.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Number of Passengers</div>
                                    <div class="ss-col-dicons-desc">20</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Slide -->

                          <!-- Slide -->
                          <div class="swiper-slide swiper-slide swiper-slide-col-parent swiper-slide-col-ac">
                            <div class="swiper-slide-col">
                              <img src="assets/img/vehicles_imgs/airtractor.png" class="swiper-slide-col-img img-fluid"
                                alt="" />
                              <div class="swiper-slide-col-title">AirTractor 800</div>
                              <div class="swiper-slide-col-sub-title">Operated 1996 - Present</div>
                              <div class="swiper-slide-col-details">
                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/airplane.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Cruise Speed</div>
                                    <div class="ss-col-dicons-desc">191 mph</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/speed.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Takeoff Weight</div>
                                    <div class="ss-col-dicons-desc">16,000 Ib</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/manufacture.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Engine</div>
                                    <div class="ss-col-dicons-desc">PT6A-67AG</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/manufacture.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Engine Thrust</div>
                                    <div class="ss-col-dicons-desc">1,350 shp</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/altitude.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Altitude</div>
                                    <div class="ss-col-dicons-desc">12,500 feet</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/location.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Range</div>
                                    <div class="ss-col-dicons-desc">610 nm</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/fleet.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Number in Fleet</div>
                                    <div class="ss-col-dicons-desc">3 Aircraft</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/hopper.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Max Hopper Load</div>
                                    <div class="ss-col-dicons-desc">8,800 Ib</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Slide -->

                          <!-- Slide -->
                          <div class="swiper-slide swiper-slide swiper-slide-col-parent swiper-slide-col-ac">
                            <div class="swiper-slide-col">
                              <img src="assets/img/vehicles_imgs/airbus.png" class="swiper-slide-col-img img-fluid"
                                alt="" />
                              <div class="swiper-slide-col-title">Airbus H145</div>
                              <div class="swiper-slide-col-sub-title">Operated 2018 - Present</div>
                              <div class="swiper-slide-col-details">
                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/airplane.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Cruise Speed</div>
                                    <div class="ss-col-dicons-desc">150 kts</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/speed.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Takeoff Weight</div>
                                    <div class="ss-col-dicons-desc">8,157 Ib</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/manufacture.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Engine</div>
                                    <div class="ss-col-dicons-desc">Turbomeca Arriel 2E</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/manufacture.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Engine Thrust</div>
                                    <div class="ss-col-dicons-desc">771 shp</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/altitude.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Altitude</div>
                                    <div class="ss-col-dicons-desc">20,000 feet</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/location.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Range</div>
                                    <div class="ss-col-dicons-desc">352 nm</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/fleet.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Number in Fleet</div>
                                    <div class="ss-col-dicons-desc">5 Aircraft</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/users.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Number of Passengers</div>
                                    <div class="ss-col-dicons-desc">8 Passengers</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Slide -->

                          <!-- Slide -->
                          <div class="swiper-slide swiper-slide swiper-slide-col-parent swiper-slide-col-ac">
                            <div class="swiper-slide-col">
                              <img src="assets/img/vehicles_imgs/boieng.png" class="swiper-slide-col-img img-fluid"
                                alt="" />
                              <div class="swiper-slide-col-title">Boeing 800-737</div>
                              <div class="swiper-slide-col-sub-title">Operated 2017 - Present</div>
                              <div class="swiper-slide-col-details">
                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/airplane.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Cruise Speed</div>
                                    <div class="ss-col-dicons-desc">0.789 Ma</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/speed.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Takeoff Weight</div>
                                    <div class="ss-col-dicons-desc">174,200 Ib</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/manufacture.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Engine</div>
                                    <div class="ss-col-dicons-desc">CFM56 - 7B26</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/manufacture.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Engine Thrust</div>
                                    <div class="ss-col-dicons-desc">26,000 Ibf</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/altitude.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Altitude</div>
                                    <div class="ss-col-dicons-desc">41,000 feet</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/location.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Maximum Range</div>
                                    <div class="ss-col-dicons-desc">2,935 nm</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/airplanes/fleet.svg" class="icon img-fluid"
                                      alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Number in Fleet</div>
                                    <div class="ss-col-dicons-desc">6 Aircraft</div>
                                  </div>
                                </div>

                                <div class="ss-col-dicons">
                                  <div>
                                    <img src="assets/img/vehicles_icons/users.svg" class="icon img-fluid" alt="" />
                                  </div>
                                  <div>
                                    <div class="ss-col-dicons-title">Max Hopper Load</div>
                                    <div class="ss-col-dicons-desc">168 premium economy</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Slide -->

                        </div>
                      </div>
                    </div>
                    <!-- Aircrafts -->

                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-arrows pt-3 d-flex">
              <a href="{{ url('/') }}" class="swiper-btn swiper-home-btn">
                <img src="assets/img/icons/home.svg" class="icon-home img-fluid" alt="">
              </a>
              <button id="showAllTabs" class="swiper-btn">
                <img src="assets/img/icons/arrow-left.svg" class="img-fluid" alt="">
              </button>
              <button class="toggle-tabs-prev swiper-btn"  disabled="true">
                <img src="assets/img/icons/left-arrow.svg" class="img-fluid" alt="">
              </button>
              <button class="toggle-tabs-next swiper-btn" disabled="true">
                <img src="assets/img/icons/right-arrow.svg" class="img-fluid" alt=""></button>
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
  <!-- Interaction -->
@endsection

@push('css')
    <link rel="stylesheet" href="assets/css/interaction.css" />
@endpush

@push('js')
    <script type="text/javascript">
      $("#showAllTabs").on('click', function () {
      $(".tab-header-wi").slideDown();
      $(".tab-header-wi").removeClass('active');
      $('.main-tabs').removeClass("active");
      $(".ss-body-text").slideUp(300);
      $('.toggle-sh-tp-container').fadeOut(200);
      $("#showAllTabs").removeClass('active');
      $(".inside-child-tab").removeClass('opacity01');
      $(".child-tab-title").removeClass('opacity01');
      $(".toggle-tabs-next").attr('disabled', true);
      $(".toggle-tabs-prev").attr('disabled', true);
    });
    // Handle Tabs
    $(".tab-header-wi").on('click', function () {
      var tab = $(this).attr('data-main-tab');
      var tabContainer = $(this).attr('data-container');
      $(this).parent('.main-tabs').addClass("active");
      $(this).addClass('active')
      $(this).siblings().slideUp(400, function () {
        $(tab).slideDown(400);
      });
      $('.toggle-sh-tp-container').fadeOut(200);
      $(tabContainer).fadeIn(200);
      $("#showAllTabs").addClass('active');

    });

    $(".child-tab-title").on('click', function () {
      $(".child-tab-title").addClass('opacity01');
      var tab = $(this).attr('data-child-tab');
      $(this).addClass('active');
      $(this).siblings().removeClass('active');
      $(".child-tabs").slideUp(200);
      $(this).next('.child-tabs').slideDown(300);
      $("#timeline-location").addClass('active');
      $(".child-tab-container").fadeOut(200, function () { });
      $(tab).fadeIn(200);
      $(".inside-child-tab").removeClass('active');
      $(".toggle-tabs-next").attr('disabled', true);
      $(".toggle-tabs-prev").attr('disabled', true); 
    });

    $(".inside-child-tab").on('click', function () {
      $(".inside-child-tab").addClass('opacity01');
      var tab = $(this).attr('data-child-tab');
      $(".inside-child-tab").removeClass('active');
      $(this).addClass('active');
      $(".child-tab-container").fadeOut(200);
      $(tab).fadeIn(200);
      if ($(".inside-child-tab").hasClass('active')) {
        $(".toggle-tabs-next").attr('disabled', false);
      } 
    });
    </script>
    <script type="text/javascript">
      const swiperBus = new Swiper(`.slideshow-buses .swiper-container`, {
      // Optional parameters
      direction: 'horizontal',
      // init: true,
      // loop: true,
      speed: 700,
      // effect: "fade",
      // autoplayDisableOnInteraction: false,
      slidesPerView: 1,
      spaceBetween: 10,
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
        nextEl: `.sbus-prev-btn`,
        prevEl: `.sbus-next-btn`,
      },
    });

    const swiperCars = new Swiper(`.slideshow-cars .swiper-container`, {
      // Optional parameters
      direction: 'horizontal',
      // init: true,
      // loop: true,
      speed: 700,
      // effect: "fade",
      // autoplayDisableOnInteraction: false,
      slidesPerView: 1,
      spaceBetween: 10,
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
        nextEl: `.scar-prev-btn`,
        prevEl: `.scar-next-btn`,
      },
    });

    const swiperHeavyEquipments = new Swiper(`.slideshow-heavy-equipment .swiper-container`, {
      // Optional parameters
      direction: 'horizontal',
      // init: true,
      // loop: true,
      speed: 700,
      // effect: "fade",
      // autoplayDisableOnInteraction: false,
      slidesPerView: 3,
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
        nextEl: `.sheavyEm-prev-btn`,
        prevEl: `.sheavyEm-next-btn`,
      },
    });

    const swiperWatercrafts = new Swiper(`.slideshow-watercrafts .swiper-container`, {
      // Optional parameters
      direction: 'horizontal',
      // init: true,
      // loop: true,
      speed: 700,
      // effect: "fade",
      // autoplayDisableOnInteraction: false,
      slidesPerView: 3,
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
        nextEl: `.wc-prev-btn`,
        prevEl: `.wc-next-btn`,
      },
    });

    const aircrafts = new Swiper(`.slideshow-aircrafts .swiper-container`, {
      // Optional parameters
      direction: 'horizontal',
      // init: true,
      // loop: true,
      speed: 700,
      // effect: "fade",
      // autoplayDisableOnInteraction: false,
      slidesPerView: 3,
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
        nextEl: `.ac-prev-btn`,
        prevEl: `.ac-next-btn`,
      },
    });
    </script>

<script type="text/javascript">
  $(".toggle-tabs-next").on('click', function () {
    $(".inside-child-tab").addClass('opacity01');
    $(".inside-child-tab.active").next().addClass('active').siblings().removeClass('active');
    var tab = $(".inside-child-tab.active").attr('data-child-tab');
    $(".child-tab-container").fadeOut(200);
    $(tab).fadeIn(200);
    if ($('.child-tabs .inside-child-tab:last-of-type').hasClass('active')) {
      $(this).attr('disabled', true);
      $('.toggle-tabs-prev').attr('disabled', false);
    }
  });

  $(".toggle-tabs-prev").on('click', function () {
    $(".inside-child-tab").addClass('opacity01');
    $(".inside-child-tab.active").prev().addClass('active').siblings().removeClass('active');
    var tab = $(".inside-child-tab.active").attr('data-child-tab');
    $(".child-tab-container").fadeOut(200);
    $(tab).fadeIn(200);
    $('.toggle-tabs-next').attr('disabled', false);
    if ($('.child-tabs .inside-child-tab:first-of-type').hasClass('active')) {
      $(this).attr('disabled', true);
      $('.toggle-tabs-next').attr('disabled', false);
    }
  });
</script>
@endpush