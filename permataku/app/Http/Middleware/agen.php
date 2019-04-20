<?php

namespace App\Http\Middleware;
use Alert;
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
        Alert::error('Anda belum terdaftar sebagai agen','Error!');
        return redirect('/home');
      }
       return redirect('/home');
    }
}
