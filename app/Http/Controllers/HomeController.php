<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $num1 = random_int(1, 50);
        $num2 = random_int(1, 50);
        $result = sum($num1, $num2);

        return view('home', compact('num1', 'num2', 'result'));
    }
}
