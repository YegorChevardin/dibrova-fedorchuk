<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">
        <div class="logo mr-auto">
            <h4 class="text-light"><a href="{{ route('/') }}">Family web page</a></h4>
        </div>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="{{ route('/') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('moments') }}">Moments</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
