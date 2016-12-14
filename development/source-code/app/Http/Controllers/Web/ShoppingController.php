<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Cart;
use App\DanhMucSanPham;
use App\SanPham;
use App\GiaoDich;
use App\ChiTietGiaoDich;
use App\GiaoDichNguoiBan;
use App\TaiKhoanNguoiBan;
use App\ChiTietGiaoDichNguoiBan;
use Illuminate\Support\Facades\Mail;
use App\Mail\MerchantMail;


class ShoppingController extends Controller
{
    public function muahang($idSanPham)
    {
        $product_buy = SanPham::find($idSanPham);
        Cart::add(['id' => $product_buy->id,
                'name' => $product_buy->ten,
                'qty' => 1,
                'price' => $product_buy->don_gia_goc,
                'options' => [
                    'img' => $product_buy->getAnh(),
                    'id_nguoi_ban' => $product_buy->id_nguoi_ban,
                    'ten_shop'=>$product_buy->taikhoannguoiban->ten_shop 
                ]]);
        return redirect()->route('giohang');
    }
    
    public function giohang(){
    	$content = Cart::content();
    	$total = Cart::subtotal();
        $count = Cart::count();
    	return view('pages.gio-hang')
            ->with('content', $content)
            ->with('total', $total)
            ->with('count', $count);
    }

    public function xoagiohang($id)
    {
        Cart::remove($id);
        return redirect()->route('giohang');
    }

    public function suagiohang(Request $request)
    {
        $rowId = $request ->id;
        $qty = $request->quantity;

        Cart::update($rowId, $qty);
        return redirect()->route('giohang');
        
    }

    public function thanhtoan()
    {
        if(Auth::guard('web')->check())
        {

        $content = Cart::content();
        $total = Cart::subtotal();
        $count = Cart::count();
        $taikhoannguoimua= Auth::guard('web')->user();
        return view('pages.thanh-toan')
            ->with('content', $content)
            ->with('total', $total)
            ->with('count', $count)
            ->with('taikhoannguoimua',$taikhoannguoimua);
        }   
            
    
        else
        {
            return redirect()->route('dangnhap.index');
        }
    }

    public function postThanhToan(Request $request)
    {
        $this ->validate($request, [
                            'customername' => 'required',
                            'customerphone' => 'required',
                            'customeraddress' => 'required',
                            
                            ],
                            [
                             'customername.required'=>'Vui lòng nhập tên nhận ',
                             'customerphone.required'=>'Vui lòng nhập số điện thoại',
                             'customeraddress.required'=>'Vui lòng nhập địa chỉ',
                            
                            ]);
        if(Auth::guard('web')->check())
        {
            // Lấy id của tài khoản người mua đang đăng nhập để lưu cho giao dịch
            $idTaiKhoanNguoiMua = Auth::guard('web')
                                    ->user()
                                    ->id;
            // Lấy danh sách chi tiết giỏ hàng để tạo các chi tiết đơn hàng
            $dsChiTietGioHang = Cart::content(); 
            foreach($dsChiTietGioHang as $chiTietGioHang)
            {
                // Tìm sản phẩm theo id trong chi tiết giỏ hàng để lấy kiểm tra xem còn đủ số lượng không
                $sanPham = SanPham::find($chiTietGioHang->id);
                // Nếu sản phẩm không đủ số lượng tồn thì redirect về
                // Nểu sản phẩm đủ số lượng tồn thì dùng giá bán để gán vào chi tiết giao dịch
                if($sanPham->so_luong_ton_kho < $chiTietGioHang->qty)
                {
                    return back()->with('error', 'Sản phẩm '.$sanPham->ten.' tạm hết hàng.');
                }
            }
            // Tạo một giao dịch mới từ các thông tin thanh toán
            $giaoDichIns = new GiaoDich();
            $giaoDichIns->id_tai_khoan = $idTaiKhoanNguoiMua;
            $giaoDichIns->giao_dich_cod = 1;
            $giaoDichIns->giao_dich_truc_tuyen = 0;
            $giaoDichIns->dia_chi_giao_hang = $request->customeraddress;
            $giaoDichIns->so_dien_thoai_giao_hang = $request->customerphone;
            $giaoDichIns->ten_nguoi_nhan = $request->customername;
            $giaoDichIns->tong_tien = 0;
            
            if($giaoDichIns->save())
            {
            
            
            foreach($dsChiTietGioHang as $chiTietGioHang)
            {
                // Tìm sản phẩm theo id trong chi tiết giỏ hàng để lấy kiểm tra xem còn đủ số lượng không
                $sanPham = SanPham::find($chiTietGioHang->id);
                // Tạo một chi tiết đơn hàng mới từ chi tiết giỏ hàng
                $chiTietGiaoDichIns = new ChiTietGiaoDich();
                $chiTietGiaoDichIns->id_giao_dich = $giaoDichIns->id;
                $chiTietGiaoDichIns->id_san_pham = $chiTietGioHang->id;
                $chiTietGiaoDichIns->so_luong = $chiTietGioHang->qty;
                $chiTietGiaoDichIns->don_gia_san_pham = $sanPham->gia_ban_hien_tai;
                $chiTietGiaoDichIns->id_tinh_trang = 3;
                $chiTietGiaoDichIns->tong_tien = $chiTietGiaoDichIns->so_luong*$chiTietGiaoDichIns->don_gia_san_pham;
                $chiTietGiaoDichIns->save();
                $sanPham->so_luong_ton_kho = $sanPham->so_luong_ton_kho - $chiTietGiaoDichIns->so_luong;
                $sanPham->save();
                // Cộng dồn tổng tiền của chi tiết giao dịch vào giao dịch
                $giaoDichIns->tong_tien = $giaoDichIns->tong_tien + $chiTietGiaoDichIns->tong_tien;
                $giaoDichIns->save();
            }
            $dsChiTietGroupTheoNguoiBan = Cart::content()
                                        ->groupBy('options.id_nguoi_ban');
            foreach($dsChiTietGroupTheoNguoiBan as $key=>$dsChiTietNguoiBan)
            {
                // Do group theo id người bán nên key sẽ là id người bán
                $idNguoiBan = $key;
                // Tạo một giao dịch người bán mới từ các thông tin thanh toán
                $giaoDichNguoiBanIns = new GiaoDichNguoiBan();
                $giaoDichNguoiBanIns->id_giao_dich = $giaoDichIns->id;
                $giaoDichNguoiBanIns->id_tai_khoan_mua = $idTaiKhoanNguoiMua;
                $giaoDichNguoiBanIns->id_tai_khoan_ban = (int)$idNguoiBan;
                $giaoDichNguoiBanIns->giao_dich_cod = 1;
                $giaoDichNguoiBanIns->giao_dich_truc_tuyen = 0;
                $giaoDichNguoiBanIns->dia_chi_giao_hang = $request->customeraddress;
                $giaoDichNguoiBanIns->so_dien_thoai_giao_hang = $request->customerphone;
                $giaoDichNguoiBanIns->ten_nguoi_nhan = $request->customername;
                $giaoDichNguoiBanIns->id_tinh_trang = 15;
                $giaoDichNguoiBanIns->tong_tien = 0;
                $giaoDichNguoiBanIns->save();
                // Tạo danh sách chi tiết đơn hàng người bán bằng sản phẩm trong group người bán này
                foreach($dsChiTietNguoiBan as $chiTietNguoiBan)
                {
                    // lấy thông tin của sản phẩm
                    $sanPham = SanPham::find($chiTietNguoiBan->id);
                    // Tạo một chi tiết đơn hàng người bán mới từ sản phẩm này
                    $chiTietGiaoDichNguoiBanIns = new ChiTietGiaoDichNguoiBan();
                    $chiTietGiaoDichNguoiBanIns->id_giao_dich_nguoi_ban = $giaoDichNguoiBanIns->id;
                    $chiTietGiaoDichNguoiBanIns->id_san_pham = $sanPham->id;
                    $chiTietGiaoDichNguoiBanIns->so_luong = $chiTietNguoiBan->qty;
                    $chiTietGiaoDichNguoiBanIns->don_gia_san_pham = $sanPham->gia_ban_hien_tai;
                    $chiTietGiaoDichNguoiBanIns->tong_tien = $chiTietGiaoDichNguoiBanIns->so_luong*$chiTietGiaoDichNguoiBanIns->don_gia_san_pham;
                    // Cộng dồn tổng tiền của chi tiết giao dịch vào giao dịch
                    $giaoDichNguoiBanIns->tong_tien = $giaoDichNguoiBanIns->tong_tien + $chiTietGiaoDichNguoiBanIns->tong_tien;
                    $giaoDichNguoiBanIns->save();
                    $chiTietGiaoDichNguoiBanIns->save();
                }
                $taikhoannguoiban=TaiKhoanNguoiBan::find($idNguoiBan);
                $merchantmail = new MerchantMail($giaoDichNguoiBanIns,$giaoDichNguoiBanIns->dsChiTietDonHang);
                Mail::to($taikhoannguoiban->email)
                    ->send($merchantmail);
                Cart::destroy();
            }
            return redirect()->route('trangchu.index');
        }
        else 
        {
            return back();
        }
        }
        else
        {
            // Trả về route đăng nhập nếu chưa đăng nhập
            return redirect()->route('dangnhap.index');
        }
    }
}

;