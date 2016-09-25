<!DOCTYPE html>
<html ng-app="minxApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name - @yield('title')</title>
</head>

<body>
    <div class="container" ng-controller="SanPhamController">
        <div class="product-detail">
            @yield('content')   
        </div>
    </div>

    <!-- Packages -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('packages/normalize/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('packages/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('packages/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/app.css')}}">

    <script type="text/javascript" src="{{ URL::asset('packages/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('packages/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('packages/angular/angular.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('app/app.module.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('app/controllers/sanpham.controller.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('app/services/sanpham.service.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('app/directives/scroll2top-btn.directive.js')}}"></script>
</body>

</html>