<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RequireLogin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }

        return response()->view('auth.require-login', [
            'message' => 'Anda harus login untuk mengakses halaman ini.',
            'route' => $request->url()
        ]);
    }
}