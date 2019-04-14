@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        About me
    </div>

    @if (isset($author))
        <p> Author: {{$author}} </p>
        @else 
        <p>No author</p>
    @endif
        
    @isset($profile)
        <p> Profile: {{$profile}} - IEEE/ACM </p>                 
    @endisset

    <div class="links">
        @foreach ($topics as $t)
            <a href="{{$t}}">{{$t}}</a>
        @endforeach
    </div>
@endsection

@section('title')
    about me
@endsection