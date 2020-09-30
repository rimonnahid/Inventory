<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Attendence extends Model
{
	protected $guarded = [];
	public function Employee()
	{
		return $this->belongsTo(Employee::class);
	}
}
