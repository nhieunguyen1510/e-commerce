@extends('layouts.admin.layouts.main')

@section('title','Hóa đơn mua')

@section('content')
    <!--Begin Content -->

<div class="">
              <div class="page-title">
              <div class="title_left">
                <!-- Breadcrumbs go here -->
                <h2>
                <ul class="breadcrumb">
                    <li><a href="{{ route('admin.hoadonmua.getdanhsach') }}">Hóa đơn mua hàng</a></li>
                    <li class="active">Danh sách</li>
                </ul>
                </h2>
              </div>

            
            <div class="clearfix"></div>


            <div class="row">

             @if(isset($thongbao_loi) and $thongbao_loi!="")
               <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="alert alert-danger" fade in>
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   {{ $thongbao_loi }}
                  </div>
                  </div>
                </div>
                  @endif

            <form action="{{ URL::Route('admin.hoadonmua.getdanhsach')}}" method="GET" name="form_search_hdnguoiban"> 

              <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">

                         <select class="form-control" name="s_year" id="s_year" >
                            <option value="">Trong năm</option>
                               @foreach($sort_year as $value)
                            <option value="{{ $value->sort_year }}" <?php if (isset($_GET['s_year']) && $_GET['s_year'] == $value->sort_year) echo 'selected'; ?>>{{ $value->sort_year }}</option>
                              @endforeach
                        
                            </select>
                           
                </div>
              </div>

              <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">

                         <select class="form-control" name="s_month" id="s_month" >
                            <option value="">Trong tháng</option>
                               @for($i = 1; $i <= 12; $i++)
                             
                                  <option value="{{ $i }}" <?php if (isset($_GET['s_month']) && $_GET['s_month'] == $i) echo 'selected'; ?>>{{ $i }}</option>
                            
                              @endfor
                        
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
                          <th>Mã hóa đơn</th>
                          <th>Người mua</th>
                          <th>Ngày đặt hàng</th>
                          
                          <th><center> Chức năng</center></th>
                          
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                      
                              $stt = 0;
                              if(isset($danhsach_hoadon_mua))
                              {
                                
                      ?>
                      @foreach($danhsach_hoadon_mua as $item)
                          <?php $stt++; ?>
                        <tr>
                          <td>{{ $stt }}</td>
                          <td>{{ $item->id }}</td>
                          <td>{!! $item -> ho !!} {!! $item -> ten !!}</td>
                          <td>{{ $item -> thoi_gian_giao_dich}}</td>
                          

                          
                          <td>
                          <center>
                           <a href="{!! route('admin.hoadonmua.getchitiet', ['id'=>$item->id]) !!}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Chi tiết </a>
                            
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
                       <div class="pagination">{!! $danhsach_hoadon_mua->appends(Request::except('page'))->render() !!}</div>

                  </div>
                </div>
              </div>
            </div>

            <!-- Table dynamics -->
</div>



   <!-- End Content -->

@endsection