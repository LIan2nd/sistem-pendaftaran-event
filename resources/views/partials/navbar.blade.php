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
                    </li>
                    <li>|</li>
                    @guest<li><a class="text-decoration-none" href="{{ route('login') }}"><i
                                    class="fa-solid fa-arrow-right-to-bracket me-2"></i><span>Login</span></a>
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
                                    <i class="fa-solid fa-user me-2"></i>
                                @endif
                                @if (Auth::user()->role_id == 2)
                                    <i class="fa-solid fa-user-plus me-2"></i>
                                @endif
                                @if (Auth::user()->role_id == 3)
                                    <i class="fa-solid fa-user-tie me-2"></i>
                                @endif
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown">
                                @if (Auth::user()->role_id == 1)
                                @else
                                    <li><a class="text-decoration-none" href="/dashboard"><i
                                                class="fa-solid fa-table-columns me-2"></i> Dashboard</a></li>
                                @endif
                                <li><a class="text-decoration-none" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i
                                            class="fa-solid fa-right-from-bracket me-2"></i> logout</span></a>
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
