@extends('layouts.app')

@section('content')
<div class="hero-section">
    <div>
        <div>
            <h1>
                Welcome to My Studio
            </h1>

            <!-- <a href="/blog" class="btn btn-outline-secondary btn-lg" role="button">
                                                Read More
                                            </a> -->
        </div>
    </div>
</div>

<div class="intro-section container-fluid">
    <div class="row">

        <div class="col-12 col-lg-6 col-intro" id="col-intro-img">
            <div class="intro-image-div">

            </div>
        </div>

        <div class="col-12 col-lg-6 col-intro" id="col-intro-text">
            <h3>Hi, My name is Juan Carlos</h3>
            <p>
                I'm a front-end developer, located in Riverside, California.
            </p>
            <p>
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting,
            </p>
            <div class="learn-more-btn">

                <a href="" class="btn btn-outline-secondary btn-lg" role="button">Find Out More</a>
            </div>
        </div>
    </div>
</div>

<div id="skills">
    <h3>
        I'm an expert in ...
    </h3>

    <span>
        Ux Design
    </span>

    <span>
        Project Managment
    </span>
    <span>
        Digital Strategy
    </span>
    <span>
        Backend Development
    </span>
</div>

<div id="recent-blog">
    <div class="recent-blog-header">
        <h3>Blog</h3>
        <span>Recent Posts</span>
        <p>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
        </p>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6 order-lg-12 blog-col" id="col-recent-img">
            <img src="{{ url('/images/blog-pic-1.jpg') }}" alt="">
        </div>
        <div class="col-12 col-lg-6 order-lg-1 blog-col" id="col-recent-post">
            <h3>
                PHP
            </h3>

            <p>
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting,
            </p>
            <div class="learn-more-btn">

                <a href="" class="btn btn-outline-secondary btn-lg" role="button">Find Out More</a>
            </div>
        </div>

    </div>
</div>
</div>
@endsection