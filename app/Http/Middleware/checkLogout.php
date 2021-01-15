<?php

namespace App\Http\Middleware;

use Closure;

class checkLogout
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
        if(Auth::guard('nhanvien')->guest()){
            //return $next($request);
            return redirect()->intended('dangnhap');
        }
        return $next($request);
    }
}
