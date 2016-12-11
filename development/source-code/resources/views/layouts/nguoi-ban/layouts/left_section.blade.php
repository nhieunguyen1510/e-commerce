<div class="navbar nav_title" style="border: 0;">
    <a href="{{URL::Route('trangchu.index')}}" class="site_title"><i class="fa fa-paw"></i> <span>MINX</span></a>
</div>

<div class="clearfix"></div>


<!-- menu profile quick info -->

<div class="profile">
    <div class="profile_pic">
        <img src="{{Storage::url(Auth::guard('nguoi_ban')->user()->anh_dai_dien)}}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Xin chào,</span>
        <h2>{{Auth::guard('nguoi_ban')->user()->ten}}</h2>
    </div>
</div>

<!-- /menu profile quick info -->

<br />



<!-- sidebar menu -->


<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>TRANG QUẢN LÝ</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Sản phẩm <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{URL::Route('nguoiban-sanpham.create')}}">Thêm sản phẩm</a></li>
                    <li><a href="{{URL::Route('nguoiban-sanpham.index')}}">Danh sách sản phẩm</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Thông tin <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{URL::Route('nguoiban-chungtu.index')}}">Chứng từ nạp tiền </a></li>
                    <li><a href="{{URL::Route('nguoiban-thongtin.index')}}">Thông tin cá nhân </a></li>

                </ul>
            </li>

            <li><a href="{{URL::Route('nguoiban-donhang.index', ['tinh_trang' => 15])}}"><i class="fa fa-table"></i> Đơn hàng</a>
            </li>

        </ul>
    </div>

</div>


<!-- /sidebar menu -->