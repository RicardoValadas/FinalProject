<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;

class ChatController extends Controller
{

    public function displayChat(){
        $allcomments=chat::all();
        //$allcomments = chat::join('users', 'chat.user_id', '=', 'users.id');
        //print_r($allcomments->toJson());  
            return view('message',['messages' => $allcomments]);
    }
    public function getMessages(){
        $allcomments=chat::all();
        return  $allcomments;
    }
    
    public function postMessage(Request $request){
        $message = new chat;
        $message->user_id = auth()->user()->id;
        $message->message=$request->message;

        $message->save();

        return $this->getMessages();

    }

}
