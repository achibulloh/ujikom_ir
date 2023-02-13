<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        if (Auth::check('admin')) {
        if (Auth()->user()->role == 'admin') {
            return $next($request);
        } else if (Auth()->user()->role == 'kasir') {
            return redirect('kasir');
        } else {
            // return redirect('/')->with('fail','You have no admin access');
        }
    }
        return redirect('/')->with('fail','You have no admin access');
    }
}
