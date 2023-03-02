<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kavenegar;
class sms extends Controller
{
   public function sms(){

       try{
           $sender = "";
           $message = "خدمات پیام کوتاه کاوه نگار";
           $receptor = array("09361234567","09191234567");
           $result = Kavenegar::Send($sender,$receptor,$message);
           if($result){
               foreach($result as $r){
                   echo "messageid = $r->messageid";
                   echo "message = $r->message";
                   echo "status = $r->status";
                   echo "statustext = $r->statustext";
                   echo "sender = $r->sender";
                   echo "receptor = $r->receptor";
                   echo "date = $r->date";
                   echo "cost = $r->cost";
               }
           }
       }
       catch(\Kavenegar\Exceptions\ApiException $e){
           // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
           echo $e->errorMessage();
       }
       catch(\Kavenegar\Exceptions\HttpException $e){
           // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
           echo $e->errorMessage();
       }
   }
}
