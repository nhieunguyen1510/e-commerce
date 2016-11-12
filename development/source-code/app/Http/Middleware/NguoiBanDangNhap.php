<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class NguoiBanDangNhap
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
        if(Auth::guard('nguoi_ban')->check())
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('dangnhap.nguoiban.index');
        }
    }
}
