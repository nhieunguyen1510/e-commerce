<!DOCTYPE html>
<html ng-app="minxApp" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Xác nhận mã khôi phục </title>

      @include('partials.css-assets')
      @include('partials.js-assets')
     
  </head>

  <body>

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Xác nhận mã khôi phục</strong></div>
            <div class="panel-body">

                @if(session('thongbao'))
                    <div class="alert alert-danger" ng-hide="txtThongBao">
                        {{session('thongbao')}}
                    </div>
                @endif

                <form id="formXacNhanMaKhoiPhuc" name="formXacNhanMaKhoiPhuc" action="{{ URL::Route('xacnhanmakhoiphuc.nguoiban.post') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtEmail">Email </label>
                        <input class="form-control" type="email" id="txtEmail" name="txtEmail" maxlength="50" required="required" placeholder="Nhập email"/>
                    </div>

                    <div class="form-group">
                        <label for="txtMaKhoiPhuc">Mã khôi phục </label>
                        <input class="form-control" type="text" id="txtMaKhoiPhuc" name="txtMaKhoiPhuc" maxlength="50" required="required" placeholder="Nhập mã khôi phục"/>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 form-group">
                            <button class="btn btn-primary form-control" type="submit">Xác nhận</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </body>
</head>