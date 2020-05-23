@foreach($posts as $post)
    <article class="entry" data-aos="fade-up">
        <div class="entry-img">
            <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$post->image) }}" alt="" class="img-fluid">
        </div>
        <h2 class="entry-title">
            <a href="blog-single/{{$post->id}}">{{ $post->title }}</a>
        </h2>
        <div class="entry-meta">
            <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{ route('blog-single') }}">{{ $post->user->name }}</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{ route('blog-single') }}"><time datetime="2020-01-01">{{ date('d.m.Y', strtotime($post->created_at))  }}</time></a></li>
                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{ route('blog-single') }}">12 Comments</a></li><!--FINISH THIS AFTER MAKING COMMENTS-->
            </ul>
        </div>
        <div class="entry-content">
            <p>
                {{ $post->excerpt }}
            </p>
            <div class="read-more">
                <a href="blog-single/{{$post->id}}">Read More</a>
            </div>
        </div>
    </article>
@endforeach
<nav class="justify-content-center" aria-label="Page pagination example" style="justify-content: center">
    {{ $posts->links() }}
</nav>
<!-- Pagination section end -->
