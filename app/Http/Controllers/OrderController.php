<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Customer;
use App\Product;
use App\Order;
use App\Orderdetail;
use App\Setting;

class OrderController extends Controller
{
    public function finalInvoice(Request $request)
    {
        $pay = $request->pay;
        $dis_price = 100 - $pay;
    	$data = array();
    	$data['customer_id'] = $request->customer_id; 
    	$data['order_date'] = $request->order_date; 
    	$data['order_status'] = $request->order_status; 
    	$data['total_product'] = $request->total_product; 
    	$data['subtotal'] = $request->subtotal; 
    	$data['vat'] = $request->vat; 
    	$data['total'] = $request->total;
    	$data['payment_status'] = $request->payment_status;
    	$data['pay'] = $request->pay;
    	$data['due'] =str_replace(',','', Cart::total()) * $dis_price / 100;

    	$order_id = Order::insertGetId($data);

    	$contents = Cart::content();
    	$array = array();
    	foreach($contents as $content){
    		$array['order_id'] = $order_id;
    		$array['product_id'] = $content->id;
    		$array['quantity'] = $content->qty;
    		$array['unitcost'] = $content->price;
    		$array['total'] = $content->total;

        $order = Orderdetail::create($array);
    	}
    	if($order){
    		$notification = array(
	            'messege' => 'Successfully Invoice created | Please delever the products first',
	            'alert-type' => 'success',
	        );
	        Cart::destroy();
    		return redirect('/')->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Invoice not created',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    public function pendingOrder()
    {
        $orders = Order::where('order_status','pending')->get();
        $sl = 1;
        return view('order.pending_order',compact('orders','sl'));
    }

    public function shippedOrder()
    {
        $orders = Order::where('order_status','shipped')->get();
        $sl = 1;
        return view('order.shipped_order',compact('orders','sl'));
    }

    public function orderDetail($id)
    {
        $order = Order::where('order_id',$id)->first();
        $orderdetails = Orderdetail::where('order_id',$id)->get();
        $setting= Setting::where('id',1)->first();
        return view('order.order_detail',compact('order','orderdetails','setting'));
    }

    public function posDone($id)
    {
        $approve = Order::where('order_id',$id)->update(['order_status'=>'shipped']);


        $orderdetails = Orderdetail::where('order_id',$id)->get();
        foreach($orderdetails as $orderdetail){
            $product = Product::where('id',$orderdetail->product_id)->first();
            $mainqty = $product->qty;
            $minusqty = $orderdetail->quantity;
            $newqty = $mainqty - $minusqty;

            Product::where('id',$orderdetail->product_id)->update(['qty' => $newqty]);
        }

        if($approve){
            $notification = array(
                'messege' => 'Successfully Order Confirmed | and All product delevered..',
                'alert-type' => 'success',
            );
            Cart::destroy();
            return redirect('/shipped_order')->with($notification);
        }else{
            $notification = array(
                'messege' => 'Ups..Invoice not created',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }
    }
}
