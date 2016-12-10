
@extends('layouts.admin.layouts.main')

@section('title','Lợi nhuận')

@section('content')
<div class="row">
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
                          <th><center>Ngày</center></th>
                          <th><center>Doanh thu</center></th>  
                        </tr>
                      </thead>

                      </table>
                  


                  </div>
                </div>
              </div>
</div>
@endsection
