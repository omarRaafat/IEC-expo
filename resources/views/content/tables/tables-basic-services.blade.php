@extends('layouts/contentNavbarLayout')

@section('title', 'All Services')
<style>

 .Accepted{
   color:green
 }

 .Rejected{
   color:red
 }


 .Pending{
   color:gray
 }

</style>
@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Services /</span> All Services
</h4>
<a class="btn btn-info " style=" float:right" href="{{route('service.add')}}"> Create New</a><br><br>

<!-- Basic Bootstrap Table -->
<div class="card" >

  <h5 class="card-header">Services Info</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          <th>Title</th>
          <th>Description</th>
          <th>Updated Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($services as $service)
        <tr>
          <td>#{{$service->id}}</td>
          <td><a href ="{{url('/service/edit/'.$service->id)}}" style="font-family:bold; font-size:20px;    text-decoration: underline;">{{$service->title_en}} </a></td>
          <td>{{$service->description_en}}</td>

          <td>{{date('Y-m-d' , strtotime($service->created_at))}}</td>
         
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" style="z-index:9999" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
              
              <a class="dropdown-item" href="{{url('/service/edit/'.$service->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{url('/service/delete/'.$service->id)}}"><i class="bx bx-trash me-1"></i> Delete</a>
                      
              </div>
            </div>
          </td>
        </tr>

        @endforeach
     
      </tbody>
    </table>

  
 
</div><!--/ Responsive Table -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>

function passOppId(lead_id){
   $('#re_assign_form').attr('action' , "{{url('/lead/re_assign/')}}"+"/"+lead_id);
} 
  </script>
@endsection
