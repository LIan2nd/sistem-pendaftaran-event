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
                        <h2>{{ $event->name }}</h2>
                        <ul>
                            <li><span>In <strong>{{ $event->category->name }}</strong></span></li>
                            <li>{{ $event->date }}</li>
                            <li>Event Organized by {{ $event->EO->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Section End -->

    <section class="blog-details-section">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8">
                    <h4 class="display-4 mb-4">Description :</h4>
                    <article>
                        <p>{!! $event->description !!}</p>
                    </article>
                </div>
            </div>
            <div class="row d-flex justify-content-end mb-5">
                <div class="col-lg-4">
                    @guest
                        <p>Login untuk daftar ke Event</p>
                    @else
                        @if (!auth()->user()->hasRegistered($event->id))
                            <form action="/registration" method="post">
                                @csrf
                                <input type="hidden" name="event_id" value="{{ $event->id }}">
                                <button class="site-btn" type="submit">Daftar</button>
                            </form>
                        @else
                            <h5><i class="fa-regular fa-calendar-check me-2"></i> You've Registered on this Event</h5>
                        @endif
                    @endguest
                </div>
            </div>
        </div>
    </section>
@endsection
