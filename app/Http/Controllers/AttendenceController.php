<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendence;
use App\Employee;
use DB;

class AttendenceController extends Controller
{
	public function index()
	{
		$attendences = Attendence::select('date')->groupBy('date')->get();
        $sl = 1;
		return view('attendence.all_attendence',compact('attendences','sl'));
	}


    public function create()
    {
        $employees = Employee::all();
    	return view('attendence.add_attendence',compact('employees'));
    }

    public function store(Request $request)
    {
        $date = Attendence::where('date',$request->date)->first();
        if($date){
            $notification = array(
                'messege' => 'Today Attendence already taken',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }else{

        foreach ( $request->employee_id  as $id){
            $data[] = [
                "employee_id" =>$id,
                "attendence" =>$request->attendence[$id],
                "date" => $request->date,
                "month" => $request->month,
                "year"=> $request->year,
            ];
        }
        $attendence = DB::table('attendences')->insert($data);
        if($attendence){
            $notification = array(
                'messege' => 'Attendence added Successful',
                'alert-type' => 'success',
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Ups..Attendence not Added',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }
        }

    }

    public function edit($date)
    {
        $get_date = Attendence::where('date',$date)->first();
        $attendences = Attendence::where('date',$date)->get();
        return view('attendence.edit_attendence',compact('get_date','attendences'));
    }

    public function update(Request $request)
    {
        foreach ($request->id  as $id){
            $data = [
                "attendence" =>$request->attendence[$id],
                "date" => $request->date,
                "month" => $request->month,
                "year"=> $request->year,
            ];
            
        $attendence = Attendence::where(['date'=>$request->date,'id'=>$id])->first();
        $attendence->update($data);
        echo"<pre>";
        print_r($attendence);
        }
    }

    public function view($date)
    {
        $get_date = Attendence::where('date',$date)->first();
        $attendences = Attendence::where('date',$date)->get();
        return view('attendence.view_attendence',compact('get_date','attendences'));
    }

}
