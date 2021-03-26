<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use DB;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(DB::table('users')->where('email', 'zeeshan@gmail.com')->where('password', 1234)->first())
        {
            return $next($request);
        }
        return redirect()->route('home.error');
    }
}
