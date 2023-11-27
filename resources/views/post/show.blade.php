@extends('layouts.main')
@section('content')
<div>
    <div>{{ $post -> id }}. {{ $post -> title }}</div>
    <div>{{ $post -> content }}</div>
    <a href="{{ route('post.edit', $post -> id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
    <div>
        <form action="{{ route('post.delete', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
</div>
@endsection
