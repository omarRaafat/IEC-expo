@extends('layouts.app')
@section('content')
    <style>
        .img-fluid{

            opacity: 1;
            display: block;
            width: 100%;
            height: 280px;
            transition: .5s ease;
            backface-visibility: hidden;
            object-fit: cover;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
        }


        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 12px;
            right: 12px;
            height: 100%;
            width: -webkit-fill-available;
            opacity: 0;
            transition: .5s ease;
            background: rgb(28 23 21 / 75%);
            border-radius: 18px;
        }



        .portfolio-item:hover .overlay {
            opacity: 1;
        }

        .portfolio-item:hover .middle {
            opacity: 1;
        }

        .portfolio-item:hover a{
            color : white
        }
        .text {

            color: white;
            font-size: 22px;
            padding: 16px 32px;
        }
    </style>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{__('site.projects')}}</h2>
                    <ol>
                        <li><a href="{{url('/')}}">{{__('site.home')}}</a></li>
                        <li>{{__('site.projects')}}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <!-- <div class="row" data-aos="fade-up">
                  <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                      <li data-filter="*" class="filter-active">All</li>
                      <li data-filter=".filter-app">App</li>
                      <li data-filter=".filter-card">Card</li>
                      <li data-filter=".filter-web">Web</li>
                    </ul>
                  </div>
                </div> -->

                <div class="row portfolio-container" >
                    @foreach($projects as $project)

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="overlay"> </div>
                            <div class="img-fluid">
                              <?php $images = json_decode($project->images) ?>
                                <img src="{{url($images[0])}}" class="img-fluid" alt="">

                            </div>
                            <div class=" text-center">

                                <div class="middle">
                                    <h4>

                                        <a href="/project/details/{{$project->id}}" class="text"  title="More Details">{{$project->title}}</a>

                                    </h4>

                                </div>

                                <!-- <p>App</p> -->
                                <!-- <a href="assets/assets/img/Projects/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a> -->
                            </div>
                        </div>

                    @endforeach

                    {{--          <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
                    {{--          <div class="overlay"> </div>--}}
                    {{--          <div class="img-fluid">--}}
                    {{--            <img src="{{url('assets/assets/img/Projects/2.jpg')}}" class="img-fluid" alt="">--}}
                    {{--            </div>--}}
                    {{--            <div class=" text-center">--}}
                    {{--            <div class="middle">--}}
                    {{--            <h4>--}}
                    {{--              <a href="/project-details/2" class="text"  title="More Details">World Nomad Games</a>--}}

                    {{--              </h4>--}}
                    {{--</div>--}}
                    {{--              <!-- <p>Web</p> -->--}}
                    {{--              <!-- <a href="assets/assets/img/Projects/06-Word-Nomad-Games.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a> -->--}}
                    {{--              <!-- <a href="/project-details/2" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->--}}
                    {{--            </div>--}}
                    {{--          </div>--}}

                    {{--          <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
                    {{--          <div class="overlay"> </div>--}}
                    {{--          <div class="img-fluid">--}}
                    {{--            <img src="{{url('assets/assets/img/Projects/3.jpg')}}" class="img-fluid" alt="">--}}
                    {{--            </div>--}}
                    {{--            <div class=" text-center">--}}
                    {{--            <div class="middle">--}}
                    {{--              <h4>--}}
                    {{--              <a href="/project-details/3" class="text"  title="More Details">SAP</a>--}}

                    {{--              </h4>--}}
                    {{--</div>--}}
                    {{--              <!-- <p>App</p> -->--}}
                    {{--              <!-- <a href="assets/assets/img/Projects/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a> -->--}}
                    {{--              <!-- <a href="/project-details/3" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->--}}
                    {{--            </div>--}}
                    {{--          </div>--}}

                    {{--          <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
                    {{--          <div class="overlay"> </div>--}}
                    {{--          <div class="img-fluid">--}}
                    {{--            <img src="{{url('assets/assets/img/Projects/4.jpg')}}" class="img-fluid" alt="">--}}
                    {{--            </div>--}}
                    {{--            <div class=" text-center">--}}
                    {{--            <div class="middle">--}}
                    {{--              <h4>--}}
                    {{--              <a href="/project-details/4" class="text" title="More Details">SUSE Expert Days </a>--}}

                    {{--              </h4>--}}
                    {{--              </div>--}}
                    {{--              <!-- <p>Card</p> -->--}}
                    {{--              <!-- <a href="assets/assets/img/Projects/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a> -->--}}
                    {{--              <!-- <a href="/project-details/4" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->--}}
                    {{--            </div>--}}
                    {{--          </div>--}}

                    {{--          <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
                    {{--          <div class="overlay"> </div>--}}
                    {{--          <div class="img-fluid">--}}
                    {{--            <img src="{{url('assets/assets/img/Projects/5.jpg')}}" class="img-fluid" alt="">--}}
                    {{--            </div>--}}
                    {{--            <div class=" text-center">--}}
                    {{--            <div class="middle">--}}
                    {{--              <h4>--}}
                    {{--              <a href="/project-details/5" class="text" title="More Details">Mada</a>--}}

                    {{--              </h4>--}}
                    {{--              </div>--}}
                    {{--              <!-- <p>Web</p> -->--}}
                    {{--              <!-- <a href="assets/assets/img/Projects/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a> -->--}}
                    {{--              <!-- <a href="/project-details/5" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->--}}
                    {{--            </div>--}}
                    {{--          </div>--}}

                    {{--          <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
                    {{--          <div class="overlay"> </div>--}}
                    {{--          <div class="img-fluid">--}}
                    {{--            <img src="{{url('assets/assets/img/Projects/6.jpg')}}" class="img-fluid" alt="">--}}
                    {{--            </div>--}}
                    {{--            <div class=" text-center">--}}
                    {{--            <div class="middle">--}}
                    {{--              <h4>--}}
                    {{--              <a href="/project-details/6" class="text"  title="More Details">Italian Super Cup</a>--}}

                    {{--              </h4>--}}
                    {{--              </div>--}}
                    {{--              <!-- <p>App</p> -->--}}
                    {{--              <!-- <a href="assets/assets/img/Projects/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a> -->--}}
                    {{--              <!-- <a href="/project-details/6" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->--}}
                    {{--            </div>--}}
                    {{--          </div>--}}

                    {{--          <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
                    {{--          <div class="overlay"> </div>--}}
                    {{--          <div class="img-fluid">--}}
                    {{--            <img src="{{url('assets/assets/img/Projects/7.jpg')}}" class="img-fluid" alt="" style="height: 238px;">--}}
                    {{--            </div>--}}
                    {{--            <div class=" text-center">--}}
                    {{--            <div class="middle">--}}
                    {{--              <h4>--}}
                    {{--              <a href="/project-details/7" class="text" title="More Details">Rice Bull riding Co</a>--}}

                    {{--              </h4>--}}
                    {{--              </div>--}}
                    {{--              <!-- <p>Card</p> -->--}}
                    {{--              <!-- <a href="assets/assets/img/Projects/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a> -->--}}
                    {{--              <!-- <a href="/project-details/7" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->--}}
                    {{--            </div>--}}
                    {{--          </div>--}}

                    {{--          <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
                    {{--          <div class="overlay"> </div>--}}
                    {{--          <div class="img-fluid">--}}
                    {{--            <img src="{{url('assets/assets/img/Projects/8.jpg')}}" class="img-fluid" alt="" style="height: 238px;">--}}
                    {{--            </div>--}}
                    {{--            <div class=" text-center">--}}
                    {{--            <div class="middle">--}}
                    {{--              <h4>--}}
                    {{--              <a href="/project-details/8" class="text" title="More Details">Camel Club</a>--}}

                    {{--              </h4>--}}
                    {{--              </div>--}}
                    {{--              <!-- <p>Card</p> -->--}}
                    {{--              <!-- <a href="assets/assets/img/Projects/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a> -->--}}
                    {{--              <!-- <a href="/project-details/8" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->--}}
                    {{--            </div>--}}
                    {{--          </div>--}}

                    {{--          <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
                    {{--          <div class="overlay"> </div>--}}
                    {{--          <div class="img-fluid">--}}
                    {{--            <img src="{{url('assets/assets/img/Projects/9.jpg')}}" class="img-fluid" alt="" >--}}
                    {{--            </div>--}}
                    {{--            <div class=" text-center">--}}
                    {{--            <div class="middle">--}}
                    {{--              <h4>--}}
                    {{--              <a href="/project-details/9" class="text" title="More Details">Hajj Hackathon </a>--}}

                    {{--              </h4>--}}
                    {{--              </div>--}}
                    {{--              <!-- <p>Web</p> -->--}}
                    {{--              <!-- <a href="assets/assets/img/Projects/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a> -->--}}
                    {{--              <!-- <a href="/project-details/9" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->--}}
                    {{--            </div>--}}
                    {{--          </div>--}}

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection