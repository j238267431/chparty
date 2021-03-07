<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $messages = Message::where('from_user_id', $user_id)->orWhere('to_user_id', $user_id)->get();
        return view('message', ['messages' => []]);
    }

    public function send(Request $request)
    {
//        $message = $request->message;
//        if ($request->message) {
//            $message = new Message();
//            $message->fill($request->all())
////            echo $message;
//            // todo записать сообщение в базу данных
//        }
        $user_id = Auth::user()->id;
        $messages = [
            'from_user_id'=>$user_id,
            'message'=>$request->message
        ];
        return view('sender', ['message' => $messages]);
    }
}
