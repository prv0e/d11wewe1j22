@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('post.update', ['post' => $post->id]) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name = "title" id="title" placeholder="Title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name = "content" placeholder="Content">{{$post -> content}}</textarea>
        </div>
        <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" name = "image" id="image" placeholder="Image" value="{{ $post->image }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <a href="{{ route('post.delete') }}" class="btn btn-primary">Delete</a>
</div>
@endsection
