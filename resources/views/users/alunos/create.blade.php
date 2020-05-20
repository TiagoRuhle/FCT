@extends('layouts.myapp')
@section('content')
    <form method="POST" action="{{url('/alunos')}}">
    @csrf
    <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome"/>
    </div>
    <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome"/>
    </div>
    <div class="form-group">
        <label for="Foto">Fotografia</label>
        <input type="file" class="form-control" id="foto" name="foto"/>
    </div>
    <input type="submit" name="create" id="create"/>
  </form>
@endsection