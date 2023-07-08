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
                        <p>When I first got into the online advertising business, I was looking for the magical
                            combination that would put my website into the top search engine rankings, catapult me to
                            the forefront of the minds or individuals looking to buy my product, and generally make me
                            rich beyond my wildest dreams! After succeeding in the business for this long, I’m able to
                            look back on my old self with this kind of thinking and shake my head.</p>
                        <ul>
                            <li><span class="icon_check"></span> Write On Your Business Card</li>
                            <li><span class="icon_check"></span> Advertising Outdoors</li>
                            <li><span class="icon_check"></span> Effective Advertising Pointers</li>
                            <li><span class="icon_check"></span> Kook 2 Directory Add Url Free</li>
                        </ul>
                        <a href="#" class="text-decoration-none ha-btn">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->
    <!-- Schedule Section Begin -->
    <section class="schedule-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Schedule</h2>
                        <p>Do not miss anything topic about the event</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <h5>Day 1</h5>
                                    <p>May 04, 2019</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <h5>Day 2</h5>
                                    <p>May 05, 2019</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <h5>Day 3</h5>
                                    <p>May 06, 2019</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <h5>Day 4</h5>
                                    <p>May 07, 2019</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">
                                    <h5>Day 5</h5>
                                    <p>May 08, 2019</p>
                                </a>
                            </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-1.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Difficult People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-2.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-3.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-4.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-1.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Easy People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-2.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-3.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-4.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-1.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Intermediate People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-2.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-3.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-4.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-1.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Expert People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-2.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-3.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-4.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-5" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-1.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Dealing with Too Difficult People</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-2.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>V7 Digital Photo Printing</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-3.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Beyond The Naked Eye</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="{{ asset('user') }}/img/schedule/schedule-4.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Influencing The Influencer</h4>
                                                    <ul>
                                                        <li><i class="fa fa-user"></i> John Smith</li>
                                                        <li><i class="fa fa-envelope"></i> john@Colorlib.com
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 08:00 am - 10:00 AM</li>
                                                    <li><i class="fa fa-map-marker"></i> 59 Breanne Canyon Suite, USA
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Schedule Section End -->

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
                                class="arrow_right"></span></a>
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
                                class="arrow_right"></span></a>
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
                                class="arrow_right"></span></a>
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
                        <h2>Latest News</h2>
                        <p>Do not miss anything topic abput the event</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="latest-item set-bg large-item"
                        data-setbg="{{ asset('user') }}/img/blog/latest-b/latest-1.jpg">
                        <div class="li-tag">Marketing</div>
                        <div class="li-text">
                            <h4><a href="./blog-details.html" class="text-decoration-none">Improve You Business Cards And
                                    Enchan Your Sales</a></h4>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="latest-item set-bg" data-setbg="{{ asset('user') }}/img/blog/latest-b/latest-2.jpg">
                        <div class="li-tag">Experience</div>
                        <div class="li-text">
                            <h5><a href="./blog-details.html" class="text-decoration-none">All users on MySpace will know
                                    that there are millions of
                                    people out there.</a></h5>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                    <div class="latest-item set-bg" data-setbg="{{ asset('user') }}/img/blog/latest-b/latest-3.jpg">
                        <div class="li-tag">Marketing</div>
                        <div class="li-text">
                            <h5><a href="./blog-details.html" class="text-decoration-none">A Pocket PC is a handheld
                                    computer, which features many of
                                    the same capabilities.</a></h5>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
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
