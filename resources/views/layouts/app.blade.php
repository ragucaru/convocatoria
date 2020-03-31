<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    @section('estilos')
        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="{{ asset('libs/theme/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('libs/theme/css/sb-admin-2.css') }}" rel="stylesheet">
    @show
    
    
</head>
<body id="page-top">
        @auth
            @include('menu.menu')
            
            @section('scripts')
                <!-- Scripts -->
                <script type="text/javascript" src="js/registro/registro.js"></script>
                <script src="{{ asset('js/app.js') }}" defer></script> 
                <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
                <script src="js/modulos/login/login.js"></script> 
                <script src="libs/theme/vendor/chart.js/Chart.min.js"></script> 
                <script src="libs/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
                <script src="libs/theme/vendor/jquery-easing/jquery.easing.min.js"></script> 
                <script src="libs/theme/js/sb-admin-2.min.js"></script> 
                <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
                <script type="text/javascript" src="../js/popper.min.js"></script>
                <script type="text/javascript" src="../js/bootstrap.min.js"></script>
                <script type="text/javascript" src="../js/mdb.min.js"></script>
                <!--<script src="libs/theme/js/demo/chart-area-demo.js"></script> 
                <script src="libs/theme/js/demo/chart-bar-demo.js"></script> 
                <script src="libs/theme/js/demo/chart-pie-demo.js"></script> --> 
                
            @show

        @else
            @yield('content')
            
        @endguest

        

</body>
</html>

