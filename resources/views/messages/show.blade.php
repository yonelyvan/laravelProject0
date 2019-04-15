
@extends('layouts.app')
@section('title')
    welcome
@endsection

@section('content')
    <h1 class="h3">Mensaje id:{{$message->id}}</h1>
    @include('messages.message')
@endsection
