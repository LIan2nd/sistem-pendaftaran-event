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
                    @guest<li><a class="text-decoration-none" href="{{ route('login') }}"><i
                                    class="fa-solid fa-arrow-right-to-bracket"></i><span class="ms-2">Login</span></a>
                        </li>
                    @else
                        @if (Auth::user()->role_id == 3)
                        @else
                            <li><a class="text-decoration-none" href="/registration/histories"><i
                                        class="fa-solid fa-book{{ Request::is('registration/histories') ? '-open' : '' }}"></i></a>
                        @endif
                        <li>
                            <a class="text-decoration-none" href="#">
                                @if (Auth::user()->role_id == 1)
                                    <i class="fa-solid fa-user"></i>
                                @endif
                                @if (Auth::user()->role_id == 2)
                                    <i class="fa-solid fa-user-plus"></i>
                                @endif
                                @if (Auth::user()->role_id == 3)
                                    <i class="fa-solid fa-user-tie"></i>
                                @endif
                                <span class="ms-1">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown">
                                @if (Auth::user()->role_id == 1)
                                @else
                                    <li><a class="text-decoration-none" href="/dashboard"><i
                                                class="fa-solid fa-table-columns"></i><span
                                                class="ms-2">Dashboard</span></a></li>
                                @endif
                                <li><a class="text-decoration-none" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i
                                            class="fa-solid fa-right-from-bracket"></i><span
                                            class="ms-2">logout</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>

                        @endguest
                    </li>
                </ul>
            </nav>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
