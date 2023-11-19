<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail()
    {
        return view('user.product-detail');
    }
    
    public function checkout()
    {
        return view('user.product-checkout');
    }
}
