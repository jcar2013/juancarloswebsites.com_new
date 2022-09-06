@extends('layouts.app')

@section('content')
    <div id="blog">
        {{-- <div>
            <h1>
                Blog Posts
            </h1>
        </div> --}}
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @for ($i = 0; $i < count($posts); $i++)
                    <li data-target="#blog-carousel" data-slide-to="{{ $i }}"
                        class="active{{ $i === 0 ? 'active' : '' }}"></li>
                @endfor
            </ol>
            <div class="carousel-inner">
                @for ($i = 0; $i < count($posts); $i++)
                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                        <img class="slide-image slide-{{ $i }}"
                            src="{{ asset('images/' . $posts[$i]->image_path) }}" alt="">
                        <div class="container">
                            <div class="carousel-caption">
                                <h2>{{ $posts[$i]->title }}</h2>
                                <p>
                                    {{ substr($posts[$i]->description, 0, 115) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <div class="container" id="all-blogs">
            <div class="row">
                {{-- {{ $posts }} --}}

                @for ($i = 0; $i < count($posts); $i++)
                    <div class="col-md-6" id="blog-item">
                        <div class="row no-gutters">
                            <h3>{{ $posts[$i]->title }}</h3>
                            <div class="text-muted">
                                {{ date('d-m-Y', strtotime($posts[$i]->updated_at)) }}
                            </div>
                            <p class="card-text">
                                {{ substr($posts[$i]->description, 0, 250) }}
                            </p>


                            @if (isset(Auth::user()->id) && Auth::user()->id == $posts[$i]->user_id)
                                <span>
                                    <a href="/blog/{{ $posts[$i]->slug }}/edit">Edit </a>
                                </span>

                                <span>
                                    <form action="/blog/{{ $posts[$i]->slug }}" method="POST">
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
                @endfor
            </div>
            <hr class="featurette-divider">

        </div>

        {{-- @if (session()->has('message'))
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
        @endif --}}

    </div>
@endsection
