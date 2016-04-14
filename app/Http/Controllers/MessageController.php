<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;
use Auth;

class MessageController extends Controller
{
    public function seen(Request $request)
    {
//        return $request->all();
        $message = Message::whereId($request['id'])->update(['status' => 'seen']);
        return $message;
    }

    public function send(Request $request){
//        return $request->all();
        $message = Message::create([
            'send_id' => Auth::user()->id,
            'receive_id' => $request['toUser'],
            'content' => $request['message']
        ]);
        return $message;
    }
}
