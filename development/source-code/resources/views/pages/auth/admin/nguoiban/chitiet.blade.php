@extends('layouts.admin.layouts.main')

@section('title','Chi tiết người bán')

@section('content')
    <!--Begin Content -->
        <!-- page content -->
        <div class="">
         
            <div class="page-title">
              <div class="title_left">
                <!-- Breadcrumbs go here -->
                <h2>
                <ul class="breadcrumb">
                    <li><a href="{{ route('admin.nguoiban.getdanhsach') }}">Người bán</a></li>
                    <li class="active">Xem chi tiết</li>
                </ul>
                </h2>
              </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Người bán</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  @if(count($errors) > 0 )
                  <div class="alert alert-danger" fade in>
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    @foreach($errors->all() as $err)
                        {{ $err }}<br/>
                    @endforeach
                  </div>
                  @endif
                  @if(session('thongbao'))

                  <div class="alert alert-success" fade in>
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('thongbao')}}
                  </div>
                  @endif
                  <?php 

                    if(isset($chi_tiet_nguoi_ban))
                    {

                  ?>
                  @foreach($chi_tiet_nguoi_ban as $item)
                    <form action="" method="POST" name="form_sua_nv" ng-app="myApp_sua_nv" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{asset('storage/img/'.$item->anh_dai_dien)}}" alt="Avatar" title="Change the avatar" width ="220px" height ="220px">
                        </div>
                      </div>
                      <h3>Samuel Doe</h3>
                      

                      <ul class="list-unstyled user_data">
                        <li>
                            <div class="form-group">
                                <br/>
                                <label>Tên đăng nhập</label>
                                <input type="text" class="form-control border-input" readonly value="{!! $item->ten_dang_nhap !!}">
                            </div>
                        </li>


                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                        </li>
                      </ul>

                      
                      <br />

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Thông tin chi tiết</h2>
                        </div>
                      </div>
                        
                      <div class="col-md-12">
                        <div class="card">
                            <br/>
                            <div class="content">
                               <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Họ và tên</label>
                                                <input type="text" class="form-control border-input" name ="txt_hoten"  placeholder="Họ và tên" value="{!! $item ->ho !!} {{ $item ->ten }}">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Tên cửa hàng</label>
                                                <input type="text" class="form-control border-input" name ="ten_shop" placeholder="" value="{!! $item->ten_shop !!}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="txt_email">Email</label>
                                                <input type="email" class="form-control border-input" name="txt_email" placeholder="Email" value ="{!! $item->email !!}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                
                                                <label>Giới tính</label>
                                                <br/>
                                                <input type="radio" name="gender" value="0" <?php if($item->gioi_tinh == 0) echo "checked ='checked'"; ?>> Nam
                                                <span style="padding-left: 5em;"></span>
                                                <input type="radio" name="gender" value="1" <?php if($item->gioi_tinh == 1) echo "checked ='checked'"; ?>> Nữ
                                                <span style="padding-left: 5em;"></span>
                                                 <input type="radio" name="gender" value="2" <?php if($item->gioi_tinh == 2) echo "checked ='checked'"; ?>> Khác
                                                <span style="padding-left: 6em;"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số điện thoại</label>
                                                <input type="text" class="form-control border-input" placeholder="Số điện thoại" name ="txt_sdt" value="{!! $item->so_dien_thoai !!}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Địa chỉ</label>
                                                <input type="text" class="form-control border-input" placeholder="Địa chỉ" name ="txt_diachi" value="{!! $item->dia_chi !!}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Số tài khoản</label>
                                                <input type="text" class="form-control border-input" placeholder="" name ="txt_so_tai_khoan" value="{!! $item->so_tai_khoan !!}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ngày tạo</label>
                                                 <input type="text" class="form-control border-input" name ="txt_ngaytao" value="{!! $item->ngay_tao!!}" readonly>
                                           
                                            </div>
                                            </div>
                                    
                                        <div class="col-md-4">
                                            <div class="form-group">                              
                                                <label>Ngày cập nhật</label>
                                                <input type="text" class="form-control border-input" name ="txt_ngaycapnhat" value="{!! $item->ngay_cap_nhat !!}" readonly>
                                            </div>   
                                        </div>

                                         <div class="col-md-4">
                                            <div class="form-group">                              
                                                <label>Tình trạng</label>
                                                <?php if(isset($tinh_trang))
                                                {?>
                                                @foreach($tinh_trang as $item)
                                                <input type="text" class="form-control border-input" name ="txt_ngaycapnhat" value="{{ $item->tinh_trang }}" readonly>
                                                @endforeach

                                                <?php } ?>
                                            </div>   
                                        </div>
                                        
                                        
                                    </div>

                                    
                                    <div class="text-center">
                                        <br/>
                                        <a href ="{!! route('admin.nguoiban.getdanhsach') !!}"><button type="button" class="btn btn-info btn-fill btn-wd">Quay về</button></a>
                                  
                                    </div>
                                    <div class="clearfix"></div> 
                                    
                                
                            </div>
                        </div>
                    </div>
                      

                     
                    </div>
                        </form>



                        @endforeach
                    <?php } //end if $chi_tiet_nhan_vien ?>
                  </div>
                </div>
              </div>
            </div>

           
        </div>
        <!-- /page content -->
       
       @endsection