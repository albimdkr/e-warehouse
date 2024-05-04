@extends('layouts.app')
  
{{-- @section('title', 'Profile') --}}
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        <a href="#" class="btn btn-primary">Save Profile</a>
    </div>
    <hr />
 
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-0">
                <div class="row" id="res"></div>
                <div class="row mt-2">
  
                    <div class="col-md-6">
                        <label class="labels">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="first name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Role</label>
                        <input type="text" name="phone" class="form-control" placeholder="Level" value="{{ auth()->user()->role }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Created Account</label>
                        <input type="text" name="created" disabled class="form-control" value="{{ auth()->user()->created_at }}" placeholder="Created">
                    </div>
                </div>
            </div>
        </div>
    </div>   
   </form>
@endsection