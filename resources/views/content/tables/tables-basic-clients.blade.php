@extends('layouts/contentNavbarLayout')

@section('title', 'All Clients')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Clients /</span> All Clients
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
<div class="card">
  <h5 class="card-header">Clients Basic Info</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          <th>Client Name</th>
          <th>Industry</th>
          <th>Country</th>
          <th>Main Telephone</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($clients as $client)
        <tr>

          <td>#{{$client->id}}</td>
          <td>{{$client->name}}</td>
          <td>{{$client->industry}}</td>
          <td>{{$client->country}}</td>
          <td>{{$client->main_telephone}}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('/client/edit/'.$client->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{url('/client/delete/'.$client->id)}}"><i class="bx bx-trash me-1"></i> Delete</a>
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
