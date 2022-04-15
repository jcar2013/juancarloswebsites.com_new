@extends('layouts.app')


@section('content')
    <div id="contact-me" class="container-fluid">

        <!-- Success message -->
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <h1 id="title-text" class="text-center">
            Contact Me
        </h1>

        <div class="row" id="contact-page-row">
            <div class="col-md-6 order-md-last">

                <div id="contact-form-col">


                    <form action="" id="contact-me-form" method="post" action="{{ route('contact.store') }}">

                        @csrf

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name"
                                id="name">

                            <!-- Error -->
                            @if ($errors->has('name'))
                                <div class="error">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}"
                                name="email" id="email">

                            @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}"
                                name="phone" id="phone">

                            @if ($errors->has('phone'))
                                <div class="error">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}"
                                name="subject" id="subject">

                            @if ($errors->has('subject'))
                                <div class="error">
                                    {{ $errors->first('subject') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                                rows="2"></textarea>

                            @if ($errors->has('message'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                        </div>

                        <input type="submit" name="send" value="Submit" class="btn btn-outline-secondary btn-block">
                    </form>
                </div>
            </div>
            <div class="col-md-6 order-md-first">
                <div id="contact-info-col">



                    <div class="contact-detail-section">
                        <div class="col-sm-12">
                            <div class="contact-detail-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>

                            <div>
                                <h2 class="contact-details-title">Location</h2>
                                <p class="contact-details-text">Riverside, California</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="contact-detail-icon">
                                <i class="fas fa-phone"></i>
                            </div>

                            <div>
                                <h2 class="contact-details-title">Phone</h2>
                                <p class="contact-details-text">(951)427-4996</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="contact-detail-icon">
                                <i class="fas fa-envelope"></i>
                            </div>

                            <div>
                                <h2 class="contact-details-title">Email</h2>
                                <p class="contact-details-text">zamoranocarlos13@gmail.com</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
