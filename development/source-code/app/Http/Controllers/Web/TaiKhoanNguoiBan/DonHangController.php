<?php

namespace App\Http\Controllers\Web\TaiKhoanNguoiBan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\GiaoDich;
use App\TaiKhoanNguoiMua;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Khai báo các giá trị query string truyền vô ban đầu là null
        $idTinhTrang = null;
        $tenNguoiMua = null;
        $tongTienToiThieu = null;
        $tongTienToiDa = null;

        $query = GiaoDich::orderBy('ngay_tao', 'desc');
        //Kiểm tra nếu có lọc theo tình trạng thì sẽ gộp thêm 1 câu query: idTinhTrang nhập vô có trong table sanpham ko?
        if($request->has('tinh_trang'))
        {
            $idTinhTrang = $request->tinh_trang;
            $query->where('id_tinh_trang', '=', $idTinhTrang);
        }
        //Kiểm tra tìm kiếm theo tên người mua
        if($request->has('ten_nguoi_mua'))
        {
            $tenNguoiMua = $request->ten_nguoi_mua;
            // Lấy danh sách người mua theo tên và tạo ra 1 mảng chỉ có id người mua
            $dsTaiKhoanNguoiMuaTheoTen = TaiKhoanNguoiMua::where('ten', 'like', '%'.$tenNguoiMua.'%')
                                                        ->get();
            $dsIdTaiKhoanNguoiMua = $dsTaiKhoanNguoiMuaTheoTen->keyBy('id')
                                            ->keys();           
            // Tìm những giao dịch có id tài khoản nằm trong mảng id vừa tạo                          
            $query->whereIn('id_tai_khoan', $dsIdTaiKhoanNguoiMua);
        }
        //Kiểm tra nếu có lọc theo giá thì sẽ gộp thêm 1 câu query.
        if($request->has('total_min') && $request->has('total_max'))
        {
            $tongTienToiThieu = $request->total_min;
            $tongTienToiDa = $request->total_max;
            $query->whereBetween('tong_tien',[$tongTienToiThieu,$tongTienToiDa]);
        }
        $dsDonHang = $query->paginate(10);
        return view ('pages.auth.nguoi-ban.don-hang.danh-sach')
                    ->with('dsDonHang', $dsDonHang)
                    ->with('idTinhTrang', $idTinhTrang)
                    ->with('tenNguoiMua', $tenNguoiMua)
                    ->with('tongTienToiThieu', $tongTienToiThieu)
                    ->with('tongTienToiDa', $tongTienToiDa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idDonHang)
    {
        $donHang = GiaoDich::find($idDonHang);
        $itemsPerPage = 10;
        return view ('pages.auth.nguoi-ban.don-hang.chi-tiet')
                    ->with('donHang', $donHang)
                    ->with('itemsPerPage', $itemsPerPage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
