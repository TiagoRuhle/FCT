<?php 
    function perfilespecifico(){        
        $sql = 'SELECT tipo from users where id = id'
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('id', Auth::user()->id());
        $stmt->execute();
        if(){

        }elseif () {
            
        }else{

        }
    }
?>
@guest  
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <ul class="widget widget-menu unstyled">
                            <li><a href="{{ route('login') }}"><i class="menu-icon icon-signout"></i>Log-in </a></li>
                            <li><a href="{{ route('register') }}"><i class="menu-icon icon-signout"></i>Register </a></li>
                        </ul>
                    </div>                
                </div>            
            </div>
        </div>    
    </div>
@else
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="card">
                            <!--imagem do utilizador-->
                            <!--ir a bd buscar o nome da imagem para inserir a imagem certa, caso nao haja imagem ira ficar a imagem 'defautuser'-->
                            <img src="{{ asset ('imagens/'. $user->imagem)}}" alt="Image from user" class="avatar">
                            <!--nome do utilizador-->
                            <h1 class="textocentro">{{Auth::user()->name}}</h1>
                        </div>
                        <ul class="widget widget-menu unstyled">
                            <li class="active"><a href="{{ route('posts.index')}}"><i class="menu-icon icon-bullhorn"></i>Posts</a></li>
                            <li><a href="{{ route('users.index')}}"><i class="menu-icon icon-dashboard"></i>Meu perfil</a></li>
                            <!--se o utilizador ainda nao tiver decidido se é aluno ou empresa não vai aparecer nada, depois de ele decidir aparece o suposto-->
                            <li><a href="{{ route('alunos.index')}}"><i class="menu-icon icon-dashboard"></i>Perfil de aluno</a></li>
                            <li><a href="{{ route('alunos.perfilprocura')}}"><i class="menu-icon icon-dashboard"></i>Perfil de procura</a></li>
                            <li><a href="{{ route('alunos.hobbies')}}"><i class="menu-icon icon-dashboard"></i>Meus hobbies</a></li>                            
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="menu-icon icon-signout"></i>Logout</a></li>
                        </ul>
                    </div>                
                </div>            
            </div>
        </div>    
    </div>
@endguest