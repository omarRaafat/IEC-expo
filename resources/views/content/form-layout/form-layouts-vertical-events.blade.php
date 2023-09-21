@extends('layouts/contentNavbarLayout')

@section('title', ' Create Event')
<script src="https://jsuites.net/v4/jsuites.js"></script>
<link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
<style type="text/css">
 <style>
  .required:after {
    content:" *";
    color: red;
  }
</style>
  </style>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
      rel="stylesheet"
    />
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Events/</span> Create Event</h4>

<!-- Basic Layout -->
  <form action="{{@route('event.add')}}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="card">
                <div class="row">
                 
                    <div class=" col-md-6"> 

                            

                                

                                  
                                      
                                      <div class="card-header d-flex justify-content-between align-items-center">
                                    
                                        <h5 class="mb-0"></h5>
                                    
                                        <small class="text-muted float-end"> * are required</small>
                                      </div>
                                      <div class="card-body">
                                      
                                      <div class="mb-3">
                                            <label class="form-label " for="basic-icon-default-fullname"> Event Name (English) *</label>
                                            <div class="input-group input-group-merge ">
                                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                              <input type="text"  name="name_en"  class="form-control @error('name_en')  is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                            
                                            </div>
                                            @error('name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label " for="basic-icon-default-fullname"> Event Name (Arabic) *</label>
                                            <div class="input-group input-group-merge ">
                                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                              <input type="text"  name="name_ar"  class="form-control @error('name_ar')  is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                            
                                            </div>
                                            @error('name_ar')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>

                                          <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Description (English)</label>
                                            <textarea class="form-control" name="description_en" id="exampleFormControlTextarea1" rows="3"></textarea>
                                          </div>

                                          <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Description (Arabic)</label>
                                            <textarea class="form-control" name="description_ar" id="exampleFormControlTextarea1" rows="3"></textarea>
                                          </div>

                            

                                        

                                          <div class="mb-3">
                                            <label class="form-label" for="basic-icon-default-email">Start Date *  </label>
                                            <div class="input-group input-group-merge">
                                              <span class="input-group-text"><i class="bx bx-box"></i></span>
                                              <input type="date" name="start_date" id="basic-icon-default-email"  class="form-control @error('start_date') is-invalid @enderror" placeholder="ORGANIZATION INDUSTRY" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                                              <!-- <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>  -->
                                            </div> 
                                            @error('start_date') 
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <!-- <div class="form-text"> You can use letters, numbers & periods </div> -->
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label" for="basic-icon-default-email">End Date *  </label>
                                            <div class="input-group input-group-merge">
                                              <span class="input-group-text"><i class="bx bx-box"></i></span>
                                              <input type="date" name="end_date" id="basic-icon-default-email"  class="form-control @error('end_date') is-invalid @enderror" placeholder="ORGANIZATION INDUSTRY" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                                              <!-- <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>  -->
                                            </div> 
                                            @error('end_date') 
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <!-- <div class="form-text"> You can use letters, numbers & periods </div> -->
                                          </div>

                                        
                                          
                                          <div class="mb-3">
                                            <label class="form-label " for="basic-icon-default-fullname"> Event Location (English) *</label>
                                            <div class="input-group input-group-merge ">
                                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                              <input type="text"  name="location_en"  class="form-control @error('location_en') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                            
                                            </div>
                                            @error('location_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label " for="basic-icon-default-fullname"> Event Location (Arabic) *</label>
                                            <div class="input-group input-group-merge ">
                                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                              <input type="text"  name="location_ar"  class="form-control @error('location_ar') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                            
                                            </div>
                                            @error('location_ar')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>
                                          <div class="mb-3">
                                            <label class="form-label " for="basic-icon-default-fullname"> Event City (English) *</label>
                                            <div class="input-group input-group-merge ">
                                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                              <input type="text"  name="city_en"  class="form-control @error('city_en') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                            
                                            </div>
                                            @error('city_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>


                                          <div class="mb-3">
                                            <label class="form-label " for="basic-icon-default-fullname"> Event City (Arabic) *</label>
                                            <div class="input-group input-group-merge ">
                                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                              <input type="text"  name="city_ar"  class="form-control @error('city_ar') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                            
                                            </div>
                                            @error('city_ar')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>


                                        

                                          <div class="mb-3">
                                            <label for="formFileMultiple" class="form-label">Update Sponsors Logos </label>
                                            <input class="form-control" type="file" name="sponsors[]" id="formFileMultiple" multiple>
                                          </div>

                                          <div class="mb-3">
                                            <label for="formFileMultiple" class="form-label">Update Exhibitos Logos </label>
                                            <input class="form-control" type="file" name="exhibitors[]" id="formFileMultiple" multiple>
                                          </div>
                          

                                        
                                            
                                        

                                        
                                      
                                      </div> 
                                  
                                
                                

                    </div>

                    <div class=" col-md-6"> 

                            

                                

                                  
                                      
                                      <div class="card-header d-flex justify-content-between align-items-center">
                                    
                                        <h5 class="mb-0"></h5>
                                    
                                        <small class="text-muted float-end"> * are required</small>
                                      </div>
                                      <div class="card-body">
                                      
                                        

                                      
                                        

                                        

                                    

                                          <div class="mb-3">
                                            <label for="formFileMultiple" class="form-label">Update Slider Images </label>
                                            <input class="form-control" type="file" name="images[]" id="formFileMultiple" multiple>
                                          </div>
                                        
                                        

                    
                                          <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">Event Badges </label>
                                            <div class="form-check form-switch mb-2">
                                              <input class="form-check-input" type="checkbox" name="badges" value="1"   id="flexSwitchCheckDefault" >
                                              <label class="form-check-label" for="flexSwitchCheckDefault">YES / NO</label>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">Event Session </label>
                                            <div class="form-check form-switch mb-2"> 
                                              <input class="form-check-input" type="checkbox" name="sessions" value="1"  id="flexSwitchCheckDefault2" >
                                              <label class="form-check-label" for="flexSwitchCheckDefault2">YES / NO</label>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">Landing Page </label>
                                            <div class="form-check form-switch mb-2">
                                              <input class="form-check-input toggle_landing_page" type="checkbox" value="1" name="landing_page"  onChange="showHideFormBuilder()"   id="flexSwitchCheckDefault3" >
                                              <label class="form-check-label" for="flexSwitchCheckDefault3">YES / NO</label>
                                            </div>
                                        </div>
                                            
                                        

                                        
                                      
                                      </div> 
                                  
                                
                                

                    </div>

                      <div class="col-xxl form_builder container" style="display:none" >
                      <hr>
                        <div class="mb-4">
                          <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Guest Event Form</h5> <small class="text-muted float-end">choose how to form the client registration inputs</small>
                          </div>
                          <div class="card-body">
                          
                          @if($event_form_inputs)
                             @php($titles = [])
                           

                             @foreach($event_form_inputs as $event_form_input)
                             @php(array_push($titles , $event_form_input->title))
                              <div class="row mb-3">
                              <div class="col-md-4">
                                <label class="col-sm-2 col-form-label required" for="basic-icon-default-email" >{{$event_form_input->title}}</label>
</div>                                

                                <div class="col-md-4">
                                <div class="form-check form-switch mb-2 ">
                                  <input type="hidden" id="hidden_include_check-{{$event_form_input->id}}" name="include[]"  value="{{$event_form_input->include}}" />
                                    <input class="form-check-input include_check_box_{{$event_form_input->id}}" type="checkbox"   onChange="changeIncludeValue({{$event_form_input->id}})"   id="flexSwitchCheckDefault3" @if($event_form_input->include) checked @endif @if($event_form_input->title == 'Name' || $event_form_input->title == 'Email' || $event_form_input->title == 'Name' || $event_form_input->title == 'Phone') disabled @endif>
                                              <label class="form-check-label" for="flexSwitchCheckDefault3">Include</label>                              
                                 </div>
                                </div>

                                <div class="col-md-4">
                                <div class="form-check form-switch mb-2 hidden_area">
                                  <input type="hidden" id="hidden_mandatory_check-{{$event_form_input->id}}" name="mandatory[]"  value="{{$event_form_input->mandatory}}" />
                                    <input class="form-check-input mandatory_check_box_{{$event_form_input->id}}" type="checkbox"   onChange="changeMandatoryValue({{$event_form_input->id}})"   id="flexSwitchCheckDefault3" @if($event_form_input->mandatory) checked @endif @if($event_form_input->title == 'Name' || $event_form_input->title == 'Email' || $event_form_input->title == 'Name') disabled @endif>
                                              <label class="form-check-label" for="flexSwitchCheckDefault3">Mandatory</label>                              
                                 </div>
                                </div>
                              </div>

                            @endforeach
                            <hr>
                            <input type="hidden" value="{{json_encode($titles)}}" name="titles"/>

                            @endif
             
                          
                             <div class="inputs_area">

                              </div>


                              <div class="text-center">
               <input type="button"  class="btn btn-success " onClick="inserNewBlock()" value="+"/>  
             </div>
                             
                              
                             
                          
                          </div>
                        </div>
                     </div>
                </div>
              
            <div class="">
               <input type="submit"  class="btn btn-info " value="Assign New"/>  
             </div>

                </div>

                
       
            
            
      
  </form>

<script>


;
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


<script>
 if($('.toggle_landing_page').is(':checked')){
    $('.form_builder').css('display' , 'block');
  }
   
    else{
      $('.form_builder').css('display' , 'none');
    }
function showHideFormBuilder(){
  if($('.toggle_landing_page').is(':checked')){
    $('.form_builder').css('display' , 'block');
  }
   
    else{
      $('.form_builder').css('display' , 'none');
    }
  
 
    
   
   
 
}
 var counter_plus = 0;
 function inserNewBlock(){
  counter_plus++
   $('.inputs_area').append(` <div class="row mb-3" id="`+counter_plus+`">
                              <div class="col-md-8">
                              <input type="text" class="form-control" style="width:fit-content"  name="titles2[]" id="basic-icon-default-fullname" placeholder="enter input title " aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                             </div>
                              <div class="col-md-2">
                                <div class="form-check form-switch  ">

                                <label class="form-check-label" for="flexSwitchCheckDefault3">Mandatory</label>

                                <input type="hidden" id="hidden_mandatory_check-2" name="mandatory2[]"  value="0" />
                                    <input class="form-check-input mandatory_check_box_2" type="checkbox"    onChange="changeMandatoryValue2()"   id="flexSwitchCheckDefault3" >

                                  </div>
                                 
                                </div>
                                <div class="col-md-2">
                                  <input type="button"  class="btn btn-danger btn-sm " onClick="removeBlock(`+counter_plus+`)" value="-"/>  

                                  </div>
                              </div>`)
 }

 function removeBlock(row_number) {
     $('#'+row_number).remove();
 }


 function changeMandatoryValue(row_number){
  if($('.mandatory_check_box_'+row_number).is(':checked')){
  
    $('#hidden_mandatory_check-'+row_number).val(1);
  }
   
    else{

       $('#hidden_mandatory_check-'+row_number).val(0);

    }
}

function changeIncludeValue(row_number){
  if($('.include_check_box_'+row_number).is(':checked')){
  
    $('#hidden_include_check-'+row_number).val(1);
  }
   
    else{

       $('#hidden_include_check-'+row_number).val(0);

    }
}

function changeMandatoryValue2(){
  if($('.mandatory_check_box_2').is(':checked')){
  
  $('#hidden_mandatory_check-2').val(1);
}
 
  else{

     $('#hidden_mandatory_check-2').val(0);

  }
}
</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>

@endsection
