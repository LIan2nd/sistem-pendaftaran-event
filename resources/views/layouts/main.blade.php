@include('partials.head')

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    @include('partials.script')
</body>
