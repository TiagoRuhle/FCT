@extends('layouts.myapp')
@section('content')
    <form method="POST" action="{{url('/escolas')}}">
    @csrf
    <div class="form-group">
        <label for="nomealuno">Nome do aluno: {{$aluno->nome}}</label>
    </div>
    <!--campo usado para recolher a nota da pap (projeto de aptidão profissional)-->
    <div class="form-group">
        <label for="media">Media do aluno</label>
        <input type="number" class="form-control" id="media" name="media"/>
    </div>
    <!--campo usado para recolher a nota da pap (projeto de aptidão profissional)-->
    <div class="form-group">
        <label for="notapap">Nota PAP (Projeto de Apetidão Profissional)</label>
        <input type="number" class="form-control" id="notapap" name="notapap"/>
    </div>
    <!--campo usado para recolher o tema da pap (projeto de aptidão profissional)-->
    <div class="form-group">
        <label for="temapap">Tema PAP (Projeto de Apetidão Profissional)</label>
        <input type="text" class="form-control" id="temapap" name="temapap"/>
    </div>
    <!--campo usado para recolher a nota que o aluno teve no estagio profissional-->
    <div class="form-group">
        <label for="notaestagio">Nota PAP (Projeto de Apetidão Profissional)</label>
        <input type="number" class="form-control" id="notaestagio" name="notaestagio"/>
    </div>
    <label for="localizacaoestagio">Localização do Estágio</label>
    <select name="localizacaoestagio" id="localizacaoestagio">
        <!--select com as localizações da bd--> 
        @foreach ($localizacoes as $localizacao)
             <option value="{{$localizacao->id}}">{{$localizacao->localizacao}}</div>
        @endforeach       
    </select>
    <input type="submit" name="create" id="create"/>
  </form>
@endsection