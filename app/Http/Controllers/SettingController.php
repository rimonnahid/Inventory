<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    public function show($setting)
	{
		$setting = Setting::findorFail($setting);
		return view('setting.show_setting',compact('setting'));
	}
    public function create()
    {
    	return view('setting.add_setting');
    }

    public function store()
    {
    	$setting = Setting::create($this->validateRequest());
    	$this->storeImage($setting);
    	if($setting){
    		$notification = array(
	            'messege' => 'Setting added Successful',
	            'alert-type' => 'success',
	        );
    		return redirect('/')->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Setting not Added',
	            'alert-type' => 'error',
	        );
	        return redirect('/dashboard')->with($notification);
    	}
    }

    public function edit($setting)
    {
		$setting = Setting::findorFail($setting);
		return view('setting.edit_setting',compact('setting'));
    }

    public function update(Setting $setting)
    {
    	if($setting->logo){
    		unlink('storage/app/public/'.$setting->logo);
    	}
    	$setting->update($this->validateRequest());
    	$this->storeImage($setting);
    	if($setting){
    		$notification = array(
	            'messege' => 'Setting Updated Successful',
	            'alert-type' => 'success',
	        );
    		return redirect('show_setting')->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Setting not Updated',
	            'alert-type' => 'error',
	        );
	        return redirect('show_setting')->with($notification);
    	}
    }

    public function destroy(Setting $setting)
    {
    	unlink('storage/app/public/' . $setting->logo);
    	$setting->delete();
    	if($setting){
    		$notification = array(
	            'messege' => 'Setting Deleted Successful',
	            'alert-type' => 'success',
	        );
    		return redirect()->route('add.setting')->with($notification);
    	}else{
    		$notification = array(
	            'messege' => 'Ups..Setting not Delete',
	            'alert-type' => 'error',
	        );
	        return redirect()->route('add.setting')->with($notification);
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
            'mobile',
            'city',
            'country',
            'zipcode',
            'logo'=>'sometimes|file|logo|max:6000',
        ]);
    }

    private function storeImage($setting)
    {
    	if(request()->hasFile('logo')){
    		$setting->update([
    			'logo' => request()->logo->store('setting','public'),
    		]);
    	}
    }
}
