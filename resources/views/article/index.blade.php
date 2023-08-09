@extends('components.master')


@section('content')
    <div class="continer">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/' . $article->image)}}" class="card-img-top" alt="{{$article->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->content}}</p>
                      <a href="/article/edit/{{$article->id}}" class="btn btn-primary">Edit</a>
                      <div class="my-3">
                        <form action="/article/delete/{{$article->id}}" method="post">
                        
                            @method('DELETE')
                            @csrf
    
                            <button type="submit" class="btn btn-danger">Delete</button>
                        
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection