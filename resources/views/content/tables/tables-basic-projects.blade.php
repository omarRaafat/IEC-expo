@extends('layouts/contentNavbarLayout')

@section('title', 'All Projects')
<script src="{{asset('assets/js/ui-toasts.js')}}"></script>


@section('content')


<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Projects /</span> All Projects
</h4>
<a class="btn btn-info " style=" float:right" href="{{route('project.create')}}"> Create New</a><br><br>

<!-- Basic Bootstrap Table -->
<div class="card" >

  <h5 class="card-header">Projects Info</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          <th>title</th>
          <th>Description</th>
          <th>Created Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($projects as $project)
        <tr>
          <td>#{{$project->id}}</td>
          <td><a href ="{{url('/project/edit/'.$project->id)}}" style="font-family:bold; font-size:20px;    ">{{$project->title_en}} </a>
        
        </td>
        
          <td>{{$project->description_en}}</td>
          <td>{{date('Y-m-d' , strtotime($project->created_at))}}</td>
         
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" style="z-index:9999" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('/project/edit/'.$project->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{url('/project/delete/'.$project->id)}}"><i class="bx bx-trash me-1"></i> Delete</a>
        
              </div>
            </div>
          </td>
        </tr>

        @endforeach
     
      </tbody>
    </table>
  




<!--/ Responsive Table -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>

setTimeout(function(){
  $('.bs-toast').hide().fadeout();

}, 5000);

function passOppId(opp_id){
   $('#re_assign_form').attr('action' , "{{url('/opp/re_assign/')}}"+"/"+opp_id);
} 
  </script>
@endsection
