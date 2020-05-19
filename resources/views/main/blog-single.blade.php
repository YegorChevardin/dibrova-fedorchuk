@extends('main.layout.layout')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>
                    <ol>
                        <li><a href="index">Home</a></li>
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
                            <h4 class="comments-count">8 Comments</h4>
                            <div id="comment-2" class="comment clearfix">
                                <img src="{{ asset('assets/img/comments-2.jpg') }}" class="comment-img  float-left" alt="">
                                <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="icofont-reply"></i> Reply</a></h5>
                                <time datetime="2020-01-01">01 Jan, 2020</time>
                                <p>
                                    Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                                </p>
                                <div id="comment-reply-1" class="comment comment-reply clearfix">
                                    <img src="{{ asset('assets/img/comments-3.jpg') }}" class="comment-img  float-left" alt="">
                                    <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="icofont-reply"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                                        Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.
                                        Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                                    </p>
                                    <div id="comment-reply-2" class="comment comment-reply clearfix">
                                        <img src="{{ asset('assets/img/comments-4.jpg') }}" class="comment-img  float-left" alt="">
                                        <h5>Sianna Ramsay</h5>
                                        <time datetime="2020-01-01">01 Jan, 2020</time>
                                        <p>
                                            Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                                        </p>
                                    </div><!-- End comment reply #2-->
                                </div><!-- End comment reply #1-->
                            </div><!-- End comment #2-->
                            <div class="reply-form">
                                <h4>Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked * </p>
                                <form action="{{ url('comment'.DIRECTORY_SEPARATOR.$post->id) }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <input name="website" type="text" class="form-control" placeholder="Your Website">
                                        </div>
                                    </div>
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
