<?php

namespace App\Http\Controllers;

use App\User;
use App\Notification;
use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        //$messages = Message::all();
        $messages = Message::paginate(2);//10 por pagina
        //dd($messages);
        return view('welcome', ['aplication' => "larater", 'messages' => $messages]);
    }



    public function aboutme(){
        $topics = [
            "Computer graphics",
            "artificial intelligence",
            "Machine Learning",
            "Data structures",
            "Cloud computing",
            "bio-inspired computing"
        ];
        $author = "Yonel Mamani";
        $profile = "Computer Science";
        return view('aboutme', ['topics' => $topics, 'author' => $author, 'profile' => $profile]);
    }
    
    public function notifications(Request $request){
        //pp($request);
        return Notification::all();
    }
}