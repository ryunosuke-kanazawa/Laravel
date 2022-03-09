<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    public function index(Request $reqest)
    {
        return view('hello.index');
    }
}