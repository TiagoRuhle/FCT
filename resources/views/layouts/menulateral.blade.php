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
                            <img src="{{ asset ('imagens/defaultuser.png')}}" alt="Image from user" class="avatar">
                            <!--nome do utilizador-->
                            <h1 class="textocentro">{{Auth::user()->name}}</h1>
                        </div>
                        <ul class="widget widget-menu unstyled">
                            <li class="active"><a href="{{ route('users.index')}}"><i class="menu-icon icon-dashboard"></i>Meu Perfil</a></li>
                            <li><a href="{{ route('posts.indexpessoal')}}"><i class="menu-icon icon-bullhorn"></i>Meus Posts</a></li>
                            <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Notificações <b class="label green pull-right">11</b></a></li>
                            <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">19</b></a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="menu-icon icon-signout"></i>Logout</a></li>
                        </ul>
                    </div>                
                </div>            
            </div>
        </div>    
    </div>
@endguest