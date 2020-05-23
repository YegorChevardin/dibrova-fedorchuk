<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function send(Request $request) {
        if(View::exists('main.blog-single')) {
                $comment = new Comment([
                    'post_id' => $request->get('postId'),
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'comment' => $request->get('comment')
                ]);
                $comment->save();

                return back()->with('success', 'Comment sent successfully');
        }
        abort(404);
    }
}
