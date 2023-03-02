<?php

namespace App\Http\Controllers;

use App\authentication_1;
use App\authentication_2;
use App\authentication_3;
use App\buy;
use App\deposit_wallet;
use App\sell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admin extends Controller
{
    public function dashboard(){
        return view('panel.panel-admin.0_dashboard.dashboard');
    }
    public function confirmation(){
        $users=Auth::user()->orderBy("id","desc")->where('state_authentication','0')->get();

        return view('panel.panel-admin.1_users.1_confirmation_authentication',compact(['users']));
    }
    public function view_confirm($id_users){

    $auth_1=authentication_1::where('id_USER',$id_users)->first();
    $auth_2=authentication_2::where('id_USER',$id_users)->first();
    $auth_3=authentication_3::where('id_USER',$id_users)->first();
    $auth_4=Auth::user()->where('id',$id_users)->first();
    return view('panel.panel-admin.1_users.confirm',compact(['auth_1','auth_2','auth_3','auth_4']));

    }
    public function confirm($id_users){
        $a=Auth::user()->where('id',$id_users)->first();
        $a->state_authentication=1;
        $a->save();
        return redirect('/panel/admin/success/confirm_user');
    }
    public function view_users(){
        $users=Auth::user()->get();
        return view('panel.panel-admin.1_users.2_view_users',compact(['users']));
    }

    public function buy(){
        $sells=sell::where('Condition','0')->get();
        return view('panel.panel-admin.2_buy_and_sell.buy',compact(['sells']));
    }
    public function sell(){

        $buys=buy::where('Condition','0')->get();
        return view('panel.panel-admin.2_buy_and_sell.sell',compact(['buys']));



    }

    public function confirm_buy($dep_num,$id){
        $sk=deposit_wallet::where('NAME',$dep_num)->first();
        $sk->state=1;
        $sk->save();

        $sf=sell::where('id',$id)->first();
        $sf->Condition=1;
        $sf->save();
        return redirect('/panel/admin/success/sell_confirm');
    }
    public function confirm_sell($id){
        $sf=buy::where('id',$id)->first();
        $sf->Condition=1;
        $sf->save();
        return redirect('/panel/admin/success/buy_confirm');
    }
    public function ransaction(){

        $buys=buy::all();
        $sells=sell::all();
        return view('panel.panel-admin.2_buy_and_sell.ransaction',compact(['buys', 'sells']));
    }
}
