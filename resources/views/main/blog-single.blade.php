@extends('main.layout.layout')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
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
                        <article class="entry entry-single" data-aos="fade-up">
                            <div class="entry-img">
                                <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$post->image) }}" alt="" class="img-fluid">
                            </div>
                            <h2 class="entry-title">
                                <a href="#">{{ $post->title }}</a>
                            </h2>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">{{ $post->user->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">{{ date('d.m.Y', strtotime($post->created_at)) }}</time></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <?php
                                    echo "{$post->body}";
                                ?>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="float-right share">
                                    <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                                    <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                                    <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                                </div>
                            </div>
                        </article><!-- End blog entry -->
                        <div class="blog-author clearfix" data-aos="fade-up">
                            <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$post->user->avatar) }}" class="rounded-circle float-left" alt="">
                            <h4>{{ $post->user->name }}</h4>
                            <p>
                                Today i told you about: "{{ $post->title }}"!
                            </p>
                        </div><!-- End blog author bio -->
                        <div class="blog-comments" id="blog-comments" data-aos="fade-up">
                            <h4 class="comments-count">Comments</h4>
                            @if(!empty($comments))
                                @foreach($comments as $comment)
                                    <div class="comment clearfix">
                                        <img src="{{ asset('assets/img/comments-2.jpg') }}" class="comment-img  float-left" alt="">
                                        <h5><a>{{ $comment->name }}</a></h5>
                                        <time datetime="2020-01-01">{{ date('d.m.Y', strtotime($comment->created_at)) }}</time>
                                        <p>{{ $comment->comment }}</p>
                                    </div>
                                @endforeach
                            @else
                                <div class="comment clearfix">
                                    <h5><a>0 comments</a></h5>
                                    <p>There is no replys for this post</p>
                                </div>
                            @endif
                            <div class="reply-form">
                                <h4>Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked * </p>
                                <form action="{{ route('comment') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="name" value="{{ Auth::user()->name }}"/>
                                    <input type="hidden" name="email" value="{{ Auth::user()->email }}"/>
                                    <input type="hidden" name="postId" value="{{ $post->id }}"/>
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post Comment</button>
                                </form>
                            </div>
                        </div><!-- End blog comments -->
                    </div><!-- End blog entries list -->
                    @include('main.layout.sidebar')
                </div>
            </div>
        </section><!-- End Blog Section -->
    </main><!-- End #main -->
@endsection
