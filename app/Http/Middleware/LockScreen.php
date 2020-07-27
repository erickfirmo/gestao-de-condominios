<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;

class LockScreen
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

        if (Auth::check()) {

            if(Session::has('lock_screen'))
            {
                $screen_obj = Session::get('lock_screen');
//                if($screen_obj['encrypt_password'] == md5(Auth::user()->password) && $screen_obj['lock'] == true)

                if($screen_obj['lock'] == true)
                {
                    return redirect()->route('lock-screen');

                } else {
                    return $next($request);
    
                }

            } else {
                return $next($request);

            }

        } else {
            return $next($request);

        }


    }
}
