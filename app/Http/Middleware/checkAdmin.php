<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect()->route('home')->with('error', 'Bạn chưa đăng nhập, vui lòng đăng nhập trước!');
        }
        if(Auth::user()->role_id != 1){
            return redirect()->route('home')->with('error', 'Bạn không có quyền truy cập trang quản trị!');
        }
        return $next($request);
    }
}
