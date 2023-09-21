@extends('layouts/contentNavbarLayout')

@section('title', 'All Registrar Types')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Registrars /</span> Registrar Types
</h4>

<!-- <h1 class="text-center"> COMMING SOON ! </h1> -->
<a class="btn btn-info " style=" float:right" href="{{route('registrar.type.create')}}"> Add New Registrar Type</a><br><br>

<!-- Basic Bootstrap Table -->

<div class="card">
<div class="card">
  <h5 class="card-header">Registrar Types Info</h5>
  <div class="table-responsive text-nowrap">
 
 <table class="table">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          <th>Registrar Type (English)</th>
          <th>Registrar Type (Arabic)</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0"> 
    
         @foreach($registrar_types as $registrar_type)
        <tr>

          <td>#{{$registrar_type->id}}</td>
          <td><a href="{{route('registrar.type.update' , $registrar_type->id)}}" style="color:green;text-decoration:underline"> {{$registrar_type->reg_type_en}} </a></td>
          <td>{{$registrar_type->reg_type_ar}}</td>
        
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('/event/registrations/sponsors/exhibitors/type/locations/'.$registrar_type->id)}}"><i class="bx bx-edit-alt me-1"></i>  Location Numbers</a>
              </div>
            </div>
          </td>
        </tr>

        @endforeach
     
      </tbody>
    </table>
  </div>
</div>
<!--/ Responsive Table -->
@endsection
