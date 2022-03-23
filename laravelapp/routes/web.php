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
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/show', 'HelloController@show');
Route::get('person', 'PersonController@index');
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');
Route::get('board', 'BoardController@index');
Route::get('board/add', 'BoardController@add');
Route::get('board/add', 'BoardController@create');
Route::resource('rest', 'RestappController');
Route::get('hello/rest', 'HelloController@rest');
Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');


//jissyu2
Route::get('jissyu2', 'jissyu2@index');

//jissyu3_1
Route::get('jissyu3', 'jissyu3_1Controller@index');

//jissyu4_1
Route::get('jissyu6', 'jissyu4_1Controller@index');
Route::post('jissyu6', 'web.php@post');
