<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TrangChuController extends Controller
{
    public function getTrangChu ()
    {
        return view('pages.trang-chu');
    }
}
