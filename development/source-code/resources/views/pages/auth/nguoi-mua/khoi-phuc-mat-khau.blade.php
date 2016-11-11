@extends('layouts.main')

@section('title','Khôi phục mật khẩu')
@section('content')

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Khôi phục mật khẩu</strong></div>
            <div class="panel-body">

                @if(session('thongbao'))
                    <div class="alert alert-danger" ng-hide="txtThongBao">
                        {{session('thongbao')}}
                    </div>
                @endif

                <form id="formKhoiPhucMatKhau" name="formKhoiPhucMatKhau" action="{{ URL::Route('khoiphucmatkhau.post') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtMatKhau">Mật khẩu mới </label>
                        <input class="form-control" type="password" id="txtMatKhau" name="txtMatKhau" minlength="6" maxlength="50" required="required" placeholder="Nhập mật khẩu mới"/>
                    </div>

                    <div class="form-group">
                        <label for="txtMatKhauNhapLai">Nhập lại mật khẩu </label>
                        <input class="form-control" type="password" id="txtMatKhauNhapLai" name="txtMatKhauNhapLai" minlength="6" maxlength="50" required="required" placeholder="Nhập lại mật khẩu"/>
                    </div>

                    <input type="hidden" name="email" value="{{ $email }}" />
                    <input type="hidden" name="maKhoiPhuc" value="{{ $maKhoiPhuc }}" />

                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 form-group">
                            <button class="btn btn-primary form-control" type="submit">Xác nhận</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection