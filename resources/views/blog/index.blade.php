@extends('layouts.app')

@section('content')
    <div id="blog" class="container-fluid">
        {{-- <div>
            <h1>
                Blog Posts
            </h1>
        </div> --}}
        <div id="blog-carousel" class="carousel-slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @for ($i = 0; $i < count($posts); $i++)
                    <li data-target="#blog-carousel" data-slide-to="{{ $i }}"
                        class="active{{ $i === 0 ? 'active' : '' }}"></li>
                @endfor
            </ol>
            <div class="carousel-inner">
                @for ($i = 0; $i < count($posts); $i++)
                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                        <img class="slide-{{ $i }}" src="{{ asset('images/' . $posts[$i]->image_path) }}"
                            alt="">
                        <div class="container">
                            <div class="carousel-caption">
                                <p>
                                    {{ $posts[$i]->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>


        @if (session()->has('message'))
            <div>
                <p>
                    {{ session()->get('message') }}
                </p>
            </div>
        @endif

        @if (Auth::check())
            <div class="">
                <a href="/blog/create" class="">Create Post</a>
            </div>
        @endif

        @foreach ($posts as $post)
            <div id="blog-posts" class="row">
                <div class="col-12 col-lg-6 blog-col" id="col-blog-img">
                    {{-- <img src="{{ url('/images/blog-pic-1.jpg') }}" alt=""> --}}
                    <img src="{{ asset('images/' . $post->image_path) }}" alt="">
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

                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <span>
                            <a href="/blog/{{ $post->slug }}/edit">Edit </a>
                        </span>

                        <span>
                            <form action="/blog/{{ $post->slug }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">
                                    Delete
                                </button>
                            </form>
                        </span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
