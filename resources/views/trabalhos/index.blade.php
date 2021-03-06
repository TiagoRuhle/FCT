@extends('layouts.myapp')
@section('content')
    @guest
       <!--sem ter o log in feito-->
       <div class="row">
            <h1>trabalhos</h1>
       </div>
       <div class="row">
          <div class="alert alert-warning" role="alert">
            Caso queira ver um trabalho relacionado com as suas preferências de fazer <a href="{{ route('login') }}" class="alert-link">log-in</a>
          </div>
       </div>    
    @else
        <!--com o log in feito-->
        <div class="row">
            <div class="col-md-9">
                <h1>Trabalhos</h1>
            </div>
        </div>
    @endguest
    <!-- Tabela com posts sobre procura-->
    <table class="table table-sm table-hover">
        <thead class="thead-dark">
            <tr>                
                <th scope="col">Titulo</th>                                
                <th scope="col">Area</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>                      
                    <td>{{$post->titulo}}</td>                                        
                    <td>
                        @foreach ($post->area as $area)
                            <span class="badge badge-success">{{$area->area}}</span>    
                        @endforeach
                    </td>
                    <td class="text-right">
                        <a href="{{route('trabalhos.show',$post->id)}}" class="btn btn-sm btn-outline-secondary">+</a>
                    </td>
                    <td><a href="{{ route('trabalhos.sendemail')}}"><i class="menu-icon icon-bullhorn"></i>Send it</a></td>
                </tr> 
            @empty
                <tr>
                    <td colspan="4">Ainda não existem procuras de trabalho</td>
                </tr>
            @endforelse
            
        </tbody>
    </table>
@endsection