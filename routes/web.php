<?php

use App\Notifications\UserOnSend;
use App\User;
///vistablade, controlador@funcion

//Route::get('/', 'PagesController@home');
Route::any('/aboutme', 'PagesController@aboutme');
Route::any( '/about', 
    function () { //== function fx(){return view ...}  'XController@fx'
        return view('aboutus');
    }
);

Route::get('/messages/{message}','MessagesController@show');
Route::post('/messages/create','MessagesController@create')->middleware('auth');


//login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/',function (){
    $user = user::find(1);
    User::find(1)->notify(new UserOnSend);
    return view('welcome',['messages'=>[]]);
});


Route::get('/api/notifications','PagesController@notifications');