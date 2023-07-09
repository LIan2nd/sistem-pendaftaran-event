@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>
                            All Categories
                        </h2>
                        <div class="bt-option">
                            <a class="text-decoration-none" href="/">Home</a>
                            <span>Categories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="schedule-table-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-table-tab">
                        <ul class="nav nav-tabs d-flex justify-content-center" role="tablist">
                            @foreach ($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#{{ $category->slug }}"
                                        role="tab">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            @foreach ($events as $event)
                                <div class="tab-pane" id="{{ $event->category->slug }}" role="tabpanel">
                                    <div class="schedule-table-content">
                                        @foreach ($events->where('category_id', $event->category_id) as $event)
                                            @if (!isset($displayedEvents[$event->category_id]))
                                                <a href="/events?category={{ $event->category->slug }}">
                                                    <div class="card text-bg-dark">
                                                        <img src="{{ asset('user') }}/img//blog/{{ $event->category->slug }}.jpg"
                                                            class="card-img" alt="{{ $event->category->slug }}">
                                                        <div class="card-img-overlay d-flex align-items-center p-0">
                                                            <h5 class="card-title flex-fill text-light text-center display-1 p-4"
                                                                style="background-color: rgba(0,0,0,0.5)">
                                                                {{ $event->category->name }}</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                                @php
                                                    $displayedEvents[$event->category_id] = true;
                                                @endphp
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
