<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BlogSingleController extends Controller
{
    public function show($postId = null) {
        if(View::exists('main.blog-single')) {
            $post = Post::find($postId);
            $all_posts = Post::orderBy('created_at', 'ASC')->get();
            $comments = Post::find($postId)->comments;

            return view('main.blog-single')->with([
                'post' => $post,
                'all_posts' => $all_posts,
                'comments' => $comments
            ]);
        }
        abort(404);
    }
}
