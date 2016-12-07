<!DOCTYPE html>
<html ng-app="minxApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" 
      type="image/png" 
      href="{{ URL::asset('assets/img/logo.png') }}">
    <title>Minx - @yield('title')</title>
    @include('partials.css-assets')
</head>

<body>
    @include('partials.navbar-top')
    <div class="container">
        @include('partials.header')
        @yield('content')
    </div>
    @include('partials.footer')
    @include('partials.js-assets')
</body>

</html>