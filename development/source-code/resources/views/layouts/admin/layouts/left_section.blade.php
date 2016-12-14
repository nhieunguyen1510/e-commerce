 
 <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>MINX </span></a>
</div>

<div class="clearfix"></div>


    <!-- menu profile quick info -->

        <div class="profile">
            <div class="profile_pic">
                    <img src="{{ asset('storage/img/'.Auth::guard('admin')->user()->anh_dai_dien) }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                    <span>Xin chào,</span>
                    <h2>{{ Auth::guard('admin')->user()->ten_dang_nhap }}</h2>
            </div>
        </div>
    <!-- /menu profile quick info -->

                <br />



<!-- sidebar menu -->


 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Trang quản trị</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Người dùng<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('admin.nguoiban.getdanhsach') }}">Người bán</a></li>
                      <li><a href="{{ route('admin.nguoimua.getdanhsach') }}">Người mua</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Hóa đơn <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('admin.hoadonban.getdanhsach') }}">Đơn hàng của người bán</a></li>
                      <li><a href="{{ route('admin.hoadonmua.getdanhsach') }}">Hóa đơn mua hàng </a></li>
                      <li><a href="{{ route('admin.hoadontaikhoan.getdanhsach') }}">Hóa đơn tài khoản</a></li>
                      
                    </ul>
                  </li>
                 
                  <li><a href="#"><i class="fa fa-table"></i>Thống kê<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="{{ route('admin.hoadontaikhoan.getthongke') }}">Lợi nhuận</a></li>
                    </ul>
                  </li>

                 
                 
                </ul>
              </div>
              

            </div>


<!-- /sidebar menu -->