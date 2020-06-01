@extends('layouts.myapp')
@section('content')
    <form method="POST" action="{{url('/alunos')}}">
    @csrf
    <!--campo usado para recolher o nome do aluno-->
    <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" title="Nome e apelido"/>
    </div>
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
    <!--select para o tipo de trabalho que o aluno pretende, se prentede um trabalho full-time ou part-time-->
    <label for="tipotrabalho">Tipo Trabalho</label>
    <select name="tipotrabalho" id="tipotrabalho">
        <option value="parttime">Part-Time</option>
        <option value="fulltime">Full-Time</option>
    </select>
    <!--select para saber o estado do aluno, se ele esta a estudar, a trabahar ou a procura de emprego-->
    <div class="form-group">
        <label for="estado">Estado</label>
        <select name="estado" id="estado">
            <option value="procura">Procura</option>
            <option value="emprege">Emprege</option>
            <option value="estudar">Estudar</option>
        </select>
    </div>
    <!--localização de disponibilidade do aluno-->
    <div class="form-group">
        <label for="localizacao">Localização</label>
        <select name="localizacao" id="localizacao" multiple>
            <!--select com as localizações da bd--> 
            @foreach ($localizacaos as $localizacao)
                <option value="{{$localizacao->id}}">{{$localizacao->localizacao}}</div>
            @endforeach       
        </select>
    </div>
    <label for="area">Area</label>
    <select name="area" id="area" multiple>
        <!--select com as localizações da bd--> 
        @foreach ($areas as $area)
            <option value="{{$area->id}}">{{$area->descricao}}</div>
        @endforeach       
    </select>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">  <p class="font-weight-bold">Hobbies</p></label>
        <textarea class="form-control" id="hobbie" rows="9" name="hobbie"></textarea>
      </div>
    <!--campo usado para recolher uma fotografia do aluno-->
    <div class="form-group">
        <label for="Foto">Fotografia</label>
        <input type="file" class="form-control" id="foto" name="foto"/>
    </div>
    <input type="submit" name="create" id="create"/>
  </form>
@endsection