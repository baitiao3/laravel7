<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends BaseController
{


    public function index()
    {
        return view("user/index");
    }

    public function post()
    {
        return "post";
    }

    public function profile()
    {
        $url = route('send', ['id' => 1,'name' => 'cdw']);
        return redirect()->route('send', ['name'=>"cdw"]);
    }

    public function send()
    {
        return '这里是send';
    }

    public function users(Request $request)
    {
        echo $request->route()->getName();
    }
}
