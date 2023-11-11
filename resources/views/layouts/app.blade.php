<!DOCTYPE html>
<?php
$direction = '';
if(app()->getLocale() == 'ar') {$direction = 'rtl';$language = 'en'; $font="/assets/fonts/STC-Bold.ttf";} else {$direction='ltr';$language = 'ar';$font="/assets/fonts/Amazing Grotesk Demi.otf";}
?>
<html lang="{{$language}}" dir="{{$direction}}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Business Umbrella</title>
  <meta content="" name="description">
  <meta content="" name="keywords"> 

  <!-- Favicons -->
  <link href="{{asset('assets/assets/img/Logos/bu_logo_fav.png')}}" rel="icon">
  <link href="{{asset('assets/assets/img/Logos/bu_logo_fav.png')}}" rel="apple-touch-icon">

 

  <!-- Vendor CSS Files -->
  <link href="{{url('assets/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
 

  <!-- Template Main CSS File -->
  <link href="{{url('assets/assets/css/style.css')}}" rel="stylesheet">
 <!-- bukra for title amazing grotesk for body -->
  <style>
    @font-face {
  font-family: "umbrella";
  src: url(<?php echo "'$font'" ?>)
}

    @font-face {
      font-family: "language_link";
      src: url('/assets/fonts/STC-Bold.ttf')
    }
*{
    font-family: 'umbrella' 
}

h1 ,h2, h3, h4 , p , a{
  font-family:'umbrella';
}

.language_link{
  font-family:'language_link';
}

img{
  border-radius: 18px;
}
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: gray; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background:#057a02 ;
}

    .float{
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      right:40px;
      background-color:#25d366;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      font-size:30px;
      box-shadow: 2px 2px 3px #999;
      z-index:100;
    }

    .my-float{
      margin-top:16px;
    }


  .cta2 .cta2-btn{
    text-transform: uppercase;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px 25px;
    border-radius: 2px;
    transition: 0.4s;
    margin: 10px;
    border-radius: 4px;
    border: 2px solid gray;
    color: #fff;
    background: #057a02;

  }

  .cta2-btn:hover{
    background: #fff;
    color: #057a02;
    border: 2px solid #057a02;
  }




</style>


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


</head>

<body style="background-color:{{$settings->background_color}}">

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">hello@umbrella.sa</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+966112666627</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
        <!-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> -->
        <a href="https://www.instagram.com/bumbrellasa/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/businessumbrella/posts/?feedView=all" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- <h1 class="text-light" style="float:right"><a href="index.html">Business Umbrella</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/">      <img src="{{asset('/assets/assets/img/Logos/bu_logo_1.png')}}"  style="max-height: 125px;
    " alt="Credit Card" >
</a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
          <div class="cta2 col-lg-3 cta2-btn-container text-center" style="background:none">
          <!-- {{route('event.registration' ,'IEC')}} -->
            <a class="cta2-btn align-middle" href="{{route('promoter.register')}}" >    {{__('site.promoter_register')}}</a>
          </div> 
          </li>
          <li><a class="active" href="/#">{{__('site.home')}}</a></li>
          <li><a href="#about-us">{{(__('site.about'))}}</a></li>
          <li><a href="/services">{{(__('site.services'))}}</a></li>
          <!-- <li><a href="testimonials.html">Projects</a></li> -->
          <!-- <li><a href="pricing.html">Team Building</a></li> -->
          <li><a href="/projects">{{(__('site.projects'))}}</a></li> <!-- lik gallery on home page -->
          <!-- <li><a href="#">Events</a></li> -->
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
          <li><a href="/contact">{{(__('site.contactUs'))}}</a></li>
          <li ><a href="{{route('event.locale',$language)}}" class="language_link" >{{__('site.language')}}</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<body>
    <div id="app">
      

       
            @yield('content')
       
    </div>
</body>
<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 footer-contact">
        <h3>{{__('site.location')}}</h3>
        <p>
        2nd Floor <br>
        Al Hamra City Building Riyadh, SU 13225<br>
        Saudi Arabia
        </p>
      </div>

      <div class="col-lg-4 col-md-6 footer-contact">
        <h3> {{__('site.contactUs')}}</h3>
        <p>
    
          <strong>{{__('site.phone')}}:</strong> +966112666627<br>
          <strong>{{__('site.email')}}:</strong> hello@umbrella.sa<br>
        </p>
      </div>

     

      <!-- <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Projects</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Events</a></li>
        </ul>
      </div> -->

      <!-- <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Event Management </a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Conferences & Seminars</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Entertainment</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Corporate giveaways</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Event giveaways </a></li>
        </ul>
      </div> -->

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h3 style="color: white;">{{__('site.Join Our Newsletter')}}</h3>
        <p style="font-size: small;">{{__('site.AT BUSINESS UMBRELLA, EACH EVENT IS ITS OWN WORLD.')}}</p>
      
        <form id="subscription_form" action="#" method="post">
          <input type="email" id="email" name="email" required><input type="submit" value="{{__('site.subscribe')}}" onclick="subscribeNow()">
       
        </form>
        <span id="subscription_success_message" style="color:rgb(30 188 26);font-size:18px;display:none"></span>
      </div>
     
    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; {{__('site.copyright')}}
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
      {{__('site.copyright2')}}
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
    <!-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> -->
    <a href="https://www.instagram.com/bumbrellasa/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
    <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
    <a href="https://www.linkedin.com/company/businessumbrella/posts/?feedView=all" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</div>

<div >
    <a data-toggle="tooltip" title="{{__('site.wht_icon_title')}}" href="https://wa.me/+966541164491" class="float" target="_blank" >
      <i class="fa fa-whatsapp my-float"></i>
    </a>
</div>



</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
<script src="{{asset('assets/js/ui-toasts.js')}}"></script>
<script>

setTimeout(function(){
  $('.bs-toast').hide().fadeout();

}, 3000);
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
 function subscribeNow(){
  $("#subscription_form").submit(function(e) {
    e.preventDefault();
});
   var email = $('#email').val();
   $.ajax({
     url : "{{url('/subscribe')}}",
     method : "POST" ,
     data:{email:email},
     success:function(response) {
        $('#subscription_success_message').css('display' , 'block').text(response.message)
        setTimeout(() => {
           $('#subscription_success_message').css('display' , 'none');
        }, 3000);
     },
     error:function (error) {
        alert(error);
     }
   });
 }
    </script>
</body>

</html>
</html>
