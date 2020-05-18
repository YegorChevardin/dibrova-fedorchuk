@extends('main.layout.layout')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content animated fadeInUp">
                            <h2>Welcome to <span>Dibrova-Fedorchuk web page!</span></h2>
                            <p>If you are our friend or a person that know us from Hikopol - this web site is for you. Here you can easily contact us and do some things. Click button bellow to read more info about your features!</p>
                            <div class="text-center"><a href="#cta" class="btn-get-started">Read More!</a></div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);"></div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);"></div>
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container text-center">
                <h3>Our family was formed <span id="days"></span> days <span id="hours"></span> hours <span id="minutes"></span> minutes <span id="seconds"></span> seconds ago!</h3>
            </div>
        </section><!-- End Cta Section -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Check out <strong>capabilities of this web page</strong></h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><i class="icofont-computer"></i></div>
                            <h4 class="title"><a href="{{ route('blog') }}">Our blog</a></h4>
                            <p class="description">You can follow our blog to make sure you did not miss something important for you!</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="icofont-shield-alt"></i></div>
                            <h4 class="title"><a href="">Registration</a></h4>
                            <p class="description">Before you will follow us, you must 'sing up' or 'log in', it will secure our blog and you.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="icofont-contacts"></i></div>
                            <h4 class="title"><a href="{{ route('contact') }}">Contact us</a></h4>
                            <p class="description">If you wanna come to our party, just make contact us! You can make it <a href="{{ route('contact') }}#contact-form">here</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->
    </main><!-- End #main -->
    <!-- Family seconds section start -->
    <script lang="javascript" src="{{ asset('assets/js/family_seconds.js') }}" defer></script>
    <!-- Family seconds section end -->
@endsection
