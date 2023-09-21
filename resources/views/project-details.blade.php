
@extends('layouts.app')
@section('content')
  <style>
    .img-fluid{

      opacity: 1;
      display: block;
      width: 100%;
      height: 475px;
      transition: .5s ease;
      backface-visibility: hidden;
      object-fit: cover;
    }
    </style>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
{{--          <h2>{{__('site.project_details')}}</h2>--}}
          <ol>
{{--          <li><a href="{{url('/projects')}}">{{__('site.projects')}}</a></li>--}}
{{--            <li>{{__('site.project_details')}}</li>--}}
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
               @foreach(json_decode($project->images) as $image)
                  <div class="swiper-slide">
                    <img src="{{url($image)}}" class="img-fluid"  alt="">
                  </div>
               @endforeach



              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{$project->title}}</h3>
              <p>
                {{$project->description}}
              </p>
              <ul>
                 <?php
                  $tags = explode(",",$project->tag);
                 ?>
                @foreach($tags as $tag)
                  <li> * {{$tag}}</li>
                @endforeach


              </ul>
            </div>
           
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection