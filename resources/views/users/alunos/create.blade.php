@extends('layouts.myapp')
@section('content')
    <form method="POST" action="{{url('/alunos')}}">
    @csrf
        
    <!--campo usado para recolher o email do aluno-->
    <div class="form-group">
        <label for="contato">Contato</label>
        <input type="email" class="form-control" id="contato" name="contato" title="O contato é email"/>
    </div>

    <!--campo usado para recolher a data de nascimento do aluno-->
    <div class="form-group">
        <label for="dtnascimento">Data Nascimento</label>
        <input type="date" class="form-control" id="dtnascimento" name="dtnascimento"/>
    </div>

    <!--campo usado para recolher uma fotografia do aluno-->
    <div class="form-group">
        <label for="Foto">Fotografia</label>
        <input type="file" class="form-control" id="foto" name="foto"/>
    </div>

    <!--tipo de utilizador-->
    <input type="hidden" id="tipo" name="tipo" value="aluno">

    <input type="submit" name="create" id="create"/>
  </form>
@endsection