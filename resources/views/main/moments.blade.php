@extends('main.layout.layout')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Moments</h2>
                    <ol>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>Moments</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->
        <!-- ======= Moments Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row portfolio-container" data-aos="fade-up">
                    @foreach($moments as $moment)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$moment->image) }}" class="img-fluid" alt="{{ $moment->name }}">
                            <div class="portfolio-info align-items-center">
                                <h4>{{ $moment->name }}</h4>
                                <p>{{ $moment->title }}</p>
                                <a href="{{ asset('storage'.DIRECTORY_SEPARATOR.$moment->image) }}" data-gall="portfolioGallery" class="venobox preview-link" title="{{ $moment->title }}"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Portfolio Section -->
    </main><!-- End #main -->
@endsection
