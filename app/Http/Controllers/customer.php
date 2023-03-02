<?php

namespace App\Http\Controllers;

use App\buy;
use App\deposit_wallet;
use App\price;
use App\sell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kavenegar;

class customer extends Controller
{
     function dashboard(){
        $user_id=Auth::user()->id;
        $user_name=Auth::user()->name;
        $as_1=sell::orderBy("Registration_time","desc")->where(["id_USER"=>$user_id],["name_singup"=>$user_name])->get();
        $as_2=buy::orderBy("Registration_time","desc")->where(["id_USER"=>$user_id],["name_singup"=>$user_name])->get();
        return view('panel.panel-customer.0_dashboard.dashboard',compact(['as_1','as_2']));

    }

    function buy(){
        if (Auth::user()->state_authentication==1){
            return view('panel.panel-customer.1_Business.buy');
        }
        else{
           return redirect('/panel/customer/authentication/personal_identity@1');
        }
    }

    function sell(){
        if (Auth::user()->state_authentication==1) {
            $num_wal=deposit_wallet::where('state','1')->first();
            return view('panel.panel-customer.1_Business.sell' ,compact(['num_wal']));
        }else{

           return redirect('/panel/customer/authentication/personal_identity@1');
        }
    }

    function auth_1(){
        return view('panel.panel-customer.2_authentication.personal_identity_1');
    }

    function auth_2(){
        return view('panel.panel-customer.2_authentication.personal_identity_2');
    }

    function auth_3(){
        return view('panel.panel-customer.2_authentication.personal_identity_3');
    }

    function his_buy(){
        return view('panel.panel-customer.3_history.his_buy');
    }

    function his_sell(){
        return view('panel.panel-customer.3_history.his_sell');
    }

    function his_sub(){
        return view('panel.panel-customer.3_history.his_sub');
    }

    function subdivision(){
        return view('panel.panel-customer.4_subdivision.subdivision');
    }

    function subdivision_history(){
        return view('panel.panel-customer.4_subdivision.subdivision_history');
    }

    function calendar(){
        return view('panel.panel-customer.calendar');
    }
}
