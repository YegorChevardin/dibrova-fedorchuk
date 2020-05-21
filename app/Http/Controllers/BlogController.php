<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Post;

class BlogController extends Controller
{
    public function show(Request $request) {
        if(View::exists('main.blog')) {
            $posts = Post::orderBy('created_at', 'DESC')->paginate(2);
            $all_posts = Post::orderBy('created_at', 'ASC')->get();

            return view('main.blog')->with([
                'posts' => $posts,
                'all_posts' => $all_posts
            ]);
        }
        abort(404);
    }
}
