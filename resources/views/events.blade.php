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
                        <div class="blog-item set-bg"
                            data-setbg="{{ asset('user') }}/img/blog/{{ $events[0]->category->slug }}.jpg">
                            <a class="text-decoration-none text-white"
                                href="/events?category={{ $events[0]->category->slug }}">
                                <div class="bi-tag bg-gradient">{{ $events[0]->category->name }}
                                </div>
                            </a>
                            <div class="bi-text">
                                <h5><a href="" class="text-decoration-none">{{ $events[0]->name }}</a></h5>
                                <span><i class="fa fa-clock-o"></i> {{ $events[0]->date }}</span>
                            </div>
                        </div>
                    </div>
                    @foreach ($events->skip(1) as $event)
                        <div class="col-lg-6">
                            <div class="blog-item set-bg"
                                data-setbg="{{ asset('user') }}/img/blog/{{ $event->category->slug }}.jpg">
                                <a class="text-decoration-none text-white"
                                    href="/events?category={{ $event->category->slug }}">
                                    <div class="bi-tag bg-gradient">{{ $event->category->name }}
                                    </div>
                                </a>
                                <div class="bi-text">
                                    <h3><a href="" class="text-decoration-none">{{ $event->name }}</a>
                                    </h3>
                                    <span><i class="fa fa-clock-o"></i> {{ $event->date }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="load-more blog-more">
            <a href="#" class="primary-btn">Load More</a>
        </div> --}}
            <div class="d-flex justify-content-center mt-4">
                {{ $events->links() }}
            </div>
    </section>
@else
    <div class="text-center">
        <p><i class="fa-solid fa-face-sad-tear"></i> The event isn't available yet! <a
                class="text-decoration-none text-black" href="/events"><strong>See available events here</strong></a>
        </p>
    </div>
    @endif

    {{-- <ul class="list-none py-6 px-2">
        <li>Event ID. {{ $event->id }}</li>
        <li>Nama Event :<a href="events/{{ $event->slug }}" @style(['text-decoration: none'])>
                {{ $event->name }}</a></li>
        <li>Category : {{ $event->category->name }}</li>
        <li>Tanggal Event: {{ $event->date }}</li>
        <li>Detail : {{ $event->description }}</li>
    </ul>
    <hr>
    <div class="text-center">
        {{ $events->links() }}
    </div> --}}
@endsection
