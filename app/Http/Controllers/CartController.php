<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Customer;
use App\Setting;

class CartController extends Controller
{
    public function addcart(Request $request)
    {
    	$data = array();
    	$data['id'] = $request->id;
    	$data['name'] = $request->name;
    	$data['qty'] = 1;
    	$data['price'] = $request->selling_price;
    	$data['weight'] = 1;
    	$cart = Cart::add($data);
    	if($cart){
    		$notification = array(
	            'messege' => 'Cart added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Cart not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    public function updateCart($id)
    {
    	Cart::update($id,request()->qty);
    	return back();
    }

    public function deleteCart($id)
    {
    	Cart::remove($id);
		$notification = array(
            'messege' => 'Cart Remove Successful',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }

    public function createInvoice(Request $request)
    {
        $request->validate([
            'customer_id' => 'required'
        ],[
            'customer_id.required' => 'Select a customer first'
        ]);
        $customer = Customer::where('id',$request->customer_id)->first();
        $contents = Cart::content();
        $setting = Setting::where('id', 1)->first();
        return view('order.invoice',compact('customer','contents','setting'));
    }
}


