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

            return view('main.blog')->with([
                'posts' => $posts
            ]);
        }
        abort(404);
    }
}
