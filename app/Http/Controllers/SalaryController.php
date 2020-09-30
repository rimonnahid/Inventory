<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Advancesalary;
class SalaryController extends Controller
{
	public function index()
	{
		$advancesalaries = Advancesalary::all();
		return view('salary.all_advance_salary',compact('advancesalaries'));
	}

    public function create()
    {
    	$employees = Employee::all();
    	return view('salary.add_advance_salary',compact('employees'));
    }

    public function store()
    {
    	$month= request()->month;
    	$employee_id = request()->employee_id;

    	$advance = Advancesalary::where('month',$month)->where('employee_id',$employee_id)->first();
    	if($advance === null){
			$data = request()->validate([
	    		'employee_id' => 'required',
	    		'month' => 'required',
	    		'date' => 'required',
	    		'status' => 'required',
	    		'year' => 'required',
	    		'advance_salary' => 'required',
	    	]);
	    	$advancesalary = Advancesalary::create($data);
	    	if($advancesalary){
	    		$notification = array(
		            'messege' => 'Advance Salary added Successful',
		            'alert-type' => 'success',
		        );
	    		return redirect()->back()->with($notification);
	    	}else{
	    		$notification = array(
		            'messege' => 'Ups..Advance Salary not Added',
		            'alert-type' => 'error',
		        );
		        return redirect()->back()->with($notification);
	    	}
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Already Advance Paid in this month',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    	
    }

    public function paySalary()
    {
    	$employees = Employee::all();
    	return view('salary.pay_salary',compact('employees'));
    }


    public function pay_Employee($id)
    {
    	$employee = Employee::findorFail($id);
    	return view('salary.pay',compact('employee'));
    }

    public function current_month($id)
    {
    	$month= request()->month;
    	$employee_id = request()->employee_id;

    	$advance = Advancesalary::where('month',$month)->where('employee_id',$employee_id)->first();
    	if($advance === null){
			$data = request()->validate([
	    		'employee_id' => 'required',
	    		'month' => 'required',
	    		'date' => 'required',
	    		'status' => 'required',
	    		'year' => 'required',
	    		'advance_salary' => 'required',
	    	]);
	    	$advancesalary = Advancesalary::create($data);
	    	if($advancesalary){
	    		$notification = array(
		            'messege' => ' Salary added Successful',
		            'alert-type' => 'success',
		        );
	    		return redirect('/pay_salary')->with($notification);
	    	}else{
	    		$notification = array(
		            'messege' => 'Ups.. Salary not Added',
		            'alert-type' => 'error',
		        );
		        return redirect()->back()->with($notification);
	    	}
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Already Paid in this month',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }
}
