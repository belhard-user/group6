<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function main()
    {
        $names = [];

        return view('test.index', compact('names'));
    }

    public function form(Request $request)
    {
        return env('FOO', 'sadas');
        dd($request->only(["some_variable2", "some_variable3"]));
    }
}