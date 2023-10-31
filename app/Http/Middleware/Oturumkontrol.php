<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Oturumkontrol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Oturum açık değilse kullanıcıyı oturum açma sayfasına yönlendir
        if (!Auth::check()) {
            return redirect()->route('girisyap'); // 'login' rotasını kendi oturum açma sayfanızın rotası ile değiştirin
        }

        return $next($request);
    }
}
