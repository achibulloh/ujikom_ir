<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth()->user()->status_akun == 'active') {
            return $next($request);
        } else if (Auth()->user()->status_akun == 'pending') {
            return redirect('/')->with('fail','Your account has not been activated by admin.');
        } else {
            return redirect('/')->with('fail','you have no account status.');
        }
        // return $next($request);
    }
}
