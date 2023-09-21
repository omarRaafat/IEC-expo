@extends('layouts/contentNavbarLayout')

@section('title', 'All Exhibitors')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Event /</span> All Exhibitors
</h4>
<a class="btn btn-info " style=" float:right" href="{{route('event.exhibitor.create' , $event_id)}}"> Add New Exhibitor</a><br><br>

<!-- Basic Bootstrap Table -->
<div class="card">
<div class="card">
  <h5 class="card-header">Exhibitors Logos</h5>
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
        @foreach($exhibitors as $exhibitor)
        <tr>

          <td>#<a href ="#" style="font-family:bold; font-size:20px;    ">{{$exhibitor->id}} </a></td>
          <td>  <img class="d-block" style="width:200px" src="{{url($exhibitor->image)}}" alt="First slide" /></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" style="z-index:9999" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('/event/exhibitor/delete/'.$exhibitor->id)}}"><i class="bx bx-trash me-1"></i> Delete</a>
                <a class="dropdown-item" href="{{url('/event/exhibitor/edit/'.$event_id.'/'.$exhibitor->id)}}"><i class="bx bx-pen me-1"></i> Edit</a>

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
