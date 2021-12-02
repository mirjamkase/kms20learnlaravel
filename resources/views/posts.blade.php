@extends('layout')
@section('title', 'Posts')
@section('content')
    <h1>Posts</h1>
    <a href="{{$posts->previousPageUrl()}}" class="btn btn-primary {{ $posts->previousPageUrl() ? '' : 'disabled' }}">prev</a>

    @if($posts->nextPageUrl())
        <a href="{{$posts->nextPageUrl()}}" class="btn btn-primary">next</a>
    @else
        <a class="btn btn-primary disabled">next</a>
    @endif

    {{$posts->links()}}
    <div class="row row-cols-4">
        @foreach($posts as $post)
            <div class="col mb-3">
                <div class="card h-100">
                    @if($post->images->count() > 1)
                        @include('partials.carousel', ['id' => $post->id, 'images' => $post->images])
                    @elseif($post->images->count() == 1)
                        <img src="{{$post->images->first()->path}}" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->snippet}}</p>
                        <p class="text-muted">{{$post->user->name}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
