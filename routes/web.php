<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth;
use App\Http\Controllers\Users;
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

Route::get('/', [Users::class, 'index']);


Route::group(['controller' => Auth::class,'prefix'=>'auth'], function () {
    Route::get('/', 'index');
    Route::get('/sign-up', 'index');
    Route::post('/login','login');
    Route::get('/logout', 'logOut');
});

Route::group(['controller' => Users::class,'middleware'=>'isuser'], function () {
    Route::get('/my-ticket', 'my_ticket');
    Route::get('/buy-ticket/{id}', 'buy_ticket');
    Route::post('/buy-ticket/{id}', 'act_buy_ticket');
    Route::post('/payment_verification','payment_verification');
});

Route::group(['controller' => Admin::class, 'prefix'=>'admin', 'middleware'=>'isadmin'], function () {
    Route::get('/', 'index');
    Route::get('/ticket', 'payment_verification');
    Route::post('/payment_verification','payment_verification');
    Route::post('/users','users');
});