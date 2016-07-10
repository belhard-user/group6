<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function index()
    {
        $lastOrders = Order::last()->get();

        return view('main.index', compact('lastOrders'));
    }
}
