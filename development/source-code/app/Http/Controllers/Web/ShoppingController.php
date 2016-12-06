<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cart;
use App\DanhMucSanPham;
use App\SanPham;

class ShoppingController extends Controller
{
    //
    public function muahang($id){
    		$product_buy = SanPham::where('id', $id)->first();
    		Cart::add(array('id'=>$id,'name'=>$product_buy->ten,'qty'=>1,'price'=>$product_buy->don_gia_goc,'options'=>array('img'=>$product_buy->anh_dai_dien)));
    		$content=Cart::content();
    		return redirect()->route('giohang');
    }
    public function giohang(){
    	$content=Cart::content();
    	$total=Cart::total();
        $count=Cart::count();
    	return view('pages.gio-hang',compact(
    		'content','total','count'));
    }

    public function xoagiohang($id){
        Cart::remove($id);
       return redirect()->route('giohang');
    }

    public function suagiohang(){
        if(Request::ajax()){
            $id=Request::get('id');
            $qty=Request::get('qty');
            Cart::update($id,$qty);
            echo "oke";
        }
    }
}
