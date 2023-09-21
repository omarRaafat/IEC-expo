@extends('layouts/contentNavbarLayout')

@section('title', 'All Contacts')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Contacts /</span> All Contacts
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
<div class="card">
  <h5 class="card-header">Contacts Basic Info</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Message</th>
          <th>From</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($contacts as $contact)
        <tr>
          <td>#{{$contact->id}}</td>
          <td>{{$contact->name}}</td>
          <td>{{$contact->email}}</td>
          <td>{{$contact->subject}}</td>
          <td>{{$contact->message}}</td>
          <td>{{$contact->source}}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <!--<a class="dropdown-item" href="{{url('/contact/edit/'.$contact->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>-->
                <a class="dropdown-item" href="{{url('/contact/delete/'.$contact->id)}}"><i class="bx bx-trash me-1"></i> Delete</a>
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
