@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>
                            @if (Request::has('category'))
                                <a class="text-decoration-none text-black" href="/events">All Events</a>
                            @else
                                All Events
                            @endif {{ $head }}
                        </h2>
                        <div class="bt-option">
                            <a class="text-decoration-none" href="/">Home</a>
                            <a href="/events">Events</a>
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
                        <h2>Improve You Business Cards</h2>
                        <ul>
                            <li><span>By <strong>John Smith</strong></span></li>
                            <li>February 21, 2019</li>
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

                    {{-- ==Isi Detail Event== --}}

                </div>
            </div>
        </div>
    </section>
@endsection
