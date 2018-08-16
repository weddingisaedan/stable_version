<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\SendMail;

use Illuminate\Http\Request;

class mailController extends Controller
{
    public function send(Request $request) {
        Mail::to('confirmation.isaedan@gmail.com')->send(new SendMail($request));

        return view('index');
    }
}
