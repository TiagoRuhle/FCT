@extends('layouts.myapp')
@section('content')
    <form method="POST" action="{{url('/alunos')}}">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlTextarea1"><h4>Aqui poderá escrever os seus hobbies</h4></label>
        <textarea class="form-control" id="hobbies" rows="9" name="hobbies"></textarea>
    </div>
    <input type="submit" name="create" id="create"/>
  </form>
@endsection