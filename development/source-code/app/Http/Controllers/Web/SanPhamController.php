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
        $idDanhMuc = $request->danhmuc;
        $dsDanhMucSanPham = DanhMucSanPham::all();
        $dsSanPham=SanPham::where('ten', 'LIKE', '%BMN%')->get();
        return view('pages.danh-sach-san-pham',compact('dsSanPham','dsDanhMucSanPham','idDanhMuc'));
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
            $anhDaiDien = Storage::url($sanPhamIns->anh_dai_dien);
            $anhChiTiet1 = Storage::url($sanPhamIns->anh_chi_tiet_1);
            $anhChiTiet2 = Storage::url($sanPhamIns->anh_chi_tiet_2);
            $anhChiTiet3 = Storage::url($sanPhamIns->anh_chi_tiet_3);
            return view('pages.chi-tiet-san-pham')
                    ->with('sanPham', $sanPhamIns)
                    ->with('anhDaiDien', $anhDaiDien)
                    ->with('anhChiTiet1', $anhChiTiet1)
                    ->with('anhChiTiet2', $anhChiTiet2)
                    ->with('anhChiTiet3', $anhChiTiet3);
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
