@include('partials.head')

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('partials.navbar')

    <section class="home-about-section spad">
        <div class="container">
            @yield('content')
        </div>
    </section>

    @include('partials.footer')
    @include('partials.script')
</body>
