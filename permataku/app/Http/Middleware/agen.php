<?php

namespace App\Http\Middleware;

use Closure;

class agen
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
        if(auth()->user()->status == 'agen'){
            return $next($request);
        }else{
        return redirect('/home')->with('error','Kamu belum menjadi agen');
      }
       return redirect('/home');
    }
}
