@extends('layouts/contentNavbarLayout')

@section('title', 'All Sponsors')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Event /</span> All Sponsors
</h4>
<a class="btn btn-info " style=" float:right" href="{{route('event.sponsor.create' , $event_id)}}"> Add Sponsor Logo</a><br><br>

<!-- Basic Bootstrap Table -->
<div class="card">
<div class="card">
  <h5 class="card-header">Sponsors Logos</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          <th>Logo</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($sponsors as $sponsor)
        <tr>

          <td>#<a href ="#" style="font-family:bold; font-size:20px;    ">{{$sponsor->id}} </a></td>
          <td>  <img class="d-block" style="width:250px" src="{{url($sponsor->image)}}" alt="First slide" /></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" style="z-index:9999" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('/event/sponsor/delete/'.$sponsor->id)}}"><i class="bx bx-trash me-1"></i> Delete</a>
                <a class="dropdown-item" href="{{url('/event/sponsor/edit/'.$event_id.'/'.$sponsor->id)}}"><i class="bx bx-pen me-1"></i> Edit</a>

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
