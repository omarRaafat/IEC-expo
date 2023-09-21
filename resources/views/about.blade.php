@extends('layouts.app')
@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container">

        <div class="row no-gutters">
          <div class=" col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"  data-aos="fade-right">
          <img src="{{asset('assets/img/Projects/01-Riyadh-Season(New).png')}}" class="img-fluid" alt="">

          </div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-up">Let Us Be Your Business Umbrella</h3>
              <p data-aos="fade-up">
                AT BUSINESS UMBRELLA, EACH EVENT IS ITS OWN WORLD
              </p>
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="">          <img src="assets/img/Logos/Umbrella.png" width="50px" class="img-fluid" alt=""></i>
                  <h4>LISTEN, UNDERSTAND, VISUALISE AND EXECUTE</h4>
                  <p>
                    ONLY BY UNDERSTANDING OUR CLIENT’S VISIONS CAN WE GO ABOVE AND BEYOND.
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="">          <img src="assets/img/Logos/Umbrella.png" width="50px" class="img-fluid" alt=""></i>
                  <h4>Business Umbrella Events </h4>
                  <p>
                    provides the best in class events and entertainment services                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="">          <img src="assets/img/Logos/Umbrella.png" width="50px" class="img-fluid" alt=""></i>
                  <h4>Business Umbrella Events </h4>
                  <p>
                    Whether your event is a large conference, part of an integrated marketing campaign or a small social gathering                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="">          <img src="assets/img/Logos/Umbrella.png" width="50px" class="img-fluid" alt=""></i>
                  <h4>Business Umbrella Secure</h4>
                  <p>
                    let has the tools and skills to stage remarkable events.
                  </p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

  

  

  </main><!-- End #main -->

 @endsection