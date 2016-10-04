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
            <div class="panel-heading"><strong>Đăng ký tài khoản</strong></div>
            <div class="panel-body">
                <form action="{{ URL::Route('dangky.post') }}" method="POST" focus-invalid="focus-invalid" id="signupForm" name="signupForm" ng-submit="vm.signUp(signupForm.$valid)" novalidate="novalidate" role="form">
                    {{ csrf_field() }}
                    <div class="form-group" ng-class="{ 'has-error': vm.isSubmitted &amp;&amp; signupForm.username.$invalid }"><label for="username">Tên đăng nhập <span class="text-danger">&#042</span></label><input class="form-control" id="username" name="ten_dang_nhap" ng-focus="vm.isSubmitted &amp;&amp; signupForm.username.$error" ng-maxlength="50" ng-minlength="5" 
                            ng-pattern="vm.pattern.username" ng-required="true" maxlength="50" placeholder="Enter your username here" />
                    </div>
                    <div class="form-group" ng-class="{ 'has-error': vm.isSubmitted &amp;&amp; signupForm.username.$invalid }"><label for="username">Tên <span class="text-danger">&#042</span></label><input class="form-control" id="username" name="ten" ng-focus="vm.isSubmitted &amp;&amp; signupForm.username.$error" ng-maxlength="50" ng-minlength="5" 
                            ng-pattern="vm.pattern.username" ng-required="true" maxlength="50" placeholder="Enter your first name here" />
                    </div>
                    <div class="form-group" ng-class="{ 'has-error': vm.isSubmitted &amp;&amp; signupForm.username.$invalid }"><label for="username">Họ <span class="text-danger">&#042</span></label><input class="form-control" id="username" name="ho" ng-focus="vm.isSubmitted &amp;&amp; signupForm.username.$error" ng-maxlength="50" ng-minlength="5" 
                            ng-pattern="vm.pattern.username" ng-required="true" maxlength="50" placeholder="Enter your surname here" />
                    </div>
                    <div class="form-group" ng-class="{ 'has-error': vm.isSubmitted &amp;&amp; signupForm.email.$invalid }"><label for="email">Email <span class="text-danger">&#042</span></label><input class="form-control" id="email" name="email" ng-model="vm.newUser.email" ng-required="true" maxlength="100" placeholder="Enter your email here" type="email"
                      />
                    </div>
                    <div class="form-group" ng-class="{ 'has-error': vm.isSubmitted &amp;&amp; signupForm.email.$invalid }"><label for="email">Giới tinh <span class="text-danger">&#042</span></label>
                        <div class="radio">
                            <label><input type="radio" name="gioi_tinh" value="0">Nam</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="gioi_tinh" value="1">Nữ</label>
                        </div>
                    </div>
                    <div class="form-group" ng-class="{ 'has-error': vm.isSubmitted &amp;&amp; signupForm.password.$invalid }"><label for="password">Mật khẩu <span class="text-danger">&#042</span></label><input class="form-control" id="password" name="mat_khau" ng-maxlength="50" ng-minlength="8" ng-model="vm.newUser.password" ng-pattern="vm.pattern.password" ng-required="true"
                            maxlength="50" placeholder="Enter your password here" type="password" ui-validate="                    { isMatch : 'vm.isMatch($value, vm.newUser.confirmPassword)', }" ui-validate-watch-collection="'[vm.newUser.confirmPassword]'" />
                        
            </div>
            <div class="form-group" ng-class="{ 'has-error': vm.isSubmitted &amp;&amp; signupForm.confirmPassword.$invalid }"><label for="confirmPassword">Xác nhận mật khẩu <span class="text-danger">&#042</span></label><input class="form-control" id="xac_nhan_mat_khau" name="xac_nhan_mat_khau" ng-model="vm.newUser.confirmPassword" ng-required="true" maxlength="50" placeholder="Re-enter your password here"
                    type="password" ui-validate="                    { isMatch : 'vm.isMatch(vm.newUser.password,$value)' }" ui-validate-watch-collection="'[vm.newUser.password]'" />
                
            </div>
            <div class="col-md-4 col-md-offset-4 form-group"><button class="btn btn-primary form-control" type="submit">Sign up</button></div>
            </form>
        </div>
    </div>
  <p class="text-center">Already have an account?<a ui-sref="login"> Login</a></p>
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
