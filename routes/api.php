<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('foo', function () {
   return 'Hello World';
});
Route::get('user', 'UserController@index');
Route::post('user', function (Request $request) {
    return '这里是post';
});
// 301 是永久重定向 302 临时重定向
Route::redirect('here', 'login'); // 302
Route::redirect('here', 'login', 301); // 301
Route::permanentRedirect('here', 'login');
Route::get('login', function () {
    return '请前往登录';
});

Route::middleware(['checkAge'])->prefix('midd')->group(function(){
    Route::get('index', function(){
        echo 2;
    });
});
