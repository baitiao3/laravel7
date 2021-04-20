<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct(){
//       var_dump(111);
    }

    //
//    public function index($text){
////        echo "id:".$id;
//        return view("task",['id'=>$text]);
//    }
    public function index($name = 'null'){

        return view("task",['id'=>$name]);
    }

    public function login(){
        return view("task",["id"=>"456"]);
    }

    public function show(){
        return view("task",['id'=>'789']);
    }

    public function edit(){
        return view("task",['id'=>"edit"]);
    }

    public function form(){
        return view("/Task/form");
    }

    public function add(){

    }
}
