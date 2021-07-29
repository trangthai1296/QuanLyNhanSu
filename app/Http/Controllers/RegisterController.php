<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class RegisterController extends Controller
{
    public function register(){
        return view ('register');
    }

    public function checkRegister(Request $request){
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        return view ('login');
    }
}
