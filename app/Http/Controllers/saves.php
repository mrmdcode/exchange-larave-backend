<?php

namespace App\Http\Controllers;

use App\authentication_1;
use App\authentication_2;
use App\authentication_3;
use App\buy;
use App\deposit_wallet;
use App\sell;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class saves extends Controller
{
    /*
     * if ($request->tx_image){
$file=$request->tx_image;
$fn=date('YmdHis').rand(1,100).rand(100,200).'.jpg';
$file->move("img/", $fn);
$p->image="/img/".$fn;

DB::table('authentication_2')->first()
}

     */
    public $opo,$sd,$ds,$pricebit,$priceether;

    public function getcash(){
        $sx=file_get_contents("https://www.arzdigital.com/coins");
        $s=$sx;
        $i=strpos($s,'<span>Bitcoin</span>');
        $i=strpos($s,'pulser-change="_',$i);
        $i=strpos($s,'>',$i);
        $i=strpos($s,'$',$i)+1;
        $j=strpos($s,'<',$i);
        $s=substr($s,$i,$j-$i);
        $this->pricebit=$s;
        $s=$sx;
        $i=strpos($s,'<span>Ethereum</span>');
        $i=strpos($s,'pulser-change="_',$i);
        $i=strpos($s,'>',$i);
        $i=strpos($s,'$',$i)+1;
        $j=strpos($s,'<',$i);
        $s=substr($s,$i,$j-$i);
        $this->priceether=$s;
    }
    public function auth_save_1(Request $request){

        $a=new authentication_1();
        $a->id_USER=Auth::user()->id;
        $a->name=Auth::user()->name;
        $a->Fname=$request->tx_ex_1;
        $a->Lname=$request->tx_ex_2;
        $a->National_Code=$request->tx_ex_3;
        $a->Fathers_Name=$request->tx_ex_4;
        $a->Date_Of_Birth=$request->tx_ex_5;
        $a->Place_Of_Birth=$request->tx_ex_6;
        $a->Sex=$request->tx_ex_7;
        $a->Postal_Code=$request->tx_ex_8;
        $a->State=$request->tx_ex_9;
        $a->City=$request->tx_ex_10;
        $a->Address=$request->tx_ex_11;
        $a->Plaque=$request->tx_ex_12;
        $a->save();
        $s=Auth::user();
        $s->full_name=$request->tx_ex_1.' '.$request->tx_ex_2;
        $s->save();
        return redirect('/save/success/auth_1/');

    }
    public function auth_save_2(Request $request){
        $a=new authentication_2();
        $a->id_USER=Auth::user()->id;
        $a->name_singup=Auth::user()->name;
        $a->Bank_Name=$request->tx_ex_1;
        $a->Branch_Name=$request->tx_ex_2;
        $a->Branch_Code=$request->tx_ex_3;
        $a->Account_Number=$request->tx_ex_4;
        $a->Shaba_Namber=$request->tx_ex_5;
        $a->Card_Number=$request->tx_ex_6;
        $a->save();
        return redirect('/save/success/auth_2/');
    }
    public $pun;
    public function auth_save_3(Request $request){
        $address='user/img/';
        $addresss='/user/img/';
        $name_user=Auth::user()->name;
        $id_user=Auth::user()->id;
        $a=new authentication_3();
        $a->id_USER=$id_user;
        $a->name_singup=$name_user;
        if ($request->tx_ex_im_1) {
            $file = $request->tx_ex_im_1;
            $fn = $id_user.'_'.$name_user.'_image_face'.'.jpg';
            $file->move($address, $fn);
            $pun= $addresss . $fn;
            $a->image_face =$pun;
        }
        if ($request->tx_ex_im_2) {
            $file = $request->tx_ex_im_2;
            $fn = $id_user.'_'.$name_user.'_image_card' . '.jpg';
            $file->move($address, $fn);
            $a->image_card = $addresss . $fn;
        }
        if ($request->tx_ex_im_3) {
            $file = $request->tx_ex_im_3;
            $fn = $id_user.'_'.$name_user.'_image_face_and_card' . '.jpg';
            $file->move($address, $fn);
            $a->image_face_and_card = $addresss . $fn;
        }
        $a->save();
        $s=Auth::user();
        $s->src_img_face=$pun;
        $s->state_authentication=0;
        $s->save();

        return redirect('/save/success/auth_3/');

    }
    public $r;
    public function sell_saves_1(Request $request){
        $bdc=$request->tx_ex_1;
        $bdo=deposit_wallet::where('NAME',$bdc)->first();

        //----------------
        $ds=Auth::user()->id;
        $sd=authentication_2::where('id_USER',$ds)->first();
        $fd=authentication_1::where('id_USER',$ds)->first();
        $this->getcash();
        $bit='Bitcoin';
        $a=new sell();
        $a->id_USER=Auth::user()->id;
        $a->name_singup=Auth::user()->name;
        $a->Currency=$bit;
        $a->Amount=$request->tx_ex_2;
        $a->Deposit_wallet_name=$request->tx_ex_1;
        $a->Deposit_wallet_SHARE=$request->tx_ex_3;
        $a->Deposit_wallet_SECRET=$bdo->SECRET;
        $a->Registration_time=date('Y-m-d');
        $a->Purchase_Price=$this->pricebit;
        $a->Serial=rand(1,500);
        $a->Account_Number=$sd->Account_Number;
        $a->Card_Number=$sd->Card_Number;
        $a->Shaba_Number=$sd->Shaba_Namber;
        $a->Cardholder_Name=$fd->Fname;
        $a->Condition=0;
        $a->save();
        $r=$request->tx_ex_1;
        $s=deposit_wallet::where('NAME' , $r)->first();
        $s->state=0;
        $s->save();


        return redirect('/save/success/sell/');
    }
    public function buy_saves_1(Request $request){
        $this->getcash();
        if ($request->tx_ex_1==1){
            $balance_price=$this->pricebit;

        }
        else{
            $balance_price=$this->priceether;
        }
        $a=new buy();
        $a->id_USER=Auth::user()->id;
        $a->name_singup=Auth::user()->name;
        $a->Currency=$request->tx_ex_1;
        $a->Amount=$request->tx_ex_2;
        $a->Deposit_wallet=$request->tx_ex_3;
        $a->Registration_time=date('YmdHis');
        $a->Purchase_Price=$balance_price;
        $a->Serial=rand(1,5);
        $a->Condition=0;
        $a->save();
        return redirect('/save/success/buy/');


    }
}
