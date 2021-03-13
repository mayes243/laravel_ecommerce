<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\UserRegister;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

use AuthenticatesUsers;

public function loginn()
    {
        return view('auth.login');
    }

public function adminlogin(Request $request)
{

    $remember_me = $request->has('remember_me') ? true : false; 

    if($this->hasTooManyLoginAttempts($request))
    {
        $this->fireLockoutEvent($request);
        return $this->sendLockoutResponse($request);
    }
    if(Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password],$remember_me))
{
    date_default_timezone_set('Asia/Kathmandu');
    $date=date('Y-m-d H:i:s');
    User::where(['email'=>$request->email])->update(['last_login'=>$date]);

    $this->clearLoginAttempts($request);
    return redirect()->intended(route('dashboard'));
}
    $this->incrementLoginAttempts($request);
    return redirect()->back()->with('error','email or password doesnot match');
}
public function logout()
{
    Auth::guard('web')->logout();
    return redirect()->route('admin.login');
}
// For User Login
    public function userlogin(Request $request){

    if(Auth::guard('myweb')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
        // for last login
        date_default_timezone_set('Asia/Kathmandu');
        $date=date('Y-m-d H:i:s');
    UserRegister::where(['email'=>$request->email])->update(['last_login'=>$date]);

    return redirect()->intended(route('homes'))->with('msg','Thanks !!!! for Login our website');
}
    return redirect()->back()->with('error','email or password doesnot match');

}
public function userlogout()
{
    Auth::guard('myweb')->logout();
    return redirect()->route('homes');
}
}
