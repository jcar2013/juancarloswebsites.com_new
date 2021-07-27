@extends('layouts.app')

@section('content')
<div id="show" class="container-fluid">
    <div>
        <h1>
            {{ $post->title }}
        </h1>
    </div>

    <div>
        <span>
            By <span>{{$post->user->name }}</span>, Created on
            {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>
    </div>

    <p>
        {{$post->description}}
    </p>

</div>
@endsection