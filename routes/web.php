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

// ルーティング練習用
Route::get('/', function () {
    return view('welcome');
});
Route::get('/tech', function () {
  return view('welcometech');
});

// 2020/06/27追記
Route::get('/', 'ShopController@index');
// 2020/06/29追記
Route::post('/mycart', 'ShopController@addMycart')->middleware('auth');
// 2020/06/28追記 (ログイン状態のチェック)
Route::get('/mycart', 'ShopController@myCart')->middleware('auth');
// 2020/06/30追記
Route::POST('/cartdelete','ShopController@deleteCart')->middleware('auth');
// 2020/06/30追記
Route::post('/checkout', 'ShopController@checkout')->middleware('auth');

// Laravel入門用
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

Route::post('hello', 'HelloController@post');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
