<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('message');
    }
    public function send(Request $request)
    {
        $message = $request->message;
        return view('sender', ['message' => $message]);
    }
}
