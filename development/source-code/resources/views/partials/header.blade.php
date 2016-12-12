<header id="header">
    <!--header-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">

                <div class="col-sm-6" style="width: 58%">
                    
                    <form method="POST" action="{{ URL::Route('timkiem') }}"> {{ csrf_field() }}
                        <div class="search_box pull-right">
                            <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm, thương hiệu ..." />
                            <button type="submit" class="btn btn-danger">Tìm</button>
                        </div>
                    </form>
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{ URL::Route('trangchu.index') }}"><img src="{{ URL::asset('assets/img/logo.png') }}" alt="" width="200px" height="70px" /></a>

                        </div>

                    </div>
                </div>
                <div class="col-sm-5" style="float:right">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                        @if (!Auth::guard('web')->check())
                            <li><a href="{{ URL::Route('thanhtoan.index') }}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                            <li><a href="{{ URL::Route('giohang') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                        @else
                             <li><a href="{{ URL::Route('thongtin.index') }}"><i class="fa fa-user"></i> Thông tin tài khoản</a></li>
                            <li><a href="{{ URL::Route('thanhtoan.index') }}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                            <li><a href="{{ URL::Route('giohang') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li @php if(!isset($dsSanPham)) echo 'class="active"'; @endphp><a href="{{ URL::Route('trangchu.index') }}">Trang chủ</a></li>
                            @foreach ($dsDanhMucSanPhamCha as $danhMucSanPhamCha)

                            <li class="dropdown" @php if(isset($danhMucIns) && ($danhMucIns->id_danh_muc_san_pham_cha==$danhMucSanPhamCha->id)) echo 'id="active"'; @endphp >
                                <a href="{{  URL::route('danhmuc.show', $danhMucSanPhamCha->id) }}">{{ $danhMucSanPhamCha->ten."  " }}<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">

                                    @foreach ($danhMucSanPhamCha->dsDanhMucSanPhamCon as $danhMucSanPhamCon)
                                    <li>
                                        <a href="{{  URL::route('danhmuc.show', $danhMucSanPhamCon->id) }}">{{ $danhMucSanPhamCon->ten }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
<!--/header-->