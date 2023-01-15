@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Posts</h1>
    @foreach ($posts as $post)
        <article class="border-bottom">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <h5>By : {{ $post->user->name }} | Category : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}"><button type="button" class="btn btn-info mb-4">Read More</button></a>
        </article>
    @endforeach
@endsection