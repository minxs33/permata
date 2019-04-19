<?php

namespace App\Http\Middleware;

use Closure;

class admin
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
        if(auth()->user()->status == 'admin'){
            return $next($request);
        }else{
        return redirect('/home')->with('error','You dont have admin access');
      }
       return redirect('/home');
    }
}
