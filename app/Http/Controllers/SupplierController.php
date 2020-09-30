<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    public function index()
	{
		$suppliers = Supplier::all();
		return view('supplier.all_supplier',compact('suppliers'));
	}
    public function create()
    {
    	return view('supplier.add_supplier');
    }

    public function store()
    {
    	$supplier = Supplier::create($this->validateRequest());
    	$this->storeImage($supplier);
    	if($supplier){
    		$notification = array(
	            'messege' => 'Supplier added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Supplier not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    public function edit($supplier)
    {
		$supplier = Supplier::findorFail($supplier);
		return view('supplier.edit_supplier',compact('supplier'));
    }

    public function update(Supplier $supplier)
    {
    	if($supplier->image){
    		unlink('storage/app/public/'.$supplier->image);
    	}else{
    		
    	}
    	$supplier->update($this->validateRequest());
    	$this->storeImage($supplier);
    	if($supplier){
    		$notification = array(
	            'messege' => 'Supplier Updated Successful',
	            'alert-type' => 'success',
	        );
    		return redirect('all_supplier')->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Supplier not Updated',
	            'alert-type' => 'error',
	        );
	        return redirect('all_supplier')->back()->with($notification);
    	}
    }

    public function destroy(Supplier $supplier)
    {
    	unlink('storage/app/public/' . $supplier->image);
    	$supplier->delete();
    	if($supplier){
    		$notification = array(
	            'messege' => 'Supplier Deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Supplier not Delete',
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
            'type',
            'shop',
            'bank_name',
            'account_holder',
            'account_number',
            'branch_name',
            'city',
            'image'=>'sometimes|file|image|max:6000',
        ]);
    }

    private function storeImage($supplier)
    {
    	if(request()->hasFile('image')){
    		$supplier->update([
    			'image' => request()->image->store('supplier','public'),
    		]);
    	}
    }
    
}
