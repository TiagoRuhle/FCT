@extends('layouts.myapp')
@section('content')
    <form method="POST" action="{{url('/alunos/{{$alunos->id}}')}}">
    @csrf
    <!--campo usado para recolher o nome do aluno-->
    <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$aluno->nome}}"/>
    </div>

    <!--campo usado para recolher o email do aluno-->
    <div class="form-group">
        <label for="contato">Contato</label>
        <input type="email" class="form-control" id="contato" name="contato" value="{{$aluno->contato}}"/>
    </div>

    <!--campo usado para recolher a data de nascimento do aluno-->
    <div class="form-group">
        <label for="dtnascimento">Data Nascimento</label>
        <input type="date" class="form-control" id="dtnascimento" name="dtnascimento" value="{{$aluno->dtnascimento}}"/>
    </div>

    <!--select para o tipo de trabalho que o aluno pretende, se prentede um trabalho full-time ou part-time-->
    <label for="tipotrabalho">Tipo Trabalho</label>
    <select name="tipotrabalho" id="tipotrabalho">
        @foreach ($tipotrabalhos as $tipotrabalho)
             <option value="{{$tipotrabalho->id}}">{{$tipotrabalho->tipotrabalho}}</div>
        @endforeach 
        <!--<option value="parttime">Part-Time</option>
        <option value="fulltime">Full-Time</option>-->
    </select>

    <!--select para saber o estado do aluno, se ele esta a estudar, a trabahar ou a procura de emprego-->
    <label for="estado">Estado</label>
    <select name="estado" id="estado">
        @foreach ($estados as $estado)
             <option value="{{$estado->id}}">{{$estado->estado}}</div>
        @endforeach 
        <!--
        <option value="procura">Procura</option>
        <option value="emprege">Emprege</option>
        <option value="estudar">Estudar</option>-->
    </select>

    <label for="localizacao">Localização</label>
    <select name="localizacao" id="localizacao">
        <!--select com as localizações da bd--> 
        @foreach ($localizacaos as $localizacao)
             <option value="{{$localizacao->id}}">{{$localizacao->localizacao}}</div>
        @endforeach       
    </select>
    <!--campo usado para recolher uma fotografia do aluno-->
    <div class="form-group">
        <label for="Foto">Fotografia</label>
        <input type="file" class="form-control" id="foto" name="foto"/>
    </div>
    <input type="submit" name="create" id="create"/>
  </form>
@endsection