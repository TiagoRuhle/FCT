@extends('users.index')
@section('contentuser')
<form method="POST" action="{{url('/alunos')}}">
    <!--mostrar tmb as areas em q o aluno esta interessado-->
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Nome: {{$aluno->nome}}</p></label>
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Data de Nascimento: {{$aluno->dtnascimento}}</p></label>
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Área de Interesse: {{$aluno->area->area}}</p></label>
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Localização de Interesse: {{$aluno->localizacao->localizacao}}</p></label>  
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Estado: {{$aluno->estadoaluno->estadosaluno}}</p></label>  
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Tipo de Trabalho: {{$aluno->tipotrabalho->tipostrabalho}}</p></label>  
        <a href="{{route('alunos.edit')}}" class="btn btn-block btn-primary">Editar</a>     
    </div>
  </form>
@endsection