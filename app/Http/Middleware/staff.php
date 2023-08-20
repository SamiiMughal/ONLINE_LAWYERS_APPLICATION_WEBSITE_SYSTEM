<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class staff
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
        if (session()->has('email')) {

            if (session()->get('role') == 2 || session()->get('role') == 1) {

                return $next($request);
            }
            return redirect('/');
        }
        return redirect('/login'); 

    }
}