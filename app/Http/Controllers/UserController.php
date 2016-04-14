<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Message;
use Auth;

class UserController extends Controller
{
    public function all()
    {
        $authUser = Auth::user();
//        $authUser->load('sendMessages');
        $allUsers = User::where('id', '!=', $authUser->id)->get()->load(['sendMessages' => function($query) use ($authUser){
            $query->whereReceiveId($authUser->id)->get();
        }, 'receiveMessages' => function($query) use ($authUser){
            $query->whereSendId($authUser->id)->get();
        }]);
//        $allUsersWithMessages = $allUsers->load('sendMessages');
//        $authUser = Message::all();
//        $messages = $authUser->load('sendMessages');
        return $allUsers;
    }
}
