<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('user.cart');
    }

    public function confirmation()
    {
        return view('user.confirmation');
    }
}
