@extends('layouts/contentNavbarLayout')

@section('title', 'All Slider')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Slider /</span> All Slider Info
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
<div class="card">
  <h5 class="card-header">Slider  Info</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th>#ID</th>
          <th>Slider Title</th>
          <th>Slider Description</th>
          <th>Slider Image</th>
          <!-- <th>Actions</th> -->
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($sliders as $slider)
        <tr>

          <td>#<a href ="{{url('/slider/edit/'.$slider->id)}}" style="font-family:bold; font-size:20px;    ">{{$slider->id}} </a></td>
          <td><a href ="{{url('/slider/edit/'.$slider->id)}}" style="font-family:bold; font-size:20px;    ">{{$slider->title_en}} </a></td>
          <td >{{Str::limit($slider->description_en , 50)}}</td>
          <td>  <img class="d-block" style="height:150px;width:150px" src="{{url($slider->image)}}" alt="First slide" /></td>
       
         
        </tr>

        @endforeach
     
      </tbody>
    </table>
  </div>
</div><!--/ Responsive Table -->
@endsection
