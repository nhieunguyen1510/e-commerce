
@extends('layouts.admin.layouts.main')

@section('title','Lợi nhuận')

@section('content')
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

            <form action="{{ URL::Route('admin.hoadontaikhoan.getthongke')}}" method="GET" name="form_ad_search_nv">

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


              <div class="col-md-1 col-sm-1 col-xs-12">
                <div class="form-group">
                     
                      <button class="btn btn-default" type="submit">Lọc</button>
                  
                </div>
              </div>


              </form>


             
<div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Doanh thu </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                    <div style ="padding-top: 20px;"></div>
                    <table id="datatable" class="table table-striped table-bordered" name="datatable">
                      <thead>
                        <tr>
                          <th><center>STT</center></th>
                          <th><center>Tháng</center></th>
                          <th><center>Doanh thu</center></th>  
                        </tr>
                      </thead>


                      <tbody>
                      <?php $stt = 0; ?>
                      @foreach($baocao_doanhthu_thang as $key=>$value)
                      <tr>
                          <td><center><?php $stt = $stt + 1;  echo $stt; ?></center></td>
                          <td><center>{{ $key + 1 }}</center></td>
                          <td><center>{{ $value." VND" }} </center></td>
                      </tr>
                      @endforeach

                      </tbody>

                      </table>
                  


                  </div>
                </div>
              </div>
             
</div>


<script type="text/javascript">
            function getArray()
            {
              var obj = <?php echo json_encode($baocao_doanhthu_thang); ?>;
              console.log(obj);
              return obj;
            }
</script>
@endsection
