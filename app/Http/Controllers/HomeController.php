<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profilepicture;
use App\message;
use Auth;

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
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $pp=profilepicture::orderBy('id','desc')->where('user_id','=',Auth::user()->id)->limit(1)->get();
        $show=message::orderBy('id','desc')->limit(3)->get();
        return view('admin.newadminregister',['pp'=>$pp,'show'=>$show]);
    }
    
}
