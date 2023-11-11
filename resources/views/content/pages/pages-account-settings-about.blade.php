@extends('layouts/contentNavbarLayout')

@section('title', '  About Section')
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
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Settings /</span>About Section</h4>

<!-- Basic Layout -->
<div class="card container" style="width:80%"> 
  <form action="{{@route('about.settings')}}" method="POST" enctype="multipart/form-data">
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
                          <input type="text"  name="about_title_en" value="{{$setting->about_title_en}}"  class="form-control @error('about_title_en') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        
                        </div>
                        @error('about_title_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="mb-3">
                          <label class="form-label " for="basic-icon-default-fullname"> Title Arabic*</label>
                          <div class="input-group input-group-merge ">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                              <input type="text"  name="about_title_ar" value="{{$setting->about_title_ar}}"  class="form-control @error('about_title_ar') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />

                          </div>
                          @error('about_title_ar')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description English *</label>
                        <textarea class="form-control @error('about_description_en') is-invalid @enderror" name="about_description_en" id="exampleFormControlTextarea1" rows="3">{{$setting->about_description_en}} </textarea>
                        @error('about_description_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Description Arabic *</label>
                          <textarea class="form-control @error('about_description_ar') is-invalid @enderror" name="about_description_ar" id="exampleFormControlTextarea1" rows="3">{{$setting->about_description_ar}} </textarea>
                          @error('about_description_ar')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                    
                      <div class="mb-3">
                        <h5 class="my-4"> About Image</h5>

                       
                         
                              <img class="d-block w-100" id="imgPreview_1" style="height:250px" src="{{url($setting->about_image)}}" alt="about image" />
                            
                      </div>
                      <div class="mb-3">
                            <label for="formFileMultiple" class="form-label"> Update </label>
                            <input id="photo" class="form-control @error('about_image') is-invalid @enderror " type="file" name="about_image" id="formFileMultiple" >
                            @error('about_image')
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
    </script>
@endsection
