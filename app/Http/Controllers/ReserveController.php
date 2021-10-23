<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReserveRequest;
#use Illuminate\Http\Response;

class ReserveController extends Controller
{
    public function reserve(Request $request){
        return view('reserve.reserve',['msg'=>'入力して下さい。']);
    }

    public function reserved(ReserveRequest $reservation){
        return view('reserve.reserve',['msg'=>'問題なし']);
    }
}
