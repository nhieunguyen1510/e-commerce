    <header id="header"><!--header-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">

                <div class="col-sm-6" style="width: 58%">
                    <form method="POST" action="{{ URL::Route('timkiem') }}">
                    {{ csrf_field() }}
                        <div class="search_box pull-right">
                            <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm, thương hiệu ..."/>
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
                                <li><a href="#"><i class="fa fa-user"></i> Thông tin tài khoản</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <li><a href="{{ URL::Route('giohang') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
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
                            <?php
                $dsdanhMucSanPhamCha = DB::table('danh_muc_san_pham')->where('id_danh_muc_san_pham_cha', 0)->get();
           ?>
                                <li <?php if(!isset($dsSanPham)) echo 'class="active"'; ?>><a href="{{ URL::Route('trangchu.index') }}" >Trang chủ</a></li>
                                @foreach ($dsdanhMucSanPhamCha  as $danhMucSanPhamCha) 

                                <li class="dropdown" <?php if(isset($danhMucIns) && ($danhMucIns->id_danh_muc_san_pham_cha==$danhMucSanPhamCha->id)) echo 'id="active"'; ?>><a href="{{  URL::route('danhmuc.show', $danhMucSanPhamCha->slug) }}">{{ $danhMucSanPhamCha->ten."  " }}<i class="fa fa-angle-down"></i></a>
                                


                                    <ul role="menu" class="sub-menu">

                                         <?php  
              
                 $dsdanhMucSanPhamCon = DB::table('danh_muc_san_pham')->where('id_danh_muc_san_pham_cha', $danhMucSanPhamCha->id)->get();
               ?>

               @foreach ($dsdanhMucSanPhamCon  as $danhMucSanPhamCon) 
              
               <?php $slug_process = $danhMucSanPhamCon->slug."-".$danhMucSanPhamCon->id; ?>
<?php $slug_process = $danhMucSanPhamCon->slug."-".$danhMucSanPhamCon->id; ?>   
                                        <li><a href="{{  URL::route('danhmuc.show', $slug_process) }}">{{ $danhMucSanPhamCon->ten }}</a></li>
                                         @endforeach
                                    </ul>
                                </li> 
 @endforeach
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

