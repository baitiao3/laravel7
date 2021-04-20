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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get("index", function () {
//    return "Holle,Laravel!";
//});

//Route::any("index",function () {
//    return "Holle,Laravel!";
//});

//Route::match(["get","post"],"index/{name}",function ($name) {
//    return "Holle,Laravel!".$name;
//});

//Route::get("index/{id}",function ($id) {
//   return "id:".$id;
//});

//Route::get("index/{id}","TaskController@index")->where("id",".*");

//Route::get("index/{id}","TaskController@index")->where("id","[0-9]+");

//Route::get("index/{name}","TaskController@index")->where("name","[a-z]+");

//Route::redirect("index","task");

//Route::redirect("index","task",301);

//Route::permanentRedirect("index","task");
//
//Route::get("task",function () {
//    return "Holle,Laravel!";
//});

//Route::view("task","task",['id'=>10]);

//Route::get("task",function(){
//    return view("task",['id'=>"asd"]);
//});

//Route::get("/",function() {
//    return "Holle,Laravel!";
//});

//Route::fallback(function (){
//    return redirect("/");
//});

//Route::fallback(function(){
//    return "Holle,Laravel!";
//});

//Route::fallback(function(){
//    return "这里是一个404";
//});
//
//Route::fallback(function(){
//    return view("404");
//});
//
////Route::fallback(function(){
////    return "这里是一个404";
////});
//
//Route::get("task/{text}","TaskController@index");
//
//Route::get("one","OneController");
//
//Route::get("index",function (){
//    dump(Route::current());
//    return Route::currentRouteAction();
//})->name('localhost.index');

//Route::get("index",function (){
////    return [1,2,3];
////    return response([1,2,3]);
////    return response()->json([1,2,3,4,5]);
////    $data = array([
////        "name"=>"baitiao"
////    ]);
////    return response()->json($data);
////    return response($data,201);
//    //文本解析模式
////    return response("<b>baitiao</b>")->header("'Content-Type","text/plain");
//    return response()->view("task",['name'=>"baitiao"],201)->header("Content-Type","text/plain");
//
//});

//Route::get("index",function(){
////    return redirect()->to("task");
////   return redirect("task");
////    return redirect("task/url");
////    return Redirect::to("task");
//});

//Route::get("index",function(){
////    return redirect()->to("task");
////    return redirect()->route("task.index");
////    return redirect()->route("task.login");
////    return redirect()->action("TackController@index");
////    return redirect()->action("TaskController@login");
////    return redirect("baidu");
//    return redirect()->to("baidu");
//
//});
//
//Route::get("task","TaskController@index");
//
//Route::get("task","TaskController@login");
//
//Route::get("task/{name}",function($name){
//    return "这里是task/{name};".$name;
//});
//
//Route::get("task/url",function(){
//    return "这里是task/url";
//});
//
//Route::get("baidu",function(){
//    return redirect()->away("http://www.baidu.com");
//});

//Route::resource("blogs","BlogController");

//Route::resource("blogs","BlogController")->only(['index','show']);
//
//Route::resource("task","TaskController")->only(['show','index']);
//
//Route::get("task/index/{name}","TaskController@index");

//Route::resource("blogs.comments","CommentController")->shallow();

//Route::resource("blogs.comments","CommentController")->name("index","b.c.i");

//Route::resource("blogs.comments","CommentController")->parameter("blogs","id");

Route::get("index/index",function(){
    return view("index",['id'=>"asd"]);
});

Route::get("task/form","TaskController@form");

Route::any("task/add",function() {
   return \Illuminate\Support\Facades\Request::method();
});

Route::get("data/select","DataCOntroller@select");

Route::get("data/product_all","DataCOntroller@product_all");

Route::get("data/get_user_all","DataController@get_user_all");

Route::get("data/update","DataController@update");

Route::get("data/add","DataController@add");

Route::get("data/del","DataController@del");

Route::get("data/get_where","DataController@get_where");