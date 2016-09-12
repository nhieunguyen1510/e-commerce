<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{elixir('css/app.css')}}">
    <title>App Name - @yield('title')</title>
</head>

<body>
    @section('sidebar') This is the master sidebar. @show

    <div class="container">
        @yield('content')
    </div>

    <!-- Packages -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('packages/normalize/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('packages/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('packages/fontawesome/font-awesome.min.css')}}">

    <script type="text/javascript" src="{{ URL::asset('packages/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('packages/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('packages/angular/angular.min.js')}}"></script>
</body>

</html>