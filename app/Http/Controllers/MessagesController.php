<?php

namespace App\Http\Controllers;
use App\User;
use App\Message;
use Illuminate\Notifications\Notification;
use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(Message $message){
        //$message = Message::find($id);
        return view('messages.show',['message'=>$message]);
    }

    public function create(CreateMessageRequest $request){
        $user = $request->user();
        //notification
        //$user->notify($user);
 
        $message = Message::create([
                    'user_id' => $user->id,
                    'content'=>$request->input('message'),
                    'image' => 'http://lorempixel.com/600/300?'.mt_rand(0,1000),
                    ]);
        //dd($message);
        

        return redirect('/messages/'.$message->id);
    }
}
