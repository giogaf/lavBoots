<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>


        {{HTML::style('css/app.css')}}
        {{HTML::style('css/bootstrap.min.css')}}

    </head>
    <body>
        <div class="container">
            @include('layouts.nav')
            @include('layouts.flash')
            @yield('content')
        </div>
        
        {{ HTML::script('js/jquery.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
    </body>
</html>
