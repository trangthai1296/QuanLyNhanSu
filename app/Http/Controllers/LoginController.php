<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view ('login');
    }

    public function checkLogin(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return Redirect::to('index');
        }
        else{
            return Redirect::to('login');
        }
    }

    public function index(){
        return view ('index');
    }

    public function changePassword(){
        return view ('changepassword');
    }

    public function checkChangePassword(Request $request){
        Auth::user()->password =bcrypt($request->matkhaumoi);
        Auth::user()->save();
        return Redirect::to('/userIndex');
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('login');
    }

    public function profile(){
        return view ('profile');
    }

}
