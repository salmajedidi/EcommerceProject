<!DOCTYPE html>
<html lang="fr">
    <head>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OGANI | LOGIN FORM</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    </head>

    <body>
        
        @yield('content')

        <!-- Js Plugins -->
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('js/jquery.slicknav.js')}}"></script>
        <script src="{{asset('js/mixitup.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    

        @yield('script')
    </body>
</html>
