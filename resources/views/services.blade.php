@extends('layouts.app')
@section('content')
<style>
.img-fluid{
  height: 500px;
  width: -webkit-fill-available;

}
  </style>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{__('site.services')}}</h2>
          <ol>
          <li><a href="{{url('/')}}">{{__('site.home')}}</a></li>
            <li>{{__('site.services')}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<br><br>
       <!-- ======= Features Section ======= -->
       <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>{{__('site.sr_title')}}</h2>
          <p>
          {{__('site.sr_description')}}          </p>
        </div>

        <div class="row  ">
          <div class="col-lg-4  mb-lg-0 container " data-aos="fade-right">
            <div class="overflow-auto" style="width: auto; height: 500px;">
            <ul class="nav nav-tabs flex-column " >
           @foreach($services as $key => $service)
                <li class="nav-item ">
                  <a class="nav-link @if($key == 0) active @endif"  data-bs-toggle="tab" href="#tab-{{$key}}">
                    <h4>{{$service->title}} </h4>
                    <p>            {{$service->description}}   </p>
                  </a>
                </li>
           @endforeach

             
            </ul>

          </div>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-left" data-aos-delay="100">
            <div class="tab-content">
              @foreach($services as $key => $service)
                <div class="tab-pane @if($key == 0) active show @endif " id="tab-{{$key}}">
                  <figure>
                    <img src="{{url($service->image)}}" alt="" class="img-fluid">
                  </figure>
                </div>
              @endforeach




            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <!-- <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Event Management </a></h4>
              <p class="description">
                Business Umbrella Events provide a broad range of support services and solutions to ensure that your event runs smoothly for all involved.
              </p>
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Conferences & Seminars
              </a></h4>
              <p class="description">
                From concept to post evaluation, the event management skills of our Personal Conference and seminar Organizer’s ensure total service confidence.
              </p>
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Entertainment</a></h4>
              <p class="description">
                Whatever your event’s purpose, entertainment adds an essential element of fun allowing attendees to recharge and get to know each other better.
              </p>
            </div>
          </div> -->
         
       
        

          

         
        

         
        </div>

      </div>
    </section><!-- End Services Section -->

 
  </main><!-- End #main -->
@endsection