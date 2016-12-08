<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Redirect_If_NguoiBan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('nguoi_ban')->check()) {
            return redirect()->route('nguoiban-sanpham.index');
        }

        return $next($request);
    }
}