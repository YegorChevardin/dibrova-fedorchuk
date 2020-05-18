@extends('main.layout.layout')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>About</h2>
                    <ol>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->
        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container">
                <div class="row no-gutters">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>
                    <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 data-aos="fade-up">Sociable family!</h3>
                            <p data-aos="fade-up">
                                Our family likes to hang on with our friends in the weekends<br/>
                                so we have got a web site that can help us with the meetings!<br/>
                                And what can you do in this website!?
                            </p>
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Stay tuned!</h4>
                                    <p>Always know about funny moments or meetings that we post or planing in our blog</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-alarm"></i>
                                    <h4>One request - one response</h4>
                                    <p>If you wanna come to us? Just send one email and we'll answer it as soon as we can!</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-images"></i>
                                    <h4>Funny moments</h4>
                                    <p>We always post some funny moment in our blog and trying to make a discussion in it with our friends. Looks enjoyable)</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-building"></i>
                                    <h4>Make the friendship</h4>
                                    <p>We are sociable family, so if you wanna to make friendship with us, just send an email, we'll anwser you and we'll make our friendship better in the future!</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->
        <!-- ======= Our Family Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Family</strong></h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="{{ url('https://www.facebook.com/andy.fedorczuk') }}" target="_blank"><i class="icofont-facebook"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Andy Fedorchuk</h4>
                                <span>Father</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="{{ url('https://www.facebook.com/profile.php?id=100009808128849') }}" target="_blank"><i class="icofont-facebook"></i></a>
                                    <a href="{{ url('https://www.instagram.com/dibrova2011/?hl=ru') }}" target="_blank"><i class="icofont-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Marina Dibrova-Fedorchuk</h4>
                                <span>Mother</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="{{ url('https://www.facebook.com/Yegor.Chevardin') }}" target="_blank"><i class="icofont-facebook"></i></a>
                                    <a href="{{ url('https://www.instagram.com/egor_chevardin/?hl=ru') }}" target="_blank"><i class="icofont-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Yegor Chevardin</h4>
                                <span>Sun</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>3 dogs and a cat</h4>
                                <span>Parrots</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Our Team Section -->
    </main><!-- End #main -->
@endsection
