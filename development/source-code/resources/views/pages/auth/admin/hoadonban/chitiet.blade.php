
@extends('layouts.admin.layouts.main')

@section('title','Chi tiết đơn hàng bán')

@section('content')
    <!--Begin Content -->

    <div class="row tile_count">
              <div class="page-title">
              <div class="title_left">
                <!-- Breadcrumbs go here -->
                <h2>
                <ul class="breadcrumb">
                    <li><a href="{{ route('admin.hoadonban.getdanhsach') }}">Hóa đơn bán hàng</a></li>
                    <li class="active">Xem chi tiết</li>
                </ul>
                </h2>
              </div>
              
            </div>
            
            <div class="clearfix"></div>

        

            <!-- Table dynamics -->


            
             <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                     <h3>Thông tin hóa đơn mua hàng</h3>
                    <div class="row">

                    <div class="col-md-2">
                     
                         <div class="form-group">
                               <label>Mã hóa đơn mua hàng</label>
                                   <input type="text" class="form-control border-input" name ="txt_hoten"  placeholder="Mã người mua" readonly value="{{ $giaoDich->id}}">
                                                
                           </div>
                      </div>

                     <div class="col-md-2">
                     
                         <div class="form-group">
                               <label>Mã khách hàng</label>
                                   <input type="text" class="form-control border-input" name ="txt_hoten"  placeholder="Mã người mua" readonly value="{{ $giaoDich->id_tai_khoan }}">
                                                
                           </div>
                      </div>

                      <div class="col-md-4">
                         <div class="form-group">
                               <label>Họ và tên</label>
                                   <input type="text" class="form-control border-input" name ="txt_hoten" readonly value="{{ $giaoDich->tai_khoan_nguoi_mua->ho.' '.$giaoDich->tai_khoan_nguoi_mua->ten }}">
                                                
                           </div>
                      </div>

                      <div class="col-md-4">
                         <div class="form-group">
                               <label>Số điện thoại</label>
                                   <input type="text" class="form-control border-input" name ="txt_hoten"  placeholder="Số điện thoại" readonly value="{{ $giaoDich->tai_khoan_nguoi_mua->so_dien_thoai }}">
                                                
                           </div>
                      </div>

                      
                  </div>

                
                  <div class="row">
                     

                     <div class="col-md-4">
                         <div class="form-group">
                               <label>Tổng tiền</label>
                                   <input type="text" class="form-control border-input" name ="txt_hoten" readonly value="{{ $giaoDich->tong_tien }}">
                                                
                           </div>
                      </div>
                      <div class="col-md-4">
                         <div class="form-group">
                               <label>Ngày đặt hàng</label>
                                   <input type="text" class="form-control border-input" name ="txt_hoten"  placeholder="Ngày đặt hàng" readonly value="{{ $giaoDich->thoi_gian_giao_dich}}">
                                                
                           </div>
                      </div>

                      <div class="col-md-4">
                         <div class="form-group">
                               <label>Ngày giao</label>
                                   <input type="text" class="form-control border-input" name ="txt_hoten"  placeholder="Ngày giao" readonly value="{{ $giaoDich->ngay_giao_hang }}">
                                                
                           </div>
                      </div>

                      
                  </div>


                  <div class="row">
                     <div class="col-md-4">
                         <div class="form-group">
                               <label>Tên người nhận</label>
                                   <input type="text" class="form-control border-input" name ="txt_hoten"  placeholder="Tên người nhận" readonly value="{{ $giaoDich->ten_nguoi_nhan}}">
                                                
                           </div>
                      </div>

                      <div class="col-md-4">
                         <div class="form-group">
                               <label>Địa chỉ nhận</label>
                                   <input type="text" class="form-control border-input" name ="txt_hoten"  placeholder="Địa chỉ nhận" readonly value="{{ $giaoDich->dia_chi_giao_hang }}">
                                                
                           </div>
                      </div>

                      <div class="col-md-4">
                         <div class="form-group">
                               <label>Số điện thoại nhận</label>
                                   <input type="text" class="form-control border-input" name ="txt_hoten" readonly value="{{ $giaoDich->so_dien_thoai_giao_hang }}">
                                                
                           </div>
                      </div>
                  </div>


                  
                    
               </div>
                  </div><!--- panel -->
                
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                    <div class="x_content">
                    <h3>Thông tin đơn hàng người bán</h3>
                        <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <h4>{{ "Tên shop:" .$giao_dich_nguoi_ban->tai_khoan_nguoi_ban->ten_shop}} </h4>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <h4>{{ "Email: ".$giao_dich_nguoi_ban->tai_khoan_nguoi_ban->email}} </h4>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <h4>{{ "Số điện thoại:".$giao_dich_nguoi_ban->tai_khoan_nguoi_ban->so_dien_thoai}} </h4>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <h4>{{ "Tình trạng: ".$giao_dich_nguoi_ban->tinh_trang->tinh_trang}} </h4>
                                </div>
                        </div>
                    
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
                      
                      <tbody>
                        
                        @foreach($giao_dich_nguoi_ban->dsChiTietDonHang as $j=>$chiTietDonHang)
                        <tr>
                          <td>{{ $j+1 }}</td>
                          <td>{{  $chiTietDonHang->san_pham->ten }}</td>
                          <td>{{  $chiTietDonHang->don_gia_san_pham }}</td>
                          <td>{{  $chiTietDonHang->so_luong }}</td>
                          <td>{{  $chiTietDonHang->tong_tien }}</td>
                        </tr>
                        @endforeach 
                       </tbody>
                      
                    </table>
                    <h4 style="padding-left:70%;">{{ "Tổng tiền:" .$giao_dich_nguoi_ban->tong_tien}} </h4>
             
                    </div>
                    </div>

                    </div>
                </div>
              </div>
            </div>
            
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href ="{{ route('admin.hoadonban.getdanhsach') }}"><button type="button" class="btn btn-primary">Trở về</button></a>
                          <br/>
                       
                        </div>
                    

            <!-- Table dynamics -->
</div>



    <!-- End Content -->

@endsection