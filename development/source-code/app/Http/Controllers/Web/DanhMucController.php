<?php

namespace App\Http\Controllers\Web;

use App\DanhMucSanPham;
use App\SanPham;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $idDanhMuc = $request->danhmuc;
        $dsDanhMucSanPham = DanhMucSanPham::all();
        $dsSanPham=SanPham::where('ten', 'LIKE', '%BMN%')->get();;
        return view('pages.danh-sach-san-pham',compact('dsSanPham','dsDanhMucSanPham','idDanhMuc'));

         $splittedDanhMucSlug = explode("-", $danhMucSlug);
        $idDanhMuc = $splittedDanhMucSlug[count($splittedDanhMucSlug)-1];
        $danhMucIns = DanhMucSanPham::where('id', $idDanhMuc)->first();
        // $ten = $danhMucIns[0]->ten;
        $dsSanPhamTheoIdDanhMuc = [];
        // if($idDanhMucDec) :
        $dsSanPhamTheoIdDanhMuc = SanPham::where('id_danh_muc_san_pham', $idDanhMuc)->get();
        // endif;
        $dsDanhMucSanPham = DanhMucSanPham::all();
        return view('pages.danh-sach-san-pham',['dsSanPham' => $dsSanPhamTheoIdDanhMuc,'dsDanhMucSanPham' => $dsDanhMucSanPham]);
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
    public function show($idDanhMuc)
    {
        $danhMucIns = DanhMucSanPham::find($idDanhMuc);
        $dsSanPhamTheoIdDanhMuc = SanPham::where('id_danh_muc_san_pham', $idDanhMuc)
                                        ->paginate(12);
        $result1= SanPham::where('id_danh_muc_san_pham', $idDanhMuc)
                    ->whereBetween('gia_ban_hien_tai',[425000,550000])
                    ->count();    
        $result2= SanPham::where('id_danh_muc_san_pham', $idDanhMuc)
                    ->where('ten','like','%denim%')
                    ->count();    
        $result3= SanPham::where('id_danh_muc_san_pham', $idDanhMuc)
                    ->where('ten','like','%velvet%')
                    ->count();                            
        return view('pages.danh-sach-san-pham')
                    ->with('dsSanPham', $dsSanPhamTheoIdDanhMuc)
                    ->with('danhMucIns', $danhMucIns)
                    ->with('rs1',$result1)
                    ->with('rs2',$result2)
                    ->with('rs3',$result3);

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
        return "Create: ".$id;
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
