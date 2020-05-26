@extends('users.index')
@section('contentuser')
<form method="POST" action="{{url('/alunos')}}">
    <!--mostrar tmb as areas em q o aluno esta interessado-->
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1"><p class="font-weight-bold">Nome</p></label>
        <h1>aluno view</h1>
    </div>
  </form>
@endsection