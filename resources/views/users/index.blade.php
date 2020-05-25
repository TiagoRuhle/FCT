@extends('layouts.myapp')
@section('content')
    <div class="row">
        <div class="col-md-10">            
            <!--caso haja dados mostrar os dados, senão não mostrar-->
            @yield('contentuser')
        </div>
        <div class="col-md">
            <button id="teste">Registar</button>
        </div>
    </div>    
    <div id="teste" class="modal">        
        <div class="modal-content">     
            <!--Seria usado para escolher entre aluno e empresa-->          
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>            
        </div>            
    </div> 
@endsection