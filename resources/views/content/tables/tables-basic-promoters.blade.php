@extends('layouts/contentNavbarLayout')

@section('title', 'All Promoters Registrations')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light"> /</span> All Promoters Registrations
</h4>
<!-- <a class="btn btn-info " style=" float:right" href="#"> Compose</a><br><br> -->

<!-- Basic Bootstrap Table -->
<div class="card">
<div class="card">
  <h5 class="card-header">Promoters Registrations</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
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
</div><!--/ Responsive Table -->
@endsection
