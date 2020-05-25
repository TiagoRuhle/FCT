@extends('layouts.myapp')
@section('content')    
    <form method="POST" action="{{url('/post')}}">
      @csrf
      <div class="form-group">
        <label for="exampleFormControlInput1"><p class="font-weight-bold">Titulo</p></label>
      <input type="text" class="form-control  @if($errors->any('titulo')) @if($errors->has('titulo')) is-invalid @else is-valid @endif @endif" id="titulo" name="titulo" value="{{old('titulo')}}">
        @error('titulo')
          <div class="invalid-feedback"> {{$errors->first('titulo')}} </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">  <p class="font-weight-bold">Corpo</p></label>
        <textarea class="form-control" id="corpo" rows="9" name="corpo"></textarea>
      </div>
      <div class="form-group">
        <label for="area">  <p class="font-weight-bold">Area</p> <br><small>Use o CTRL para selecionar várias</small>{{old('area[]')}}</label>
            <select multiple class="form-control" name="area[]">
                @foreach ($areas as $area)
                    <option value="{{$area->id}}">{{$area->area}}</option>
                @endforeach
            </select>
        </div>
      <input type="submit" name="create" id="create"/>
    </form>
@endsection