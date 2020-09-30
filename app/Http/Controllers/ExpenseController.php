<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
class ExpenseController extends Controller
{
	public function today()
	{
		$todays = Expense::where('date',date('d/m/y'))->get();
		return view('expense.today_expense',compact('todays'));
	}

    public function monthly()
    {
        $monthlys = Expense::where('month',date('F'))->get();
        return view('expense.monthly_expense',compact('monthlys'));
    }


    public function yearly()
    {
        $yearlys = Expense::where('year',date('Y'))->get();
        return view('expense.yearly_expense',compact('yearlys'));
    }


    public function create()
    {
    	return view('expense.add_expense');
    }

    public function store()
    {
    	$expense = Expense::create($this->validateRequest());
    	if($expense){
    		$notification = array(
	            'messege' => 'Expense added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Expense not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    public function edit($expense)
    {
		$expense = Expense::findorFail($expense);
		return view('expense.edit_expense',compact('expense'));
    }

    public function update(Expense $expense)
    {
    	$expense->update($this->validateRequest());
    	if($expense){
    		$notification = array(
	            'messege' => 'Expense Updated Successful',
	            'alert-type' => 'success',
	        );
    		return redirect('today_expense')->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Expense not Updated',
	            'alert-type' => 'error',
	        );
	        return redirect('today_expense')->back()->with($notification);
    	}
    }

    public function destroy(Expense $expense)
    {
    	$expense->delete();
    	if($expense){
    		$notification = array(
	            'messege' => 'Expense Deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Expense not Delete',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    //private methods
    private function validateRequest()
    {
    	return request()->validate([
            'details' => 'required',
            'ammount' => 'required',
            'date' => 'required',
            'month' =>  'required',
            'year' =>  'required',
        ]);
    }

}
