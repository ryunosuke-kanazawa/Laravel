<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return view('hello.index');
});

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

//問題1
Route::get('jissyu2', 'jissyu2@index');

//問題1,2
Route::get('jissyu3', 'jissyu3_1Controller@index');