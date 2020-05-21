<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Moment;

class MomentsController extends Controller
{
    public function index() {
        if(View::exists('main.moments')) {
            $moments = Moment::orderBy('created_at', 'DESC')->get();

            return view('main.moments')->with([
                'moments' => $moments
            ]);
        }
        abort(404);
    }
}
