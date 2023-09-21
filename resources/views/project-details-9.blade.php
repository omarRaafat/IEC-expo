
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
                  <img src="{{asset('assets/assets/img/Projects/99.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/assets/img/Projects/9.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset('assets/assets/img/Projects/99.jpg')}}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Hajj Hackathon</h3>
              <p>
                day one was used to brief over 850 organizers on their duties for the next eight days. The first four days we welcomed three thousand participants and arranged their accommodations followed by three days of competing as our organizers managed the area and were available around the clock to transport the participants from the hall to the hotel and back. On the final day, we arranged a Umrah trip for a select number of participants
              </p>
              <ul>
                <li> * Airport Welcoming
                </li>
                <li> * 24 Hour Transportation
                </li>
                <li> * Hotel Management
                </li>
                <li> * Hall Coordination

                </li>
                <li> * Umrah Organization

                </li>
              </ul>
            </div>
          
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  @endsection