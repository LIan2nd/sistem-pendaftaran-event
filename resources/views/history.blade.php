@extends('layouts.main')
@section('content')
    @if ($registrations->count())
        <section class="schedule-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Register Event History</h2>
                            <p>Thank You for Your Registration</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="schedule-tab">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    @foreach ($registrations as $registration)
                                        <div class="st-content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="sc-pic">
                                                            <img src="{{ asset('user') }}/img/blog/{{ $registration->event->category->slug }}.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <div class="sc-text">
                                                            <h4><a href="/events/event/{{ $registration->event->slug }}"
                                                                    class="text-decoration-none text-dark">
                                                                    {{ $registration->event->name }}</a></h4>
                                                            <ul>
                                                                <li><i class="fa-solid fa-id-badge me-2"></i> Registration
                                                                    id
                                                                </li>
                                                                <li>
                                                                    {{ $registration->id }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="sc-widget">
                                                            <li><i class="fa-solid fa-clock"></i>
                                                                {{-- format('l, d-m-Y') --}}
                                                                {{ $registration->created_at->diffForHumans() }}
                                                            </li>
                                                            <li><i class="fa-solid fa-tag"></i>
                                                                {{ $registration->event->category->name }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="text-center">
                                        {{ $registrations->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <div class="text-center mb-5">
            <p><i class="fa-regular fa-face-meh-blank"></i> You haven't registered to any event, <a
                    class="text-decoration-none text-black" href="/events"><strong>Find
                        Event</strong></a>
            </p>
        </div>
    @endif
@endsection
