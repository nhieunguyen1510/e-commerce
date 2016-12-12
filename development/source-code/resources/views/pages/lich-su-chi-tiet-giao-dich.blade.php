@extends('layouts.main')

@section('title','Thông tin tài khoản')

@section('content')

       
        <div class="chi-tiet">
        <h2>Chi tiết giao dịch</h2>

        <table class="table table-striped">
            <thead>
      <tr>
        <th>STT</th>
        <th>Mã chi tiết</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Tổng tiền</th>
      </tr>
    </thead>
    <tbody>
      @foreach($donHang->dsChiTietDonHang as $key=>$chiTietDonHang)
      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $chiTietDonHang->id }}</td>
        <td>{{ $chiTietDonHang->san_pham->ten }}</td>
        <td>{{ $chiTietDonHang->so_luong }}</td>
        <td>{{ $chiTietDonHang->don_gia_san_pham }}</td>
        <td>{{ $chiTietDonHang->tong_tien }}</td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <td colspan="5" class="text-right">Tổng tiền</td>
        <td>{{ $donHang->tong_tien }}</td>
      </tr>
      </tfoot>
</table>
    </div>
</div>
</div>
@endsection