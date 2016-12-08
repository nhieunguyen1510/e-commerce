@extends('layouts.admin.layouts.main')

@section('title','Người mua')

@section('content')
    <!--Begin Content -->

<div class="">
              <div class="page-title">
              <div class="title_left">
                <!-- Breadcrumbs go here -->
                <h2>
                <ul class="breadcrumb">
                    <li><a href="{{ route('admin.nguoimua.getdanhsach') }}">Người bán</a></li>
                    <li class="active">Danh sách</li>
                </ul>
                </h2>
              </div>

            
            <div class="clearfix"></div>


            <div class="row">
            <form action="{{ URL::Route('admin.nguoimua.getdanhsach')}}" method="GET" name="form_search_nguoimua"> 

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
                    <h2>Người mua</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                   @if(session('thongbao'))

                  <div class="alert alert-success" fade in>
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('thongbao')}}
                  </div>
                  @endif
                    
                    <table id="datatable" class="table table-striped table-bordered" name="datatable">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Họ tên</th>
                          <th>Địa chỉ</th>
                          <th>Ngày tạo</th>
                          <th>Tình trạng</th>
                          <th><center><a href="" class="btn btn-info btn-xs"><i class="fa fa-plus-circle"></i> Thêm </a><center></th>
                          
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                      
                              $stt = 0;
                              if(isset($danhsach_nguoimua))
                              {
                                
                      ?>
                      @foreach($danhsach_nguoimua as $item)
                          <?php $stt++; ?>
                        <tr>
                          <td>{{ $stt}}</td>
                          <td>{!! $item -> ho !!} {!! $item -> ten !!}</td>
                          <td>{!! $item -> dia_chi !!}</td>
                          <td>{!! $item -> ngay_tao !!}</td>
                          <td><?php if($item -> id_tinh_trang == 12) echo 'Đã kích hoạt';
                                    else if ($item -> id_tinh_trang == 11)
                                    echo 'Chưa kích hoạt';
                                    else if ($item -> id_tinh_trang == 13)
                                    echo 'Bị khóa';
                          
                          ?></td>

                          
                          <td>
                          <center>
                           <a href="{!! route('admin.nguoimua.getchitiet', ['id'=>$item->id]) !!}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Chi tiết </a>
                            
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
                       <div class="pagination">{!! $danhsach_nguoimua->appends(Request::except('page'))->render() !!}</div>

                  </div>
                </div>
              </div>
            </div>

            <!-- Table dynamics -->
</div>



   <!-- End Content -->

@endsection