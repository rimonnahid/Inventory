<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Customer;
use App\Category;
use Cart;

class PosController extends Controller
{
    public function index()
    {
		$products = Product::all();
		$customers = Customer::all();
		$categories = Category::all();
    	$viewcarts = Cart::content();
    	return view('pos.pos',compact('products','customers','categories','viewcarts'));
    }
}
