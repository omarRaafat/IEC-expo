
@extends('layouts.app')
@section('content')

<style>
form {
  border-radius: 8px;
}

#g-recaptcha-response {
  display: block !important;
  position: absolute;
  margin: -78px 0 0 0 !important;
  width: 302px !important;
  height: 76px !important;
  z-index: -999999;
  opacity: 0;
}

  </style>
 

  <main id="main">
  @if(session()->has('message'))
<div class="alert alert-success">
    {{session()->get('message')}}
  </div>
@endif
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{__('site.contactUs')}}</h2>
          <ol>
          <li><a href="{{url('/')}}">{{__('site.home')}}</a></li>
            <li>{{__('site.contactUs')}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
    <!-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.286174833882!2d46.788353814318434!3d24.785652454357443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2effd5f565a55b%3A0x3da7a19aa700e469!2sAl%20Hamra%20City!5e0!3m2!1sen!2seg!4v1667662260953!5m2!1sen!2seg" frameborder="0" allowfullscreen></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap" style="border-radius: 14px;">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>{{__('site.location')}}:</h4>
                  <p>2nd Floor,Al Hamra City <br>Saudi Arabia, Riyadh 13225</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>{{__('site.email')}}:</h4>
                  <p>info@ubmrella.sa<br>hello@umbrella.sa
</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>{{__('site.phone')}}:</h4>
                  <p>+966112666627</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up" >
          <div class="col-lg-10">
            <form action="{{route('contact','Umbrella')}}" method="POST" role="form" class="php-email-form" style="border-radius: 14px;">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="{{__('site.name')}}" required style="border-radius: 8px;">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="{{__('site.email')}}" required style="border-radius: 8px;">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="{{__('site.subject')}}" required style="border-radius: 8px;">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="{{__('site.message')}}" required style="border-radius: 8px;"></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <script src="https://www.google.com/recaptcha/api.js" 
                            async defer></script>





                    <div class="g-recaptcha" id="feedback-recaptcha" 
                         data-sitekey="6LdoBDEgAAAAAGJHjQuA1YjYriPdiu-obtg-vfWT" require>
                    </div>
              <div class="text-center"><button type="submit">{{__('site.send')}}</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('assets/js/ui-toasts.js')}}"></script>
<script>

setTimeout(function(){
  $('.alert').hide().fadeout();

}, 3000);


window.addEventListener('load', () => {
  const $recaptcha = document.querySelector('#g-recaptcha-response');
  if ($recaptcha) {
    $recaptcha.setAttribute('required', 'required');
  }
})
    </script>
@endsection




