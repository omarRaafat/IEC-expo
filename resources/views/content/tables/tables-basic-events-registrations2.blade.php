@extends('layouts/contentNavbarLayout')

@section('title', 'All Events Registrations')

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
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Events /</span> All Events sponsors & exhibitors Registrations
</h4>

<!-- Basic Bootstrap Table -->
<div class="card" >

  <h5 class="card-header">Events Info</h5>
  <div class="table-responsive text-nowrap">
     
    <table class="table" id="example">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Event</th>
          <th>Register Type</th>
          <th>Register Number</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($registrations2 as $registration)
        <tr>
          <td>#{{$registration->id}}</td>
          <td><a href ="{{url('/event/registrations/sponsors/exhibitors/'.$registration->id)}}" style="font-family:bold; font-size:20px;    text-decoration: underline;">{{$registration->name}} </a></td>
        
          <td>{{$registration->email}}</td>
          <td>{{$registration->phone}}</td>
          <td>{{$registration->event->name}}</td>
          <td>{{$registration->reg_type}}</td>
          <td>{{$registration->RegNumValue->reg_number}}</td>
        
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" style="z-index:9999" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
               
                <a class="dropdown-item" href="{{url('/event/registration/sponsors/exhibitors/delete/'.$registration->id)}}"><i class="bx bx-trash me-1"></i> Cancel</a>
      
              </div>
            </div>
          </td>
        </tr>

        @endforeach
     
      </tbody>
    </table>

           
       
</div>
 
</div><!--/ Responsive Table -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>

<script>
  
    $('#example').DataTable();

  </script>
@endsection
