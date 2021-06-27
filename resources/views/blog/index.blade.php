@extends('layouts.app')

@section('content')
    <div id="blog" class="container-fluid">
        <div>
            <h1>
                Blog Posts
            </h1>
        </div>
        <div id="blog-posts" class="row">
            <div class="col-12 col-lg-6 blog-col">
                <img src="{{ url('/images/blog-pic-1.jpg') }}" alt="">
            </div>
            <div class="col-12 col-lg-6 blog-col">
                <h2>
                    Learn how to write Laravel Code
                </h2>

                <span>
                    By <span>Code with Carlos</span>, 1 day ago
                </span>

                <p>
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting,
                </p>

                <a href="" class="btn btn-outline-secondary btn-lg" role="button">Read learn-more-btn</a>

            </div>
        </div>
    </div>
@endsection
