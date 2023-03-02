<?php

namespace App\Http\Controllers;

use App\price;
use Illuminate\Http\Request;

class homepage extends Controller
{

   public $a,$b,$c,$d,$e='';
    public function getcash(){

        $sx=file_get_contents("https://www.arzdigital.com/coins");
        $s=$sx;
        $i=strpos($s,'<span>Bitcoin</span>');
        $i=strpos($s,'pulser-change="_',$i);
        $i=strpos($s,'>',$i);
        $i=strpos($s,'$',$i)+1;
        $j=strpos($s,'<',$i);
        $s=substr($s,$i,$j-$i);
        $this->a=$s;
        $s=$sx;
        $i=strpos($s,'<span>Ethereum</span>');
        $i=strpos($s,'pulser-change="_',$i);
        $i=strpos($s,'>',$i);
        $i=strpos($s,'$',$i)+1;
        $j=strpos($s,'<',$i);
        $s=substr($s,$i,$j-$i);
        $this->b=$s;
        $s=$sx;
        $i=strpos($s,'<span>XRP</span>');
        $i=strpos($s,'class=\'pulser \' pulser-change="_',$i);
        $i=strpos($s,'>$',$i);
        $i=strpos($s,'$',$i)+1;
        $j=strpos($s,'<',$i);
        $s=substr($s,$i,$j-$i);
        $this->c=$s;
        $s=$sx;
        $i=strpos($s,'<span>Tether</span>');
        $i=strpos($s,'pulser-change="_',$i);
        $i=strpos($s,'>$',$i);
        $i=strpos($s,'$',$i)+1;
        $j=strpos($s,'<',$i);
        $s=substr($s,$i,$j-$i);
        $this->d=$s;
        $s=$sx;
        $i=strpos($s,'<span>Bitcoin Cash</span>');
        $i=strpos($s,'pulser-change="_',$i);
        $i=strpos($s,'>$',$i);
        $i=strpos($s,'$',$i)+1;
        $j=strpos($s,'<',$i);
        $s=substr($s,$i,$j-$i);
        $this->e=$s;
    }


    public function all(){
        $fgio='';
        $this->getcash();

        $p=new price();
        $p->Bitcoin=$this->a;
        $p->Ethereum=$this->b;
        $p->XRP=$this->c;
        $p->Tether=$this->d;
        $p->Bitcoin_Cash=$this->e;
        $p->state=1;
        $p->save();


    }
    public function index(){
        $price=price::orderBy("id","desc")->limit(1)->first();
        // dd($or)
        return view('index',compact(["price"]));
    }

}
