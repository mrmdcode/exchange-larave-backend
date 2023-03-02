<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class success extends Controller
{
  public function ss($num_1){
        return view('success.success' ,compact(['num_1']));
   }
}
