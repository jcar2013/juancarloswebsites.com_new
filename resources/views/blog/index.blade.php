@extends('layouts.app')

@section('content')
    <div id="blog" class="container-fluid">
        <div>
            <h1>
                Blog Posts
            </h1>
        </div>

        @if (Auth::check())
            <div class="pt-15 w-4/5 m-auto">
                <a href="/blog/create" class="">Create Post</a>
            </div>
        @endif

        @foreach ($posts as $post)
            <div id="blog-posts" class="row">
                <div class="col-12 col-lg-6 blog-col" id="col-blog-img">
                    <img src="{{ url('/images/blog-pic-1.jpg') }}" alt="">
                </div>
                <div class="col-12 col-lg-6 blog-col" id="col-blog-post">
                    <h2>
                        {{ $post->title }}
                    </h2>

                    <span>
                        By <span id="blog-author">{{ $post->user->name }}</span>, Created on
                        {{ date('jS M Y', strtotime($post->updated_at)) }}
                    </span>

                    <p>
                        {{ $post->description }}
                    </p>

                    <a href="/blog/{{ $post->slug }}" class="btn btn-outline-secondary btn-lg" role="button">Read
                        learn-more-btn</a>

                </div>
            </div>
    </div>
    @endforeach
    </div>
@endsection
