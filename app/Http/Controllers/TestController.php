<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\View;

class TestController extends Controller
{
    public function index()
    {
        // return "ketrika";
        // echo "lol";
        return view('test.index');
    }
}
