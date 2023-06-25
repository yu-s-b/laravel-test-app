<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\HelloController;
//version7以前の書き方
// Route::get('hello', 'App\Http\Controllers\HelloController@index');

//version8以降はこっち
// Route::get('hello/{id?}/{pass?}', [HelloController::class, 'index']);

// Route::get('hello', [HelloController::class, 'index'])->middleware('hello');
Route::get('hello', [HelloController::class, 'index']);
// Route::get('hello/other', [HelloController::class, 'other']);
Route::post('hello', [HelloController::class, 'post']);

Route::get('hello/test/{hoge?}', [HelloController::class, 'test']);

Route::get('hello/add', [HelloController::class, 'add']);
Route::post('hello/add', [HelloController::class, 'create']);


//sns
use App\Http\Controllers\SnsController;

Route::get('sns', [SnsController::class, 'index']);
Route::get('sns/login', [SnsController::class, 'login']);
