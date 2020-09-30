<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
	public function index()
	{
		$categories = Category::all();
		return view('category.all_category',compact('categories'));
	}
    public function create()
    {
    	return view('category.add_category');
    }

    public function store()
    {
    	$category = Category::create($this->validateRequest());
    	if($category){
    		$notification = array(
	            'messege' => 'Category added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Category not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    public function edit($category)
    {
		$category = Category::findorFail($category);
		return view('category.edit_category',compact('category'));
    }

    public function update(Category $category)
    {
    	$category->update($this->validateRequest());
    	if($category){
    		$notification = array(
	            'messege' => 'Category Updated Successful',
	            'alert-type' => 'success',
	        );
    		return redirect('all_category')->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Category not Updated',
	            'alert-type' => 'error',
	        );
	        return redirect('all_category')->back()->with($notification);
    	}
    }

    public function destroy(Category $category)
    {
    	$category->delete();
    	if($category){
    		$notification = array(
	            'messege' => 'Category Deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Category not Delete',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    //private methods
    private function validateRequest()
    {
    	return request()->validate([
            'cate_name' => 'required',
        ]);
    }

}
