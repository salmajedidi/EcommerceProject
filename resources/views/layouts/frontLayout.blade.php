<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">

        <meta charset="UTF-8">
        <meta name="description" content="Ogani Template">
        <meta name="keywords" content="Ogani, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- favicon --->
        <link rel="icon" href="{{asset('/assets/img/logo.png')}}">
        
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/assets/css/elegant-icons.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/assets/css/nice-select.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/assets/css/jquery-ui.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/assets/css/slicknav.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}" type="text/css">

        <title>OGANI| @yield('title')</title>
    </head>

    <body>
        
        @include('front.includes.header')
        @yield('content')
        @include('front.includes.footer')

        <!-- JS -->
        <script src="{{asset('/assets/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('/assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.slicknav.js')}}"></script>
        <script src="{{asset('/assets/js/mixitup.min.js')}}"></script>
        <script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/assets/js/main.js')}}"></script>
    

        @yield('script')
    </body>
</html>
