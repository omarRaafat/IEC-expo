@extends('layouts/contentNavbarLayout')

@section('title', ' Client Registration Info')
<script src="https://jsuites.net/v4/jsuites.js"></script>
<link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
<style type="text/css">
 
  </style>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
      rel="stylesheet"
    />
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Events/</span> Client Registration Info</h4>

<!-- Basic Layout -->
<div class="card container" style="width:80%"> 
  <form action="#" method="POST" enctype="multipart/form-data">
                @csrf 
      
        

            

               
                  
                 
                  <div class="card-body">
                  
                     

                     

              
                  <div class="mb-3">
                        <label class="form-label " for="basic-icon-default-fullname"> Client Name </label>
                        <div class="input-group input-group-merge ">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                          <input disabled type="text"  name="title" value="{{$registration->name}}"  class="form-control @error('title') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        
                        </div>
                     
                      </div>

                      <div class="mb-3">
                        <label class="form-label " for="basic-icon-default-fullname"> Client mail</label>
                        <div class="input-group input-group-merge ">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                          <input disabled type="text"  name="title" value="{{$registration->email}}"  class="form-control @error('title') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        
                        </div>
                    
                      </div>

                      <div class="mb-3">
                        <label class="form-label " for="basic-icon-default-fullname"> Client Phone</label>
                        <div class="input-group input-group-merge ">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                          <input disabled type="text"  name="title" value="{{$registration->phone}}"  class="form-control @error('title') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        
                        </div>
                      
                      </div>

                      <div class="mb-3">
                        <label class="form-label " for="basic-icon-default-fullname"> Client Job</label>
                        <div class="input-group input-group-merge ">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                          <input disabled type="text"  name="title" value="{{$registration->job_title}}"  class="form-control @error('title') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        
                        </div>
                      
                      </div>

                      <div class="mb-3">
                        <label class="form-label " for="basic-icon-default-fullname"> Client Work Destination</label>
                        <div class="input-group input-group-merge ">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                          <input disabled type="text"  name="title" value="{{$registration->work_dest}}"  class="form-control @error('title') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        
                        </div>
                     
                      </div>

                      <div class="mb-3">
                        <label class="form-label " for="basic-icon-default-fullname"> Register Type</label>
                        <div class="input-group input-group-merge ">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                          <input disabled type="text"  name="title" value="{{$registration->reg_type}}"  class="form-control @error('title') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        
                        </div>
                      
                      </div>

                      <div class="mb-3">
                        <label class="form-label " for="basic-icon-default-fullname"> Register Number</label>
                        <div class="input-group input-group-merge ">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                          <input disabled type="text"  name="title" value="{{$registration->regNumValue->reg_number}}"  class="form-control @error('title') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        
                        </div>
                     
                      </div>

                      <div class="mb-3">
                        <label class="form-label " for="basic-icon-default-fullname"> Register Price</label>
                        <div class="input-group input-group-merge ">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                          <input disabled type="text"  name="title" value="{{$registration->price}}" class="form-control @error('title') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        
                        </div>
                      
                      </div>

                     
                    
                   
                
                      
                   


                    
                        
                  

                  
                    
                  
                  </div> 
              

                  <div  >
                   
            
             
              

                
              
              
               

          

      
  </form>

</div>


<script>


;
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>

@endsection
