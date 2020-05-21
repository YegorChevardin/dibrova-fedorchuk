<?php

namespace App\Http\Controllers;

use App\Mail\SubscribeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function index(Request $request) {
        if(View::exists('main.main')) {
            if($request->input('Submit') == 'Subscribe') {
                $data = [
                    'email' => $request->input('email')
                ];

                Mail::to('dibrova2011@gmail.com')->send(new SubscribeMail($data));

                return back();
            }
        }
        abort(404);
    }
}
