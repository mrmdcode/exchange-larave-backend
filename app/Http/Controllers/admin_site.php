<?php

namespace App\Http\Controllers;

use App\authentication_1;
use App\authentication_2;
use App\authentication_3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admin_site extends Controller
{
    public function exam(){
        $id=Auth::user()->id;
        $auth_1=authentication_1::where('id_USER',$id)->first();
        $auth_2=authentication_2::where('id_USER',$id)->first();
        $auth_3=authentication_3::where('id_USER',$id)->first();
        return view('panel.panel-admin.1_users.confirm',compact(['auth_1','auth_2','auth_3']));

    }
}
