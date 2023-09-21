
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
                  <img src="{{asset('assets/assets/img/Projects/11.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/assets/img/Projects/1.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/assets/img/Projects/1.jpg')}}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Riyadh Season</h3>
              <p>
                to the entirety of the Riyadh season guests which were over four thousand participants from all over the globe. To achieve memorable and seamless experiences for the kingdom's guests, we had the following four departments working throughout the duration of the season.
              </p>
              <ul>
                <li> * A visa issuance department</li>
                <li> * A coordination department                </li>
                <li> * An airport reception & assistance department</li>
                <li> * A transportation department
                </li>
              </ul>
            </div>
           
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection