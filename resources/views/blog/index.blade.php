@extends('layouts.app')

@section('content')
<div id="blog" class="container-fluid">
    <div>
        <h1>
            Blog Posts
        </h1>
    </div>
    @foreach ($posts as $post)
    <div id="blog-posts" class="row">
        <div class="col-12 col-lg-6 blog-col" id="col-blog-img">
            <img src="{{ url('/images/blog-pic-1.jpg') }}" alt="">
        </div>
        <div class="col-12 col-lg-6 blog-col" id="col-blog-post">
            <h2>
                {{$post->title}}
            </h2>

            <span>
                By <span>Code with Carlos</span>, 1 day ago
            </span>

            <p>
                {{$post->description}}
            </p>

            <a href="/blog/{{$post->slug}}" class="btn btn-outline-secondary btn-lg" role="button">Read learn-more-btn</a>

        </div>
    </div>
    @endforeach
</div>
@endsection