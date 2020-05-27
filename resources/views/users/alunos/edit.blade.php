@extends('layouts.myapp')
@section('content')
    <form method="POST" action="{{url('/alunos/{{$alunos->id}}')}}">
    @csrf
    <!--campo usado para recolher o nome do aluno-->
    <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome"/>
    </div>
    <!--campo usado para recolher o email do aluno-->
    <div class="form-group">
        <label for="contato">Contato</label>
        <input type="email" class="form-control" id="contato" name="contato"/>
    </div>
    <!--campo usado para recolher a data de nascimento do aluno-->
    <div class="form-group">
        <label for="dtnascimento">Data Nascimento</label>
        <input type="date" class="form-control" id="dtnascimento" name="dtnascimento"/>
    </div>
    <!--select para o tipo de trabalho que o aluno pretende, se prentede um trabalho full-time ou part-time-->
    <label for="tipotrabalho">Tipo Trabalho</label>
    <select name="tipotrabalho" id="tipotrabalho">
        <option value="parttime">Part-Time</option>
        <option value="fulltime">Full-Time</option>
    </select>
    <!--select para saber o estado do aluno, se ele esta a estudar, a trabahar ou a procura de emprego-->
    <label for="estado">Estado</label>
    <select name="estado" id="estado">
        <option value="procura">Procura</option>
        <option value="emprege">Emprege</option>
        <option value="estudar">Estudar</option>
    </select>
    <label for="localizacao">Localização</label>
    <select name="localizacao" id="localizacao">
        <!--se possivel ter dados da bd-->        
    </select>
    <!--campo usado para recolher uma fotografia do aluno-->
    <div class="form-group">
        <label for="Foto">Fotografia</label>
        <input type="file" class="form-control" id="foto" name="foto"/>
    </div>
    <input type="submit" name="create" id="create"/>
  </form>
@endsection