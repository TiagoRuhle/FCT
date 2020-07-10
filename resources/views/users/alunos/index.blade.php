@extends('users.index')
@section('contentuser')
<form method="POST" action="{{url('/alunos')}}">
    <!--mostrar tmb as areas em q o aluno esta interessado-->
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Nome: {{$aluno->nome}}</p></label>
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Data de Nascimento: {{$aluno->dtnascimento}}</p></label>
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Área de Interesse: @foreach ($aluno->area as $area) 
          {{$area->area}} @endforeach </p></label>
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Localização de Interesse: @foreach ($aluno->localizacao as $localizacao) 
          {{$localizacao->localizacao}} @endforeach </p></label>  
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Estado: @foreach ($aluno->estadoaluno as $estadosaluno) 
          {{$estadosaluno->estadoaluno}} @endforeach </p></label>  
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Tipo de Trabalho: @foreach ($aluno->tipotrabalho as $tipostrabalho) 
          {{$tipostrabalho->tipotrabalho}} @endforeach </p></label>  
        <a href="/alunos/{{$aluno->id}}/edit" class="btn btn-block btn-primary">Editar</a>     
    </div>
  </form>
@endsection