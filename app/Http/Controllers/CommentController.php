<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CommentController extends Controller
{
    public function send(Request $request) {
        if(View::exists('main.blog-single')) {
            //

            return back();
        }
        abort(404);
    }
}
