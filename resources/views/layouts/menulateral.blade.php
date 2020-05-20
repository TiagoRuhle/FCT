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
                        <ul class="widget widget-menu unstyled">
                            <li class="active"><a href="{{ route('alunos.index')}}"><i class="menu-icon icon-dashboard"></i>Meu Perfil</a></li>
                            <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed</a></li>
                            <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">11</b></a></li>
                            <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">19</b></a></li>
                            <li><a href="{{ route('logout') }}"><i class="menu-icon icon-signout"></i>Logout</a></li>
                        </ul>
                    </div>                
                </div>            
            </div>
        </div>    
    </div>
@endguest