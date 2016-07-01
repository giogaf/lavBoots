<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../../favicon.ico">
    
    <title>
        @yield('title')
    </title>
        <title>Laravel</title>


        {{HTML::style('css/app.css')}}
        {{HTML::style('css/bootstrap.min.css')}}

        <link rel="stylesheet" type="text/css" href="css/sweetalert.css">


    </head>
    <body>
        <div class="container">
            @include('layouts.nav')            
            @yield('content')
        </div>


        
        {{ HTML::script('js/jquery.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}

        <script src="js/sweetalert.js"></script>
    @include('Alerts::show')
    </body>
</html>
