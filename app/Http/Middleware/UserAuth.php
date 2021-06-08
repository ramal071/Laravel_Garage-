<?php

namespace App\Http\Middleware;

use Closure;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      // // localhost:8000 user log unama aye mulata ynna ba. 
      // if($request->path()=="/" && $request->session()->has('user'))
      // {
      //     return redirect('/service');
      // }
      return $next($request);  // already 
    }
}
