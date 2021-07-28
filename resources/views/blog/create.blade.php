@extends('layouts.app')

@section('content')
    <div id="blog" class="container-fluid">
        <div>
            <h1>
                Create Posts
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
            <form action="/blog" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" placeholder="Title..." class="">
                <textarea name="description" id="" cols="30" placeholder="Description..." rows="10"></textarea>
                <div>
                    <label for="">
                        <span>
                            Select a file
                        </span>
                        <input type="file" name="image" class="hidden">
                    </label>
                </div>

                <button type="submit" class="">
                    Submit Post
                </button>
            </form>
        </div>

    </div>
@endsection
