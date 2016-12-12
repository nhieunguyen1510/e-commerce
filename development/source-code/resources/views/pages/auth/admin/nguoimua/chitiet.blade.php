@extends('layouts.admin.layouts.main')

@section('title','Chi tiết người mua')

@section('content')
    <!--Begin Content -->
        <!-- page content -->
        <div class="">
         
            <div class="page-title">
              <div class="title_left">
                <!-- Breadcrumbs go here -->
                <h2>
                <ul class="breadcrumb">
                    <li><a href="{{ route('admin.nguoimua.getdanhsach') }}">Người mua</a></li>
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

                    if(isset($chi_tiet_nguoi_mua))
                    {

                  ?>
            
                    <form action="" method="POST" name="form_sua_nv" ng-app="myApp_sua_nv" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{$anhDaiDienURL}}" alt="Avatar" title="Change the avatar" width ="220px" height ="220px">
                        </div>
                      </div>
                      <h3>Samuel Doe</h3>
                      

                      <ul class="list-unstyled user_data">
                        <li>
                            <div class="form-group">
                                <br/>
                                <label>Tên đăng nhập</label>
                                <input type="text" class="form-control border-input" readonly value="{!! $chi_tiet_nguoi_mua->ten_dang_nhap !!}">
                            </div>
                        </li>


                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          Mã tài khoản :{{ $chi_tiet_nguoi_mua->id }}
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Họ và tên</label>
                                                <input type="text" class="form-control border-input" name ="txt_hoten"  placeholder="Họ và tên" value="{!! $chi_tiet_nguoi_mua ->ho !!} {{ $chi_tiet_nguoi_mua ->ten }}">
                                                
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="txt_email">Email</label>
                                                <input type="email" class="form-control border-input" name="txt_email" placeholder="Email" value ="{!! $chi_tiet_nguoi_mua->email !!}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                
                                                <label>Giới tính</label>
                                                <br/>
                                                <input type="radio" name="gender" value="0" <?php if($chi_tiet_nguoi_mua->gioi_tinh == 0) echo "checked ='checked'"; ?>> Nam
                                                <span style="padding-left: 5em;"></span>
                                                <input type="radio" name="gender" value="1" <?php if($chi_tiet_nguoi_mua->gioi_tinh == 1) echo "checked ='checked'"; ?>> Nữ
                                                <span style="padding-left: 5em;"></span>
                                                 <input type="radio" name="gender" value="2" <?php if($chi_tiet_nguoi_mua->gioi_tinh == 2) echo "checked ='checked'"; ?>> Khác
                                                <span style="padding-left: 6em;"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số điện thoại</label>
                                                <input type="text" class="form-control border-input" placeholder="Số điện thoại" name ="txt_sdt" value="{!! $chi_tiet_nguoi_mua->so_dien_thoai !!}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Địa chỉ</label>
                                                <input type="text" class="form-control border-input" placeholder="Địa chỉ" name ="txt_diachi" value="{!! $chi_tiet_nguoi_mua->dia_chi !!}">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ngày tạo</label>
                                                 <input type="text" class="form-control border-input" name ="txt_ngaytao" value="{!! $chi_tiet_nguoi_mua->ngay_tao!!}" readonly>
                                           
                                            </div>
                                            </div>
                                    
                                        <div class="col-md-4">
                                            <div class="form-group">                              
                                                <label>Ngày cập nhật</label>
                                                <input type="text" class="form-control border-input" name ="txt_ngaycapnhat" value="{!! $chi_tiet_nguoi_mua->ngay_cap_nhat !!}" readonly>
                                            </div>   
                                        </div>

                                    
                                        
                                        
                                    </div>

                                    
                                    <div class="text-center">
                                        <br/>
                                        <a href ="{!! route('admin.nguoimua.getdanhsach') !!}"><button type="button" class="btn btn-info btn-fill btn-wd">Quay về</button></a>
                                  
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                      

                     
                    </div>



                     
                    <?php } //end if $chi_tiet_nhan_vien ?>
                  </div>
                </div>
              </div>
            </div>

            
          
        </div>
        <!-- /page content -->
       
       @endsection