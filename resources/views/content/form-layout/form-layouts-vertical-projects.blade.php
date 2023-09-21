@extends('layouts/contentNavbarLayout')

@section('title', ' Add New Project')
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
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Projects/</span> Add New Project</h4>

<!-- Basic Layout -->
<div class="card container" style="width:80%"> 
  <form action="{{@route('project.add')}}" method="POST" enctype="multipart/form-data">
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
                          <input type="text"  name="title_en"  class="form-control @error('title_en') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        
                        </div>
                        @error('title_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="mb-3">
                          <label class="form-label " for="basic-icon-default-fullname"> Title Arabic*</label>
                          <div class="input-group input-group-merge ">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                              <input type="text"  name="title_ar"  class="form-control @error('title_ar') is-invalid @enderror " id="basic-icon-default-fullname" placeholder="test" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />

                          </div>
                          @error('title_ar')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description English *</label>
                        <textarea class="form-control @error('description_en') is-invalid @enderror" name="description_en" id="exampleFormControlTextarea1" rows="3"> </textarea>
                        @error('description_en')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Description Arabic *</label>
                          <textarea class="form-control @error('description_ar') is-invalid @enderror" name="description_ar" id="exampleFormControlTextarea1" rows="3"> </textarea>
                          @error('description_ar')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>

                      <div class="mb-3">
                                            <label for="formFileMultiple" class="form-label"> Project Slider Images * </label>
                                            <input class="form-control @error('images') is-invalid @enderror" type="file" name="images[]" id="formFileMultiple" multiple>
                                            @error('images')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                                          </div>
                    
                      <div class="mb-3" style=" margin-top: 12px;">
                        <label for="exampleFormControltags" class="form-label">Project tags English </label>
                        <div class="input-group input-group-merge">
                          <input
                            type="text"
                            class="form-control"
                            data-role="tagsinput"
                            id="exampleFormControltags"
                            name="tag_en"
                           
                          />
                        </div>

                      </div>

                      <div class="mb-3" style=" margin-top: 12px;">
                          <label for="exampleFormControltags" class="form-label">Project tags Arabic </label>
                          <div class="input-group input-group-merge">
                              <input
                                      type="text"
                                      class="form-control"
                                      data-role="tagsinput"
                                      id="exampleFormControltags"
                                      name="tag_ar"

                              />
                          </div>

                      </div>
                     

                    
                     
                     
                     
                      
                     


                    
                    
                  
                  </div> 
              
            
                  <div  >
                      <input type="submit" id="submit_button" onclick="" class="btn btn-info  " value="create"/>  
</div>
            
             
              

                
              
              
               

          

      
  </form>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


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
