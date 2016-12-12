<!--Begin_navbar_top-->
<nav class="navbar navbar-default navbar-light" role="navigation">
    <div class="container">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::Route('dangnhap.nguoiban.index') }}">Kênh Người Bán</a></li>
            <li><a href="#">Trợ Giúp</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
        @if (!Auth::guard('web')->check())
            <li><a href="{{ URL::Route('dangky.index') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng Ký</a></li>
            <li><a href="{{ URL::Route('dangnhap.index') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng Nhập</a></li>
        @else
            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::guard('web')->user()->ten_dang_nhap }} <span class="caret"></span>
                </a>
                
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                
                <li><a href="{{ URL::Route('thongtin.index') }}">Thông tin cá nhân </a></li>
                <li><a href="{{ URL::Route('dangxuat.get') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                
                </ul>

            </li>
        @endif
        </ul>
    </div>
</nav>
<!--End_navbar_top-->
