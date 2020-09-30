<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Supplier;

class ProductController extends Controller
{
    public function index()
	{
		$products = Product::all();
		return view('product.all_product',compact('products'));
	}
    public function create()
    {
    	$suppliers = Supplier::all();
    	$categories = Category::all();
    	return view('product.add_product',compact('categories','suppliers'));
    }

    public function store()
    {
    	$product = Product::create($this->validateRequest());
    	$this->storeImage($product);
    	if($product){
    		$notification = array(
	            'messege' => 'Product added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Product not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    public function edit($product)
    {
		$product = Product::findorFail($product);
        $suppliers = Supplier::all();
        $categories = Category::all();
		return view('product.edit_product',compact('product','suppliers','categories'));
    }

    public function update(Product $product)
    {
    	if($product->image){
    		unlink('storage/app/public/'.$product->image);
    	}
    	$product->update($this->validateRequest());
    	$this->storeImage($product);
    	if($product){
    		$notification = array(
	            'messege' => 'Product Updated Successful',
	            'alert-type' => 'success',
	        );
    		return redirect('all_product')->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Product not Updated',
	            'alert-type' => 'error',
	        );
	        return redirect('all_product')->back()->with($notification);
    	}
    }

    public function destroy(Product $product)
    {
    	unlink('storage/app/public/' . $product->image);
    	$product->delete();
    	if($product){
    		$notification = array(
	            'messege' => 'Product Deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
    		    'messege' => 'Ups..Product not Delete',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    //private methods
    private function validateRequest()
    {
    	return request()->validate([
            'name'=>'required',
            'category_id'=>'required',
            'supplier_id'=>'required',
            'product_code'=>'required',
            'product_garage'=>'required',
            'product_route'=>'required',
            'buy_date'=>'required',
            'expire_date'=>'required',
            'buying_price'=>'required',
            'selling_price'=>'required',
            'image'=>'sometimes|file|image|max:6000',
        ]);
    }

    private function storeImage($product)
    {
    	if(request()->hasFile('image')){
    		$product->update([
    			'image' => request()->image->store('product','public'),
    		]);
    	}
    }
}
