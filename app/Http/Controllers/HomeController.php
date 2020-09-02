<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $level = Auth::user()->level_access;
        if($level === 'admin'){
            return redirect()->action('AdminController@index');
        } elseif($level === 'supervisor'){
            return redirect()->action('SupervisorController@index');
        } else{
            return redirect()->action('OperacionController@index');
        }
    }
}
