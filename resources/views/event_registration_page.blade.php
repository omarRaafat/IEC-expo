<!DOCTYPE html>
<?php
$direction = '';
if(app()->getLocale() == 'ar') {$direction = 'rtl';$language = 'en';} else {$direction='ltr';$language = 'ar';} 
?>
<html lang="ar" dir="{{$direction}}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$event->name}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('assets/assets/img/Logos/IEC-logo-fav.png')}}" rel="icon">
  <link href="{{url('assets/assets/img/Logos/IEC-logo-fav.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->

  <style>
       @font-face {
  font-family: "ROAD-STAR";
  src: url("/assets/fonts/29LTAdir-Regular.ttf")
} 
    </style>
  <!-- Vendor CSS Files -->
  <link href="{{url('assets/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <script src="{{asset('assets/js/ui-toasts.js')}}"></script>
  
  <!-- Template Main CSS File -->
  <link href="{{url('assets/assets/css/style.css')}}" rel="stylesheet">
  <style>
 
*{
    font-family: 'ROAD-STAR' 
}
h1 , h2 , h3 , h4 , h5  ,h6{
  font-family: 'ROAD-STAR' 
}
</style>
  <style>
    /* .navbar{
      direction: rtl;
    } */
    .navbar ul li a{
      color:white;
      font-size:18px
     
    }
    .navbar-mobile ul{
      background-color: #000000;
    }
    .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover>a{
      color:#057a02;
    }
.carousel-item {
  height: 90vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-color:gray
}

.overlay{
  background: linear-gradient(360deg, rgb(52 52 52) 0%, rgb(22 18 18) 100%);    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 30%;
    pointer-events: none;
}

.section-title h2{
  color:white
}
input{
  background-color: #151515;
    border-color: black;
    font-weight: bold;

}
.icon-box{
      border: 1px solid #057a02;"
}

form input{
  padding: 28px;
}
.contact input{
  padding: 28px;
}

.bg-white{
    
    border: 1px solid gray;
    border-radius: 18px;
}
.contact .php-email-form button[type=submit]{
  background: #057a02;
}
a, a:hover{
  color:#057a02
}

a:hover{
  color:#057a02
}

.services .icon-box:hover .icon {
  background: #fff;
  border: 2px solid #9931e4;
}
.services .icon-box:hover .icon i {
  color: #9931e4;
}

.services .icon-box:hover .title a {
  color: #9931e4;
}


@media  (max-width: 767px) {
  video {
    width:auto;
    height: -webkit-fill-available;
  }
  .event_desc{
    padding: 14px;
  }

  .event_main_content{
    margin-top: 0px;
  }
  .event_timer{
    padding-top: 0px;
  }
  .custom-size{
  width: 340px
}

}

@media screen and (min-width: 767px) and (max-width: 1680px) {
  video {
    width:100% ;
    height: auto;
  }
  .event_desc{
    padding: 35px;
  }
  .event_main_content{
    margin-top: 50px;
  }
  .event_timer{
    padding-top: 20px;
  }

  .custom-size{
  width: 430px
}
}

.event_file{
  margin-top: 50px;
} 

@media (min-width: 641px) {
  .mobile-nav-toggle{
    color: #ffffff;
    font-size: 28px;
    cursor: pointer;
    display: none;
    line-height: 0;
    transition: 0.5s;
}



}

@media (max-width: 840px) {
  .mobile-nav-toggle{
    color: #ffffff;
    font-size: 28px;
    cursor: pointer;
    display: block;
    line-height: 0;
    transition: 0.5s;
}
}



    </style> 
    <script src="{{asset('assets/js/ui-toasts.js')}}"></script>

    <!-- Snap Pixel Code -->
<script type='text/javascript'>
(function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
r.src=n;var u=t.getElementsByTagName(s)[0];
u.parentNode.insertBefore(r,u);})(window,document,
'https://sc-static.net/scevent.min.js');

snaptr('init', 'cf38dbeb-49ab-4061-afde-b1354f90975a', {
'user_email': '_INSERT_USER_EMAIL_'
});

snaptr('track', 'PAGE_VIEW');

</script>
<!-- End Snap Pixel Code -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-84PRQ4XNC1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-84PRQ4XNC1');
</script>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "f0re12xfs1");
</script>


<!-- Snap Pixel Code -->
<script type='text/javascript'>
(function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
r.src=n;var u=t.getElementsByTagName(s)[0];
u.parentNode.insertBefore(r,u);})(window,document,
'https://sc-static.net/scevent.min.js');

snaptr('init', 'd5e1fe8c-89d6-44ab-b811-98bbe764c13f', {
'user_email': '_INSERT_USER_EMAIL_'
});

snaptr('track', 'PAGE_VIEW');

</script>
<!-- End Snap Pixel Code --> 


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WSWW6SGK49"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WSWW6SGK49');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-T894BW3B');</script>
  <!-- End Google Tag Manager -->

</head>

<body style="background-color: rgb(21, 21, 21);" >

      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T894BW3B"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- ======= Top Bar ======= -->
  

  <header  class="" >
  <div class=" d-flex  fixed-top  " style="padding: 10px 55px 10px 55px;background-color:black">

<div class="logo justify-content-end">
  <!-- <h1 class="text-light" style="float:right"><a href="index.html">Business Umbrella</a></h1> -->
  <a href="/">      <img src="{{url('assets/assets/img/Logos/IEC-logo.png')}}"  width="165px"  alt="Credit Card" class="rounded">
</a>
</div>


<nav id="navbar" class="navbar navbar-collapse justify-content-center    " style="direction:@if(app()->getLocale() == 'ar') rtl @else ltr @endif" >
  <ul class="">
    <li><a class="active" href="#">{{__('event.home')}}</a></li>
      <li><a href="#register">{{__('event.register')}}</a></li>
    <li><a href="#about">{{__('event.about')}}</a></li>
    <li><a href="#sponsor">{{__('event.sponsors')}}</a></li>
    <li><a href="#exhibitor">{{__('event.exhibitors')}}</a></li>
    <li><a href="#organizer">{{__('event.organizers')}}</a></li> <!-- lik gallery on home page -->
    <li><a href="#contact">{{__('event.contactUs')}}</a></li>
    <li> <a href="#">||</a> </li>
    <li><a href="{{route('event.locale',$language)}}">{{__('event.language')}}</a></li>
    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="#">Drop Down 1</a></li>
        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
          <ul>
            <li><a href="#">Deep Drop Down 1</a></li>
            <li><a href="#">Deep Drop Down 2</a></li>
            <li><a href="#">Deep Drop Down 3</a></li>
            <li><a href="#">Deep Drop Down 4</a></li>
            <li><a href="#">Deep Drop Down 5</a></li>
          </ul>
        </li>
        <li><a href="#">Drop Down 2</a></li>
        <li><a href="#">Drop Down 3</a></li>
        <li><a href="#">Drop Down 4</a></li>
      </ul>
    </li> -->
  
   
  </ul>

  <i class="bi bi-list mobile-nav-toggle"></i>
 
</nav><!-- .navbar -->

<div class="logo justify-content-end">
  <!-- <h3 class="text-white" ><a class="" style="color:#057a02"  href="index.html">Business Umbrella</a></h3> -->
  <a href="/">      <img src="{{url('/assets/assets/img/Logos/bu_logo_4.png')}}"  width="165px" alt="Credit Card" class="rounded">
</a>
</div>


</div>


<!-- 
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
   
      <div class="carousel-inner" role="listbox">
       <div class="overlay"></div>
    
      
        <div class="carousel-item " style="background-image: url('/uploads/vd');background-size:cover;/bg.png');
">

          <div class="carousel-container" >
         
          <div class="carousel-content animate__animated animate__fadeInUp" >
         
            <div id="banner-image-row" style="margin-top:85px" class="row pt-4 gy-4 justify-content-center text-center flex-md-row-reverse">
              <div class="col-md-12"><div>
                <h1>
                  <span class="display-6 fw-bold lh-1 mb-0 d-block"></span> 
                  <span class="display-3 fw-bold " style="color:#057a02">{{$event->name}}</span>
                   <span class="display-3 fw-bold "></span>
                  </h1> 
                  <h2 class="display-5 fw-bold" style="color:white">{{$event->description}}</h2>
                   <p class="fw-bold mb-0">
                    <span class="text-primary">
                      <span style="color:#057a02">الموقع:</span>
                      &nbsp;</span>
                      <span style="color:white">{{$event->location}}</span></p>
                       <p class="fw-bold">
                        <span class="" style="color:#057a02"><span>التاريخ:</span>
                        &nbsp;</span>
                        <span style="color:white">{{$event->start_date}}</span></p>
                         <div class="d-flex justify-content-center">
                          <div class="me-2 mb-2 rounded overflow-hidden bg-black text-white">
                            <span class="expo-days display-6 fw-bold px-2 py-2 text-center d-block" style="background-color:#057a02" id="day">20</span>
                             <span class="small px-2 py-2 d-block text-center " >أيام</span>
                            </div>
                              <div class="me-2 mb-2 rounded overflow-hidden bg-black text-white">
                                <span class="expo-hours display-6 fw-bold px-2 py-2 text-center d-block" style="background-color:#057a02" id="hour">13</span> 
                                <span class="small px-2 py-2 d-block text-center " >ساعات</span>
                              </div>
                                 <div class="me-2 mb-2 rounded overflow-hidden bg-black text-white">
                                  <span class="expo-minutes display-6 fw-bold px-2 py-2 text-center d-block" style="background-color:#057a02" id="minute">02</span>
                                   <span class="small px-2 py-2 d-block text-center " >دقائق</span>
                                  </div>
                                    <div class="me-2 mb-2 rounded overflow-hidden bg-black text-white">
                                      <span class="expo-seconds display-6 fw-bold px-2 py-2 text-center d-block" style="background-color:#057a02" id="second">00</span> 
                                      <span class="small px-2 py-2 d-block text-center " >ثواني</span>
                                    </div>
                                  </div>
                                    </div>
            </div>
          </div>
          </div>
          </div>
        </div>
  

       

      </div> -->

      <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol> -->

    <!-- </div> -->
  
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->

 

  <main id="main">

 



<section class="position-relative  text-white">
@if(session()->has('message'))
  <div class="bs-toast toast toast-placement-ex m-2 fade bg-success top-0 end-0 show" style="    z-index: 9999;
    position: absolute;" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
  <div class="toast-header">
    <i class="bx bx-bell me-2"></i>
    <div class="me-auto fw-semibold"></div>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body text-white">
    {{session()->get('message')}}
  </div>
</div>
@endif

@if(session()->has('error'))
  <div class="bs-toast toast toast-placement-ex m-2 fade bg-danger top-0 end-0 show" style="    z-index: 9999;
    position: absolute;" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
  <div class="toast-header">
    <i class="bx bx-bell me-2"></i>
    <div class="me-auto fw-semibold"></div>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body text-white">
    {{session()->get('error')}}
  </div>
</div>
@endif


    <!-- w-100 h-100 -->
   
   <video src="{{url('/uploads/IEC_Presentation.mp4')}}" loop="loop" muted="muted" autoplay="autoplay"  class="position-absolute   object-center object-cover" ></video>
     
   <span class="position-absolute top-0 start-0 bottom-0 end-0 w-100 h-100 d-block" style="background-color: rgba(0, 0, 0, 0.4);"></span> 
   <div class="position-relative container py-5">
      <!-- <div class="d-none d-md-block" style="height: 60px;"></div> -->
      <div id="banner-image-row" class="row pt-4 gy-4 justify-content-center text-center">
         <div class="col-md-12">
            <div class="event_main_content" >
    
 
               <h1><span class="display-5 fw-bold lh-1  mb-0 d-block" style="color:#ffffff;">{{$event->name}}</span></h1>
          
       <h4 class="event_desc fw-bold" style="color:white">{{$event->description}}</h4>
               <p class="fw-bold mb-0"><span class=""><span style="color:#ffffff">{{__('event.location')}} :: </span>&nbsp;</span><span>{{$event->location}} | {{$event->city}}</span></p>
               <p class="fw-bold"><span class=""><span style="color:#ffffff">{{__('event.date')}} :: </span>&nbsp;</span><span>{{date('d-m-Y' , strtotime($event->start_date))}} |  {{date('d-m-Y' , strtotime($event->end_date))}}</span></p>
               <div class="d-flex justify-content-center event_timer" >
               <div class="me-2 mb-2 rounded overflow-hidden bg-black text-white">
                            <span class="expo-days display-6 fw-bold px-2 py-2 text-center d-block" style="background-color:#057a02" id="day">00</span>
                             <span class="small px-2 py-2 d-block text-center " >{{__('event.days')}}</span>
                            </div>
                              <div class="me-2 mb-2 rounded overflow-hidden bg-black text-white">
                                <span class="expo-hours display-6 fw-bold px-2 py-2 text-center d-block" style="background-color:#057a02" id="hour">00</span> 
                                <span class="small px-2 py-2 d-block text-center " >{{__('event.hours')}}</span>
                              </div>
                                 <div class="me-2 mb-2 rounded overflow-hidden bg-black text-white">
                                  <span class="expo-minutes display-6 fw-bold px-2 py-2 text-center d-block" style="background-color:#057a02" id="minute">00</span>
                                   <span class="small px-2 py-2 d-block text-center " >{{__('event.minutes')}}</span>
                                  </div>
                                    <div class="me-2 mb-2 rounded overflow-hidden bg-black text-white">
                                      <span class="expo-seconds display-6 fw-bold px-2 py-2 text-center d-block" style="background-color:#057a02" id="second">00</span> 
                                      <span class="small px-2 py-2 d-block text-center " >{{__('event.seconds')}}</span>
                                    </div>
               </div>
            </div>
            @if(app()->getLocale() == 'ar')
            <a  href="{{url('uploads/IECArProfile-2024.pdf')}}" download class=" event_file  text-decoration-none fw-bold d-inline-flex  align-items-center">
               <span style="font-size:20px;color:#ffffff;">{{__('event.download')}} {{__('event.profile')}} {{$event->name}}   </span> 
               <svg style="width:45px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="si mx-3">
                  <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"></path>
               </svg>
            </a>
            @else
            <a  href="{{url('uploads/IEC-English-2024.pdf')}}" download class=" event_file text-decoration-none fw-bold d-inline-flex  align-items-center">
               <span style="font-size:20px;color:#ffffff;">{{__('event.download')}} {{Str::lower($event->name)}} {{__('event.profile')}}  </span> 
               <svg style="width:45px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="si mx-3">
                  <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"></path>
               </svg>
            </a>
            @endif
         
         </div>
      </div>
      <div class="d-none d-md-block" style="height: 60px;"></div>
   </div>
</section>

  

 <!-- End Hero -->

 
 <section id="register" class="pb-4 position-relative bg-black text-white">
      <h2 class="pb-2 text-center position-relative fw-bold">
        <span class="tracking-wide">{{__('event.register')}}</span> 
        <span class="heading-line-1 position-absolute bottom-0 start-50 translate-middle-x border-bottom border-primary" style="border-color: #057a02 !important;
    height: 1px;
    width: 140px;"></span> 
        <span class="heading-line-2 position-absolute start-50 translate-middle-x border-bottom border-primary" style="height: 1px;
    width: 42px;
    bottom: -4px;
    border-color: #057a02 !important;"></span></h2>
      </section>
 <section  class="services" >
      <div class="container">
     
        <div class="row" >

          <div class="col-lg-6 col-md-6">
            <div class="box  icon-box aos-init aos-animate" data-aos="fade-up" style="background-color:#000000;color:#ffffff;">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
             
              <h2 class="">{{__('event.sponsor_exhibitor')}}</h2>


                <span class="">{{__('event.sponsor_exhibitor_title')}}!

            
                </span>
              

            
<hr>
              <div class="btn-wrap">
                
                <a class="btn " data-bs-toggle="modal" href="#exampleModalToggle3" role="button" style="background-color:#057a02;color:#ffffff;font-weight:bold" >{{__('event.register')}}</a>
             <!-- ! Comming soon -->
              </div>  
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
            <div class="box  icon-box aos-init aos-animate" data-aos="fade-up" style="background-color:#000000;color:#ffffff;">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h2 class="">{{__('event.guest')}}</h2>
              
                <span class="">{{__('event.guest_title')}}.</span>


                <hr>
              <div class="btn-wrap">
                <!-- <h3>Comming Soon !</h3> -->
                <a class="btn " style="background-color:#057a02;color:#ffffff;font-weight:bold" data-bs-toggle="modal" href="#exampleModalToggle" role="button" >{{__('event.register')}}</a>
              </div>
            </div>
          </div>

        
      </div>
    </section>
    
    <section id="about" class="pb-4 position-relative bg-black text-white">
      <h2 class="pb-2 text-center position-relative fw-bold">
        <span class="tracking-wide">{{__('event.about')}}</span> 
        <span class="heading-line-1 position-absolute bottom-0 start-50 translate-middle-x border-bottom border-primary" style="border-color: #057a02 !important;
    height: 1px;
    width: 140px;"></span> 
        <span class="heading-line-2 position-absolute start-50 translate-middle-x border-bottom border-primary" style="height: 1px;
    width: 42px;
    bottom: -4px;
    border-color: #057a02 !important;"></span></h2>
      </section>

    <section class=" overflow-hidden bg-black text-white"><span class="" style="background-color: rgb(26, 26, 26);"></span> <span class="" style="background-color: rgb(21, 21, 21);"></span>
     <div class="container position-relative px-0">
      <div class="row gx-0">
        <div class="col-md-6" style="background-color: rgb(26, 26, 26);">
        <div class="px-4 py-5">
          <h3 class="h2 " style="color:#057a02">{{__('event.our_message')}}</h3>
           <p>
           {{__('event.our_message_content')}}            &lrm;
          </p></div></div>
            <div class="col-md-6" style="background-color: rgb(21, 21, 21);">
            <div class="px-4 py-5">
              <h3 class="h2 " style="color:#057a02">{{__('event.goals')}}</h3>
               <p>•
               {{__('event.goals_content_1')}}
                                 <br>
      <br>
      •
      {{__('event.goals_content_2')}}
              <br>
      <br>
      •	
      {{__('event.goals_content_3')}}
            <br>
      <br>
      •
      {{__('event.goals_content_4')}}
            <br>
      <br>
      •
      {{__('event.goals_content_5')}}
      <br>  <br>
      •
      {{__('event.goals_content_6')}}
    
          </p></div></div></div></div>
    </section>

    <section class="py-5 bg-black text-white position-relative">
      <!-- <img src="https://buco.sa/wp-content/themes/byvexice/img/sponsor.png" alt="" class="position-absolute top-0 start-0 bottom-0 w-100 h-100"> -->
      <div class="py-4 position-relative container">
        <h2 id="sponsor" class="mb-5 pb-2 text-center position-relative fw-bold">
          <span class="tracking-wide">{{__('event.partners')}}</span> 
          <span class="heading-line-1 position-absolute bottom-0 start-50 translate-middle-x border-bottom border-primary" style="border-color: #057a02 !important;
    height: 1px;
    width: 140px;"></span>
           <span class="heading-line-2 position-absolute start-50 translate-middle-x border-bottom border-primary" style="height: 1px;
    width: 42px;
    bottom: -4px;
    border-color: #057a02 !important;"></span></h2>
            <div class="row gy-4 justify-content-center">
              
           
               <div class="col-12 text-center">
                <div class="">
                  <a class="d-block  tet-decoration-none">
                    <img src="{{asset('assets/assets/img/team/17.jpeg')}}" class="bg-white custom-size" >
                  </a>
                  </div>
                </div>
                 
               </div>
               <br>


               <h2 id="sponsor" class="mb-5 pb-2 text-center position-relative fw-bold">
                <span class="tracking-wide">{{__('event.government_sponser')}}</span> 
                <span class="heading-line-1 position-absolute bottom-0 start-50 translate-middle-x border-bottom border-primary" style="border-color: #057a02 !important;
          height: 1px;
          width: 140px;"></span>
                 <span class="heading-line-2 position-absolute start-50 translate-middle-x border-bottom border-primary" style="height: 1px;
          width: 42px;
          bottom: -4px;
          border-color: #057a02 !important;"></span></h2>
                  <div class="row gy-4 justify-content-center">
                    
                 
                     <div class="col-12 text-center">
                      <div class="">
                        <a class="d-block  tet-decoration-none">
                          <img src="{{asset('assets/assets/img/clients/24.jpeg')}}" class="bg-white custom-size" >
                        </a>
                        </div>
                      </div>
                       
                     </div>
                     <br>

    
        <h2 id="sponsor" class="mb-5 pb-2 text-center position-relative fw-bold">
          <span class="tracking-wide">{{__('event.sponsors')}}</span> 
          <span class="heading-line-1 position-absolute bottom-0 start-50 translate-middle-x border-bottom border-primary" style="border-color: #057a02 !important;
    height: 1px;
    width: 140px;"></span>
           <span class="heading-line-2 position-absolute start-50 translate-middle-x border-bottom border-primary" style="height: 1px;
    width: 42px;
    bottom: -4px;
    border-color: #057a02 !important;"></span></h2>
            <div class="row gy-4 justify-content-center">
              
             @if($sponsors)
             @foreach($sponsors as $sponsor)
              <div class="col-6 col-md-4 col-lg-4">
                <div class="bg-white">
                  <a class="d-block bg-white tet-decoration-none">
                    <img src="{{url($sponsor->image)}}" class="w-100 h-auto bg-white">
                  </a>
                  </div>
                </div>
              @endforeach
          @endif
          
        
          
        
                
                 
               </div>
                   <br>
                    <h2 id="exhibitor" class="mb-5 mt-4 pt-5 pb-2 text-center position-relative fw-bold">
                      <span class="tracking-wide">{{__('event.exhibitors')}}</span> 
                      <span class="heading-line-1 position-absolute bottom-0 start-50 translate-middle-x border-bottom border-primary" style="border-color: #057a02 !important;
    height: 1px;
    width: 140px;"></span>
                       <span class="heading-line-2 position-absolute start-50 translate-middle-x border-bottom border-primary"style="height: 1px;
    width: 42px;
    bottom: -4px;
    border-color: #057a02 !important;"></span>
                      </h2> 
                      <div class="row gy-4 justify-content-center">
                      @if($exhibitors)
             @foreach($exhibitors as $exhibitor)
              <div class="col-6 col-md-3 col-lg-3">
                <div class="bg-white">
                  <a class="d-block bg-white tet-decoration-none">
                    <img src="{{url($exhibitor->image)}}" class="w-100 h-auto bg-white">
                  </a>
                  </div>
                </div>
              @endforeach
          @endif
                         
                      </div>
                    </div>
                     <br> 
                     <h2 id="organizer" class="mb-5 mt-4 pt-5 pb-2 text-center position-relative fw-bold">
                      <span class="tracking-wide">{{__('event.organizers')}}</span>
                       <span class="heading-line-1 position-absolute bottom-0 start-50 translate-middle-x border-bottom border-primary" style="border-color: #057a02 !important;
    height: 1px;
    width: 140px;"></span> 
                       <span class="heading-line-2 position-absolute start-50 translate-middle-x border-bottom border-primary"style="height: 1px;
    width: 42px;
    bottom: -4px;
    border-color: #057a02 !important;"></span>
                      </h2> 
                      <div class="row gy-4 justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3"><div>
                          <a class="d-block text-decoration-none">
                            <img src="{{url('/assets/assets/img/Logos/bu_logo_large.png')}}" class="w-100 h-auto">
                          </a>
                        </div>
                      </div>
                    </div> 
                    <br>
                  </div>
                </section>


     <section id="contact" class="pb-4 position-relative bg-black text-white">
      <h2 class="pb-2 text-center position-relative fw-bold">
        <span class="tracking-wide">{{__('event.contactUs')}}</span> 
        <span class="heading-line-1 position-absolute bottom-0 start-50 translate-middle-x border-bottom border-primary" style="border-color: #057a02 !important;
    height: 1px;
    width: 140px;"></span> 
        <span class="heading-line-2 position-absolute start-50 translate-middle-x border-bottom border-primary" style="height: 1px;
    width: 42px;
    bottom: -4px;
    border-color: #057a02 !important;"></span></h2>
      </section>              
        
        <section  class="contact" >
      <div class="container">

       
     
      

        <div class="row mt-5 justify-content-center" data-aos="fade-up" >
          <div class="col-lg-10">
            <form action="{{route('contact',$event->name_en)}}" method="post" role="form" class="php-email-form " style="background-color:black;
    border-color: black;
    font-weight: bold;
">
            @csrf
            <div class="row" style="">

            <div class="form-group mt-3">
                <input type="text" class="form-control" style="background-color: #151515;
    border-color: black;
    font-weight: bold;
    color:white
" name="subject" id="subject" placeholder="{{__('event.name')}}" required>
              </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="text" name="name" class="form-control" id="name" placeholder="{{__('event.phone')}}" style="background-color: #151515;
    border-color: black;
    font-weight: bold;
    color:white
" required>
                </div>
                <div class="col-md-6 form-group mt-3 ">
                  <input type="email" class="form-control" name="email" id="email" placeholder="{{__('event.email')}}" style="background-color: #151515;
    border-color: black;
    font-weight: bold;
    color:white
" required>
                </div>
              </div>
             
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="{{__('event.message')}}" required style="background-color: #151515;
    border-color: black;
    font-weight: bold;
    color:white
"></textarea>
              </div>
              <div class="my-3">
                <div class="loading">جارى الإرسال</div>
                <div class="error-message"></div>
                <div class="sent-message">تم إرسال رسالت بنجاح شكرا لك !</div>
              </div>
              <div class="text-center"><button type="submit">{{__('event.send')}}</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


 
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered" style="    max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">   {{__('event.register')}} ({{__('event.guest')}})</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" style="margin-right: 550px;" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
     
    

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="{{route('event.registration.guestRegister')}}" method="POST" role="form" class="php-email-form">
            @csrf
            <div class="row">

           <input type="hidden" name="event_id" value="{{$event->id}}" />
          @foreach($event_form as $event_form_input)
                <div class="col-md-6 form-group">
                <label class=" col-form-label" for="basic-icon-default-fullname">{{$event_form_input->title}}  @if($event_form_input->mandatory) <span class="text-danger"> * </span> @endif</label>
                  @if($event_form_input->title === 'Email')  
                  <input type="email" name="{{Str::lower($event_form_input->title_en)}}" class="form-control" id="{{Str::lower($event_form_input->title)}}" placeholder="  {{$event_form_input->title}}" @if($event_form_input->mandatory) required @endif >
                  @else
                  <input type="text" name="{{Str::lower($event_form_input->title_en)}}" class="form-control" id="{{Str::lower($event_form_input->title)}}" placeholder="  {{$event_form_input->title}}" @if($event_form_input->mandatory) required @endif >
                  @endif
                </div>
                
          @endforeach      
              </div>
              <div class="form-check mb-2">
                <!-- <input type="checkbox" required="required" value="agree" id="terms-checkbox" > <label for="terms-checkbox" class="form-check-label"><span>{{__('event.accept')}} </span> -->
               <!-- <a data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal" class="text-decoration-none text-primary">{{__('event.terms_conditions')}}</a> -->
                             <!-- <a  href="{{url('/uploads/ROAD-STAR-TERMS-CONDITIONS-2024-abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/الشروط والاحكام 2024.pdf')}}" target="_blank"  class="text-decoration-none text-primary">{{__('event.terms_conditions')}}</a> -->

              <!-- </label> -->
            </div>

<div class="text-center"><input type="submit"class="button btn btn-success w-100" style="background-color: #057a02 !important;
    border-color: #057a02 !important;" value="{{__('event.register')}}"/></div>
            </form>
          </div>

        </div>

    
   
      </div>
      <div class="modal-footer">
        <!-- <button class="btn btn-info" data-bs-target="#exampleModalToggle2" style="background-color: #057a02 !important;
    border-color: #057a02 !important;" data-bs-toggle="modal" data-bs-dismiss="modal">الشروط والأحكام</button> -->
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">{{__('event.terms_conditions')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   {{__('event.terms_conditions_content')}}

      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">{{__('event.back')}} </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle22" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">{{__('event.terms_conditions')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>
       {{__('event.terms_conditions_content')}}
</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">  {{__('event.back')}} </button>
      </div>
    </div>
  </div>
</div>

<!-- THIS IS SPONSER / EXHIBITOR REGISTRATION FADE MODEL -->

<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered" id="tty" style="    max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel"> {{__('event.sponsor_exhibitor')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" style="margin-right: 550px;" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
     
    

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="{{route('event.registration.spon_exhi')}}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">

            <input type="hidden" name="event_id" value="{{$event->id}}" />
                    
            <!-- <div class="col-md-6">
                        <label for="exampleFormControlSelect1" class=" col-form-label"> أختر إن كنت راعى أم مشارك <span class="text-danger"> * </span></label>
                        <select class="form-select" required name="registerer_type" id="SponserOrExhibitor"  onchange="sponserorexhibitor()" aria-label="Default select example">
                          <option  disabled  >حدد مشارك أم راعى</option>
                          <option value="1"  > راعى </option>
                          <option value="2">مشارك</option>
                        

                        </select>
                      </div> -->
                <div class="col-md-6 form-group">
                <label class=" col-form-label" for="basic-icon-default-fullname"> {{__('event.name')}}: <span class="text-danger"> * </span></label>
               
                  <input type="text" name="name" class="form-control" id="" placeholder="  " required >
                
                </div>

                <div class="col-md-6 form-group">
                <label class=" col-form-label" for="basic-icon-default-fullname"> {{__('event.email')}}: <span class="text-danger"> * </span></label>
               
                  <input type="email" name="email" class="form-control" id="" placeholder="  " required >
                
                </div>

                <div class="col-md-6 form-group">
                <label class=" col-form-label" for="basic-icon-default-fullname"> {{__('event.phone')}}: <span class="text-danger"> * </span></label>
               
                  <input type="text" name="phone" class="form-control" id="" placeholder="  " required >
                
                </div>

                <div class="col-md-6 form-group">
                <label class=" col-form-label" for="basic-icon-default-fullname"> {{__('event.job')}}: <span class="text-danger"> * </span></label>
               
                  <input type="text" name="job_title" class="form-control" id="" placeholder="  " required >
                
                </div>

                <div class="col-md-6 form-group">
                <label class=" col-form-label" for="basic-icon-default-fullname">{{__('event.work')}} : <span class="text-danger"> * </span></label>
               
                  <input type="text" name="work_dest" class="form-control" id="" placeholder="  " required >
                
                </div>

                <div class="col-md-6 form-group">
                <label class=" col-form-label" for="basic-icon-default-fullname">{{__('event.referral_code')}} : </label>
               
                  <input type="text" name="referral_code" value="@isset($referral_code){{$referral_code}}@endisset" class="form-control" id="" placeholder="  " @isset($referral_code) disabled  @endisset >
                
                </div>
              
               
                  
                 <div class="switch_section  " >
                                    <div class="row"> 

                    <div class=" col-md-6 form-group">
                        <label class=" col-form-label" for="basic-icon-default-fullname">  {{__('event.spon_exhi_type')}} : <span class="text-danger"> * </span></label>
                      
                        <select id="sponsor_type" name="reg_type" required="required" onchange="sponserType()" class="form-select" required>
                          <option disabled="disabled" selected="selected"> </option>
                           @foreach($regtypes as $regtype)
                          <option value="{{$regtype->id}}"> {{$regtype->reg_type}}</option>
                          @endforeach
 
                      </select>

                    </div>  


                      <div class="col-md-6 form-group">
                          <label class=" col-form-label" for="basic-icon-default-fullname"> {{__('event.spon_exhi_num')}}: <span class="text-danger"> * </span></label>
                        
                          <select id="sponsor_sub_type" name="reg_num"  class="form-select" >
                        
                          
                        
                          </select>
                      </div>
                          


                    <div class="col-md-6 form-group">
                        <label class=" col-form-label" for="basic-icon-default-fullname">  {{__('event.price')}}: </label>
                        <br><span class="text-danger">{{__('event.contactUs')}}</span>
                          <!-- <input type="text" name="price"  class="form-control" value="" id="price_input" disabled  > -->
                        
                    </div>

                    <!-- </div>
                </div> -->

              

                  
                
                <div class="form-check mt-3"><input type="checkbox" required="required" value="agree" id="terms-checkbox" > <label for="terms-checkbox" class="form-check-label"><span> {{__('event.accept')}} </span> 
               
                @if(app()->getLocale() == 'ar')
                <a  href="{{url('/uploads/IEC-TERMS-CONDITIONS-2024-abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/الشروط والاحكام 2024.pdf')}}" target="_blank"  class="text-decoration-none text-primary">{{__('event.terms_conditions')}}</a>
                @else
                <a  href="{{url('/uploads/IEC-TERMS-CONDITIONS-2024-abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/Terms-and-Conditions.pdf')}}" target="_blank"  class="text-decoration-none text-primary">{{__('event.terms_conditions')}}</a>
                @endif
              </label></div>

              </div>

              
              <div class="text-center"><input type="submit"class="button btn btn-success w-100" style="background-color: #057a02 !important;
    border-color: #057a02 !important;" value=" {{__('event.register')}}"/></div>
            </form>
          </div>

        </div>

    
   
      </div>
      <div class="modal-footer">
        <!-- <button class="btn btn-info" data-bs-target="#exampleModalToggle2" style="background-color: #057a02 !important;
    border-color: #057a02 !important;" data-bs-toggle="modal" data-bs-dismiss="modal">الشروط والأحكام</button> -->
      </div>
    </div>
  </div>
</div>

<!-- END OF SPONSER / EXHIBITOR REGISTRATION FADE MODEL -->



  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  

  <footer id="colophon" role="contentinfo" class="site-footer">
    <div class="site-info bg-dark text-white"><section class="bg-black text-white">
      <div class="container">
        <div class="row gy-4">
          <div id="footer-logo-box" class="col-sm-6 col-md-3 text-center text-md-end">
            <img src="https://umbrella.sa/assets/assets/img/Logos/IEC-logo.png" height="65" alt="IEC Management - International E-Commerce Expo"><br></div>
             <div class="col-sm-6 col-md-3 text-center">
              <h5 class="mb-0  fw-bold" style="color:#057a02;padding-bottom: 12px;">{{__('event.phone')}}</h5>

               <p class="mb-0" style="direction: initial;">
                <a href="tel:966112666627" class="link-light text-decoration-none" >+966112666627   <img style="width:25px" src="{{url('/assets/assets/img/Logos/telephone.png')}}" alt="telephoneIcon"></a>
              
              </p>

              <p style="direction: initial;">
              <a data-toggle="tooltip" class="link-light text-decoration-none" title="{{__('site.wht_icon_title')}}" href="https://wa.me/+966541164491" class="" target="_blank" >
      <i class="fa fa-whatsapp my-float"></i>+966541164491   <img style="width:22px" src="{{url('/assets/assets/img/Logos/whatsapp.png')}}" alt="WhatsApp Icon">
    </a> 
              <!-- <a href="tel:966541164491" class="link-light text-decoration-none" >+966541164491</a> -->
            
              </p>
            </div>
             <div class="col-sm-6 col-md-3 text-center">
              <h5 class="mb-0  fw-bold" style="color:#057a02;padding-bottom: 12px;">{{__('event.email')}}</h5>
               <p class="mb-0">
                <a href="mailto:expo@umbrella.sa" class="link-light text-decoration-none">expo@umbrella.sa</a>
              </p>
            </div>
             <div class="col-sm-6 col-md-3 text-center">
              <h5 class="mb-0  fw-bold" style="color:#057a02;padding-bottom: 12px;">{{__('event.location')}}</h5>
               <p class="mb-0">
                <a class="link-light text-decoration-none">
                  <span>{{$event->location}}</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </section>
     
        <div class=" text-center pt-3 pb-4" style="background-color:#057a02">
          <p>  <script>
        document.write(new Date().getFullYear())

      </script>©
             <a href="#" title="IEC Management" class="text-decoration-none text-white">{{$event->name}}</a> 
             <span class="text-black">|</span> 
              <a href="#" title="Terms and Conditions" class="text-decoration-none text-white">{{__('event.terms_conditions')}}</a>
            </p>
            
        </div>

<!-- Vendor JS Files -->
<script src="{{url('assets/assets/vendor/aos/aos.js')}}"></script>
<script src="{{url('assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{url('assets/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{url('assets/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{url('assets/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<!-- <script src="{{url('assets/assets/vendor/php-email-form/validate.js')}}"></script> -->

<!-- Template Main JS File -->
<script src="{{url('assets/assets/js/main.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>




<script>

// function sponserorexhibitor(){
//    if($('#SponserOrExhibitor').val() == 1){
  
//     $('.switch_section').html(`
//     <div class="row">

// <div class=" col-md-6 form-group">
//     <label class=" col-form-label" for="basic-icon-default-fullname"> نوع الرعاية: <span class="text-danger"> * </span></label>
  
//     <select id="sponsor_type" name="reg_type" required="required" onchange="sponserType()" class="form-select" required>
//       <option disabled="disabled" selected="selected">اختر نوع الرعاية</option>
//       <option value="1">الألماسي</option>
//       <option value="2">البلاتيني</option>
//       <option value="3">الذهبي</option>
//       <option value="4">الفضي</option>
//       <option value="5">الخدمات</option>

//   </select>

// </div>


//   <div class="col-md-6 form-group">
//       <label class=" col-form-label" for="basic-icon-default-fullname">رقم الرعاية: <span class="text-danger"> * </span></label>
    
//       <select id="sponsor_sub_type" name="reg_num"  class="form-select" >
    
      
    
//       </select>
//    </div>
      


// <div class="col-md-6 form-group">
//     <label class=" col-form-label" for="basic-icon-default-fullname"> السعر: </label>
  
//       <input type="number" name="price"  class="form-control" id="price_input" readonly="readonly"  >
    
// </div>

// </div>

//     `);
   
//    }else{
   
//     $('.switch_section').html(`
//     <div class="row">

//                     <div class="col-md-6 form-group">
                   
//                    <label class=" col-form-label" for="basic-icon-default-fullname"> نوع المساحة: </label>
//                     <select id="area_type" name="reg_type"  onchange="areaType()" class="form-select" >

//                     <option disabled="disabled" selected="selected">اختر نوع </option>
//                     <option value="1">A</option>
//                     <option value="2">B</option>
//                     <option value="3">C</option>
//                     <option value="4">D</option>
//                     <option value="5">E</option>
//                     <option value="6">F</option>

//                     </select>
                    
//                     </div>

//                     <div class="col-md-6 form-group">
//                     <label class=" col-form-label" for="basic-icon-default-fullname"> رقم المساحة: </label>
                  
//                     <select id="area_sub_type" name="reg_num"   class="form-select" >
                    
//                     </select>
//                     </div>

//                     <div class="col-md-6 form-group">
//                     <label class=" col-form-label" for="basic-icon-default-fullname"> السعر: </label>
                  
//                       <input type="text" name="price" class="form-control" id="area_price_input"  readonly >
                    
//                     </div>

//                 </div>
                
//     `);
  
//    }
    
 
  
// }


function sponserType(){
    
    if($('#sponsor_type').val() == 1){
    //  $('#sponsor_sub_type').html(`
    //                   <option value="1">D1</option>`);
    $('#price_input').val(600000);
   }else if($('#sponsor_type').val() == 2){
    // $('#sponsor_sub_type').html(`<option value="P1">P1</option><option value="P2">P2</option>`);
    $('#price_input').val( 450000);
  }else if($('#sponsor_type').val() == 3){
    // $('#sponsor_sub_type').html(` <option value="G1">G1</option><option value="G2">G2</option><option value="G3">G3</option><option value="G4">G4</option><option value="G5">G5</option><option value="G6">G6</option>`);
    $('#price_input').val(350000);
  }else if($('#sponsor_type').val() == 4){
    // $('#sponsor_sub_type').html(`
    // <option value="S1">S1</option><option value="S2">S2</option><option value="S3">S3</option><option value="S4">S4</option><option value="S5">S5</option><option value="S6">S6</option><option value="S7">S7</option>`);
$('#price_input').val(250000);  
}else if($('#sponsor_type').val() == 5){
//     $('#sponsor_sub_type').html(` 

// <option value="B1">B1</option><option value="B2">B2</option><option value="B3">B3</option><option value="B4">B4</option><option value="B5">B5</option><option value="B6">B6</option><option value="B7">B7</option><option value="B8">B8</option><option value="B9">B9</option><option value="B10">B10</option><option value="B11">B11</option><option value="B12">B12</option><option value="B13">B13</option><option value="B14">B14</option><option value="B15">B15</option><option value="B16">B16</option><option value="B17">B17</option><option value="B18">B18</option><option value="B19">B19</option><option value="B20">B20</option>`);
$('#price_input').val(60000); 
}
// alert($('#sponsor_type').val());
  $.ajax({
    url : "{{url('/site/event/reg/type/num/event_token:eventostbomentos2023116202206111115/')}}"+"/"+$('#sponsor_type').val(),
    method: 'GET',
    success:function(response){
      // alert(response.length);
      $('#sponsor_sub_type').empty();
      for (let index = 0; index <= response.length; index++) {
        $('#sponsor_sub_type').append(`
                     <option value="`+response[index].id+`">`+response[index].reg_number+`</option>`);
        
      }
     
    }
  });

}

// function areaType(){
    
//     if($('#area_type').val() == 1){
//      $('#area_sub_type').html(` 

// <option value="A2">A2</option><option value="A3">A3</option><option value="A4">A4</option><option value="A5">A5</option><option value="A6">A6</option><option value="A7">A7</option><option value="A8">A8</option><option value="A9">A9</option>`);
//     $('#area_price_input').val(60000);
//    }else if($('#area_type').val() == 2){
//     $('#area_sub_type').html(`  
// <option value="B2">B2</option><option value="B3">B3</option><option value="B4">B4</option><option value="B5">B5</option><option value="B6">B6</option><option value="B7">B7</option><option value="B8">B8</option><option value="B9">B9</option><option value="B10">B10</option><option value="B11">B11</option><option value="B12">B12</option><option value="B13">B13</option><option value="B14">B14</option><option value="B15">B15</option><option value="B16">B16</option><option value="B17">B17</option><option value="B18">B18</option>`);
//     $('#area_price_input').val(45000);
//   }else if($('#area_type').val() == 3){
//     $('#area_sub_type').html(` 

// <option value="C1">C1</option><option value="C2">C2</option><option value="C3">C3</option><option value="C4">C4</option><option value="C5">C5</option><option value="C6">C6</option><option value="C7">C7</option><option value="C8">C8</option><option value="C9">C9</option><option value="C10">C10</option><option value="C11">C11</option><option value="C12">C12</option><option value="C13">C13</option><option value="C14">C14</option><option value="C15">C15</option><option value="C16">C16</option><option value="C17">C17</option><option value="C18">C18</option><option value="C19">C19</option><option value="C20">C20</option><option value="C21">C21</option><option value="C22">C22</option><option value="C23">C23</option><option value="C24">C24</option><option value="C25">C25</option><option value="C26">C26</option><option value="C27">C27</option><option value="C28">C28</option><option value="C29">C29</option><option value="C30">C30</option><option value="C31">C31</option><option value="C32">C32</option><option value="C33">C33</option><option value="C34">C34</option><option value="C35">C35</option><option value="C36">C36</option><option value="C37">C37</option><option value="C38">C38</option><option value="C39">C39</option><option value="C40">C40</option><option value="C41">C41</option><option value="C42">C42</option><option value="C42">C43</option><option value="C44">C44</option><option value="C45">C45</option><option value="C46">C46</option><option value="C47">C47</option><option value="C48">C48</option><option value="C49">C49</option><option value="C50">C50</option><option value="C51">C51</option><option value="C52">C52</option><option value="C53">C53</option><option value="C54">C54</option><option value="C55">C55</option><option value="C56">C56</option><option value="C57">C57</option><option value="C58">C58</option><option value="C59">C59</option><option value="C60">C60</option>`);
//     $('#area_price_input').val(36000);
//   }else if($('#area_type').val() == 4){
//     $('#area_sub_type').html(` 

// <option value="D2">D2</option><option value="D3">D3</option><option value="D4">D4</option><option value="D5">D5</option><option value="D6">D6</option><option value="D7">D7</option><option value="D8">D8</option><option value="D9">D9</option><option value="D10">D10</option>`);
// $('#area_price_input').val(24000);  
// }else if($('#area_type').val() == 5){
//     $('#area_sub_type').html(`  

// <option value="101">E1</option><option value="102">E2</option><option value="103">E3</option><option value="104">E4</option><option value="105">E5</option><option value="106">E6</option><option value="107">E7</option><option value="108">E8</option><option value="109">E9</option><option value="110">E10</option><option value="111">E11</option><option value="112">E12</option><option value="113">E13</option><option value="114">E14</option><option value="115">E15</option><option value="116">E16</option><option value="117">E17</option><option value="118">E18</option><option value="119">E19</option><option value="120">E20</option><option value="121">E21</option><option value="122">E22</option><option value="123">E23</option><option value="124">E24</option><option value="125">E25</option><option value="126">E26</option><option value="127">E27</option><option value="128">E28</option><option value="129">E29</option><option value="130">E30</option><option value="131">E31</option><option value="132">E32</option><option value="133">E33</option><option value="134">E34</option><option value="135">E35</option><option value="136">E36</option><option value="137">E37</option><option value="138">E38</option><option value="139">E39</option><option value="140">E40</option><option value="141">E41</option><option value="142">E42</option><option value="143">E43</option><option value="144">E44</option><option value="145">E45</option><option value="146">E46</option><option value="147">E47</option><option value="148">E48</option><option value="149">E49</option><option value="150">E50</option><option value="151">E51</option><option value="152">E52</option><option value="153">E53</option><option value="154">E54</option><option value="155">E55</option><option value="156">E56</option><option value="157">E57</option><option value="158">E58</option><option value="159">E59</option><option value="160">E60</option><option value="161">E61</option><option value="162">E62</option><option value="163">E63</option><option value="164">E64</option><option value="165">E65</option><option value="166">E66</option><option value="167">E67</option><option value="168">E68</option><option value="169">E69</option><option value="170">E70</option><option value="171">E71</option><option value="172">E72</option><option value="173">E73</option><option value="174">E74</option><option value="175">E75</option><option value="176">E76</option><option value="177">E77</option><option value="178">E78</option><option value="179">E79</option><option value="180">E80</option><option value="181">E81</option><option value="182">E82</option><option value="183">E83</option><option value="184">E84</option><option value="185">E85</option><option value="186">E86</option><option value="187">E87</option><option value="188">E88</option><option value="189">E89</option><option value="190">E90</option><option value="191">E91</option><option value="192">E92</option><option value="193">E93</option><option value="194">E94</option><option value="195">E95</option><option value="196">E96</option><option value="197">E97</option><option value="198">E98</option><option value="199">E99</option><option value="200">E100</option><option value="201">E101</option><option value="202">E102</option><option value="203">E103</option><option value="204">E104</option><option value="205">E105</option><option value="206">E106</option><option value="207">E107</option><option value="208">E108</option><option value="209">E109</option><option value="210">E110</option><option value="211">E111</option><option value="212">E112</option><option value="213">E113</option><option value="214">E114</option><option value="215">E115</option><option value="216">E116</option><option value="217">E117</option><option value="218">E118</option><option value="219">E119</option><option value="220">E120</option><option value="221">E121</option><option value="222">E122</option><option value="223">E123</option><option value="224">E124</option><option value="225">E125</option><option value="226">E126</option><option value="227">E127</option><option value="228">E128</option><option value="229">E129</option><option value="230">E130</option><option value="231">E131</option><option value="232">E132</option><option value="233">E133</option><option value="234">E134</option><option value="235">E135</option><option value="236">E136</option><option value="237">E137</option><option value="238">E138</option><option value="239">E139</option><option value="240">E140</option><option value="241">E141</option><option value="242">E142</option><option value="243">E143</option><option value="244">E144</option><option value="245">E145</option><option value="246">E146</option><option value="247">E147</option><option value="248">E148</option><option value="249">E149</option><option value="250">E150</option><option value="251">E151</option><option value="252">E152</option><option value="253">E153</option><option value="254">E154</option><option value="255">E155</option><option value="256">E156</option><option value="257">E157</option><option value="258">E158</option><option value="259">E159</option><option value="260">E160</option><option value="261">E161</option><option value="262">E162</option><option value="263">E163</option><option value="264">E164</option><option value="265">E165</option><option value="266">E166</option><option value="267">E167</option><option value="268">E168</option>`);
// $('#area_price_input').val(18000); 
// }else{
//   $('#area_sub_type').html(` 

// <option value="F1">F1</option><option value="F2">F2</option><option value="F3">F3</option><option value="F4">F4</option><option value="F5">F5</option><option value="F6">F6</option><option value="F7">F7</option><option value="F8">F8</option><option value="F10">F10</option><option value="F11">F11</option><option value="F12">F12</option><option value="F13">F13</option><option value="F14">F14</option><option value="F15">F15</option><option value="F16">F16</option><option value="F17">F17</option><option value="F18">F18</option><option value="F19">F19</option><option value="F20">F20</option><option value="F21">F21</option><option value="F22">F22</option>`);
// $('#area_price_input').val(10000); 
// }

// }

</script>

<script>

setTimeout(function(){
  $('.bs-toast').hide().fadeout();

}, 5000);



var endDate = "{{$event->start_date}}";

/* ***** Do not change this code below. ***** */
var deadline = new Date(endDate).getTime();

var x = setInterval(function () {
  var now = new Date().getTime();
  var t = deadline - now;
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((t % (1000 * 60)) / 1000);
  document.getElementById("day").innerHTML = days;
  document.getElementById("hour").innerHTML = hours;
  document.getElementById("minute").innerHTML = minutes;
  document.getElementById("second").innerHTML = seconds;
  
  /* Output the End date. (Only for Demo) */
  document.getElementById("deadline").innerHTML = endDate;

  if (t < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "COUNTDOWN FINISHED";
    document.getElementById("day").innerHTML = "0";
    document.getElementById("hour").innerHTML = "0";
    document.getElementById("minute").innerHTML = "0";
    document.getElementById("second").innerHTML = "0";
  }
}, 1000);

  </script>




@isset($referral_code)
 
 <script>
  $('#exampleModalToggle3').addClass("show").css("display" , "block"); 
   
 </script>
  
 @endisset
</body> 




</html> 