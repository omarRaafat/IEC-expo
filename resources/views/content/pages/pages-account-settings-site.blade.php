@extends('layouts/contentNavbarLayout')

@section('title', 'Site Settings')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light"> Settings /</span> Site Settings
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <!-- <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a></li> -->
      <!-- <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-notifications')}}"><i class="bx bx-bell me-1"></i> Notifications</a></li> -->
      <!-- <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-connections')}}"><i class="bx bx-link-alt me-1"></i> Connections</a></li> -->
    </ul>
    <div class="card mb-4">
     <form id="formAccountSettings" method="POST" action="{{route('settings')}}" enctype="multipart/form-data">
          @csrf
      <h5 class="card-header">Profile Details</h5>
      <!-- Account -->
     
      <hr class="my-0">
      <div class="card-body">
       
          <div class="row">
          <div class="mb-3 row">
          <label for="html5-color-input" class="col-md-2 col-form-label"> site BK Color</label>
          <div class="col-md-10">
            <input class="form-control" type="color" name="bk_color" value="#666EE8" id="html5-color-input" />
          </div>
        </div>
          
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Save changes</button>
            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
          </div>
        </form>
       </div>
      </div>
      <!-- /Account -->
    
    </div>
  
   
 
@endsection
