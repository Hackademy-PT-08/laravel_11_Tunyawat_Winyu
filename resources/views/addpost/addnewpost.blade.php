@extends('components.master')

@section('content')
    <div class="container" style="width: 40%;">
        <div class="col-12">
            <form action="{{route('addnewpost.store')}}" method="post" enctype="multipart/form-data">
                
                @csrf

                    <div class="form-group" style="box-shadow: 1px 4px 5px 1px rgba(50, 50, 50, 0.567);padding: 30px 50px 50px 50px; margin-top: 20%;">
                        <h3 class="text-center">Add Post</h3>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title of your post">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Description</label>
                            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
            </form>
        </div>
    </div>
@endsection