@extends('layouts.main')
@section('content')
    <section class="team-member-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Who’s speaking</h2>
                        <p>These are our communicators, you can see each person information</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="member-item set-bg">
                </div>
                <div class="member-item set-bg" data-setbg="{{ asset('user') }}/img/team-member/member-2.jpg">
                    <div class="mi-social">
                        <div class="mi-social-inner bg-gradient">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="mi-text">
                        <h5>Emma Sandoval</h5>
                        <span>Speaker</span>
                    </div>
                </div>
                <div class="member-item set-bg" data-setbg="{{ asset('user') }}/img/team-member/member-3.jpg">
                    <div class="mi-social">
                        <div class="mi-social-inner bg-gradient">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="mi-text">
                        <h5>Emma Sandoval</h5>
                        <span>Speaker</span>
                    </div>
                </div>
                <div class="member-item set-bg" data-setbg="{{ asset('user') }}/img/team-member/member-4.jpg">
                    <div class="mi-social">
                        <div class="mi-social-inner bg-gradient">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="mi-text">
                        <h5>Emma Sandoval</h5>
                        <span>Speaker</span>
                    </div>
                </div>
                <div class="member-item set-bg">
                </div>
            </div>
        </div>
    </section>
    <!-- Team Member Section End -->
@endsection
