@extends('layouts.admin.layouts.main')

@section('title','Chi tiết hóa đơn mua')

@section('content')
    <!--Begin Content -->

    <div class="row tile_count">
              <div class="page-title">
              <div class="title_left">
                <!-- Breadcrumbs go here -->
                <h2>
                <ul class="breadcrumb">
                    <li><a href="{!! route('admin.hoadonmua.getdanhsach') !!}">Hóa đơn mua hàng</a></li>
                    <li class="active">Xem chi tiết</li>
                </ul>
                </h2>
              </div>
              
            </div>
            
            <div class="clearfix"></div>

        

            <!-- Table dynamics -->


            
             <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">A
                <div class="x_panel">
                 
                  <div class="x_content">
                     @if(session('thongbao'))

                  <div class="alert alert-success" fade in>
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('thongbao')}}
                  </div>
                  @endif

                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">

                      @foreach($thong_tin_nguoi_ban as $item)
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mã người bán <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" readonly value =" {!! $item -> tai_khoan_nguoi_ban_id !!}">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên shop<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" readonly value =" {{ $item -> ten_shop }}">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" readonly value =" {!! $item -> email !!}">
                        </div>
                      </div>
                    @endforeach
                    </form>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <table id="datatable" class="table table-striped table-bordered" name="datatable">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Tên sản phẩm</th>
                          <th>Gía </th>
                          <th>Số lượng </th>
                          <th>Tổng tiền</th>
                         
                        </tr>
                      </thead>
                      <?php if(isset($chi_tiet_hoadon_mua)){?>
                      <?php $stt = 0; ?>
                          @foreach($chi_tiet_hoadon_mua as $item)
                          <?php
                         
                           $stt++; ?>

                      <tbody>
                        <tr>
                          <td>{!! $stt !!}</td>
                           <td>{!!  $item->ten !!}</td>
                           <td>{!!  (float)$item->don_gia_san_pham !!}</td>
                           <td>{!!  $item->so_luong !!}</td>
                           <td>{!!  (float)$item->tong_tien !!}</td>
                          
                        </tr>
                        
                    
                       @endforeach 
                       </tbody>
                       <?php } ?>
                    </table>
                    </div>
                    </div>
                       
                     

                  </div>
                </div>
              </div>
            </div>
            
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href ="{!! route('admin.hoadonmua.getdanhsach') !!}"><button type="button" class="btn btn-primary">Trở về</button></a>
                       
                        </div>
                    

            <!-- Table dynamics -->
</div>



    <!-- End Content -->

@endsection