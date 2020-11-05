<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }
//	die("demo");
        return $next($request);
//            ->header('Access-Control-Allow-Origin', '*')
  //          ->header('Access-Control-Allow-Methods', '*')
    //        ->header('Access-Control-Allow-Credentials', 'true');
           // ->header('Access-Control-Allow-Headers', 'X-CSRF-Token');;
   }
}
