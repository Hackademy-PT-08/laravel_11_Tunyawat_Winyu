@extends('components.master')

@section('content')
<div class="container" style="width: 40%;">
    <form action="/user/profile-information" method="post" enctype="multipart/form-data">
        
        @method('PUT')
        @csrf

            <div class="form-group" style="box-shadow: 1px 4px 5px 1px rgba(50, 50, 50, 0.567);padding: 30px 50px 50px 50px; margin-top: 20%;">
                <h3 class="text-center py-4">UPDATE NAME/EMAIL</h3>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{auth()->user()->name}}" >
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
    </form>
    <form action="/user/password" method="post" enctype="multipart/form-data">
        
        @method('PUT')
        @csrf

            <div class="form-group" style="box-shadow: 1px 4px 5px 1px rgba(50, 50, 50, 0.567);padding: 30px 50px 50px 50px; margin-top: 20%;">
                <h3 class="text-center py-4">UPDATE PASSWORD</h3>
                <div class="mb-3">
                    <label for="current_password" class="form-label">Current Password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                </div>
                <div class="mb-3">
                    <label for="new-password" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="new_password" name="password">
                </div>
                <div class="mb-3">
                    <label for="passowrd" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password" name="password_confirmation">
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
    </form>
</div>
@endsection