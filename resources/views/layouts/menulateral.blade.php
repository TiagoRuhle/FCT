<!-- /navbar -->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <ul class="widget widget-menu unstyled">
                    <li class="active"><a href="{{ route('posts.index')}}"><i class="menu-icon icon-dashboard"></i>Dashboard
                        </a></li>
                        <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                        </li>
                        <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                            11</b> </a></li>
                        <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                            19</b> </a></li>
                            <li><a href="{{ route('logout') }}"><i class="menu-icon icon-signout"></i>Logout </a></li>
                    </ul>
                </div>
                <!--/.sidebar-->
            </div>
            <!--/.span9-->
        </div>
    </div>
    <!--/.container-->
</div>