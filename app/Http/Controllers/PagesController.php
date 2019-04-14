<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $aplication = "Frigy";
        return view('welcome', ['aplication' => $aplication]);
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
}
