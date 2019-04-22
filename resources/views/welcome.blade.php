@extends('layouts.app')

@section('title')
    home
@endsection

@section('content')
    <div class="jumbotron text-center">
        <h1>laratter</h1>
        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aboutme">Acerca de nosotros</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <form action="/messages/create" method="POST">
            <!-- no funciono has-dange -->
            <div class="form_group {{ $errors->has('message')? ' has-danger' : '' }}">
                {{csrf_field()}} <!-- token para formulario -->
                <input type="text" name="message" class="form-control" placeholder="Que estas pensando?">

                <!-- mas especificos, $errors->any()-->
                @if ($errors->has('message'))
                    <!-- todos los errores relacionados al campo message -->
                    @foreach ($errors->get('message') as $error)        
                        <div class="form-control-feedback">{{$error}}</div>                
                    @endforeach
                @endif

            </div>
        </form>
    </div>


    <div class="row">
        @forelse ($messages as $message)
            <div class="col-6">
                @include('messages.message')
            </div>   
        @empty
        <p>No hay mensajes destacados</p>
        @endforelse

        <!--paginando -->
        @if (count($messages))
            <div class="mt-2 mx-auto">
            <!-- solo cuando se tiene paginacion -->
            {{$messages->links()}}  
            </div>           
        @endif

    </div>

@endsection