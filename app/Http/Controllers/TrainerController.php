<?php

namespace App\Http\Controllers;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index(Request $request)
    {
        $items = Trainer::all();
        return view('trainer.index', ['items' => $items]);
    }

    public function find(Request $request)
    {
        return view('trainer.find',['input' => '']);
    }

    public function search(Request $request)
    {
        $min = $request->input * 1;
        $max = $min + 10;
        $item = Trainer::ageGreaterThan($min)->ageLessThan($max)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('trainer.find', $param);
    }
}
