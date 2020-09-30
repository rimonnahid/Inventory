<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
class Advancesalary extends Model
{
    protected $guarded = [];

    public function Employee()
    {
    	return $this->belongsTo(Employee::class);
    }
}
