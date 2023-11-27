@extends('layouts.main')
@section('content')
    <div class="container text-center">
        <div class="row" style="width: 40%">
            <form>
            <div class="mb-3 col" >
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 col">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 col">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    <a href="{{ route('post.create') }}" class="btn btn-primary">Add one</a>
    @foreach($posts as $post)
        <div><p><a href="{{ route('post.show', ['post' => $post->id]) }}">{{ $post -> id }}. {{ $post -> title }}, {{ $post -> content }}, {{ $post -> likes }}</a></p></div>
    @endforeach
@endsection
