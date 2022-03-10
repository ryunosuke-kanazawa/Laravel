<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{

    public function index(Request $reqest)
    {
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
        $massages = [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を整数で入力してください。',
            'age.between' => '年齢は0～150の間で入力してください。',
        ];
        $validator = Validator::make($request->all(), $rules, $massages); 
        if ($validator->fails()){
            return redirect('/hello')
            ->withErrors($validator)
            ->withInput();
        }
        return view('hello.index', ['msg'=>'正しく入力されました。']);
    }
}