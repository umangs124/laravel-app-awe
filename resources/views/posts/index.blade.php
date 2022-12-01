@extends('layout')
@section('content')
    <ul class="list-group">
        <li class="list-group-item">
            <h2 class="text-center">All Posts</h2>
        </li>
    </ul>
    @foreach ($posts as $post)
        <div class="shadow-lg p-3 mb-5 bg-body rounded col-8 mx-auto mt-5">
            <u>
                <h5>{{ $post->title }}</h5>
            </u>
            <p>{{ $post->body }}</p>
        </div>
    @endforeach
@endsection
