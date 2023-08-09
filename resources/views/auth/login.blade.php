@extends('components.master')

@section('content')
    <div class="container" style="width: 40%;">
        <div class="col-12">
            <form action="/login" method="post">
                
                @csrf

                <div class="form-group" style="box-shadow: 1px 4px 5px 1px rgba(50, 50, 50, 0.567);padding: 30px 50px 50px 50px; margin-top: 20%;">
                    <h3 class="text-center">Login</h3>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="index@mail.com">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                      <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="check" name="check">
                        <label class="form-check-label" for="check">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection