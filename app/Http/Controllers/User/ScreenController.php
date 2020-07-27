<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Facades\Auth;

class ScreenController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:user');
    }

    public function lock()
    {
        if(Session::has('lock_screen'))
        {
            $screen_obj = Session::get('lock_screen');

            if($screen_obj['encrypt_password'] == md5(Auth::user()->password) && $screen_obj['lock'] == false)
            {
                $screen_obj = [
                    'lock' => true,
                    'lock' => md5(Auth::user()->password),
                ];
                Session::put('lock_screen', $screen_obj);
            }

        } else {
            $screen_obj = [
                'lock' => true,
                'encrypt_password' => md5(Auth::user()->password),
            ];
            Session::put('lock_screen', $screen_obj);
        }
        
    }

    public function unlock(Request $request)
    {
        if(Session::has('lock_screen'))
        {
            $screen_obj = Session::get('lock_screen');

            if($screen_obj['encrypt_password'] == md5(Auth::user()->password) && $screen_obj['lock'] == true)
            {
                $screen_obj = [
                    'lock' => false,
                    'lock' => md5(Auth::user()->password),
                ];
                Session::put('lock_screen', $screen_obj);
            }

        } else {
            $screen_obj = [
                'lock' => false,
                'encrypt_password' => md5(Auth::user()->password),
            ];
            Session::put('lock_screen', $screen_obj);
        }
    }
        

}
