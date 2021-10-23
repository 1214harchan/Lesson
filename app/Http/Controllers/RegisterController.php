<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;

use Illuminate\Http\Request;
use Validator;

class RegisterController extends Controller
{
    public function register(Request $request){
        return view('register.register',['msg'=>'入力して下さい。']);
    }

    public function registered(RegisterRequest $request){
        return view('register.register',['msg'=>'問題なし']);
    }
}
