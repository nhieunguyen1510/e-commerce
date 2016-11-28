<div class="header">
    <div class="header-block logo-block">
        <img src="{{ URL::asset('assets/img/logo.png') }}" alt="Minx">
    </div>

    <div class="header-block right-header-block">
        <!--Begin_input-group -->
        <div class=" search-lite">
            <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle choose-category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Thời trang nữ <span class="caret"></span></button>
                    <div class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span>
            </div>
        </div>
        <!--End_input-group -->

        <!--Begin_four-button -->
        <div class=" right-button-group">
            <div class="item">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ Hàng <span class="num cart_qty">0</span></button>
            </div>

            <div class="item">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell" aria-hidden="true"></i> Lịch sử mua hàng <span class="num cart_qty">0</span></button>
                <div class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </div>
            </div>

            <!-- <div class="item">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-heart" aria-hidden="true"></i> Yêu Thích <span class="num cart_qty">0</span></button>    
            </div> -->

            <div class="item">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Thanh toán khi nhận hàng</button>
            </div>
        </div>
        <!--End_four-button -->
    </div>

</div>

<!--Begin_navbar_category_banner-->
<div class="banner">

<nav class="navbar">
  <div class="row">
    <div class="col-xs-12 col-md-12">
   
    <ul class="nav navbar-nav">
      
      <?php
                $dsdanhMucSanPhamCha = DB::table('danh_muc_san_pham')->where('id_danh_muc_san_pham_cha', 0)->get();
           ?>
           <li <?php if(!isset($dsSanPham)) echo 'class="active"'; ?>><a href="#">TRANG CHỦ</a></li>
           @foreach ($dsdanhMucSanPhamCha  as $danhMucSanPhamCha) 
      <li class="dropdown" <?php if(isset($danhMucIns) && ($danhMucIns->id_danh_muc_san_pham_cha==$danhMucSanPhamCha->id)) echo 'id="active"'; ?>><a class="dropdown-toggle" data-toggle="dropdown" href="{{  URL::route('danhmuc.show', $danhMucSanPhamCha->slug) }}">{{ $danhMucSanPhamCha->ten."  " }} <span class="caret"></span></a>
        <ul class="dropdown-menu">

       
        <?php  
              
                 $dsdanhMucSanPhamCon = DB::table('danh_muc_san_pham')->where('id_danh_muc_san_pham_cha', $danhMucSanPhamCha->id)->get();
               ?>

               @foreach ($dsdanhMucSanPhamCon  as $danhMucSanPhamCon) 
              
               <?php $slug_process = $danhMucSanPhamCon->slug."-".$danhMucSanPhamCon->id; ?>
          <li><a href="{{  URL::route('danhmuc.show', $slug_process) }}">{{ $danhMucSanPhamCon->ten }}</a></li>
          
          @endforeach
        </ul>
      </li>
      @endforeach
      
    </ul>
    
    </div>
  </div>
</nav>

    <!--Begin_navbar_category-->
   

    <!-- <nav class="main-nav">
        <ul>
        @if(isset($danhmuc))
            @foreach ($danhmuc  as $danhMucSanPham) 
                <li class="nav-item">
                    <a href="#">
                        <div>
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            <span>{{ $danhMucSanPham->ten }}</span>
                        </div>
                        <i class="fa fa-angle-right icon-arrow" aria-hidden="true"></i>
                    </a>
                </li>
            @endforeach
        @endif
        </ul>
    </nav>-->
    <!--End_navbar_category-->

    <!--Begin_Carousel-->
  
    <!--End_Carousel-->
</div>
<!--End_navbar_category_banner-->

