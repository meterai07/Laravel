@extends('layouts.main')

@section('container')
    <div class="mb-5">
        <h1>{{ $title }}</h1>
        <a href="/categories">Back to Category</a>
    </div>
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection