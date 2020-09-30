<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
	{
		$customers = Customer::all();
		return view('customer.all_customer',compact('customers'));
	}
    public function create()
    {
    	return view('customer.add_customer');
    }

    public function store()
    {
    	$customer = Customer::create($this->validateRequest());
    	$this->storeImage($customer);
    	if($customer){
    		$notification = array(
	            'messege' => 'Customer added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Customer not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    public function edit($customer)
    {
		$customer = Customer::findorFail($customer);
		return view('customer.edit_customer',compact('customer'));
    }

    public function update(Customer $customer)
    {
    	if($customer->image){
    		unlink('storage/app/public/'.$customer->image);
    	}
    	$customer->update($this->validateRequest());
    	$this->storeImage($customer);
    	if($customer){
    		$notification = array(
	            'messege' => 'Customer Updated Successful',
	            'alert-type' => 'success',
	        );
    		return redirect('all_customer')->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Customer not Updated',
	            'alert-type' => 'error',
	        );
	        return redirect('all_customer')->back()->with($notification);
    	}
    }

    public function destroy(Customer $customer)
    {
    	unlink('storage/app/public/' . $customer->image);
    	$customer->delete();
    	if($customer){
    		$notification = array(
	            'messege' => 'Customer Deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Customer not Delete',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    //private methods
    private function validateRequest()
    {
    	return request([
            'name',
            'email',
            'phone',
            'address',
            'shopname',
            'bank_name',
            'account_holder',
            'account_number',
            'bank_branch',
            'city',
            'image'=>'sometimes|file|image|max:6000',
        ]);
    }

    private function storeImage($customer)
    {
    	if(request()->hasFile('image')){
    		$customer->update([
    			'image' => request()->image->store('customer','public'),
    		]);
    	}
    }
}
