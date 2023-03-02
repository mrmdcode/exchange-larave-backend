<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application 0_dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return login::auth();
    }
}
