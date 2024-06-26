@extends('layouts/contentNavbarLayout')

@section('title', 'Guests Attendance')

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
  <span class="text-muted fw-light">Events /</span> Guests Attendance </h4>
<h3>Total Attendees ({{$registrations->count()}})
</h3>
<!-- Basic Bootstrap Table -->
<div class="card" >

  <h5 class="card-header">Attendance Info</h5>
  <div class="table-responsive text-nowrap container">
    <table class="table" id="example">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Event</th>
          <th>Number of Visits</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($registrations as $registration)
        <tr>
          <td>#{{$registration->id}}</td>
          <td><a href ="#" style="font-family:bold; font-size:20px;    text-decoration: underline;">{{$registration->name}} </a></td>
        
          <td>{{$registration->email}}</td>
          <td>{{$registration->phone}}</td>
          <td>{{$registration->event->name}}</td>
          <td>{{$registration->attend_counter}}</td>
        
          {{-- <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" style="z-index:9999" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
               
                <a class="dropdown-item" href="{{url('/event/registration/delete/'.$registration->id)}}"><i class="bx bx-trash me-1"></i> Delete</a>
      
              </div>
            </div>
          </td> --}}
        </tr>

        @endforeach
     
      </tbody>
    </table>

           
       
</div>
 
</div><!--/ Responsive Table -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" type="text/javascript"></script>

<script>
 myDataTable = new DataTable('#example' , {
  ordering: false,
});




  </script>
@endsection
