<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Comment;

class BlogSingleController extends Controller
{
    public function show($postId) {
        if(View::exists('main.blog-single')) {
            $post = Post::find($postId);
            $all_posts = Post::orderBy('created_at', 'ASC')->get();
            $comments = DB::select('select * from comments where post_id = ?', [$postId]);

            return view('main.blog-single')->with([
                'post' => $post,
                'all_posts' => $all_posts,
                'comments' => $comments
            ]);
        }
        abort(404);
    }
}
