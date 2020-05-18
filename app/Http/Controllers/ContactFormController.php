<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function index(Request $request) {
        if(isset($request)) {
            if($request->input('Submit') == "Send Message") {
                $data = [
                    "name" => $request->input('name'),
                    "email" => $request->input('email'),
                    "subject" => $request->input('subject'),
                    "message" => $request->input('message')
                ];

                Mail::to('dibrova2011@gmail.com')->send(new ContactUsEmail($data));

                return back()->with('alert', 'Message sent successfully!');
            }
        }
        abort(404);
    }
}
