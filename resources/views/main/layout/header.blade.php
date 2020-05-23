<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">
        <div class="logo mr-auto">
            <h4 class="text-light"><a href="{{ route('/') }}">Family page</a></h4>
        </div>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="{{ route('/') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                @if(Auth::check())
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    @if(Auth::user()->role_id == 1)
                        <li class="drop-down"><a href="">Account</a>
                            <ul>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                <li class="active"><a href="{{ url('/admin') }}">Admin panel</a></li>
                            </ul>
                        </li>
                    @elseif(Auth::user()->role_id == 2)
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    @endif
                @elseif(Auth::check() == false)
                    <li class="drop-down"><a href="">Account</a>
                        <ul>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
