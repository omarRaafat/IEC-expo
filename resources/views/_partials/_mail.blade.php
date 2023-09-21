<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Business Umbrella</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('assets/assets/img/favicon.png')}}" rel="icon">
  <link href="{{url('assets/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
    img {
  border-radius: 50%;
}
</style>
</head>

<body>

  <!-- ======= Top Bar ======= -->


  <main id="main">
    
  <section id="contact" class="contact ">
      <div class="container">

      
        <div class="row mt-5 justify-content-center" >
       
          <div class="col-lg-10 text-center" style="width:450px;">
          
            <form action="#" method="post" role="form" class="php-email-form" style="border: 1px solid #6b8a3c;">
           
            <div style="backgorund-image:{{asset('/assets/assets/img/Logos/IEC-logo.png')}}"> <img src="{{asset('/assets/assets/img/Logos/IEC-logo.png')}}"  style="width:150px;height:145px;background-color:#000000;border-raduis:50%;border: 1px solid #6b8a3c;" alt="Credit Card" >
    <br><br><hr>

</div>
            
           
      
             <p>Event Name : {{$data->event->name}}</p>
             <p>Guest Name : {{$data->name}}</p>
             <p>Guest Email : {{$data->email}}</p>

          
           
          
<hr>
        <div class="row  justify-content-center" >
          <div class="col-lg-10">
          <div class="visible-print text-center">
			<a href="{{url('/qr/code/scan/'.$data->email)}}">Click Me To Scan QR CODE </a>
         {!!   \QrCode::size(100)->eye('circle')->color(5,122,2)->generate("Guest Name : " . $data->name ."," . "Guest EMail : " . $data->email   )  !!}
      
</div>
<br>


            </form>
            <div style="background-color:black">
            <h6 class="text-center text-white" >Powered By <span style="color:#6b8a3c">Umbrella.sa</span></h6> 
</div>
          </div>

        </div>

      </div>
    </section>
   

  </main><!-- End #main -->

 

  <!-- ======= Footer ======= -->
  



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

</body>

</html>