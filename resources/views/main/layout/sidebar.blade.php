<div class="col-lg-4">
    <div class="sidebar" data-aos="fade-left">
        <h3 class="sidebar-title">Search</h3>
        <div class="sidebar-item search-form">
            <form action="">
                <input type="text" id="search">
                <button type="submit"><i class="icofont-search"></i></button>
            </form>
        </div><!-- End sidebar search formn-->
        <h3 class="sidebar-title">Older posts</h3>
        <div class="sidebar-item recent-posts">
            @foreach($all_posts as $post)
                <div class="post-item clearfix">
                    <img src="{{asset('storage'.DIRECTORY_SEPARATOR.$post->image)}}" alt="picture of current post">
                    <h4><a href="/blog-single/{{ $post->id }}">{{ $post->title }}</a></h4>
                    <time datetime="2020-01-01">{{ date('d.m.Y', strtotime($post->created_at)) }}</time>
                </div>
            @endforeach
        </div><!-- End sidebar recent posts-->
    </div><!-- End sidebar -->
</div><!-- End blog sidebar -->
<!-- Sidebar search section start -->
<script text="text/javascript" src=" {{ asset('assets/js/sidebar_search.js') }} " defer></script>
<!-- Sidebar search section end -->
