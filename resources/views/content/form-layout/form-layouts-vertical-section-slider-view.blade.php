@extends('layouts/contentNavbarLayout')

@section('title', ' Slider Section')
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
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Site Settings/</span> Update Site Slider</h4>

<!-- Basic Layout -->
<div class="card container" style="width:80%"> 
  <form action="{{@route('slider.edit' , $slider->id)}}" method="POST" enctype="multipart/form-data">
                @csrf 
      
        

            

               
                 
                  <div class="card-header d-flex justify-content-between align-items-center">
                
                    <h5 class="mb-0"></h5>
                
                    <small class="text-muted float-end"> * are required</small>
                  </div>
                  <div class="card-body">
                  
                      <div class="mb-3">
                        <label class="form-label " for="basic-icon-default-fullname"> Title *</label>
                        <div class="input-group input-group-merge ">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                          <input type="text"  name="title" value="{{$slider->title}}"  class="form-control @error('title') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        
                        </div>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="exampleFormControlTextarea1" rows="3">{{$slider->description}} </textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <h5 class="my-4"> Slider Images</h5>

                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" >
                          <ol class="carousel-indicators">
                        
                            @foreach(json_decode($slider->images) as $key=>$image)
                            <li data-bs-target="#carouselExample" data-bs-slide-to="{{$key}}" class="@if($key == 0) active @endif"></li>

                            @endforeach
                          </ol>
                          <div class="carousel-inner">

                            @foreach(json_decode($slider->images) as $key=>$image)
                            <div class="carousel-item @if($key == 0)active @endif">
                              <img class="d-block w-100" style="height:250px" src="{{url($image)}}" alt="First slide" />
                            
                            </div>
                            @endforeach
                          
                          </div>
                          <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="mb-3">
                                            <label for="formFileMultiple" class="form-label"> Update Project Slider Images </label>
                                            <input class="form-control " type="file" name="images[]" id="formFileMultiple" multiple>
                                           
                                          </div>
                    
                     
                     

                    
                     
                     
                     
                      
                     


                    
                    
                  
                  </div> 
              
            
                  <div  >
                      <input type="submit" id="submit_button" onclick="" class="btn btn-info  " value="Update"/>  
</div>
            
             
              

                
              
              
               

          

      
  </form>

</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
  <script>
    $(function () {
      $('input')
        .on('change', function (event) {
          var $element = $(event.target);
          var $container = $element.closest('.example');

          if (!$element.data('tagsinput')) return;

          var val = $element.val();
          if (val === null) val = 'null';
          var items = $element.tagsinput('items');

          $('code', $('pre.val', $container)).html(
            $.isArray(val)
              ? JSON.stringify(val)
              : '"' + val.replace('"', '\\"') + '"'
          );
          $('code', $('pre.items', $container)).html(
            JSON.stringify($element.tagsinput('items'))
          );
        })
        .trigger('change');
    });

    function costError(){
      if(parseInt($('#cost_input').val()) >= parseInt($('#size_input').val())){
        $('#submit_button').prop('disabled' , true);
        $('#cost_error').css('display' , 'block').text('cost value must be less than size value');
      }else{
        $('#submit_button').prop('disabled' , false);
        $('#cost_error').css('display' , 'none').text('');

      }
    }
  </script>
@endsection
