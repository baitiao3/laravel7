<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/user', 'UserController@index');
Route::post('/user', 'UserController@post');
Route::put('/user', 'UserController@put');
Route::patch('/user', 'UserController@patch');
Route::delete('/user', 'UserController@delete');
Route::options('/user', 'UserController@options');

Route::match(['get', 'post'], '/holle', function () {
    return 'hello';
});
Route::any('/any', function () {
   return 'any';
});
//Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'cdw']);

Route::get('/user/{id}', function ($id){
   return 'user' . $id;
})->where('id', '[a-z0-9]+');

Route::get('/post/{post}/comments/{comments}', function ($postId, $commentId){
    return 'postId' . $postId . ',commentId' . $commentId;
});

Route::get('/user/name/{name}', function ($name) {
    return $name;
})->where('name', '[A-Za-z1-9]+');

Route::get('/phone/{phone}', function ($phone) {
    return $phone;
});

Route::get('search/{search}', function($search) {
    return $search;
})->where('search', '.*');

//Route::get('name/profile', function () {
//   return 1;
//})->name('profile');
Route::get('route/{name}/send', 'UserController@send')->name('send');


Route::get('route/profile', 'UserController@profile')->name('profile');

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function() {
       echo "first";
    });
    Route::get('first/second', function() {
       echo 'profile';
    });
});

Route::namespace('Admin')->group(function(){
    Route::get('Admin/index', 'IndexController@index')->name('admin.index');
});

Route::get('Admin/index', 'IndexController@index');

Route::prefix('cdw')->group(function(){
   Route::get('index', 'User\IndexController@index');
   Route::get('goods', function(){
       echo 'goods';
   });
});

Route::name('admin.')->group(function () {
   Route::get('users', 'UserController@users')->name('users');
});

Route::get('api/users/{user}', function (App\User $uesr){
    return $uesr->email;
});

Route::middleware('auth:api', 'throttle:60,1')->group(function(){
    Route::get('/throttle', function(){
        echo 1;
    });
});

Route::get('home', function(){
   echo 'home';
});

