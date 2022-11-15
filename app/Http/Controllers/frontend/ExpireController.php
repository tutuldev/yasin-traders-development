<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ExpireController extends Controller
{
    public function index(){

        $products = Product::get();
        return view('frontend.expire',compact('products'));

    }
}
