@extends('layouts.app')

@section('content')
<div class="hero-section">
    <div>
        <div>
            <h2>
                Do you want to become a developer?
            </h2>

            <a href="/blog" class="btn btn-outline-secondary btn-lg" role="button">
                Read More
            </a>
        </div>
    </div>
</div>

    <div class="featured-post-section container-fluid">
        <div class="row">

        <div class="col-12 col-lg-6 blog-col" id="col-img">
            <img src="{{ url('/images/blog-pic-1.jpg') }}" alt="">
        </div>

        <div class="col-12 col-lg-6 blog-col" id="col-post">
            <h3>Struggling to be a better web developer?</h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
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
        <h3>Blog</h3>
        <span>Recent Posts</span>
        <p>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
        </p>
    </div>
    <div>
        <div class="row">
            <div class="">
                <h3>
                    PHP
                </h3>

                <span>
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting,
                </span>
                <div class="learn-more-btn">

                    <a href="" class="btn btn-outline-secondary btn-lg" role="button">Find Out More</a>
                </div>
            </div>

            <div class="col-12 col-lg-6 blog-col" id="col-img">
                <img src="{{ url('/images/blog-pic-1.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection