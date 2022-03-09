<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu3_1Controller extends Controller
{
    public function index()
    {
        $data=[
            'msg'=>'お名前を入力ください。',
        ];
        //return view('', $data);
    }

    public function post()
    {
        $msg=$request->msg;
        $data=[
            'msg'=>'こんにちは、'. $msg . 'さん！',
        ];
        //return view('', $data);
    }
}
