<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello($name)
    {
        return "Hello, " . $name;
    }

    public function about()
    {
        return view('about');
    }
}