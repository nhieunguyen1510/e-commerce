<!DOCTYPE html>
<html ng-app="minxApp" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Khôi phục mật khẩu </title>

      @include('partials.css-assets')
      @include('partials.js-assets')
     
  </head>

  <body>

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Khôi phục mật khẩu</strong></div>
            <div class="panel-body">

                @if(session('thongbao'))
                    <div class="alert alert-danger" ng-hide="txtThongBao">
                        {{session('thongbao')}}
                    </div>
                @endif

                <form id="formKhoiPhucMatKhau" name="formKhoiPhucMatKhau" action="{{ URL::Route('khoiphucmatkhau.nguoiban.post') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtMatKhau">Mật khẩu mới </label>
                        <input class="form-control" type="password" id="txtMatKhau" name="txtMatKhau" minlength="6" maxlength="50" required="required" placeholder="Nhập mật khẩu mới"/>
                    </div>

                    <div class="form-group">
                        <label for="txtMatKhauNhapLai">Nhập lại mật khẩu </label>
                        <input class="form-control" type="password" id="txtMatKhauNhapLai" name="txtMatKhauNhapLai" minlength="6" maxlength="50" required="required" placeholder="Nhập lại mật khẩu"/>
                    </div>

                    <input type="hidden" name="txtEmail" value="{{ $email }}" />
                    <input type="hidden" name="txtMaKhoiPhuc" value="{{ $maKhoiPhuc }}" />

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
</html>