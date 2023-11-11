@extends('layouts/contentNavbarLayout')

@section('title', ' Promoter Registration Info')
<script src="https://jsuites.net/v4/jsuites.js"></script>
<link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
<style type="text/css">
 
  </style>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
      rel="stylesheet"
    />  
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Promoters/</span> Promoter Registration Info</h4>

<!-- Basic Layout -->
<div class="card container" style="width:80%"> 
        
            <form action="{{route('promoter.register')}}" method="POST" role="form" class="php-email-form" style="border-radius: 14px;">
            @csrf
            <div class="row mt-5">
                <div class="col-md-6 form-group">
                <label class="custom-control-label" for="customRadioInline2">{{__('site.name')}} <span class="text-danger">*</span></label>
                  <input type="text" name="name" class="form-control" value="{{$promoter->name}}"  id="name" placeholder="{{__('site.name')}}" required style="border-radius: 8px;">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label class="custom-control-label" for="customRadioInline2">{{__('site.nationality')}} <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="nationality" value="{{$promoter->nationality}}" id="email" placeholder="{{__('site.nationality')}}" required style="border-radius: 8px;">
                </div>
             
                <div class="col-md-6 mt-3">
                <label class="custom-control-label" for="customRadioInline2">{{__('site.phone')}} <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" name="phone" id="email" value="{{$promoter->phone}}" placeholder="{{__('site.phone')}}" required style="border-radius: 8px;">
                </div>

                <div class="col-md-6 mt-3 ">
                <label class="custom-control-label" for="customRadioInline2">{{__('site.email')}} <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" value="{{$promoter->email}}" placeholder="{{__('site.email')}}" required style="border-radius: 8px;">
                </div>

                <div class="col-md-6 mt-3">
                <label class="custom-control-label" for="customRadioInline2">{{__('site.emergency_contact')}}</label>
                  <input type="number" class="form-control" name="emergency_contact" value="{{$promoter->emergency_contact}}" id="email" placeholder="{{__('site.emergency_contact')}}"  style="border-radius: 8px;">
                </div>

             <div class="col-md-6 mt-3 ">
                <label class="custom-control-label" for="customRadioInline2">{{__('site.gender')}} <span class="text-danger">*</span></label>

                <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="gender" @if($promoter->gender == 1) checked @endif  value="1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline1">{{__('site.male')}}</label>
                  
                  
                      <input type="radio" id="customRadioInline2" name="gender" @if($promoter->gender == 2) checked @endif value="2" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline2">{{__('site.female')}}</label>
                    </div>
              </div>
                
              <div class="autocomplete form-group mt-3 ">
              <label class="custom-control-label" for="customRadioInline2">{{__('site.city')}} <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="city" id="" value="{{$promoter->city}}" placeholder="{{__('site.city')}}" required style="border-radius: 8px;">
              </div>
               <div class=" form-group mt-3 ">
               <label class="custom-control-label" for="customRadioInline2">{{__('site.birthdate')}} <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="birthdate" value="{{$promoter->birthdate}}" id="subject" placeholder="{{__('site.birthdate')}}" required style="border-radius: 8px;">
              </div>
              
               <div class=" form-group mt-3">
               <label class="custom-control-label" for="customRadioInline2">{{__('site.qualification')}} <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="qualificatoin" value="{{$promoter->qualificatoin}}" id="subject" placeholder="{{__('site.qualification')}}" required style="border-radius: 8px;">
              </div>
              
              <div class="  form-group mt-3">
              <label class="custom-control-label" for="customRadioInline2">{{__('site.experiecnce')}} <span class="text-danger">*</span></label>
                <textarea class="form-control" name="experience" rows="5"  placeholder="{{__('site.experiecnce')}}" required style="border-radius: 8px;">{{$promoter->experience}}</textarea>
              </div>
              
                       <div class="col-md-12">
                       <label class="custom-control-label" for="customRadioInline2">{{__('site.language_level')}} <span class="text-danger">*</span></label>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadioInline1" name="english_level" @if($promoter->english_level == 1) checked @endif value="1" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline1">{{__('site.excellent')}}</label>

                              <input type="radio" id="customRadioInline2" name="english_level" @if($promoter->english_level == 2) checked @endif value="2" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2">{{__('site.very_good')}}</label>
                         
                              <input type="radio" id="customRadioInline2" name="english_level" @if($promoter->english_level == 3) checked @endif value="3" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2">{{__('site.good')}}</label>
                       
                              <input type="radio" id="customRadioInline2" name="english_level" @if($promoter->english_level == 4) checked @endif value="4" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2">{{__('site.fair')}}</label>
                            </div>
   
                
                 <div class="col-md-12 form-group mt-3">
                 <label class="custom-control-label" for="customRadioInline2">{{__('site.other_langiages')}}</label>
                <textarea class="form-control" name="other_langiages" rows="5" placeholder="{{__('site.other_langiages')}}"  style="border-radius: 8px;">{{$promoter->other_langiages}}</textarea>
              </div>
              
              <div class="col-12">
              <label class="custom-control-label" for="customRadioInline2">{{__('site.working_time')}} <span class="text-danger">*</span></label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="attendance_time" @if($promoter->attendance_time == 1) checked @endif value="1" id="customCheck1" >
                <label class="custom-control-label" for="customCheck1">{{__('site.time_1')}}</label>
              </div>
              
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="attendance_time" @if($promoter->attendance_time == 2) checked @endif value="2" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">{{__('site.time_2')}}</label>
              </div>
              
                <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="attendance_time" @if($promoter->attendance_time == 3) checked @endif value="3" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">{{__('site.time_3')}}</label>
              </div>
              
                <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="attendance_time" @if($promoter->attendance_time == 4) checked @endif value="4" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">{{__('site.time_4')}}</label>
              </div>
            </div> 
              
          
            </form>

</div> 



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

<script>
    $(document).ready(()=>{
        $('#photo').change(function(){
            const file = this.files[0];
            console.log(file);
            if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    $('#imgPreview_1').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });

    $('form :input').attr('disabled', true);
</script>
@endsection
