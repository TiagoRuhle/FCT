@extends('layouts.myapp')
@section('content')
    <form method="POST" action="{{url('/user')}}">
    @csrf
    <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome"/>
    </div>
    <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome"/>
    </div>
    <input type="submit" name="create" id="create"/>
  </form>
@endsection