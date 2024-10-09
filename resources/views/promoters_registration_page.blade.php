@extends('layouts.app')
@section('content')


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
form {
  border-radius: 8px;
  border-color: #057a02;
}



.select2-container--default .select2-selection--single {
  height: 43px;
}

.select2-container--default .select2-selection--single .select2-selection__arrow{
  height: 43px;
}


.select2-results__option:hover{
   color:green;
   cursor: pointer;
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

@if(session()->has('error'))
<div class="alert alert-danger">
    {{session()->get('error')}}
  </div>
@endif
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{__('site.promoters_registrations')}}</h2>
          <ol>
          <li><a href="{{url('/')}}">{{__('site.home')}}</a></li>
            <li>{{__('site.promoters_registrations')}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
  
   


    <section id="contact" class="contact">
      <div class="container">

       

        <div class="row mt-5 justify-content-center" data-aos="fade-up" >
          <div class="col-lg-8">
            <form action="{{route('promoter.register')}}" method="POST" role="form" class="php-email-form" style="border-radius: 14px;">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                <label class="custom-control-label" for="customRadioInline2">{{__('site.name')}} <span class="text-danger">*</span></label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="{{__('site.name')}}" required style="border-radius: 8px;">
                </div>

                <div class="col-md-6 form-group ">
                <label class="custom-control-label" for="customRadioInline2">{{__('site.nationality')}} <span class="text-danger">*</span></label>
              <select class="js-example-basic-single custom-control-input form-control" placeholder="{{__('site.nationality')}}" required name="nationality" id="nationality">
                  <option value="" disabled selected></option>        
                  @foreach($countries as $country)
                            <option value="{{$country->name}}">{{$country->name}}</option>
                            @endforeach
                    </select>
                
                </div>

                <div class="col-md-6  mt-3  form-group">
                <label class="custom-control-label" for="customRadioInline2">{{__('site.phone')}} <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" name="phone" id="email" placeholder="{{__('site.phone')}}" required style="border-radius: 8px;">
                </div>

                <div class="col-md-6 mt-3  form-group ">
                <label class="custom-control-label" for="customRadioInline2">{{__('site.email')}} <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="{{__('site.email')}}" required style="border-radius: 8px;">
                </div>

                <div class="col-md-6 mt-3  form-group">
                <label class="custom-control-label" for="customRadioInline2">{{__('site.emergency_contact')}}</label>
                  <input type="number" class="form-control" name="emergency_contact" id="email" placeholder="{{__('site.emergency_contact')}}"  style="border-radius: 8px;">
                </div>

               
             
               

              

              

             <div class="col-md-6 mt-3 ">
                <label class="custom-control-label" for="customRadioInline2">{{__('site.gender')}} <span class="text-danger">*</span></label>

                <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="gender" value="1" class="custom-control-input" required>
                      <label class="custom-control-label" for="customRadioInline1">{{__('site.male')}}</label>
                  
                  
                      <input type="radio" id="customRadioInline2" name="gender" value="2" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline2">{{__('site.female')}}</label>
                    </div>
              </div>
              <div class=" form-group mt-3 ">
              <label class="custom-control-label" for="customRadioInline2">{{__('site.country')}} <span class="text-danger">*</span></label>
                  <select class="js-example-basic-single custom-control-input form-control" onChange="fetch_cities()" required name="country" id="country">
                  <option value="" disabled selected></option>        
                  @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                    </select>
             </div>
              <div class="autocomplete form-group mt-3 ">
              <label class="custom-control-label" for="customRadioInline2">{{__('site.city')}} <span class="text-danger">*</span></label>
              <select class="js-example-basic-single custom-control-input form-control" onChange="" required name="city" id="city">
                  <option value="" disabled selected></option>        
                 
                    </select>
            </div>
               <div class=" form-group mt-3 ">
               <label class="custom-control-label" for="customRadioInline2">{{__('site.birthdate')}} <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="birthdate" id="subject" placeholder="{{__('site.birthdate')}}" required style="border-radius: 8px;">
              </div>
              
               <div class=" form-group mt-3">
               <label class="custom-control-label" for="customRadioInline2">{{__('site.qualification')}} <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="qualificatoin" id="subject" placeholder="{{__('site.qualification')}}" required style="border-radius: 8px;">
              </div>
              
              <div class="  form-group mt-3">
              <label class="custom-control-label" for="customRadioInline2">{{__('site.experiecnce')}} <span class="text-danger">*</span></label>
                <textarea class="form-control" name="experience" rows="5" placeholder="{{__('site.experiecnce')}}" required style="border-radius: 8px;"></textarea>
              </div>
              
                       <div class="col-md-12">
                       <label class="custom-control-label" for="customRadioInline2">{{__('site.language_level')}} <span class="text-danger">*</span></label>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadioInline1" name="english_level" value="1" required class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline1">{{__('site.excellent')}}</label>

                              <input type="radio" id="customRadioInline2" name="english_level" value="2" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2">{{__('site.very_good')}}</label>
                         
                              <input type="radio" id="customRadioInline2" name="english_level" value="3" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2">{{__('site.good')}}</label>
                       
                              <input type="radio" id="customRadioInline2" name="english_level" value="4"  class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2">{{__('site.fair')}}</label>
                            </div>
    </div>
                
                 <div class="col-md-12 form-group mt-3">
                 <label class="custom-control-label" for="customRadioInline2">{{__('site.other_langiages')}}</label>
                <textarea class="form-control" name="other_langiages" rows="5" placeholder="{{__('site.other_langiages')}}"  style="border-radius: 8px;"></textarea>
              </div>
              
              <div class="col-12">
              <label class="custom-control-label" for="customRadioInline2">{{__('site.working_time')}} <span class="text-danger">*</span></label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="attendance_time" chekced required value="1" id="customCheck1" >
                <label class="custom-control-label" for="customCheck1">{{__('site.time_1')}}</label>
              </div>
              
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="attendance_time" value="2" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">{{__('site.time_2')}}</label>
              </div>
              
                <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="attendance_time" value="3" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">{{__('site.time_3')}}</label>
              </div>
              
                <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="attendance_time" value="4" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">{{__('site.time_4')}}</label>
              </div>
            </div>
              
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <script src="https://www.google.com/recaptcha/api.js" 
              async defer></script>
              <div class="g-recaptcha" id="feedback-recaptcha" style=" margin-bottom: 18px;"
              data-sitekey="6LdoBDEgAAAAAGJHjQuA1YjYriPdiu-obtg-vfWT" require>
         </div><br>

              <div class="text-center "><button class="btn btn-block" style="width: 100%;" type="submit">{{__('site.send')}}</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
 
<script src="{{asset('assets/js/ui-toasts.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>

setTimeout(function(){
  $('.alert').hide().fadeout();

}, 4000);
    </script>

//     <script>
//       function autocomplete(inp, arr) {
//   /*the autocomplete function takes two arguments,
//   the text field element and an array of possible autocompleted values:*/
//   var currentFocus;
//   /*execute a function when someone writes in the text field:*/
//   inp.addEventListener("input", function(e) {
//       var a, b, i, val = this.value;
//       /*close any already open lists of autocompleted values*/
//       closeAllLists();
//       if (!val) { return false;}
//       currentFocus = -1;
//       /*create a DIV element that will contain the items (values):*/
//       a = document.createElement("DIV");
//       a.setAttribute("id", this.id + "autocomplete-list");
//       a.setAttribute("class", "autocomplete-items");
//       /*append the DIV element as a child of the autocomplete container:*/
//       this.parentNode.appendChild(a);
//       /*for each item in the array...*/
//       for (i = 0; i < arr.length; i++) {
//         /*check if the item starts with the same letters as the text field value:*/
//         if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
//           /*create a DIV element for each matching element:*/
//           b = document.createElement("DIV");
//           /*make the matching letters bold:*/
//           b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
//           b.innerHTML += arr[i].substr(val.length);
//           /*insert a input field that will hold the current array item's value:*/
//           b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
//           /*execute a function when someone clicks on the item value (DIV element):*/
//           b.addEventListener("click", function(e) {
//               /*insert the value for the autocomplete text field:*/
//               inp.value = this.getElementsByTagName("input")[0].value;
//               /*close the list of autocompleted values,
//               (or any other open lists of autocompleted values:*/
//               closeAllLists();
//           });
//           a.appendChild(b);
//         }
//       }
//   });
//   /*execute a function presses a key on the keyboard:*/
//   inp.addEventListener("keydown", function(e) {
//       var x = document.getElementById(this.id + "autocomplete-list");
//       if (x) x = x.getElementsByTagName("div");
//       if (e.keyCode == 40) {
//         /*If the arrow DOWN key is pressed,
//         increase the currentFocus variable:*/
//         currentFocus++;
//         /*and and make the current item more visible:*/
//         addActive(x);
//       } else if (e.keyCode == 38) { //up
//         /*If the arrow UP key is pressed,
//         decrease the currentFocus variable:*/
//         currentFocus--;
//         /*and and make the current item more visible:*/
//         addActive(x);
//       } else if (e.keyCode == 13) {
//         /*If the ENTER key is pressed, prevent the form from being submitted,*/
//         e.preventDefault();
//         if (currentFocus > -1) {
//           /*and simulate a click on the "active" item:*/
//           if (x) x[currentFocus].click();
//         }
//       }
//   });
//   function addActive(x) {
//     /*a function to classify an item as "active":*/
//     if (!x) return false;
//     /*start by removing the "active" class on all items:*/
//     removeActive(x);
//     if (currentFocus >= x.length) currentFocus = 0;
//     if (currentFocus < 0) currentFocus = (x.length - 1);
//     /*add class "autocomplete-active":*/
//     x[currentFocus].classList.add("autocomplete-active");
//   }
//   function removeActive(x) {
//     /*a function to remove the "active" class from all autocomplete items:*/
//     for (var i = 0; i < x.length; i++) {
//       x[i].classList.remove("autocomplete-active");
//     }
//   }
//   function closeAllLists(elmnt) {
//     /*close all autocomplete lists in the document,
//     except the one passed as an argument:*/
//     var x = document.getElementsByClassName("autocomplete-items");
//     for (var i = 0; i < x.length; i++) {
//       if (elmnt != x[i] && elmnt != inp) {
//         x[i].parentNode.removeChild(x[i]);
//       }
//     }
//   }
//   /*execute a function when someone clicks in the document:*/
//   document.addEventListener("click", function (e) {
//       closeAllLists(e.target);
//       });
// }


 
// var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

// autocomplete(document.getElementById("country"), countries);


// </script> 
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

      
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});


  function fetch_cities(){
  
    var country_id  = $("#country").val();
    $.ajax({
        url: "{{url('/promoters/registration/country/cities/')}}"+"/"+country_id,
        dataType: "json",
        type: "get",
        async: true,
        success: function (data) {
          $('#city').empty();
      for (let index = 0; index <= data.length; index++) {
        $('#city').append(`
                     <option value="`+data[index].name+`">`+data[index].name+`</option>`);
        
      }
        },
        error: function (xhr, exception) {
            var msg = "";
            if (xhr.status === 0) {
                msg = "Not connect.\n Verify Network." + xhr.responseText;
            } else if (xhr.status == 404) {
                msg = "Requested page not found. [404]" + xhr.responseText;
            } else if (xhr.status == 500) {
                msg = "Internal Server Error [500]." +  xhr.responseText;
            } else if (exception === "parsererror") {
                msg = "Requested JSON parse failed.";
            } else if (exception === "timeout") {
                msg = "Time out error." + xhr.responseText;
            } else if (exception === "abort") {
                msg = "Ajax request aborted.";
            } else {
                msg = "Error:" + xhr.status + " " + xhr.responseText;
            }
           
        }
    }); 
  }
      </script>
      <script>
window.addEventListener('load', () => {
  const $recaptcha = document.querySelector('#g-recaptcha-response');
  if ($recaptcha) {
    $recaptcha.setAttribute('required', 'required');
  }
})
        </script>
   
@endsection

