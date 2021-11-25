@extends('layout')
@section('title', 'Posts')
@section('content')
    <form action="/admin/posts/{{$post->id}}" method="POST">
        @csrf
        @error('title')
        @foreach($errors->get('title') as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
        @enderror
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{old('title') ?? $post->title}}">
        </div>
        @error('body')
        @foreach($errors->get('body') as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
        @enderror
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea class="form-control" id="body" rows="10" name="body">{{old('body') ??  $post->body}}</textarea>
        </div>
        <div class="mb-3">
            <input class="btn btn-primary" type="submit">
        </div>
    </form>
@endsection
