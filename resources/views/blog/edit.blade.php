@extends('layouts.app')

@section('content')
    <div id="blog" class="container-fluid">
        <div>
            <h1>
                Update Posts
            </h1>
        </div>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            {{ $post->short_description }}
            <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="title" value="{{ $post->title }}" class="">

                <textarea name="short_description" cols="30" rows="5" placeholder="Short Description">{{ $post->short_description }}</textarea>

                <textarea name="description" id="" cols="30" placeholder="Description..." rows="10">{{ $post->description }}</textarea>

                <button type="submit" class="">
                    Submit Post
                </button>
            </form>
        </div>

    </div>
@endsection
