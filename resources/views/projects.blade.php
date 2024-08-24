@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
<title>Custom Bootstrap 4 card</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

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
            padding: 16px 32px;
        }

        .card-custom {
  overflow: hidden;
  min-height: 450px;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
}

.card-custom-img {
  height: 200px;
  min-height: 200px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  border-color: inherit;
}

/* First border-left-width setting is a fallback */
.card-custom-img::after {
  position: absolute;
  content: '';
  top: 161px;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-top-width: 40px;
  border-right-width: 0;
  border-bottom-width: 0;
  border-left-width: 545px;
  border-left-width: calc(575px - 5vw);
  border-top-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
  border-left-color: inherit;
}

.card-custom-avatar img {
  border-radius: 50%;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
  position: absolute;
  top: 100px;
  left: 1.25rem;
  width: 100px;
  height: 100px;
}

.custom_button{
    background: #057a02;
     border-color: #057a02;"
}

.custom_button:hover{
    background: #057a02;
     border-color: #057a02;"
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

                <div class="row portfolio-container pt-5 m-auto" >
                    @foreach($projects as $project)

                    <div class="col-md-6 col-lg-4 pb-3 portfolio-item filter-app">

                        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
                        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                            <?php $images = json_decode($project->images) 
                      

                            ?>
                           
                          <div class="card-custom-img" style="background-image: url('{{ url($images[0]) }}');">
                          </div>
                          <div class="card-custom-avatar">
                            <img class="img-fluid"
                              src="{{$project->clientLogo?->media_path ??  url('assets/assets/img/Logos/bu_logo_fav.png')}}"
                              alt="Avatar" />
                          </div>
                          <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-title">
                                <a href="/project/details/{{$project->id}}" style="color: #057a02" alt="NO CLIENT LOGO"  title="More Details">{{$project->title}}</a>

                            </h4>
                          
                            <p class="card-text">{{Str::limit($project->description,100)}}</p>
                          
                          </div>
                          <div class="card-footer" style="background: inherit; border-color: inherit;">
                            <a href="/project/details/{{$project->id}}" class="btn text custom_button">{{__('site.project_details')}}</a>
                          
                          </div>
                        </div>
            
                  </div>
            
             
                     
                    @endforeach

                   
                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection