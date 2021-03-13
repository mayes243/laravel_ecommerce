<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profilepicture;
use Auth;
use App\message;
use App\items_details;
use App\item;
use App\tbl_stay;
use App\UserRegister;
use App\Notifications\MessageSend;
use Notification;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pp=profilepicture::orderBy('id','desc')->limit(1)->get();
        $st=profilepicture::orderBy('id','desc')->limit(1)->get();
        return view('user.homepage',['pp'=>$pp,'st'=>$st]);
    }
    public function aboutus()
    {
        $pp=profilepicture::orderBy('id','desc')->limit(1)->get();
        $ppr=profilepicture::orderBy('id','desc')->limit(1)->get();
        return view('user.aboutus',['pp'=>$pp,'ppr'=>$ppr]);
    }
    public function gallery()
    {
        $view=item::orderBy('id','desc')->get();
        return view('user.gallery',['view'=>$view]);
    }
    public function buynow()
    {
        $view=item::orderBy('id','desc')->get();
        return view('user.buy',['view'=>$view]);
    }
    public function contactus()
    {
        return view('user.contact');
    }
    public function message(Request $request)
    {

        $msg=message::create([
            'first_name'=>$request->get('firstname'),
            'last_name'=>$request->get('lastname'),
            'email'=>$request->get('email'),
            'subject'=>$request->get('subject'),
            'messages'=>$request->get('message')
        ]);
        // for notification to all admin
        Notification::send(User::all(),new MessageSend($msg));
        
        $request->session()->flash('message','Message sent');
        return redirect()->back();
    }
    public function stay(Request $request)
    {
        $insert=tbl_stay::create([
            'stay_touch'=>$request->get('email'),
        ]);
        if(!$insert)
        {
           $request->session()->flash('message','E-mail sending failed'); 
        }
        $request->session()->flash('message','E-mail sent');
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function search(Request $request)
    {
        $itemsearch=$request->get('search');
        $search=item::orderBy('id','desc')->where('item_name','like','%'.$itemsearch.'%')->orWhere('item_model_number','like','%'.$itemsearch.'%')->orWhere('item_short_desc','like','%'.$itemsearch.'%')->orWhere('item_price','like','%'.$itemsearch.'%')->orWhere('item_type','like','%'.$itemsearch.'%')->get();
        return view('user.search',['search'=>$search]);
    }

    public function userregister()
    {
        return view('user.userRegister');
    }
    public function userstore(Request $request)
    {
        $image=null;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $image=mt_rand(1001,9999999).'_'.$file->getClientOriginalName();
            $file->move('user/Userimage',$image);
        }
        UserRegister::create([
            'first_name'=>$request->get('fname'),
            'last_name'=>$request->get('lname'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'user_image'=>$image
        ]);
        $request->session()->flash('msg','User Register Succesfully');
        return redirect()->back();
    }
    public function userlog()
    {
        return view('user.userLogin');
    }
}
