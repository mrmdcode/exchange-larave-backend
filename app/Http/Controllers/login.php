<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{


    public static function auth(){
        if (Auth::user()->type=='customer'){
            return redirect('/panel/customer/dashboard');
        }
        if (Auth::user()->type=='admin'){
            return redirect('/panel/admin/dashboard');
        }
    }
}
