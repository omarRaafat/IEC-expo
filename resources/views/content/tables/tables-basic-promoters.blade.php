@extends('layouts/contentNavbarLayout')

@section('title', 'Promoters Registrations')

@section('content')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light"></span>  Total Promoters Registrations  ({{($promoters->count())}})
</h4>
<!-- <a class="btn btn-info " style=" float:right" href="#"> Compose</a><br><br> -->
    
   <div class="" >
   <form class="form-group"  action="{{route('promoter.filter')}}" method="POST"  >
    @csrf
    <div class="row">
      <div class="col-md-4">
            <select class="form-select " name="gender"  aria-label="Default select example">
                <option disabled selected>select gender</option>
                <option value="2">Female</option>
                <option value="1">Male</option>
            </select>

      </div>

      <div class="col-md-4">
          <select class="form-select col-md-4" name="nationality" aria-label="Default select example">
              <option selected disabled>select nationality</option>
              <option value="Saudi">Saudi</option>
              <option value="Non Saudi">Non Saudi</option>
          </select>

      </div>


     <div class="col-md-4">
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Filter</button>
          </div>
        </div>
      </div>

    </div>  

</form>
   </div>
   <hr>
<!-- Basic Bootstrap Table -->

<div class="card">
  <h5 class="card-header">Promoters Registrations</h5>
  <div class="table-responsive text-nowrap container">
    <table class="table" id="example"> 
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Country</th>
          <th>City</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
     
        @foreach($promoters as $promoter)
        <tr>
        
          <td>#{{$promoter->id}}</td>
          <td><a href="/promoter/registration/{{$promoter->id}}">{{$promoter->name}}</a> </td>
          <td>{{$promoter->email}}</td>
          <td>{{$promoter->phone}}</td>
          <td>{{$promoter->country}}</td>
          <td>{{$promoter->city}}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/promoter/registration/{{$promoter->id}}"><i class="bx bx-show me-1"></i> View</a>
              </div>
            </div>
          </td>
        </tr>

        @endforeach
     
      </tbody>
    </table>
  </div>

<!--/ Responsive Table -->
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
