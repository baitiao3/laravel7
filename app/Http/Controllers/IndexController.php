<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public function index()
    {
        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();
        dd($action);
        echo 'index';
    }
}
