
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
                  <img src="{{asset('assets/assets/img/Projects/22.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/assets/img/Projects/2.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/assets/img/Projects/222.jpg')}}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>World Nomad Games</h3>
              <p>
                World Nomad Games saw an array of participants from 75 countries congregate to compete in ethnic sports. Our involvement in the project which ran for almost 25 days
              </p>
              <ul>
                <li> * Welcoming Team
                </li>
                <li> * Transportation Team
                </li>
                <li> * Hotel Management Team
                </li>
                <li> * Logistic coordination Team

                </li>
              </ul>
            </div>
           
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection