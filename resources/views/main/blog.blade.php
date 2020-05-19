@extends('main.layout.layout')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>
                    <ol>
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 entries">
                        @include('main.blog-content')
                    </div><!-- End blog entries list -->
                    @include('main.layout.sidebar')
                </div>
            </div>
        </section><!-- End Blog Section -->
    </main><!-- End #main -->
@endsection
