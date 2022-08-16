@extends('dashboard.layouts.main')

@section('container')
    
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h3>{{ $post->title }}</h3>
                
                <article>
                    
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                    <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid mt-3" alt="{{ $post->category->name }}">
                    
                    <p>{!! $post->body !!}</p>
                </article>
            
                <a href="/blog" class="text-decoration-none">Back to posts</a>
            </div>
        </div>
    </div>

@endsection