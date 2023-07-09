@extends('layouts.main')
@section('content')
    <section class="hero-section set-bg" data-setbg="{{ asset('user') }}/img/hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-text">
                        <span>5 to 9 may 2019, mardavall hotel, New York</span>
                        <h2>Change Your Mind<br /> To Become Sucess</h2>
                        <a href="#" class="text-decoration-none primary-btn">Buy Ticket</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('user') }}/img/hero-right.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Home About Section Begin -->
    <section class="home-about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ha-pic">
                        <img src="{{ asset('user') }}/img/h-about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ha-text">
                        <h2>About Conference</h2>
                        <p>Welcome to <strong>S Events!</strong> We are an innovative event registration platform
                            and user-friendly. By using our website, you can easily search and register
                            for different types of events that interest you.</p>
                        <p>We offer various categories of events, including:</p>
                        <ul>
                            @foreach ($categories as $category)
                                <li><span class="icon_check me-1"></span> {{ $category->name }}</li>
                            @endforeach
                        </ul>
                        <p>So, what are you waiting for?</p>
                        <a href="#event-by-category" class="text-decoration-none ha-btn">Explore Events here!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->
    {{-- Cari Berdasarkan Event --}}
    <section class="schedule-table-section spad" id="event-by-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Explore Events By Category</h2>
                        <p>Do not miss anything topic about the event</p>
                    </div>
                </div>
            </div>
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
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th><strong>Event Name</strong></th>
                                                    <th>
                                                        <strong>Date</strong>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($events->where('category_id', $event->category_id)->take(3) as $event)
                                                    <tr>
                                                        <td class="break hover-bg">{{ $event->name }}</td>
                                                        <td class="event-time">
                                                            <h5>{{ $event->date }}</h5>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td></td>
                                                    <th class="event-time"><a
                                                            href="/events?category={{ $event->category->slug }}"
                                                            class="site-btn text-decoration-none text-white">More
                                                            Event on this Category <i
                                                                class="fa-solid fa-angles-right"></i></a>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Cari Berdasarkan Event End --}}
    <!-- Pricing Section Begin -->
    <section class="pricing-section set-bg spad" data-setbg="{{ asset('user') }}/img/pricing-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Ticket Pricing</h2>
                        <p>Get your event ticket plan</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>1 Day Pass</h4>
                        <div class="pi-price">
                            <h2><span>$</span>129</h2>
                        </div>
                        <ul>
                            <li>One Day Conference Ticket</li>
                            <li>Coffee-break</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                            <li>Talk to the Editors Session</li>
                        </ul>
                        <a href="#" class="text-decoration-none price-btn">Get Ticket <span
                                class="arrow_right ms-1"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="price-item top-rated">
                        <div class="tr-tag">
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>Full Pass</h4>
                        <div class="pi-price">
                            <h2><span>$</span>199</h2>
                        </div>
                        <ul>
                            <li>One Day Conference Ticket</li>
                            <li>Coffee-break</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                            <li>Talk to the Editors Session</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                        </ul>
                        <a href="#" class="text-decoration-none price-btn">Get Ticket <span
                                class="arrow_right ms-1"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>Group Pass</h4>
                        <div class="pi-price">
                            <h2><span>$</span>79</h2>
                        </div>
                        <ul>
                            <li>One Day Conference Ticket</li>
                            <li>Coffee-break</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                            <li>Talk to the Editors Session</li>
                        </ul>
                        <a href="#" class="text-decoration-none price-btn">Get Ticket <span
                                class="arrow_right ms-1"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- latest BLog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest Events</h2>
                        <p>Do not miss anything topic about the event</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="latest-item set-bg large-item"
                        data-setbg="{{ asset('user') }}/img/blog/{{ $events[0]->category->slug }}.jpg">
                        <a href="events?category={{ $events[0]->category->slug }}">
                            <div class="li-tag">{{ $events[0]->category->name }}</div>
                        </a>
                        <div class="li-text">
                            <h4><a href="./blog-details.html" class="text-decoration-none">{{ $events[0]->name }}</a></h4>
                            <span><i class="fa fa-clock-o me-1"></i> {{ $events[0]->date }} | <a
                                    class="text-decoration-none text-light"
                                    href="/events?EO={{ $events[0]->EO->username }}"><i class="fa-solid fa-ghost me-1"></i>
                                    {{ $events[0]->EO->name }}</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    @foreach ($events->skip(1)->take(2) as $event)
                        <div class="latest-item set-bg"
                            data-setbg="{{ asset('user') }}/img/blog/{{ $event->category->slug }}.jpg">
                            <a href="events?category={{ $event->category->slug }}">
                                <div class="li-tag">{{ $event->category->name }}</div>
                            </a>
                            <div class="li-text">
                                <h5><a href="" class="text-decoration-none">{{ $event->name }}</a></h5>
                                <span><i class="fa fa-clock-o me-1"></i> {{ $event->date }} | <a
                                        class="text-decoration-none text-light"
                                        href="/events?EO={{ $event->EO->username }}"><i
                                            class="fa-solid fa-ghost me-1"></i>
                                        {{ $event->EO->name }}</a></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- latest BLog Section End -->

    <!-- Newslatter Section Begin -->
    <section class="newslatter-section mb-3">
        <div class="container">
            <div class="newslatter-inner set-bg" data-setbg="{{ asset('user') }}/img/newslatter-bg.jpg">
                <div class="ni-text">
                    <h3>Subscribe Newsletter</h3>
                    <p>Subscribe to our newsletter and don’t miss anything</p>
                </div>
                <form action="#" class="ni-form">
                    <input type="text" placeholder="Your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Newslatter Section End -->
@endsection
