<?php

namespace App\Http\Controllers\Web;

use App\DanhMucSanPham;
use App\SanPham;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keywordmin = null;
        $keywordmax = null;
        $dsIdDanhMuc=[];
        $dsDanhMucSelected = [];
        
        $query = SanPham::orderBy('ten');
        // return json_encode($request->keywordmax);
        if($request->has('keywordmin') && $request->has('keywordmax'))
        {   
            $keywordmin = $request->keywordmin;
            $keywordmax = $request->keywordmax;
            $query->whereBetween('gia_ban_hien_tai', [$keywordmin,$keywordmax]);
        }
         if($request->has('keyword'))
        {   
            $keyword = $request->keyword;
            $query->where('ten','like',"%$keyword%")
        ->orWhere('mo_ta','like',"%$keyword%")
        ->orWhere('nha_san_xuat','like',"%$keyword%")
        ->take(30)->paginate(12);
        }
         if($request->has('idDanhMuc')){
            $dsIdDanhMuc=$request->idDanhMuc;
            $query->whereIn('id_danh_muc_san_pham',$dsIdDanhMuc);
            $dsDanhMucSelected = DanhMucSanPham::whereIn('id', $dsIdDanhMuc)->get();
        }
        // if($request->has('loai')){
        //     $loai=$request->loai;
        //     $query->where('id_danh_muc_san_pham',$loai);
            
        // }
        // $dsSanPhamTheoIdDanhMuc = $query->paginate(10);
        // $dsSanPham = $query->get();
        $dsSanPham = $query->paginate(10);
        // return json_encode($dsDanhMucSelected);
        return view('pages.danh-sach-san-pham')
                ->with('dsDanhMucSelected', $dsDanhMucSelected)
                ->with('dsIdDanhMuc', $dsIdDanhMuc)
                ->with('dsSanPham', $dsSanPham)
                ->with('keywordmin',$keywordmin)
                ->with('keywordmax',$keywordmax); 
        // ,['dsSanPham' => $dsSanPhamTheoIdDanhMuc,'dsDanhMucSanPham' => $dsDanhMucSanPham]$\
        // $dsSanPhamTheoIdDanhMuc;
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idSanPham)
    {
        $sanPhamIns = SanPham::find($idSanPham);
        
        if($sanPhamIns==null)
        {
            abort(404);
        }
        else
        {
            $relSanPham=SanPham::where('id_danh_muc_san_pham',$sanPhamIns->id_danh_muc_san_pham)->take(3)->get();
            $anhDaiDien = Storage::url($sanPhamIns->anh_dai_dien);
            $anhChiTiet1 = Storage::url($sanPhamIns->anh_chi_tiet_1);
            $anhChiTiet2 = Storage::url($sanPhamIns->anh_chi_tiet_2);
            $anhChiTiet3 = Storage::url($sanPhamIns->anh_chi_tiet_3);
            return view('pages.chi-tiet-san-pham')
                    ->with('sanPham', $sanPhamIns)
                    ->with('anhDaiDien', $anhDaiDien)
                    ->with('anhChiTiet1', $anhChiTiet1)
                    ->with('anhChiTiet2', $anhChiTiet2)
                    ->with('anhChiTiet3', $anhChiTiet3)
                    ->with('relSanPham',$relSanPham);
        }
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
