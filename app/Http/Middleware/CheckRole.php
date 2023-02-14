<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckRole
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
        if (Auth::check('')) {
            if (Auth()->user()->role == '') {
                return redirect('/')->with('fail','Mohon Hunungi Admin');
                // return $next($request);
            } else {
                return redirect('/')->with('fail','You have no access');
            }
        }
        return redirect('/')->with('fail','You have no access');
    }
}