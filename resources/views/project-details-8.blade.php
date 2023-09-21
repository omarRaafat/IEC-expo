
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
                  <img src="{{asset('assets/assets/img/Projects/88.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/assets/img/Projects/8.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/assets/img/Projects/888.jpg')}}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Camel Club</h3>
              <p>
                under the umbrella of King Abdulaziz Camel Club Festival was the Camel Club. To which we provided a team to welcome the guests at the airport as well as arrange their transportation to their respective destinations.
              </p>
              <ul>
                <li> * Airport Booth Setup 
                </li>
                <li> * Welcome Team
                </li>
                <li> * Transportation
                </li>
             
              </ul>
            </div>
           
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection