@extends('layouts/contentNavbarLayout')

@section('title', '  Event Section | Home Page')
<script src="https://jsuites.net/v4/jsuites.js"></script>
<link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
<style type="text/css">
    .bootstrap-tagsinput .tag {
      margin-right: 2px;
      color: white !important;
      background-color: #0d6efd;
      padding: 0.2rem;
      width:100%
    }
  </style>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
      rel="stylesheet"
    />
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Settings /</span>Event Section</h4>

<!-- Basic Layout -->
<div class="card container" style="width:80%"> 
  <form action="{{@route('event.settings')}}" method="POST" enctype="multipart/form-data">
                @csrf 
      
        

            

               
                 
                  <div class="card-header d-flex justify-content-between align-items-center">
                
                    <h5 class="mb-0"></h5>
                
                    <small class="text-muted float-end"> * are required</small>
                  </div>
                  <div class="card-body">
                  
                      <div class="mb-3">
                        <label class="form-label " for="basic-icon-default-fullname"> Title English *</label>
                        <div class="input-group input-group-merge ">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                          <input type="text"  name="home_title_en" value="{{$event->home_title_en}}"  class="form-control @error('home_title_en') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        
                        </div>
                        @error('home_title_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="mb-3">
                          <label class="form-label " for="basic-icon-default-fullname"> Title Arabic *</label>
                          <div class="input-group input-group-merge ">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                              <input type="text"  name="home_title_ar" value="{{$event->home_title_ar}}"  class="form-control @error('home_title_Ar') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />

                          </div>
                          @error('home_title_ar')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description English *</label>
                        <textarea class="form-control @error('home_description_en') is-invalid @enderror" name="home_description_en" id="exampleFormControlTextarea1" rows="3">{{$event->home_description_en}} </textarea>
                        @error('home_description_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Description Arabic *</label>
                          <textarea class="form-control @error('home_description_ar') is-invalid @enderror" name="home_description_ar" id="exampleFormControlTextarea1" rows="3">{{$event->home_description_ar}} </textarea>
                          @error('home_description_ar')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                    
                     
                      <div class="mb-3">
                            <label for="formFileMultiple" class="form-label"> Event Button Text English *</label>
                            <input class="form-control @error('home_button_en') is-invalid @enderror" type="text" name="home_button_en" value="{{$event->home_button_en}}" id="formFileMultiple" >
                      
                            @error('home_button_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                      </div>



                      <div class="mb-3">
                          <label for="formFileMultiple" class="form-label"> Event Button Text Arabic *</label>
                          <input class="form-control @error('home_button_ar') is-invalid @enderror" type="text" name="home_button_ar" value="{{$event->home_button_ar}}" id="formFileMultiple" >

                          @error('home_button_ar')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror

                      </div>

                      <div class="mb-3">
                            <label for="formFileMultiple" class="form-label"> Event Button Link  *</label>
                            <input class="form-control @error('home_link') is-invalid @enderror" type="text" name="home_link" value="{{$event->home_link}}" id="formFileMultiple" >
                      
                            @error('home_link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                  
                    
                      
                     

                    
                     
                     
                     
                      
                     


                    
                    
                  
                  </div> 
              
            
                  <div  >
                      <input type="submit" id="submit_button" onclick="" class="btn btn-info  " value="Update"/>  
</div>
            
             
              

                
              
              
               

          

      
  </form>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
  
@endsection
