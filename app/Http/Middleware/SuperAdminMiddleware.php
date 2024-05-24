<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user() && auth()->user()->role === 'SuperAdmin') {
            return $next($request);
        }
        
        return redirect()->back()->with('toast_error','Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}