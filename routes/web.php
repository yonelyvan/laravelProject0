<?php

///vistablade, controlador@funcion

Route::get('/', 'PagesController@home');
Route::any('/aboutme', 'PagesController@aboutme');
Route::any( '/about', 
    function () { //== function fx(){return view ...}  'XController@fx'
        return view('aboutus');
    }
);

Route::get('/messages/{message}','MessagesController@show');
Route::post('/messages/create','MessagesController@create');