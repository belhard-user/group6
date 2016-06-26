<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function main()
    {
        $names = [];

        return view('test.index', compact('names'));
    }
}