
@extends('layouts.app')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Projects Details</h2>
          <ol>
          <li><a href="{{url('/projects')}}">Projects</a></li>
            <li>Projects Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                  <img src="{{asset('assets/assets/img/Projects/66.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/assets/img/Projects/6.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/assets/img/Projects/666.jpg')}}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Italian Super Cup</h3>
              <p>
                to AC Milan, Juventus and The Italian Football Federation. Where we handled their airport welcoming, transport and accommodation throughout their stay. We also served as the welcoming party to all international fans who travelled to attend the final match.              </p>
     
              <ul>
                <li> * Organizers
                </li>
                <li> * Airport Welcome
                </li>
                <li> * Transportation
                </li>
                <li> * Hotel Management


                </li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Our company offered comprehensive logistics services  </h2>
                  </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection