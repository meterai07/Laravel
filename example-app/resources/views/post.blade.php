@extends('layouts.main');

@section('container')
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <h1>{{ $title }}</h1>
                    <h2>{{ $post->title }}</h2>
                    <h5>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> | Category : <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">

                    <article>
                        {!! $post->body !!} 
                    </article>
                    <a href="/posts" class="d-block">Back to Posts</a>
                </div>
            </div>
        </div>  
@endsection