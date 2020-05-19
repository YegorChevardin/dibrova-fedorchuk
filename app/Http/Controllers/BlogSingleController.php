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
            $comments = Post::find($postId)->comments;

            return view('main.blog-single')->with([
                'post' => $post,
                'comments' => $comments
            ]);
        }
        abort(404);
    }
}
