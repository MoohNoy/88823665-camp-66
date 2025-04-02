<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user =  session()->get('user');
        if(!isset($user)){ 
            return redirect("/login");  // ถ้าผู้ใช้ไม่ได้ล็อกอิน ให้ redirect
        }
        return $next($request); //ส่ง request ไปยัง Controller หรือ Middleware ตัวถัดไป
    }
}