@extends('layouts.myapp')
@section('content')
    @guest
       <!--sem ter o log in feito-->
       <div class="row">
            <h1>Posts</h1>
       </div>
       <div class="row">
          <div class="alert alert-warning" role="alert">
            Caso queira criar um post terá de fazer <a href="{{ route('login') }}" class="alert-link">log-in</a>
          </div>
       </div>    
    @else
        <!--com o log in feito-->
        <div class="row">
            <div class="col-md-9">
                <h1>Posts</h1>
            </div>
            <div class="col-md-3">
                <a href="{{route('posts.create')}}" class="btn btn-block btn-primary">Novo Post</a>
            </div>
        </div>
    @endguest
    <!-- Tabela com posts sobre procura-->
    <table class="table table-sm table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>                                
                <th scope="col">Area</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td>{{$posts->id}}</td>    
                    <td>{{$posts->titulo}}</td>                                        
                    <td>
                        @foreach ($posts->area as $area)
                            <span class="badge badge-success">{{$area->area}}</span>    
                        @endforeach
                    </td>
                    <td class="text-right">
                        <a href="{{route('posts.show',$posts->id)}}" class="btn btn-sm btn-outline-secondary">+</a>
                    </td>
                </tr> 
            @empty
                <tr>
                    <td colspan="4">Ainda não existem posts</td>
                </tr>
            @endforelse
            
        </tbody>
    </table>
@endsection