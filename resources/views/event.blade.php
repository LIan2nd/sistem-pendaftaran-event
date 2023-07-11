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
        @if (session('event'))
            <div class="container mt-5">
                <div class="alert alert-success" role="alert">
                    <i class="fa-regular fa-calendar-check"></i> {{ session('event') }}
                </div>
                <a href="/registration/histories" class="site-btn"><span class="arrow_left ms-1"></span> View Histories</a>
            </div>
        @endif
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Details Hero Section Begin -->
    <section class="blog-hero-section set-bg"
        data-setbg="@if ($event->image) {{ asset('storage/' . $event->image) }} @else{{ asset('user') }}/img/blog/{{ $event->category->slug }}.jpg @endif">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bh-text"
                        style="background-color: rgba(25, 24, 24, 0.5); padding-top: 15px; padding-bottom: 15px;">
                        <h2 style="margin-top: 0px">{{ $event->name }}</h2>
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
            <div class="row d-flex justify-content-center mb-5" style="right: 0;">
                <div class="col-lg-8">
                    @guest
                        <p>Login untuk daftar ke Event</p>
                    @else
                        @php
                            $userID = Auth::user()->id;
                            $owner = $userID == $event->EO->id;
                        @endphp
                        @if (Auth::user()->role_id == 3)
                            <h5><i class="fa-solid fa-hand-sparkles"></i>&nbsp; Hello,
                                {{ Auth::user()->role->name }}&nbsp; <i class="fa-solid fa-user-secret"></i><br>Want to register
                                for an Event? Please use another account</h5>
                        @elseif (Auth::user()->id != $event->EO->id && !Auth::user()->hasRegistered($event->id))
                            <form action="/registration" method="post">
                                @csrf
                                <input type="hidden" name="event_slug" value="{{ $event->slug }}">
                                <input type="hidden" name="event_id" value="{{ $event->id }}">
                                <button class="site-btn" type="submit">Daftar</button>
                            </form>
                        @elseif ($owner)
                            <h5><i class="fa-regular fa-handshake"></i>&nbsp; Hallo, EO!</h5>
                        @elseif (Auth::user()->role_id == 3)
                            <h5><i class="fa-solid fa-hand-sparkles"></i>&nbsp; Hello,
                                {{ Auth::user()->role->name }}&nbsp; <i class="fa-solid fa-user-secret"></i><br>Ingin mendaftar
                                ke
                                Event? Silahkan gunakan akun lain</h5>
                        @else
                            <h5><i class="fa-regular fa-calendar-check me-2"></i>&nbsp; You've Registered on this Event</h5>
                        @endif
                    @endguest
                </div>
            </div>
        </div>
    </section>
@endsection
