<!DOCTYPE html>
<html ng-app="minxApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name - @yield('title')</title>
</head>

<body>
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Login</strong></div>
            <div class="panel-body">
                <form focus-invalid="focus-invalid" id="loginForm" name="loginForm" action="{{ URL::Route('dangnhap.post') }}" method="POST" novalidate="novalidate" role="form">
                    {{ csrf_field() }}
                    <div class="form-group" ng-class="{ 'has-error': vm.isSubmitted &amp;&amp; loginForm.username.$invalid }"><label for="username">Username:</label><input class="form-control" type="text" id="username" name="ten_dang_nhap" ng-focus="vm.isSubmitted &amp;&amp; loginForm.username.$error" ng-model="vm.user.username" ng-required="true" maxlength="50" placeholder="Enter your username here"
                        />
                    </div>
                    <div class="form-group" ng-class="{ 'has-error': vm.isSubmitted &amp;&amp; loginForm.password.$invalid }"><label for="password">Password:</label><input class="form-control" type="password" id="password" name="mat_khau" ng-model="vm.user.password" ng-required="true" maxlength="50" placeholder="Enter your password here" />
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 form-group"><button class="btn btn-primary form-control" type="submit">Login</button></div>
                    </div>
                    <div class="form-group">
                        <p class="text-center"><a href="{{ URL::Route('dangky.index') }}">Quên mật khẩu?</a></p>
                    </div>
                </form>
            </div>
        </div>
        <p class="text-center">Bạn không có tài khoản? <a href="{{ URL::Route('dangky.index') }}">Đăng ký tài khoản mới </a></p>
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