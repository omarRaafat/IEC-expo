
@extends('layouts.app')
@section('content')

<style>

#overlay {
  position: absolute; /* Sit on top of the page content */
  display: block; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgb(0 0 0 / 28%); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}



.full-screen img {
 width: 100vw
    } 

</style>
 



  <main id="main">

  <!-- ======= Hero Section ======= -->
  <section id="hero"  >

    <!-- <div id="heroCarousel" style="direction: ltr;" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel" > -->
  
      <!-- <div class="carousel-inner" role="listbox"> -->
      <!-- <div id="overlay"></div> -->
        
 

      <!-- <div class="video_div embed-responsive embed-responsive-21by9"  >     -->
      <div class="full-screen">
      <a href="{{$event->home_link}}" target="_blank">
      <img src="{{url('uploads/IEC-Website-Banner.jpg')}}" class="img-fluid"  alt="Image description" >
      </a>
      </div>
<!-- <video              id="myVideo"  loop muted  autoplay="autoplay"  style="width:100% !important; height:auto;position:relative" >
  <source src="{{url('uploads/IEC_Presentation.mp4')}}" type="video/mp4">
  Your browser does not support HTML5 video.
</video> -->

<!-- </div> -->



    
        <!-- @foreach($sliders as $key => $slider) -->
<!--         
        <div class="carousel-item @if($key == 0)active @endif" style="background-image: url({{$slider->image}});    background-size: cover;">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp" >
          
              <h1 >{{$slider->title}} 
              </h1>
              <p style="margin-top:30px;">
            {{$slider->description}}              </p> -->

              <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            <!-- </div>
          </div>
        </div>
     
      @endforeach -->
       

      <!-- </div> -->

                <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev" style="    z-index: 20;
          ">
                  <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next" style="    z-index: 20;
          ">
                  <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol> -->

    <!-- </div> -->
  </section><!-- End Hero -->
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row container">
          <div class="col-lg-9 text-left text-lg-left ">
            <h3>
                {{$event->home_title}}
            </h3>
            <p>
            {{$event->home_description}}
            </p>
          </div>
         
          <div class="col-lg-3 cta-btn-container text-center">
          <!-- {{route('event.registration' ,'IEC')}} -->
            <a class="cta-btn align-middle" href="{{$event->home_link}}">    {{$event->home_button}}</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
   
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
   
    <!-- End Portfolio Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about-us" class="about-us">
      <div class="container">
      <div class="section-title" data-aos="fade-up">
          <h3>{{__('site.about')}}</h3>
          <p>
            </p>
        </div>
        <div class="row no-gutters">
          <div class=" col-md-6 d-flex align-items-stretch justify-content-center justify-content-lg-start"  data-aos="fade-right">
          <img src="{{url($settings->about_image)}}" class="img-fluid" alt="ABOUT IMAGE COMES HERE">

          </div>
          <div class="col-md-6 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h2 data-aos="fade-up">{{$settings->about_title}}</h2>
              <p data-aos="fade-up">
              {{$settings->about_description}}
              </p>
             
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->
    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h3>{{__('site.clients')}}</h3>
          <p>
            </p>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

        <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/22.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
              <img src="{{asset('assets/assets/img/clients/01.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/02.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/03.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/04.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/05.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/06.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/07.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/08.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/09.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/10.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/11.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/12.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/13.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/14.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/15.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/16.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/17.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/18.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div> 

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/19.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/20.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/21.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

       

          <div class="col-lg-3 col-md-4 col-xs-6 mt-3">
            <div class="client-logo">
            <img src="{{asset('assets/assets/img/clients/23.png')}}" class="img-fluid" alt="" style="height: inherit;">
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- End Our Clients Section -->

    <section id="cta-pricing" class="cta-pricing">
      <div class="container">

        <div class="text-center">
          <h3>{{__('site.qt')}}</h3>
          <p>{{__('site.qd')}}</p>
          <a class="cta-btn" href="{{url('/contact')}}">{{__('site.contactUs')}}</a>
        </div>

      </div>
    </section>
  </main><!-- End #main -->

  

 

  @endsection
  