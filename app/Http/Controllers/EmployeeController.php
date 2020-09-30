<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Advancesalary;

class EmployeeController extends Controller
{
	public function index()
	{
		$employees = Employee::all();
		return view('employee.all_employee',compact('employees'));
	}
    public function create()
    {
    	return view('employee.add_employee');
    }

    public function store()
    {
    	$employee = Employee::create($this->validateRequest());
    	$this->storeImage($employee);
    	if($employee){
    		$notification = array(
	            'messege' => 'Employee added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Employee not Added',
	            'alert-type' => 'error',
	        );
	        return redirect()->back()->with($notification);
    	}
    }

    public function showProfile($id)
    {
        $employee = Employee::findorFail($id);
        $salary = Advancesalary::where('employee_id',$id)->latest()->get();
        return view('employee.employee_profile',compact('employee','salary'));
    }

    public function edit($employee)
    {
		$employee = Employee::findorFail($employee);
		return view('employee.edit_employee',compact('employee'));
    }

    public function update(Employee $employee)
    {
    	if($employee->image){
    		unlink('storage/app/public/'.$employee->image);
    	}
    	$employee->update($this->validateRequest());
    	$this->storeImage($employee);
    	if($employee){
    		$notification = array(
	            'messege' => 'Employee Updated Successful',
	            'alert-type' => 'success',
	        );
    		return redirect('all_employee')->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Employee not Updated',
	            'alert-type' => 'error',
	        );
	        return redirect('all_employee')->back()->with($notification);
    	}
    }

    public function destroy(Employee $employee)
    {
    	unlink('storage/app/public/' . $employee->image);
    	$employee->delete();
    	if($employee){
    		$notification = array(
	            'messege' => 'Employee Deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->back()->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Employee not Delete',
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
            'experience',
            'nid',
            'salary',
            'vacation',
            'city',
            'image'=>'sometimes|file|image|max:6000',
        ]);
    }

    private function storeImage($employee)
    {
    	if(request()->hasFile('image')){
    		$employee->update([
    			'image' => request()->image->store('employee','public'),
    		]);
    	}
    }

}
