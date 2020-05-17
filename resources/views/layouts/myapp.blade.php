<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FCT') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('edmin/scripts/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('edmin/scripts/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('edmin/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('edmin/scripts/flot/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('edmin/scripts/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
    <script src="{{ asset('edmin/scripts/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('edmin/scripts/common.js') }}" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('edmin/bootstrap/css/bootstrap.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('edmin/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('edmin/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('edmin/images/icons/css/font-awesome.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">        
        @include('incs.nav')        
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('layouts.menulateral')
                </div>
                <div class="col-md">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>