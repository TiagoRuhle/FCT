@extends('layouts.myapp')
@section('content')
    <form method="POST" action="{{url('/alunos')}}">
    @csrf

    <!--localização de disponibilidade do aluno   title-->
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

    <!--select para o tipo de trabalho que o aluno pretende, se prentede um trabalho full-time ou part-time-->
    <label for="tipotrabalho">Tipo Trabalho</label>
    <select name="tipotrabalho" id="tipotrabalho">
        <option hidden>teste</option>
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
    <input type="submit" name="create" id="create"/>
  </form>
@endsection