@extends('layouts/contentNavbarLayout')

@section('title', ' Registrar Type Locations')
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
    .img-thumb {
        max-height: 75px;
        border: 2px solid none;
        border-radius:3px;
        padding: 1px;
        cursor: pointer;
    }
    .img-thumb-wrapper {
        display: inline-block;
        margin: 10px 10px 0 0;
    }
    .remove {
        display: block;
        background: #444;
        border: 1px solid none;
        color: white;
        text-align: center;
        cursor: pointer;
    }
    .remove:hover {
        background: white;
        color: black;
    }
  </style>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
      rel="stylesheet"
    />
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Registrar/</span> Type Locations</h4>
@if(session()->has('message'))
  <div class="bs-toast toast toast-placement-ex m-2 fade bg-success top-0 end-0 show" style="    z-index: 9999;
    position: absolute;" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
  <div class="toast-header">
    <i class="bx bx-bell me-2"></i>
    <div class="me-auto fw-semibold"></div>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body text-white">
    {{session()->get('message')}}
  </div>
</div>
@endif
<!-- Basic Layout -->
<div class="card container" style="width:80%"> 


  <form action="{{@route('registrar.type.locations' , $registrar_type->id )}}" method="POST" enctype="multipart/form-data">
                @csrf 
      
        

            

               
                 
                  <div class="card-header d-flex justify-content-between align-items-center">
                  <h3>{{$registrar_type->reg_type_en}}</h3>
                    <h5 class="mb-0"></h5>
                
                    <small class="text-muted float-end"> * are required</small>
                  </div>
                  <div class="card-body">
                  
                     
                 
                    

                     
                   
                      <div class="mb-3" style=" margin-top: 12px;">
                        <label for="exampleFormControltags" class="form-label">Registrar Type Locations </label>
                        <div class="input-group input-group-merge">
                          <input
                            type="text"
                            class="form-control"
                            data-role="tagsinput"
                            id="exampleFormControltags"
                            name="reg_number"
                           value="{{$registrar_numbers}}"
                          />
                        </div>

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

    $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
            $("#files").on("change", function(e) {
                var files = e.target.files,
                    filesLength = files.length;
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                        var file = e.target;
                        $("<div class=\"img-thumb-wrapper  shadow\">" +
                            "<img class=\"img-thumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                            "<br/><span class=\"remove\">Remove</span>" +
                            "</div>").insertAfter("#files");
                        $(".remove").click(function(){
                            $(this).parent(".img-thumb-wrapper").remove();
                        });

                    });
                    fileReader.readAsDataURL(f);
                }
                console.log(files);
            });
        } else {
            alert("Your browser doesn't support to File API")
        }
    });
  </script>
@endsection
