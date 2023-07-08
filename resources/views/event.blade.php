@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>
                            Event Detail
                        </h2>
                        <div class="bt-option">
                            <a class="text-decoration-none" href="/">Home</a>
                            <a class="text-decoration-none"href=/events>Events</a>
                            <span>Event Detail</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Details Hero Section Begin -->
    <section class="blog-hero-section set-bg" data-setbg="{{ asset('user') }}/img/blog/{{ $event->category->slug }}.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bh-text">
                        {{-- <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a> --}}
                        <h2>{{$event->name}}</h2>
                        <ul>
                            <li><span>By <strong>{{$event->category->name}}</strong></span></li>
                            <li>{{$event->date}}</li>
                            <li>No Comments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Section End -->

    <section class="blog-details-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                     <p class="display-4">Description :</p>
                    <article>
                        <p>{!! $event->description !!}</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
