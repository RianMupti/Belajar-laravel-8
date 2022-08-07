@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-5">
                <h3>{{ $post->title }}</h3>
                
                <article>
                    <small class="text-muted">
                    By. <a href="/blog?authors={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }} 
                    </small>

                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid mt-3" alt="{{ $post->category->name }}">
                    
                    <p>{!! $post->body !!}</p>
                </article>
            
                <a href="/blog" class="text-decoration-none">Back to posts</a>
            </div>
        </div>
    </div>

    
@endsection