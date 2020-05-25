@extends('users.index')
@section('contentuser')
<form method="POST" action="{{url('/alunos')}}">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1"><p class="font-weight-bold">Nome</p></label>
    <input type="text" class="form-control" id="nome" name="nome" value="{{$aluno->nome}}">
    </div>
  </form>
@endsection