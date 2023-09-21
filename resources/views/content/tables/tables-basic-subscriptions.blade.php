@extends('layouts/contentNavbarLayout')

@section('title', 'All Subscription')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light"> /</span> All Subscription
</h4>
<a class="btn btn-info " style=" float:right" href="#"> Compose</a><br><br>

<!-- Basic Bootstrap Table -->
<div class="card">
<div class="card">
  <h5 class="card-header">Subscriptions</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          <th>Client Email</th>
          <th>Subscription Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($subscriptions as $subscription)
        <tr>

          <td>#{{$subscription->id}}</td>
          <td>{{$subscription->email}}</td>
          <td>{{$subscription->status}}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="bx bx-block me-1"></i> Block</a>
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
