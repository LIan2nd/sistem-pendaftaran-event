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
                                <a class="text-decoration-none text-dark" href="/events">All Events</a>
                            @elseif (Request::has('EO'))
                                <a class="text-decoration-none text-dark" href="/events">All Events</a>
                            @else
                                All Events
                            @endif {{ $head }}
                        </h2>
                        <div class="bt-option">
                            <a class="text-decoration-none" href="/">Home</a>
                            <span>Events</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="blog-section spad">
        <div class="row d-flex justify-content-center mb-3">
            <div class="col-lg-6">
                <form action="/events" class="comment-form contact-form ni-form" role="search">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @elseif (request('EO'))
                        <input type="hidden" name="EO" value="{{ request('EO') }}">
                    @endif
                    <div class="row">
                        <div class="col-lg-11">
                            <input type="search" placeholder="Search" name="search" value="{{ request('search') }}">
                        </div>
                        <div class="col-lg-1">
                            <button type="submit" class="site-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @if ($events->count())
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @if (session('event'))
                            <div class="alert alert-danger" role="alert">
                                <i class="fa-regular fa-calendar-check"></i> {{ session('event') }}
                            </div>
                        @endif
                        <div class="blog-item set-bg"
                            data-setbg="@if ($events[0]->image) {{ asset('storage/' . $events[0]->image) }} @else {{ asset('user') }}/img/blog/{{ $events[0]->category->slug }}.jpg @endif">
                            <a class="text-decoration-none text-light"
                                href="/events?category={{ $events[0]->category->slug }}">
                                <div class="bi-tag bg-gradient">{{ $events[0]->category->name }}
                                </div>
                            </a>
                            <div class="bi-text"
                                style="background-color: rgba(0,0,0,0.5); padding-top: 10px; padding-bottom: 10px;">
                                <h3><a href="/events/event/{{ $events[0]->slug }}"
                                        class="text-decoration-none">{{ $events[0]->name }}</a></h3>
                                <span><i class="fa fa-clock-o me-1"></i> {{ $events[0]->date }} | <a
                                        class="text-decoration-none text-light"
                                        href="/events?EO={{ $events[0]->EO->username }}"><i
                                            class="fa-solid fa-ghost me-1"></i>
                                        {{ $events[0]->EO->name }}</a></span>
                            </div>
                        </div>
                    </div>
                    @foreach ($events->skip(1) as $event)
                        <div class="col-lg-6">
                            <div class="blog-item set-bg"
                                data-setbg="@if ($event->image) {{ asset('storage/' . $event->image) }} @else{{ asset('user') }}/img/blog/{{ $event->category->slug }}.jpg @endif">
                                <a class="text-decoration-none text-light"
                                    href="/events?category={{ $event->category->slug }}">
                                    <div class="bi-tag bg-gradient">{{ $event->category->name }}
                                    </div>
                                </a>
                                <div class="bi-text"
                                    style="background-color: rgba(0,0,0,0.5); padding-top: 10px; padding-bottom: 10px;">
                                    <h3><a href="/events/event/{{ $event->slug }}"
                                            class="text-decoration-none">{{ $event->name }}</a>
                                    </h3>
                                    <span><i class="fa fa-clock-o me-1"></i> {{ $event->date }} | <a
                                            class="text-decoration-none text-light"
                                            href="/events?EO={{ $event->EO->username }}"><i
                                                class="fa-solid fa-ghost me-1"></i>
                                            {{ $event->EO->name }}</a></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $events->links() }}
            </div>
    </section>
@else
    <section class="blog-section spad">
        <div class="container">
            <div class="text-center">
                <p><i class="fa-solid fa-face-sad-tear"></i> The event isn't available yet! <a
                        class="text-decoration-none text-dark" href="/events"><strong>See available events here</strong></a>
                </p>
            </div>
        </div>
    </section>
    @endif
@endsection
