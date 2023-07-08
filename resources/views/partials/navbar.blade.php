<header class="header-section {{ Request::is('/') ? '' : 'header-normal' }}">
    <div class="container">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('user') }}/img/logo.png" alt="">
            </a>
            {{-- <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a> --}}
        </div>
        <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                <ul>
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a class="text-decoration-none"
                            href="/">Home</a></li>
                    <li class="{{ Request::is('events*') ? 'active' : '' }}"><a class="text-decoration-none"
                            href="/events">Events</a></li>
                    <li class="{{ Request::is('categories') ? 'active' : '' }}"><a class="text-decoration-none"
                            href="/categories">Categories</a></li>
                    <li class="{{ Request::is('registration') ? 'active' : '' }}"><a class="text-decoration-none"
                            href="/registration">Registration</a></li>
                    </li>
                    <li>|</li>
                    <li>@guest<a class="text-decoration-none" href="{{ route('login') }}"><i
                                    class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                        @else<a class="text-decoration-none" href="#"><i class="fa-solid fa-user"></i>
                                {{ Auth::user()->name }}</a>
                            <ul class="dropdown">
                                <li><a class="text-decoration-none" href="#"><i class="fa-solid fa-table-columns"></i>
                                        Dashboard</a></li>
                                <li><a class="text-decoration-none" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i
                                            class="fa-solid fa-right-from-bracket"></i> logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        <li><a class="text-decoration-none" href="/registration/histories"><i
                                    class="fa-{{ Request::is('registration/histories') ? 'solid' : 'regular' }} fa-clipboard"></i></a>
                        @endguest
                    </li>
                </ul>
            </nav>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
