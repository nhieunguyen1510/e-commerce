@extends('layouts.admin.layouts.main')

@section('title','Trang chủ')

@section('content')
    <!--Begin Content -->

<div class="">
              <div class="page-title">
              <div class="title_left">
                <!-- Breadcrumbs go here -->
                <h2>
                <ul class="breadcrumb">
                    <li><a href="{{ route('admin.nguoiban.getdanhsach') }}">Người bán</a></li>
                    <li class="active">Danh sách</li>
                </ul>
                </h2>
              </div>

            
            <div class="clearfix"></div>


            <div class="row">
            <form action="{{ URL::Route('admin.nguoiban.getdanhsach')}}" method="GET" name="form_search_nguoiban"> 

              <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                         <select class="form-control" name="status" id="status">
                            <option value="">Tình trạng</option>
                            @foreach($status as $item)
                            <option value="{{ $item->id }}"<?php if(isset($_GET['status']) && $_GET['status'] == $item->id) {echo 'selected'; }?>>{{ $item->tinh_trang }}</option>
                            @endforeach
                            </select>
                </div>
              </div>

              <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tìm ... " name="key" id="key" 
                    value ="<?php if(isset($_GET['key'])) {echo $_GET['key']; }?>">
                  </div>
              </div>


              <div class="col-md-1 col-sm-1 col-xs-12">
                <div class="form-group">
                     
                      <button class="btn btn-default" type="submit">Lọc</button>
                  
                </div>
              </div>


            </form>
            </div>

            <div class="clearfix"></div>

            <!-- Table dynamics -->
             <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Người bán</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                   @if(session('thongbao_kichhoat'))

                  <div class="alert alert-success" fade in>
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('thongbao_kichhoat')}}
                  </div>
                  @endif
                    
                    <table id="datatable" class="table table-striped table-bordered" name="datatable">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Mã người bán</th>
                          <th>Tên shop</th>
                          <th>Địa chỉ</th>
                          <th>Ngày tạo</th>
                          <th>Tình trạng</th>
                            <th><center><a href="" class="btn btn-info btn-xs"><i class="fa fa-plus-circle"></i> Thêm </a></center></th>
                          
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                      
                              $stt = 0;
                              if(isset($danhsach_nguoiban))
                              {
                                
                      ?>
                      @foreach($danhsach_nguoiban as $item)
                          <?php $stt++; ?>
                        <tr>
                          <td>{{ $stt }}</td>
                          <td>{{ $item ->id }}</td>
                          <td>{!! $item -> ten_shop !!}</td>
                          <td>{{ $item -> dia_chi }}</td>
                          <td>{!! $item -> ngay_tao !!}</td>
                          <td><?php if($item -> id_tinh_trang == 9) echo 'Đã kích hoạt';
                                    else if ($item -> id_tinh_trang == 8)
                                    echo 'Chưa kích hoạt';
                                    else if ($item -> id_tinh_trang == 10)
                                    echo 'Bị khóa';
                          
                          ?></td>

                          
                          <td>
                          <center>

                          <?php if($item -> id_tinh_trang == 9)
                          {?>
                              <a href="{!! route('admin.nguoiban.getchitiet', ['id'=>$item->id]) !!}" class="btn btn-danger btn-xs"><i class="fa fa-lock" style="padding-left:10px;padding-right:8px"></i>  Khóa </a>

                          <?php } 
                                    else if ($item -> id_tinh_trang == 8)
                                    {?>
                                       <a href="{!! route('admin.nguoiban.getkichhoat', ['id'=>$item->id]) !!}" class="btn btn-success btn-xs"><i class="fa fa-hand-o-up"></i> Kích hoạt</a>

                                    <?php }
                                    else if ($item -> id_tinh_trang == 10)
                                    {?>

                                      <a href="{!! route('admin.nguoiban.getkichhoat', ['id'=>$item->id]) !!}" class="btn btn-success btn-xs"><i class="fa fa-hand-o-up"></i> Kích hoạt</a>

                                   <?php }
                                    ?>
                           <a href="{!! route('admin.nguoiban.getchitiet', ['id'=>$item->id]) !!}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Chi tiết </a>
                            
                          </center>
                          </td>
                          
                        </tr>
                        
                        @endforeach
                        <?php } ?>
                         
                        
                        </tbody>
                  

                        
                    </table>
                      
                     <!-- <div class="pagination_div">
                       <ul class="pagination pagination-sm">
                            <li><a href="#"><<</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">>></a></li>
                          </ul>-->
                          
                          
                      
                      <!--</div> -->
                       <div class="pagination">{!! $danhsach_nguoiban->appends(Request::except('page'))->render() !!}</div>

                  </div>
                </div>
              </div>
            </div>

            <!-- Table dynamics -->
</div>



   <!-- End Content -->

@endsection