@include('partials.head')

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    
    <section class="team-member-section my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Who's Made</h2>
                        <p>This is our website, You can see information about available events</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="member-item set-bg">
                </div>
                <div class="member-item set-bg" data-setbg="{{ asset('user') }}/img/team-member/pian.png">
                    <div class="mi-social">
                        <div class="mi-social-inner bg-gradient">
                            <a href="https://web.facebook.com/LIand.2nd/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/lian.2nd/"><i class="fa fa-instagram"></i></a>
                            <a href="https://github.com/LIan2nd"><i class="fa-brands fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/alfian-nur-usyaid-515661252/"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="mi-text">
                        <h5>Alfian Nur Usyaid</h5>
                        <span>Creator</span>
                    </div>
                </div>
                <div class="member-item set-bg" data-setbg="{{ asset('user') }}/img/team-member/fatiah.png">
                    <div class="mi-social">
                        <div class="mi-social-inner bg-gradient">
                            <a href="https://www.facebook.com/fatiah.zahra.18"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/fatihal_zahra/"><i class="fa fa-instagram"></i></a>
                            <a href="https://github.com/Fatiahalzahra"><i class="fa-brands fa-github"></i></i></a>
                            <a href="https://www.linkedin.com/in/fatiah-al-zahra-488b07258/"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="mi-text">
                        <h5>Fatiah Al Zahra</h5>
                        <span>Creator</span>
                    </div>
                </div>
                <div class="member-item set-bg" data-setbg="{{ asset('user') }}/img/team-member/alif.png">
                    <div class="mi-social">
                        <div class="mi-social-inner bg-gradient">
                            <a href="https://web.facebook.com/alief.luqiakbar/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/alieflakbar_19/"><i class="fa fa-instagram"></i></a>
                            <a href="https://github.com/AliefLuqiakbar"><i class="fa-brands fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/alief-luqiakbar-564a95251/"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="mi-text">
                        <h5>Alief Luqiakbar</h5>
                        <span>Creator</span>
                    </div>
                </div>
                <div class="member-item set-bg">
                </div>
            </div>
        </div>
    </section>
    <!-- Team Member Section End -->

    @include('partials.footer')
    @include('partials.script')
</body>
