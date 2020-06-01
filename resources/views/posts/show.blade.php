@extends('layouts.myapp')
@section('content')       
    <h1>Titulo: {{$post->titulo}}</h1>    
    <h3>Corpo: <div class="text-mute">{{$post->corpo}}</div></h3>
    <!--mostrar as localizações e as areas-->
    <a href="/posts" class="btn btn-sm btn-sucess">Voltar</a>    
@endsection 