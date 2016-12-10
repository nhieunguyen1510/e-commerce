<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\DanhMucSanPham;
use App\SanPham;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TimKiemController extends Controller
{
	public function timkiem(Request $request){
        $keyword =$request ->keyword;
        $sp= SanPham::where('ten','like',"%$keyword%")
        ->orWhere('mo_ta','like',"%$keyword%")
        ->orWhere('nha_san_xuat','like',"%$keyword%")
        ->take(30)->paginate(12);
        return view('pages.tim-kiem',['sp'=>$sp,'kw'=>$keyword]);
            
    }


    public function timtheogia(Request $request){
    	$id =$request ->id;
    	$keywordmin =$request ->keywordmin;
    	$keywordmax =  $request ->keywordmax;
    	$result1 =  SanPham::where('id_danh_muc_san_pham', $id)
    				->whereBetween('gia_ban_hien_tai', [$keywordmin,$keywordmax])	
    	->get();
    	

    	return ;
    }

}
