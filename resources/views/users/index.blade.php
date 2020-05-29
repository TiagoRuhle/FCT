@extends('layouts.myapp')
@section('content')
    <div class="row">
        <div class="col-md-10">            
            <!--caso haja dados mostrar os dados, senão não mostrar-->
            @yield('contentuser')
        </div>
        <div class="col-md">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Registar
              </button>
        </div>
    </div> 
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Escolha do tipo de utilizador</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md">
                        <div class="card" style="width: 15rem;">
                            <H2>ALUNOS</H2>
                            <a href="{{route('alunos.create')}}"><img src="{{ asset ('imagens/defaultuser.png')}}" class="card-img-top" alt="..."></a>                                      
                          </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 15rem;">
                            <H2>EMPRESAS</H2>                             
                            <a href="{{route('empresas.index')}}"><img src="{{ asset ('imagens/defaultuser.png')}}" class="card-img-top" alt="..."></a>                   
                          </div>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
@endsection