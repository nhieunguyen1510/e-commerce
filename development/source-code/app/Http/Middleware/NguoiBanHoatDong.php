<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class NguoiBanHoatDong
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guard('nguoi_ban')->user()->id_tinh_trang == 10)
        {
            return back();
        }
        else
        {
            return $next($request);
        }
    }
}
